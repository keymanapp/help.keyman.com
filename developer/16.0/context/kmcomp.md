---
title: KMComp Command Line Compiler
---
  
KMComp is the command line compiler included in Keyman Developer. It is
located in `%ProgramFiles(x86)%\Keyman\Keyman Developer`.

The following parameters are available:

## Compiler mode

``` none
Usage: kmcomp [-s[s]] [-nologo] [-c] [-d] [-w] [-v[s|d]] [-source-path path] [-schema-path path]
              [-m] infile [-m infile] [-t target] [outfile.kmx|outfile.js [error.log]]
              [-add-help-link path] [-color|-no-color]
              [-extract-keyboard-info field[,field...]]
```

### General compiler parameters

`infile`
:   A .kmn file (Keyboard Source), .kps file (Package Source), or .kpj
    (project). Required in compiler mode. If a .kpj is specified, the
    .kpj will determine output paths and all files referenced in the
    project will be built (see `-t`). For validation mode, can be a
    .keyboard_info file.

`outfile.kmx`
:   Generate an output file for Windows/macOS; can only be specified for
    a .kmn `infile`. Optional; if omitted, generates an output file with
    the same base name as the input file.

`outfile.js`
:   Generate an output file for KeymanWeb/touch devices; can only be
    specified for a .kmn `infile`. Optional; if omitted for a .kmn
    input, no JavaScript keyboard will be built.

`error.log`
:   Write output to a text file specified by error.log instead of
    stdout.

`-s`
:   Mostly silent; don't print information-level messages

`-ss`
:   Fully silent; don't print anything except fatal internal errors

`-nologo`
:   Don't print the compiler description

`-c`
:   Clean target(s) instead of building (only for .kpj)

`-d`
:   Include debug information

`-w`
:   Treat warnings as errors

`-t target`
:   Build only the `target` file from the project (only for .kpj)

`-addhelplink path`
:   path to help file on https://help.keyman.com/keyboard

`-color`
:   If specified, forces color log mesages on.

`-no-color`
:   If specified, forces color log messages off. If neither specified,
    uses console mode to determine whether color should be used

### JSON .keyboard_info compile targets

`-v[s]`
:   Validate infile against source schema

`-vd`
:   Validate infile against distribution schema

`-m`
:   Merge information from infile (can be .kmp and .js) into
    .keyboard_info output file

`-m-validate-id`
:   Validate the id against the .js, .kmx and .kmp filenames when
    merging

`-extract-keyboard-info`
:   Print json data .keyboard_info for build script integration.

`-source-path`
:   Specify path to add to the sourcePath field in the .keyboard_info
    output file

`-schema-path`
:   Specify path to the keyboard_info json schema definitions. If not
    specified, then defaults to same folder as kmcomp.exe
