---
title: Preliminary Step: Is Your Lexical Model Ready?
---
  
## Folder and File Structure and Naming

The files for each lexical model are organized in a specific fashion to
make it possible for the lexical models to be built automatically. In
Keyman Developer (version 12 or later), you can select "New Project"
from the "Project" menu, then "Wordlist Lexical Model" and Keyman
Developer will help you create folder and file names that meet the
following requirements.

## Use ASCII characters for lexical model base names

Each lexical model in the repository is stored in a folder with the name
comprising of author, BCP 47 tag, and unique identifier. The unique
identfier can **only** contain these characters:

-   letters \[`a-z`\] (lower case)
-   digits \[`0-9`\]

This restriction removes a lot of complexities with dealing with legacy
and cross-platform systems and integrating with the web tools, which use
the base name of the lexical model as a Javascript symbol.

The lexical model name is used as a key for automatic updates on all
platforms. Do not include the version of the lexical model in the
filename.

## Use a regular folder structure

The folder structure for each lexical model has the following
components:

`build\`
:   not stored in the repository; output files will go here

`extras\`
:   other related files, e.g. scripts to format wordlists

`source\`
:   lexical model source files, including any files that will be
    packaged in the build

`source\readme.htm`
:   readme.htm and any resources referenced from the readme.htm file.
    This is a short description of the package, its use restrictions,
    and what it includes. Starting in Keyman 13, some of the Keyman apps
    will display this readme.htm in a view for the user to confirm
    lexical model package installation.

`source\welcome.htm`
:   welcome.htm and any resources referenced from the welcome.htm file.
    This introductory help file will be detected and displayed during
    lexical model package installation. It is also available on the
    Model Information page.

`source\<wordlist>.tsv`
:   wordlist source file, in columns for words, counts, and comments.
    This is a [tab-separated
    value](/developer/current-version/reference/file-types/tsv)
    file.

`<lexical-model>.kpj`
:   the Keyman Developer project file for the lexical model  
    The `.kpj` project file will contain references to the lexical model
    `.ts` and `.tsv` files and must set the output path to
    **`$PROJECTPATH\build`**. Do not include the `.kpj.user` file in the
    repository. The file should have the same base name as the
    folder/lexical model.

`README.md`
:   description of the lexical model, target languages, credits, author,
    etc.

`HISTORY.md`
:   details on major changes to the lexical model (repository commits
    covers detail)

`LICENSE.md`
:   the open source license for the lexical model

## Contributing lexical models

We do have a baseline for accepting contributed lexical models. While we
can work with you on getting your lexical model ready, you can ease the
process dramatically by following the guidelines we’ve already written.

These design patterns and requirements assume some knowledge of Keyman
Developer and Keyman lexical model development. Keyman Developer is
downloadable from
[https://keyman.com/developer](https://keyman.com/developer),
and the documentation is online at
[https://help.keyman.com/developer/current-version/guides/lexical-models/tutorial](../../current-version/guides/lexical-models/tutorial).

## Set lexical model project output path

The Keyman lexical models repository is organized so that each lexical
model builds into its own **build\\** folder. With your lexical model
project open in Keyman Developer, set the project output path through
the menu:

Project --&gt; Project Settings...

![](/cdn/dev/img/developer/keyboards/project-settings.png)

## Assigning an open source license

When you share your lexical model with the world, you will need to
assign a specific [open source
license](https://opensource.org/licenses). There are
hundreds of prewritten licenses, but for lexical models to be included
in this repository, you must use the MIT license:

MIT license
:   A permissive license that is short and to the point. It lets people
    do anything with your code with proper attribution and without
    warranty.

The MIT license is explored in detail at
[choosealicense.com](https://choosealicense.com/licenses/),
from which the description above was taken.

In Step 1 we'll get set up for making a submission to the Keyman
lexical-models repository.

[Step 1: Setup - One Time Only](step-1)
