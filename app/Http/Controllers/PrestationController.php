<?php

namespace App\Http\Controllers;

use App\Liste;
use App\Prestation;
use App\Infouser;
use App\Customer;
use Illuminate\Http\Request;
use Auth;
use PDF;
use App;

class PrestationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
            $user = Auth::user()->id;
            $presta = Liste::all()->where('users_id', $user);

            return view('prestations/prestation', ['presta' => $presta]);
    }

    public function AddPrestation(Request $request)
    {
            $this->validate($request, [
                'listname' => 'required|string|max:250',
            ]);

            $prestation = new Liste();

            $prestation->name_lists = $request->listname;
            $prestation->users_id = Auth::user()->id;
            $prestation->save();

            return redirect()->route('prestation');

    }

    public function DeletePrestation($id)
    {
            $l = Liste::where('id', $id)->where('users_id', Auth::user()->id);

            if($l->count() > 0)
            {
                Prestation::where('lists_id', $id)->delete();
                Liste::where('id', $id)->delete();

                return redirect()->route('prestation');
            }
            else
            {
                return redirect()->route('home');
            }
    }

    public function ShowPrestation($id)
    {
            $e = Liste::where('id', $id)->where('users_id', Auth::user()->id);


        if($e->count() > 0)
        {
            $listepresta = Prestation::all()->where('lists_id', $id);

            return view('prestations/listeprestation', ['id' => $id, 'listepresta' => $listepresta]);
        }
        else
        {
            return redirect()->route('home');
        }
    }

    public function AddPresta(Request $request, $idlist)
    {
            $listepresta = Prestation::all()->where('lists_id', $idlist);
            $this->validate($request, [
                'prestaname' => 'required|string|max:255',
            ]);

            $presta = new Prestation();

            $presta->presta_name = $request->prestaname;
            $presta->lists_id = $idlist;
            $presta->save();

            return redirect()->route('listeprestation', ['id' => $idlist, 'listepresta' => $listepresta]);
    }

    public function DeletePresta($idpresta, $idlist)
    {
            $l = Liste::where('id', $idlist)->where('users_id', Auth::user()->id);

            if($l->count() > 0)
            {
                Prestation::where('id', $idpresta)->delete();
                $listepresta = Prestation::all()->where('lists_id', $idlist);

                return redirect()->route('listeprestation', ['id' => $idlist, 'listepresta' => $listepresta]);
            }
            else
            {
                return redirect()->route('home');
            }

    }

    public function ShowProfile($idprofile)
    {
            if($idprofile == Auth::user()->id)
            {
                $info_user = Infouser::all()->where('info_userid', $idprofile);

                if ($info_user->count() == 0)
                {
                    $changeprofile = new Infouser();

                    $changeprofile->info_userid = Auth::user()->id;
                    $changeprofile->save();

                    return redirect()->route('profile', ['idprofile' => $idprofile, 'info_user' => $info_user]);
                }

                return view('profil/showprofile', ['idprofile' => $idprofile, 'info_user' => $info_user]);
            }
            else
            {
                return redirect()->route('home');
            }

    }

    public function ChangeProfile(Request $request, $idprofile)
    {
            if($idprofile == Auth::user()->id)
            {
                $e = Infouser::all()->where('info_userid', $idprofile);

                if ($e)
                {
                    $update = [
                        'info_phone' => $request->info_phone,
                        'info_etpname' => $request->info_etpname,
                        'info_tva' => $request->info_tva,
                        'info_siret' => $request->info_siret,
                        'info_mail' => $request->info_mail,
                        'info_description' => $request->info_description,
                        'info_street' => $request->info_street,
                        'info_city' => $request->info_city,
                    ];

                    Infouser::where('info_userid', $idprofile)->update($update);
                }
                else
                {
                    $changeprofile = new Infouser();

                    $changeprofile->info_userid = Auth::user()->id;
                    $changeprofile->info_phone = $request->info_phone;
                    $changeprofile->info_etpname = $request->info_etpname;
                    $changeprofile->info_tva = $request->info_tva;
                    $changeprofile->info_siret = $request->info_siret;
                    $changeprofile->info_mail = $request->info_mail;
                    $changeprofile->info_description = $request->info_description;
                    $changeprofile->info_street = $request->info_street;
                    $changeprofile->info_city = $request->info_city;
                    $changeprofile->save();

                }

                return redirect()->route('profile', ['idprofile' => $idprofile, 'info_user' => $e]);
            }
            else
            {
                return redirect()->route('home');
            }
    }

    public function ShowFacture()
    {
        $user = Auth::user()->id;
        $prestataire = Infouser::all()->where('info_userid', $user)->first();
        $date = date('d/m/Y');

        return view('factures/showfacture', ['prestataire' => $prestataire, 'date' => $date]);
    }

    public function GeneratePDF()
    {
        $user = Auth::user()->id;
        $prestataire = Infouser::all()->where('info_userid', $user)->first();
        $date = date('d/m/Y');

        $data = [
            'prestataire' => $prestataire,
            'date' => $date
        ];

        $pdf = PDF::loadView('factures.modelefacture', $data);
        return $pdf->stream();

    }

    public function test()
    {
        $user = Auth::user()->id;
        $prestataire = Infouser::all()->where('info_userid', $user)->first();
        $date = date('d/m/Y');

        return view('factures/modelefacture', ['prestataire' => $prestataire, 'date' => $date]);
    }

    public function ShowCustomers()
    {
        $id = Auth::user()->id;
        $customer = Customer::all()->where('id_artisan', $id);

        return view('customers/showcustomers', ['id' => $id, 'customer' => $customer]);
    }

    public function AddCustomers(Request $request)
    {
        $id = Auth::user()->id;

        $this->validate($request, [
            'info_cust_name' => 'required|string|max:250',
            'info_cust_phone' => 'required|string|max:250',
            'info_cust_street' => 'required|string|max:250',
            'info_cust_city' => 'required|string|max:250',
        ]);

        $customer = new Customer();

        $customer->id_artisan = $id;
        $customer->info_cust_name = $request->info_cust_name;
        $customer->info_cust_phone = $request->info_cust_phone;
        $customer->info_cust_street = $request->info_cust_street;
        $customer->info_cust_city = $request->info_cust_city;
        $customer->save();

        return redirect()->route('showcustomers');
    }

    public function DeleteCustomer($id)
    {
        $l = Customer::where('id', $id)->where('id_artisan', Auth::user()->id);

        if($l->count() > 0)
        {
            Customer::where('id', $id)->delete();

            return redirect()->route('showcustomers');
        }
        else
        {
            return redirect()->route('home');
        }
    }

}
