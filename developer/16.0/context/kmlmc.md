---
title: kmlmc - Command Line Lexical Model Compiler
---

kmlmc is the command line lexical model compiler included in Keyman
Developer. It is also available via npm.

## Installation via npm

First, install [nodejs](https://nodejs.org/). Then, install with the
following:

``` bash
npm i @keymanapp/developer-lexical-model-compiler
```

## Compiler mode

The following parameters are available:

``` none
Usage: kmlmc <infile> [-V, --version] [-o, --outFile <filename>] [-h, --help]
```

### General compiler parameters

`infile`
:   A .model.ts file (lexical model source). Required in compiler mode.

`-V, --version`
:   Output the version number.

`-o <filename>`  
:   Where to save the resultant file.

`-h, --help`
:   Output usage information.
