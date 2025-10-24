---
title: Step 2: Development Tools and Building a Keyboard (deprecated)
---

**Note:** This guide is deprecated. Consider using the [GitHub Keyboard
Submission Guide](../github) instead.

While Keyman Developer is not required to submit or build keyboard
layouts, the IDE has many features that will make keyboard development a
lot easier.

Keyman Developer has a powerful project feature that makes it easier to
manage the keyboard projects. Each keyboard in the repository will have
an associated ***Keyman Project .kpj file*** that can be built from the
command line or from within the Keyman Developer IDE. This project file
is the starting point for any work you do on a keyboard.

Make sure you have Keyman Developer 11.0 or later. You can download
Keyman Developer from
[https://keyman.com/developer](https://keyman.com/developer).
With Keyman Developer, you will have these two ways of building
keyboards.

## Building keyboards in the IDE

Double-click a **`.kpj`** file in Explorer to open the project in the
Keyman Developer Integrated Development Environment (IDE). You can also
open a project from the Project menu within the IDE. The project is
automatically updated when you make changes, and changes specific to
your computer are saved in a **`.kpj.user`** file along with the
**`.kpj`** file. This **`.kpj.user`** file can be deleted at any time,
and should not be saved to the git repository.

In the Project screen, in either the Keyboards or the Packages tab, you
can click <span class="guibutton">Build all</span> to build all the
keyboard and package files listed in the project. If the project has
dependencies on other projects, you will need to build them first:
Keyman Developer does not resolve project dependencies at this time (see
the command line details below for an automatic way to resolve this).

## Building keyboards from the command line

At the root of the *keyboards-starter* repo is a **`build.sh`** bash
script you can use to compile the keyboards and packages in the project.

The script is intended to be run from the **bash** shell. On Windows,
**Git Bash** is installed along with **Git** and is the recommended
build environment (Windows Subsystem for Linux is not currently
supported). On macOS and Linux, the compiler requires WINE. Here are
some of the additional build script parameters:

``` none
      -c          clean the folder (deletes all intermediate and
                  output files, do this before committing with git)
      -d          build with debug information
      -s          build silently
      -t target   build a specific file, target, which can be
                  a .kmn or .kps file.
      -w          treat build warnings as errors
      -h          get help on build.sh
```

In this guide, we'll primarily use the sample keyboard name **sample1**.
From the Git Bash command prompt, we build our **sample1** keyboard.

**Note:** Commands in Git Bash follow Unix-style file paths.

``` bash
cd /c/projects/keyboards-starter
./build.sh sample1
```

[Step 3: Organizing the Keyboard Files](step-3)
