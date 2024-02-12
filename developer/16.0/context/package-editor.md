---
title: Package Editor
---

The Package Editor allows you to edit a .kps package source file, which
will be compiled into a .kmp package file. These files contain a set of
keyboards, documentation, fonts, and other related files, which make
distribution and installation of a keyboard in Keyman simple.

## Files tab

![Package Editor - Files tab](/cdn/dev/img/developer/120/ui/frmPackageEditor_Files.png)

Use the <kbd>Add</kbd> button to select the files to
be included in the package, such as .kmx and .js keyboard files,
documentation, and related fonts; but you can include any type of file
here as well.

If you add another .kmp package file, it will also be installed when
this package is installed, but will be managed separately and
uninstalled separately.

## Keyboards tab

![Package Editor - Keyboards tab](/cdn/dev/img/developer/120/ui/frmPackageEditor_Keyboards.png)

The Keyboards tab shows you some status information of keyboards you've
added to the package. There are also optional font dropdowns and a
required "Languages" section. The fields on the tab are:

Description
:   The keyboard name. Status.

Files
:   This shows if the added keyboard files are .js and/or .kmx files.
    Status.

Version
:   The keyboard version. Status.

Is right-to-left

:   Currently, this is only applicable to Android, iOS and Web (that is,
    .js format) keyboards. This reflects the checkbox in the [Details tab](./keyboard-editor#details-fields) 
    of the Keyboard editor.
    Status.

    > ### Note
    Is right-to-left will only be true if the following occur:
    -   "Keyboard is right-to-left" is checked in the Keyboard editor
    -   A .js keyboard is added to package

Keyboard font
:   When font files are added to the package, this dropdown tells the
    Keyman apps for iOS and Android which font to use when rendering the
    On Screen Keyboard touch keyboard. Optional.

Display font
:   When font files are added to the package, this dropdown tells the
    Keyman apps for iOS and Android which font to use in edit fields. It
    only applies within the Keyman app and apps that support this
    functionality. Optional.

Languages
:   Because the language information in the .kmn source is deprecated,
    the "Languages" section is required. Each language listed here is a
    [BCP 47 language tag](../reference/bcp-47). Use the
    <kbd>Add</kbd> button to bring up the "Select
    BCP 47 Tag" dialog. When Keyman installs the keyboard package, it
    will associate the keyboard with the language(s) you select here.
    Required.

![Package Editor - Select BCP 47 Tag dialog](/cdn/dev/img/developer/120/ui/frmPackageEditor_Select_BCP_47_Tag.png)

## Details tab

![Package Editor - Details tab](/cdn/dev/img/developer/120/ui/frmPackageEditor_Details.png)

Enter the name of the package into the Package Name field; this will be
automatically filled from the name of the first keyboard you add to the
package.

Select a HTML readme file if you have one to include in the package;
this will be displayed before the package is installed as information
about the package.

Version numbers should be in the form major.minor\[.subversion\].
Subversion is optional but is helpful for small bug fix releases. Each
of the sections of the version should be an integer. Keyman Desktop does
integer comparisons on the version numbers, so, for example, version
2.04 is regarded as newer than version 2.1. Alphabetic or date formats
should be avoided as the installer for the keyboard cannot determine
which version is older reliably.

You can also tick the checkbox labelled "Package version follows
keyboard version" to have the package version automatically track the
keyboard version.

The Copyright indicates the overall copyright of the package and all its
contents.

Fill in the individual or organisation who authored the package in the
Author field, and a contact email address into the E-mail address field.
These fields are optional.

A web site is encouraged and should be filled in the web site field,
including the initial "http://" or "https://".

A package can optionally include a 140x250 JPEG or PNG image file to be
shown during installation. This image file must be added to the Files
list in step 1, then selected from the list here.

## Shortcuts tab

![Package Editor - Shortcuts tab](/cdn/dev/img/developer/120/ui/frmPackageEditor_Shortcuts.png)

You can optionally have the package create a Start Menu folder, and
populate it with shortcuts to the files in the package, and optionally
also a shortcut for uninstallation.

To add an entry, click New, and set the description, and choose a
program or document to load.

An uninstall shortcut is no longer recommended; uninstall should be
managed by the user in Keyman Configuration.

## Source tab

![Package Editor - Source tab](/cdn/dev/img/developer/120/ui/frmPackageEditor_Source.png)

The source of the .kps file in XML format. All details from previous
tabs can be seen in the Source tab, and changes in either the Source tab
or the other tabs will be reflected immediately in the other.

## Compile tab

![Package Editor - Compile tab](/cdn/dev/img/developer/120/ui/frmPackageEditor_Build.png)

The final step is building the package. You must save the package file
before building, then choose Compile Package to build the package file.
You can then test the package to verify that it will install correctly
with the Install Package button.

Once you are satisfied with your package, you should consider submitting
the keyboard to the [Keyman Cloud Keyboards Repository](/developer/keyboards/).

## Package Installers

A Package Installer will install both Keyman Desktop and the package at
the same time, using the same bootstrap installer that Keyman Desktop
uses. You will need to find the .msi file that is associated with the
version of Keyman Desktop that you want to bundle the keyboard with.

There are two ways to obtain the Keyman Desktop .msi installer

1.  Downloading from Keyman
    [Downloads](https://downloads.keyman.com/windows/)

2.  Extracting the .msi installer that is embedded in the .exe installer
    using the "-x" option. For example, run

    ``` clike
    keymandesktop-11.0.1309.0.exe -x .
    ```

    to extract the .msi file into the current folder.

You cannot select the .exe file for the Package Installer - it must be
an .msi file. If you create your own custom product, you can also use
the .msi file generated in this instance here.

The bootstrapper installer used for a Package Installer has several
command line parameters that can be used. [More information on the bootstrapper installer](../reference/tools/setup).
