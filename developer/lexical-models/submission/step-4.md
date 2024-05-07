---
title: Step 4: Organizing the Lexical Model Files
---
  
## Use one lexical model per folder

### Create a Git branch

When working with several lexical models at the same time, separate each
lexical model on different Git branches. We recommend naming each branch
with the lexical model name. From the Git Bash command prompt, we create
and checkout a Git branch named after the English MTNT **nrc.en.mtnt**.

``` bash
cd /c/projects/lexical-models
git checkout -b nrc.en.mtnt master
```

### One Lexical Model in a Package

Unlike keyboard packages which can contain several keyboards, only
include one lexical model per lexical model package.

### A Single Lexical Model Folder

In your **lexical-models** folder on your hard drive, use Keyman
Developer to create the project folder for your lexical model. In this
example, the folder will be

``` none
c:\projects\lexical-models\release\nrc\nrc.en.mtnt\
```

Your lexical model needs to be in the "release" folder according to the
author/group name because this matches the layout of the full
lexical-models repo.

Now that we've created a folder for our lexical model, we will create
our lexical model source files.

## Include these files

The following files should be included for your lexical model in the
**`source`** folder. Some lexical models may have additional source
files:

`<lexical model>.model.ts`
:   The lexical model source file.

`<wordlist>.tsv`
:   The wordlist used for your lexical model.

`<lexical model>.kps`
:   The package source file. See the Keyman Developer
    [reference](/developer/current-version/guides/lexical-models/distribute/tutorial)
    for what to include within the package source file. Remember that
    when you reference any built files within the package, make sure you
    reference them from your **`build`** folder.

Documentation files
:   Any files you reference in the package source .kps file, such as
    documentation, should be included in the **`source`** folder.

## Do not include these files

The following files should **`not`** be included because they are
generated at build time:

`<lexical model>.js`
:   The compiled lexical model file.

`<lexical model>.kmp`
:   The compiled lexical model package file.

Once you're done creating and testing your lexical model, you're ready
to share the model with us.

[Step 5: Submitting a GitHub Pull Request](step-5)
