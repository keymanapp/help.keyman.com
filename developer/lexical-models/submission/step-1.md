---
title: Step 1: Setup - One Time Only
---
  
## Create a GitHub account and install Git

The Keyman repositories are stored on GitHub. If you don't already have
one, you will need to [create](https://github.com/join) a GitHub account
using your web browser.

Then, download and install [Git](https://git-scm.com) onto your
computer.

## Fork the Lexical Models repository

From a web browser, log into GitHub and fork the Keyman
**lexical-models** repository by visiting
<https://github.com/keymanapp/lexical-models> and clicking the
<span class="guibutton">Fork</span> button on the top-right to create
your own fork.  

![](/cdn/dev/img/developer/lexical-models/fork.png)

## Create a local folder

From Explorer, create a parent folder to house your lexical model
development. For this guide, I use

``` none
c:\projects\
```

but you can use any folder.

## Clone your fork of the lexical-models repository

Once you have installed Git, clone a local copy of the
**lexical-models** repository onto your computer. Continuing from a
command prompt, run the following steps:

``` bash
cd /c/projects/
git clone https://github.com/<your-github-name>/lexical-models.git
```

When the clone is complete, your copy of the **lexical-models**
repository will be on your computer at

``` none
c:\projects\lexical-models
```

## Adding the remote to the upstream lexical models repository

From a command prompt, run the following:

``` bash
cd /c/projects/lexical-models
git remote add upstream https://github.com/keymanapp/lexical-models.git
```

## Installing Node.js

Download and install [Node.js](https://nodejs.org/en/download/) which
will be needed to compile the lexical model.

Now let's check Step 2 for all the things to do before starting work on
a lexical model.

[Step 2: Before Starting Work on a Lexical Model](step-2.php)
