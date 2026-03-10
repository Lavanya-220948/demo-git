## git configration commands
# syntax
git config --global user.name
   # purpose: 
    sets the user name used in your commits gobally
   # example:
    git config --global user.name "Lavanya-220948"
# syntax
git config --global user.email  
   # purpose
    sets the email  address used in your commits globaly  
   # example
    git config --global user.email "n220948@rguktn.ac.in"

# syntax
git config --list  
   # purpose
    displlays alll the current git configuration settings 
   # example
    git config --list

# syntax
git config --unset  
   # purpose
    removes a configuration value from git settings 
   # example
    git config --unset

# repository setup commands
# syntax
git init  (repo name)
   # purpose
    creates a new git repository in the current directory
   # example
    git init

# syntax
git clone  <repo url>
   # purpose
    downloads a copy of an existing remote repository to your local machine 
   # example
    git clone

# syntax
git clone --branch  <branch name> <repo-url>
   # purpose
    clones a specific branch instead of the default branch 
   # example
    git clone --branch

# syntax
git clone --depth  <repo-url>
   # purpose
    creates a shallow clone with limited commit history to reduce download size 
   # example
    git clone --depth


# repository status

# syntax
git status
   # purpose
    shows the current state of the working directory and staging area.
   # example
    git status

# syntax
git log  
   # purpose
     displays the full commit histroy of the repository 
   # example
    git log

# syntax
git log --oneline  
   # purpose
    shows a shortened version of the commit history in one line per commit 
   # example
    git log --one line

# syntax
git log --graph  
   # purpose
    displays commit history in a graphical branching structure 
   # example
    git log --graph --oneline --all

# syntax
git show  
   # purpose
    shows the detailed information about a specific commit, including changes. 
   # example
    git show <commit-id>

# syntax
git diff  
   # purpose
    displays difference between working directory and the last commit  
   # example
    git diff

# syntax
git diff --staged  
   # purpose
    shows difference between staged changes and the last commit 
   # example
    git diff --staged

# syntax
git blame 
   # purpose
    displays which author last modified each line of a line 
   # example
    git blame <file>

# syntax
git reflog  
   # purpose
    shows a log of all actions that changed the head refernce 
   # example
    git reflog

# syntax
git shortlog  
   # purpose
    summarizes commit history grouped by author 
   # example
    git shortlog
    
# file tracking commands
# syntax
 git add
   # purpose
    adds a specific file to the staging area for the next commit
   # example
    git add <file>

# syntax
 git add .
   # purpose
     adds all modified and the new files in the current directory to the staging area
   # example
    git add .

# syntax
 git add -p
   # purpose
     allows the interactive staging of changes in parts
   # example
    git add -p



# syntax
 git restore
   # purpose
     restores a file in the working directory to its last commited state
   # example
    git restore <file>

# 
 git retsore --staged
  # syntax
    git restore --staged <file> 
   # purpose
     restores a file in the working directory to its last commited state
   
    

# 
 git rm 
 #  syntax 
    git rm <file>
   # purpose
     deletes a  file from both the working directory and the git repository
   

# 
 git mv
   # syntax
    git mv oldname newname
   # purpose
      moves or renames a file and stages the changes automatically
   
   #screenshot
  ![alt text](<Screenshot (11).png>)


#
   # syntax
 git add
   # purpose
    
   # example

