---
title: Step 5: Submitting a GitHub Pull Request
---
  
## Verify keyboard builds before submission

Following the file layout documented in [Organizing Keyboard
Files](step-0), your keyboard layout should be in a folder similar
to

``` none
c:\projects\keyboards\release\s\sample1\
```

From the **Git Bash** shell, use the **`build.sh`** bash script at the
root of the **keyboards** repo to compile the keyboard in the project.
Your path to the keyboard will be relative to the **`build.sh`** script.

``` bash
cd /c/projects/keyboards
./build.sh release/s/sample1
```

Verify the keyboard and keyboard package successfully built in

``` none
c:\projects\keyboards\release\s\sample1\build\
```

## Commit Your Changes

Use `git status` to see a summary of your working files. Move any
extraneous files that aren't associated with your current keyboard out
of the `keyboards` folder so they won't be associated with your commit.

``` bash
git status
```

From the Git Bash command prompt, add all your keyboard files to a
commit and push the branch to your fork. Replace **`sample1`** in the
following lines with the git branch name that matches your keyboard
name.

``` bash
cd /c/projects/keyboards
git add .
git commit -m "Add initial version of sample1"
git push -u origin sample1
```

## Create the Pull Request

In your web browser while logged into GitHub, open your fork of the
**keyboards** repository at

``` none
https://github.com/<your-github-name>/keyboards/compare
```

The "base fork" should default to **keymanapp/keyboards** and the "base"
branch set to **master**.

The "head fork" should default to your fork. Set the "compare" branch to
one associated with your keyboard.

When everything's ready, click the green Create
pull request button.

![](/cdn/dev/img/developer/keyboards/comparing-changes.png)

Congratulations! Some of our teammates will follow-up with you and
communicate any revisions that need to be made for your keyboard to be
added to the repository.

After your branch has been merged into the **keyboards** repository, you
won't need the branch and can safely delete it. Don't forget to also
keep your fork in sync.
