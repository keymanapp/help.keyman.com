---
title: Step 1: Setup - One Time Only
---
  
## Create a GitHub account and install Git

The Keyman repositories are stored on GitHub. If you don't already have
one, you will need to [create](https://github.com/join) a GitHub account
using your web browser.

Then, download and install [Git](https://git-scm.com) onto your
computer.

## Fork the Keyboards repository

From a web browser, log into GitHub and fork the Keyman **keyboards**
repository by visiting <https://github.com/keymanapp/keyboards> and
clicking the Fork button on the top-right
to create your own fork.  

![](/cdn/dev/img/developer/keyboards/fork.png)

## Create a local folder

From Explorer, create a parent folder to house your keyboard
development. For this guide, I use

``` none
c:\projects\
```

but you can use any folder.

## Clone your fork of the Keyboards repository

Once you have installed Git, clone a local copy of the **keyboards**
repository onto your computer. Continuing from a command prompt, run the
following steps:

``` bash
cd /c/projects
git clone https://github.com/<your-github-name>/keyboards.git
```

**Note:** This repository is quite large, so make sure your network can
handle the download and you allow sufficient time. When the clone is
complete, your copy of the **keyboards** repository will be on your
computer at

``` none
c:\projects\keyboards
```

## Adding the remote to the upstream Keyboards repository

From a command prompt, run the following:

``` bash
cd /c/projects/keyboards
git remote add upstream https://github.com/keymanapp/keyboards.git
```

Now let's check Step 2 for all the things to do before starting work on
a keyboard.

[Step 2: Before Starting Work on a Keyboard](step-2)
