---
title: Step 2: Before Starting Work on a Keyboard
---
  
## Keep your fork of the Keyboards repository in sync

Before starting any work on a keyboard, you should keep your
**keyboards** fork in sync with our
[keyboards](https://github.com/keymanapp/keyboards) repository. This
helps identify any potential merge conflicts that would occur with your
keyboard. This also keeps the command line keyboard compiler up to date.

**Note:** Make sure to stash or commit any current work before
creating/checking out a new branch for working on a another keyboard.
This way each keyboard will be in a unique folder on a unique Git
branch. You will create the Git branch later in Step 4.

``` bash
git stash
```

  

Get the latest changes from the master repository and push them to your
fork with these following commands:

``` bash
cd /c/projects/keyboards
git checkout master
git fetch upstream
git merge upstream/master
git push origin master
```

Learn more about [managing your
fork](https://help.github.com/articles/fork-a-repo/)
and [keeping your fork in
sync](https://help.github.com/articles/syncing-a-fork/).

Now let's check that we have the Keyman development tools for building a
keyboard.

[Step 3: Development Tools and Building a Keyboard](step-3)
