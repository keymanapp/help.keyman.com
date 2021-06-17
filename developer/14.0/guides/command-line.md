---
title: Keyman Developer command line tools guide
---

Keyman Developer has a set of command line tools for creating keyboards and
models.

## Windows installation

These tools are included with a default installation of Keyman
Developer, and are also available as a zip download from
[keyman.com/developer/download](https://keyman.com/developer/download).

## Linux and macOS installation

In Keyman Developer 14.0, these executables are Windows Portable Executables.
You will need to configure a WINE environment to run the executables. Prefix all
commands with `wine` (Linux) or `wine64` (macOS).

To build models, you'll also need [node.js](https://nodejs.org/).

```shell
# To build keyboards and packages:
mkdir kmcomp
cd kmcomp
curl -L https://keyman.com/go/download/kmcomp -o kmcomp.zip
unzip kmcomp.zip
# Optionally, add kmcomp to your PATH
# To build models:
npm install @keymanapp/lexical-model-compiler
```

## The five minute quick start

We'll first use [KMConvert](../context/kmconvert) to create a keyboard project,
with the minimal metadata required to compile and install.

```shell
kmconvert template -id sample -name "Sample" -languages en-au
```

(We can add further parameters to prepopulate our keyboard metadata, e.g.
`-author`. See the [KMConvert reference](../context/kmconvert) for full
details.)

This will have created a new folder called `sample/`.

```shell
cd sample
```

Now, we'll build our keyboard project with [KMComp](../context/kmcomp).

```shell
kmcomp sample.kpj
```

And... that's it! We'll now have a compiled keyboard and package in the
`build/` subfolder. Admittedly, the new keyboard doesn't do very much. But
that's up to you to fill in.

On Windows, we can install this keyboard using [`kmshell`](/knowledge-base/98):

```cmd
"%ProgramFiles(x86)%\Keyman\Keyman Desktop\kmshell" -i build\sample.kmp -s
```

On Linux, we'd use the following
[`km-package-install`](/products/linux/current-version/reference/km-package-install)
command:

```shell
km-package-install -f build/sample.kmp
```

Now, use your favourite editor to edit the `source/sample.kmn` file, and when
you wish, compile and reinstall with the commands above. For example, I use
Visual Studio Code to work with the whole `sample/` folder:

```shell
code .
```

## About the source files

When you create and build a project, you'll end up with the following structure.
Some files may be not be present, depending on the targets you specify.

```plain
sample
│   HISTORY.md
│   LICENSE.md
│   README.md
│   sample.keyboard_info
│   sample.kpj
│   sample.kpj.user
│
├───build
│       sample.kmp
│       sample.kmx
│       sample.kvk
│       sample.js
│
└───source
        readme.htm
        sample.keyman-touch-layout
        sample.kmn
        sample.kps
        sample.kvks
        welcome.htm
```

Now that probably seems like a whole lot of files! But each file has a purpose.

### Root folder

`sample.kpj`
: The main project file. This contains references to all the components:
  keyboards, models, and packages.

`sample.kpj.user`

: A user preference file. You can safely delete it at any time (you'll lose some
  remembered settings from Keyman Developer, but nothing consequential) and it
  should not be shared in a git repository.

Some of these files are metadata files: information about your keyboard project
that will help you and others maintain your keyboard project in the future.

For example, you may wish to make your keyboard project into a git repository
and push it an online public git host such as GitHub or GitLab.

`README.md`
: Provides an introduction to the keyboard project when others stumble across
  it. This file is in [Markdown](https://commonmark.org) format.

`LICENSE.md`
: Explains the rights that you give to others (by default, it will be the MIT
  license -- which is what we require for Keyman Cloud -- but you can change
  that to any license you wish). This file is in
  [Markdown](https://commonmark.org) format.

`HISTORY.md`
: A place to record changes you make to the project over time. This file is in
[Markdown](https://commonmark.org) format.


[`sample.keyboard_info`](/developer/cloud/keyboard_info)
: If you wish to upload to [Keyman Cloud](/developer/keyboards), you'll need to
provide at least some minimal metadata for searching for your keyboard. This
file is in JSON format.

### Source folder

The files in the source folder are  more fully described in the Keyman Developer
[user guide](../..).

[`source/sample.kmn`](/developer/language)
: Your keyboard source. It will compile to a `.kmx` (desktop targets) or a `.js`
  (web / touch targets).

[`source/sample.kps`](../reference/file-types/kps)
: The package source, which is used to create a compressed `.kmp` archive of the
  files needed for distribution.

`source/readme.htm`
: Introductory web page for end users of your keyboard, shown before they
  install it, so they know what it is used for.

`source/welcome.htm`
: A web page which describes how to use your keyboard, ideally with examples.

[`source/sample.keyman-touch-layout`](../reference/file-types/keyman-touch-layout)
: This touch layout file description is in JSON format and most easily visually
  edited with the Keyman Developer touch layout editor. This file is optional;
  remove the reference from the keyboard source if you don't wish to use it.

[`source/sample.kvks`](../reference/file-types/kvks):
: The on screen keyboard template for desktop platforms. It is in XML format and
  most easily visually edited with the Keyman Developer on screen keyboard
  editor. This file is optional; remove the reference from the keyboard source
  if you don't wish to use it.

### Build folder

Most of the files in the build folder are installable files.

`build/sample.kmp`
: The installable package file -- installable in all Keyman end user products

`build/sample.js`
: The keyboard compiled to Javascript for use with KeymanWeb

`build/sample.kvk`
: The compiled on screen keyboard. This intermediate file should not be
  distributed; it is included in the compiled package.

`build/sample.kmx`
: The compiled keyboard. This intermediate file should not be distributed; it is
  included in the compiled package.

## Reference and Examples

### KMComp

[KMComp](../context/kmcomp) is the command line compiler. You can use it to
compile all Keyman files.

`kmcomp project.kpj`
: Compile all components of a keyboard or model project named `project.kpj`
KMComp will respect the path settings within the project file. This is the
recommended way to build, as it will build keyboards, models and packages all
in one step.

`kmcomp keyboard.kmn`
: Compile a keyboard file to a .kmx (desktop targets) and/or .js (web/touch
targets). If an output file is not specified, writes to the same folder as the
keyboard.

`kmcomp package.kps`
: Compile a package file to a .kmp (all targets). All included keyboards must
already be compiled.

* [KMComp reference](../context/kmcomp)

### KMConvert

[KMConvert](../context/kmconvert) generates keyboards and models from templates,
and converts keyboard layouts between different formats.

The [New Project dialog](../context/new-project) in Keyman Developer provides a graphical
version of the functionality in KMConvert.

* [KMConvert reference](../context/kmconvert)
