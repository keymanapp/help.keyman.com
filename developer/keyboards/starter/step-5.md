---
title: Step 5: Submitting a GitHub Pull Request (deprecated)
---

**Note:** This guide is deprecated. Consider using the [GitHub Keyboard
Submission Guide](../github) instead.

## Verify keyboard builds before submission

Following the file layout documented in [Organizing Keyboard
Files](step-3), your keyboard layout should be in a folder similar to

``` none
c:\projects\keyboards-starter\sample1\release\s\sample1
```

From the **Git Bash** shell, use the **`build.sh`** bash script at the
root of the *keyboards-starter* repo to compile the keyboard in the
project.

``` bash
cd /c/projects/keyboards-starter
./build.sh sample1
```

Verify the keyboard and keyboard package successfully built in

``` none
c:\projects\keyboards-starter\sample1\release\s\sample1\build\
```

## Delete entire build\\ folder

Because the build server will automically rebuild the keyboard, we do
not want to submit the `build\` folder to GitHub. From Explorer, delete
the entire folder at

``` none
c:\projects\keyboards-starter\sample1\release\s\sample1\build\
```

## Uploading Keyboard Files to GitHub

In your web browser while logged into GitHub, open your fork of the
*keyboards* repository at

``` none
https://github.com/<your-github-name>/keyboards
```

![](/cdn/dev/img/developer/keyboards/clone-fork.png)

Click <span class="guibutton">Upload files</span> that's left of the
green Clone button.

In Explorer, locate the

``` none
c:\project\keyboards-starter\sample1\release
```

folder and drag the entire *release* folder into the drop target in the
upload page in your web browser. Don't drag individual files, because
this will lose the folder structure.

![](/cdn/dev/img/developer/keyboards/drag-files.png)

### Remove the following files

Once GitHub has created a list of files to upload in your web browser,
remove any of the following files:

-   **`.kpj.user`** - Developer settings not needed for the keyboard
-   Any **`sample1/build/`** files - These will automatically be rebuilt

### Check the list of files

The set of keyboard files to upload will look something like:
![](/cdn/dev/img/developer/keyboards/upload-sample1-files.png)

## Commiting the Changes

In the **Commit changes** section, enter a summary (e.g. Initial version
of sample1 keyboard) and a detailed description of any comments that you
wish.

Select "Create a new branch for this commit" and enter the keyboard name
for the branch name.

![](/cdn/dev/img/developer/keyboards/create-branch.png)

Click "Propose changes" and wait for GitHub to do its magic "processing
your files".

## Creating the Pull Request

GitHub will create an "Open a pull request" page. Click the "compare
across forks" link.
![](/cdn/dev/img/developer/keyboards/compare-across-forks.png)

For the "base fork", select **keymanapp/keyboards**. In the PR summary,
add your keyboard name. When everything's ready, click the green
<span class="guibutton">Create pull request</span> button.

![](/cdn/dev/img/developer/keyboards/base-fork-pr.png)

Congratulations! Some of our teammates will follow-up with you and
communicate any revisions that need to be made for your keyboard to be
added to the repository.
