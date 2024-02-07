---
title: kmlmi - Command Line Lexical Model model_info Compiler
---

kmlmi merges Keyman lexical model .model_info files. It is intended for
use within the
[keymanapp/lexical-models](https://github.com/keymanapp/lexical-models)
repository. kmlmi is also available via npm.

## Installation via npm

First, install [nodejs](https://nodejs.org/). Then, install with the
following:

``` bash
npm i @keymanapp/developer-lexical-model-compiler
```

## Compiler mode

The following parameters are available:

``` none
Usage: kmlmi <infile> -o, --outFile <filename>
    [-m, --model <model_id>] -s, --source <sourceFilename> [--kpsFilename <kpsFilename>]
    [--kmpFilename <kmpFilename>] [--jsFilename <jsFilename>]
```

### General compiler parameters

`infile`
:   A .model_info source file. Required in compiler mode.

`-o, --outFile <filename>`
:   Where to save the resultant file.

`-m, --model <model_id>`  
:   model id. Defaults to basename of input file sans .model_info
    extension.

`-s, --source <sourceFilename>`
:   Path to .model.ts source of lexical model, relative to
    lexical-models repo root.

`--kpsFilename <kpsFilename>`
:   Path to .model.kps file. Defaults to
    source/&lt;model_id&gt;.model.kps

`--kmpFilename <kmpFilename>`
:   Path to .model.kmp file. Defaults to
    build/&lt;model_id&gt;.model.kmp.

`--jsFilename <jsFilename>`
:   Path to .model.js file. Defaults to build/&lt;model_id&gt;.model.js.
