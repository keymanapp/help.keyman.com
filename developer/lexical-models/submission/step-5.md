---
title: Step 5: Submitting a GitHub Pull Request
---
  
## Verify lexical model builds before submission

Following the file layout documented in [Organizing Lexical Model
Files](step-0.php), your lexical model should be in a folder similar to

``` none
c:\projects\lexical-models\release\nrc\nrc.en.mtnt\
```

From the **Git Bash** shell, use the **`build.sh`** bash script at the
root of the **lexical-models** repo to compile the lexical-model in the
project. Your path to the lexical model will be relative to the
**`build.sh`** script.

``` bash
cd /c/projects/lexical-models
./build.sh release/nrc/nrc.en.mtnt
```

Verify the lexical model and lexical model package successfully built in

``` none
c:\projects\lexical-models\release\nrc\nrc.en.mtnt\build\
```

## Commit Your Changes

Use `git status` to see a summary of your working files. Move any
extraneous files that aren't associated with your current lexical model
out of the `lexical-models` folder so they won't be associated with your
commit.

``` bash
git status
```

From the Git Bash command prompt, add all your lexical model files to a
commit and push the branch to your fork. Replace **`nrc.en.mtnt`** in
the following lines with the git branch name that matches your lexical
model name.

``` bash
cd /c/projects/lexical-models
git add .
git commit -m "Add initial version of nrc.en.mtnt"
git push -u origin nrc.en.mtnt
```

## Create the Pull Request

In your web browser while logged into GitHub, open your fork of the
**lexical-models** repository at

``` none
https://github.com/<your-github-name>/lexical-models/compare
```

The "base fork" should default to **keymanapp/lexical-models** and the
"base" branch set to **master**.

The "head fork" should default to your fork. Set the "compare" branch to
one associated with your lexical-model.

When everything's ready, click the green <span class="guibutton">Create
pull request</span> button.

![](/cdn/dev/img/developer/lexical-models/comparing-changes.png)

Congratulations! Some of our teammates will follow-up with you and
communicate any revisions that need to be made for your lexical model to
be added to the repository.

After your branch has been merged into the **lexical-models**
repository, you won't need the branch and can safely delete it. Don't
forget to also keep your fork in sync.
