---
title: kmc Command Line Compiler Toolset
---

kmc is the command line compiler toolset for Keyman 17.0. In Keyman Developer,
it is located in `%ProgramFiles(x86)%\Keyman\Keyman Developer`. kmc is also
available as an npm module for Windows, macOS and Linux developers:

```
npm install -g @keymanapp/kmc
```

kmc does more than just compile keyboards. It builds packages, lexical models,
projects, keyboards, Windows installers, and more. It provides analysis tools
for keyboard data.

kmc will be extended to generate new keyboard and lexical model projects,
support renaming or cloning of existing projects, importing keyboard data from
other formats, and running keyboard unit tests.

kmc replaces kmcomp from earlier versions of Keyman Developer.

The following parameters are available:

## Build Keyboards, Packages, Lexical Models, and Projects

```none
Usage: kmc build file [options] [infile...]

Compile one or more source files or projects ('file' subcommand is default).

Options:
  --for-publishing                      Verify that project meets @keymanapp repository requirements
  -h, --help                            display help for command
  -d, --debug                           Include debug information in output
  -w, --compiler-warnings-as-errors     Causes warnings to fail the build; overrides project-level warnings-as-errors option
  -W, --no-compiler-warnings-as-errors  Warnings do not fail the build; overrides project-level warnings-as-errors option
  --no-compiler-version                 Exclude compiler version metadata from output
  --no-warn-deprecated-code             Turn off warnings for deprecated code styles
  -l, --log-level <logLevel>            Log level (choices: "silent", "error", "warn", "hint", "info", "debug", default: "info")
  --log-format <logFormat>              Log format (choices: "tsv", "formatted", default: "formatted")
  -o, --out-file <filename>             Override the default path and filename for the output file

Global Options:
  --color                               Force colorization for log messages
  --no-color                            No colorization for log messages; if both omitted, detects from console
  -V, --version                         output the version number
  --no-error-reporting                  Disable error reporting to keyman.com (overriding user settings)
  --error-reporting                     Enable error reporting to keyman.com (overriding user settings)

Supported file types:
* folder: Keyman project in folder
* .kpj: Keyman project
* .kmn: Keyman keyboard
* .xml: LDML keyboard
* .model.ts: Keyman lexical model
* .kps: Keyman keyboard or lexical model package

File lists can be referenced with @filelist.txt.

If no input file is supplied, kmc will build the current folder.
```

### Examples

`kmc build project.kpj`
: Compile all components of a keyboard or model project named `project.kpj`.
kmc will respect the path settings within the project file. This is the
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

## Build LDML Test Data

```none
Usage: kmc build ldml-test-data [options] <infile>

Convert LDML keyboard test .xml to .json

Options:
  -h, --help                            display help for command
  -d, --debug                           Include debug information in output
  -w, --compiler-warnings-as-errors     Causes warnings to fail the build; overrides project-level warnings-as-errors option
  -W, --no-compiler-warnings-as-errors  Warnings do not fail the build; overrides project-level warnings-as-errors option
  --no-compiler-version                 Exclude compiler version metadata from output
  --no-warn-deprecated-code             Turn off warnings for deprecated code styles
  -l, --log-level <logLevel>            Log level (choices: "silent", "error", "warn", "hint", "info", "debug", default: "info")
  --log-format <logFormat>              Log format (choices: "tsv", "formatted", default: "formatted")
  -o, --out-file <filename>             Override the default path and filename for the output file

Global Options:
  --color                               Force colorization for log messages
  --no-color                            No colorization for log messages; if both omitted, detects from console
  -V, --version                         output the version number
  --no-error-reporting                  Disable error reporting to keyman.com (overriding user settings)
  --error-reporting                     Enable error reporting to keyman.com (overriding user settings)
```

## Build Windows Package Installer

```none
Usage: kmc build windows-package-installer [options] <infile>

Build an executable installer for Windows for a Keyman package

Options:
  -d, --debug                           Include debug information in output
  -w, --compiler-warnings-as-errors     Causes warnings to fail the build; overrides project-level warnings-as-errors option
  -W, --no-compiler-warnings-as-errors  Warnings do not fail the build; overrides project-level warnings-as-errors option
  --no-compiler-version                 Exclude compiler version metadata from output
  --no-warn-deprecated-code             Turn off warnings for deprecated code styles
  -l, --log-level <logLevel>            Log level (choices: "silent", "error", "warn", "hint", "info", "debug", default: "info")
  --log-format <logFormat>              Log format (choices: "tsv", "formatted", default: "formatted")
  -o, --out-file <filename>             Override the default path and filename for the output file
  --msi <msiFilename>                   Location of keymandesktop.msi
  --exe <exeFilename>                   Location of setup.exe
  --license <licenseFilename>           Location of license.txt
  --title-image [titleImageFilename]    Location of title image
  --app-name [applicationName]          Installer property: name of the application to be installed (default: "Keyman")
  --start-disabled                      Installer property: do not enable keyboards after installation completes
  --start-with-configuration            Installer property: start Keyman Configuration after installation completes
  -h, --help                            display help for command

Global Options:
  --color                               Force colorization for log messages
  --no-color                            No colorization for log messages; if both omitted, detects from console
  -V, --version                         output the version number
  --no-error-reporting                  Disable error reporting to keyman.com (overriding user settings)
  --error-reporting                     Enable error reporting to keyman.com (overriding user settings)
```

## Analyze Keyboard

```none
Usage: kmc analyze [options] [command]

Options:
  -h, --help                                       display help for command

Global Options:
  -V, --version                                    output the version number
  --no-error-reporting                             Disable error reporting to keyman.com (overriding user settings)
  --error-reporting                                Enable error reporting to keyman.com (overriding user settings)

Commands:
  osk-char-use [options] [infile...]               Analyze On Screen Keyboards for character usage
  osk-rewrite-from-char-use [options] [infile...]  Rewrite On Screen Keyboard files from source mapping; given file.ext, output is written to file-pua.ext
  help [command]                                   display help for command
```

For more information on the purpose of `analyze osk-char-use` and `analyze rewrite-osk-from-char-use`, see [`&displayMap`](/developer/language/reference/displaymap).
