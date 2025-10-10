---
title: Step 1: Get the Source (deprecated)
---

**Note:** This guide is deprecated. Consider using the [GitHub Keyboard
Submission Guide](../github) instead.

## Create a GitHub account and install Git

The Keyman repositories are stored on GitHub. If you don't already have
one, you will need to [create](https://github.com/join) a GitHub account
using your web browser.

Then, download and install [Git](https://git-scm.com) onto your
computer.

## Fork the Keyboards repository

From a web browser, log into GitHub and fork the Keyman **keyboards**
repository by visiting <https://github.com/keymanapp/keyboards> and
clicking the <span class="guibutton">Fork</span> button on the top-right
to create your own fork.  

![](/cdn/dev/img/developer/keyboards/fork.png)

## Create a local folder

From Explorer, create a parent folder to house your keyboard
development. For this guide, I use

``` none
c:\projects\
```

but you can use any folder.

## Clone the Keyboards-Starter repository

Once you have installed Git, do a shallow clone of the
*keyboards-starter* repository onto your computer. This
*keyboards-starter* repository doesn't contain keyboards, but includes
the tools you'll need in order to upload a keyboard layout to us.

From a command prompt, run the following steps:

``` bash
cd /c/projects
git clone --depth 1 https://github.com/keymanapp/keyboards-starter.git
```

When the clone is complete, your copy of the *keyboards-starter*
repository will be on your computer at

``` none
c:\projects\keyboards-starter
```

## Keep your local Keyboards-Starter files in sync

Before starting work on a keyboard, you should keep your local
*keyboards-starter* files in sync with our
[keyboards-starter](https://github.com/keymanapp/keyboards-starter)
repository. This keeps the command line keyboard compiler up to date.
Get the latest changes from the master repository with these following
commands:

**Note:** Stash or save any working files before changing branches.

``` bash
cd /c/projects/keyboards-starter
git checkout master
git pull
```

Now let's check that we have the Keyman development tools for building a
keyboard.

[Step 2: Development Tools and Building a Keyboard](step-2)
