---
title: New Project Dialog
---

![New Project dialog](/cdn/dev/img/developer/120/ui/frmNewProject.png)


Creates a new keyboard or lexical model project, optionally from a template or by importing from another source.

## Basic

Creates a keyboard project that matches the folder structure used in the Keyman [keyboards repository](https://github.com/keymanapp/keyboards) and includes all [basic files](/developer/keyboards/) needed for a keyboard project. Clicking OK will open the [New Project Parameters dialog](new-project-parameters).

## Blank

Creates a new empty keyboard project.

## Wordlist Lexical Model

Creates a lexical model project that matches the folder structure used in the Keyman [lexical models repository](https://github.com/keymanapp/lexical-models) and includes all basic files needed for a lexical model project. Clicking OK will open the [New Lexical Model Project Parameters dialog](new-lm-project-parameters).

## Blank Lexical Model

Creates a new empty lexical model project.

## Import Windows Keyboard

Creates a keyboard project that matches the folder structure used in the Keyman [keyboards repository](https://github.com/keymanapp/keyboards) and includes all [basic files](/developer/keyboards/) needed for a keyboard project, then converts and imports the Windows keyboard that you select into the project. Clicking OK will open the [New Project Parameters dialog](new-project-parameters).

The **Basic** and **Import Windows Keyboard** modes can also be driven by command line with [KMConvert](kmconvert).