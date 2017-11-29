# GIT

## Create new repo from existing project

### Create repo on github website
Create a new repository on GitHub. To avoid errors, do not initialize the new repository with README, license, or gitignore files. You can add these files after your project has been pushed to GitHub.

### initiate to project to be a git repo
```bash
cd /path/to/project
git init
```

### set reference to the github repo
```bash
git remote add origin {{url of repo https}}
```

### commit the project to the repo
```bash
git add .
git commit -m "Initial commit"
git push origin master
```

## basic commands
```bash
git status
git add {{path}}
git diff 
git commit -m "{{message}}"
git push origin master
git pull origin master
git checkout {{path}} #revert to last commit version / undo changes
```

## Get project on new device
```bash
git clone {{url of repo https}} {{path to local directory}}
composer install
```
Don't forget to recreate the .env file