---
title: Step 3: Development Tools and Building a Lexical Model
---
  
We recommend using Keyman Developer to build lexical models because the
IDE has many features that will make lexical model development a lot
easier.

Keyman Developer has a project wizard that makes it easier to manage the
lexical model projects. Each lexical model in the repository will have
an associated **Keyman Project .kpj file** that can be built from the
Keyman Developer IDE. This project file is the starting point for any
work you do on a lexical model.

Make sure you have Keyman Developer 12.0 or later. You can download
Keyman Developer from
[https://keyman.com/developer](https://keyman.com/developer){target="_blank"}.
With Keyman Developer, you will have these two ways of building lexical
models.

## Building lexical models in the IDE

Double-click a **`.kpj`** file in Explorer to open the project in the
Keyman Developer Integrated Development Environment (IDE). You can also
open a project from the Project menu within the IDE. The project is
automatically updated when you make changes, and changes specific to
your computer are saved in a **`.kpj.user`** file along with the
**`.kpj`** file. This **`.kpj.user`** file can be deleted at any time,
and should not be saved to the git repository.

In the Project screen, in either the Models or the Packages tab, you can
click <span class="guibutton">Build all</span> to build all the models
and package files listed in the project. Keyman Developer does not
resolve project dependencies at this time (see the command line details
below for an automatic way to resolve this).

## Building lexical models from the command line

At the root of the **lexical-models** repo is a **`build.sh`** bash
script you can use to compile the lexical model and package in the
project.

The script is intended to be run from the **bash** shell. On Windows,
**Git Bash** is installed along with **Git** and is the recommended
build environment (Windows Subsystem for Linux is not currently
supported). On macOS and Linux, the compiler requires WINE. Here are
some of the additional build script parameters:

``` none
      -t          runs tests on models
      -b          creates compiled models
      -c          clean the folder (deletes all intermediate and
                  output files, do this before committing with git)
      -no-npm     skip all npm steps
      -s          build silently
      -h          get help on build.sh
       [target]   The specific model(s) to build. e.g. release or release/nrc/nrc.en.mtnt
                  If omitted, builds all models
```

In this guide, we'll primarily use the English MTNT lexical model
located in

``` none
c:\projects\lexical-models\nrc\nrc.en.mtnt
```

From the Git Bash command prompt, we build our lexical model.

**Note:** Commands in Git Bash follow Unix-style file paths.

``` bash
cd /c/projects/lexical-models
./build.sh release/nrc/nrc.en.mtnt
```

[Step 4: Organizing the Lexical Model Files](step-4.php)
