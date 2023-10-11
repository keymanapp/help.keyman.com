---
title: Step 2: Before Starting Work on a Lexical Model
---
  
## Keep your fork of the Lexical Models repository in sync

Before starting any work on a lexical model, you should keep your
**lexical-models** fork in sync with our
[lexical-models](https://github.com/keymanapp/lexical-models)
repository. This helps identify any potential merge conflicts that would
occur with your lexical model.

**Note:** Make sure to stash or commit any current work before
creating/checking out a new branch for working on a another lexical
model. This way each lexical model will be in a unique folder on a
unique Git branch. You will create the Git branch later in Step 4.

``` bash
git stash
```

  

Get the latest changes from the master repository and push them to your
fork with these following commands:

``` bash
cd /c/projects/lexical-models
git checkout master
git fetch upstream
git merge upstream/master
git push origin master
```

Learn more about [managing your
fork](https://help.github.com/articles/fork-a-repo/){target="_blank"}
and [keeping your fork in
sync](https://help.github.com/articles/syncing-a-fork/){target="_blank"}.

Now let's check that we have the Keyman development tools for building a
lexical model.

[Step 3: Development Tools and Building a Lexical Model](step-3)
