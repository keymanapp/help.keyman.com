---
title: Working with the Keyman Cloud Keyboard Repository
---

## Introduction

The Keyman Cloud repository is the master source for all keyboard
layouts distributed within the Keyman app. These keyboards have been
contributed by many authors since the mid 1990's.

## Keyboard Design Principles

For anyone who is searching for the requirement of keyboard layouts, you can start with the Keyboard Design Principles using D.I.S.C.U.S. Principles to standardize your keyboard(s). We wholeheartedly recommend starting off using this concept to reduce hiccups during development and keyboard submission to Keyman's keyboard repository.  
Let's find out how [D.I.S.C.U.S](./standard) works.

## The Keyman Keyboard Repository

We now have a single location for open source keyboards on github.com

[**https://github.com/keymanapp/keyboards**](https://github.com/keymanapp/keyboards)

From these source files, we build the keyboards that can be downloaded
from [**https://keyman.com**](https://keyman.com).

A large proportion of the keyboards on the site, including nearly all
the keyboards that we have developed, are open source keyboards. This
means that you can download the layouts yourself and improve them, and
we hope you will contribute your own keyboards to this repository for
all to use.

### Why You Should Contribute

-   Accessibility:
-   Version Control:
-   Automatic Keyboard Updates

## How the Repository is Organized

The **"release"** section of the repository (contained in the "release"
folder) contains keyboards that have complete source files and
documentation.

The **"experimental"** section of the repository (in the "experimental"
folder) contains keyboards that are under active development, but don't
yet have all the files necessary for release, or are being tested by
user community members before finalizing the design.

The **"legacy"** section of the repository (in the "legacy" folder) contains
older keyboards that are functional, but don't contain complete source
and documentation.

Within each section of the repository, there is a level of subfolders
that serve to group the keyboards so that it isn't necessary to scroll
through hundreds of entries to find a particular keyboard. Most of these
subfolders are single alphabetic characters, and each folder contains
the keyboards that start with that letter. In addition, there are some
folders (fv and gff, for example) that correspond to organizations which
have contributed a number of keyboards.

## Get Involved

-   [Advanced Keyboard Submission Guide](advanced) 
: For advanced users who are managing a number of keyboards and are comfortable using git, learn how to get set up and contribute with the full keyboards repository.
-   [GitHub Keyboard Submission Guide](github)
: For users who are creating and submitting a single keyboard or would rather use the GitHub interface, learn how to get set up and contribute with using the online GitHub interface.
-   [Starter Guide (deprecated)](starter)
: For new users who are only creating and submitting a single keyboard,
        learn how to get set up with the keyboard repository on GitHub and the Keyman tools. (This method is deprecated. Try the GitHub Keyboard Submission Guide instead.)
