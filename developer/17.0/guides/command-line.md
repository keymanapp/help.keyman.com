---
title: Keyman Developer command line tools guide
---

Keyman Developer has a set of command line tools for creating keyboards and
models.

## Keyman Developer integration (Windows only)

These tools are included with a default installation of Keyman Developer,
including a runtime of node.js.

## npm or zip (Windows, macOS, and Linux)

These tools are also available as:
* a zip download from [keyman.com/developer/download](https://keyman.com/developer/download)
* an npm package, [@keymanapp/kmc](https://npmjs.com/package/@keymanapp/kmc)

You'll need [node.js](https://nodejs.org/). Unlike previous versions of Keyman
Developer, version 17 no longer requires WINE to run on Linux or macOS.

### Zip download

```shell
# To build keyboards and packages:
mkdir kmc
cd kmc
# hint: the download is currently called 'kmcomp', although the
#       compiler is now called 'kmc'.
curl -L https://keyman.com/go/download/kmcomp -o kmc.zip
unzip kmc.zip
# Optionally, add kmcomp to your PATH
```

### npm install

```shell
npm install -g @keymanapp/kmc
```

## The five minute quick start


### 1. Generate a basic keyboard project

**TODO**: THIS SECTION NEEDS REWRITE ONCE `kmc generate` lands.

We'll first use [KMConvert](../context/kmconvert) to create a keyboard project,
with the minimal metadata required to compile and install. In your /keyboards -
folder do:

```shell
kmconvert template -id sample -name "Sample" -languages en-au
```

(We can add further parameters to prepopulate our keyboard metadata, e.g.
`-author`. See the [KMConvert reference](../context/kmconvert) for full
details.)

This will have created a new folder called `sample/`.

### 2. Build the project

```shell
cd sample
```

Now, we'll build our keyboard project with [`kmc`](../context/kmc).

```shell
kmc build .
```

And... that's it! We'll now have a compiled keyboard and package in the
`build/` subfolder. Admittedly, the new keyboard doesn't do very much. But
that's up to you to fill in.

### 3. Install the keyboard

**Windows**: we can install this keyboard using [`kmshell`](/knowledge-base/98):

```cmd
"%ProgramFiles(x86)%\Keyman\Keyman Desktop\kmshell" -i build\sample.kmp -s
```

Alternatively you can double-click the .kmp package file in Windows Explorer to
install it.

**Linux**: we'd use the following
[`km-package-install`](/products/linux/current-version/reference/km-package-install)
command:

```shell
km-package-install -f build/sample.kmp
```

**macOS**: open Keyman Configuration and drop the package .kmp file onto the
Keyman Configuration window.

Now, use your favourite editor to edit the `source/sample.kmn` file, and when
you wish, compile and reinstall with the commands above. For example, I use
Visual Studio Code to work with the whole `sample/` folder:

```shell
code .
```

## File layout

See [file layout](file-layout) for details on the source file layout that
Keyman Developer generates.

## Reference and Examples

### kmc - command line compiler

[kmc](../context/kmc) is the command line compiler. You can use it to compile
all Keyman files.

`kmc build project.kpj`
: Compile all components of a keyboard or model project named `project.kpj`
KMComp will respect the path settings within the project file. This is the
recommended way to build, as it will build keyboards, models and packages all in
one step. You can also call `kmc build <folder>` to build the project in the
referenced folder, e.g. `kmc build .`.

`kmc build keyboard.kmn`
: Compile a keyboard file to a .kmx (desktop targets) and/or .js (web/touch
targets). If an output file is not specified, writes to the same folder as the
keyboard.

`kmc build package.kps`
: Compile a package file to a .kmp (all targets). All included keyboards must
already be compiled.

* [kmc reference](../context/kmc)

### KMConvert

**TODO**: REWRITE

[KMConvert](../context/kmconvert) generates keyboards and models from templates,
and converts keyboard layouts between different formats.

The [New Project dialog](../context/new-project) in Keyman Developer provides a graphical
version of the functionality in KMConvert.

* [KMConvert reference](../context/kmconvert)
