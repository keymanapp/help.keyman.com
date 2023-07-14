---
title:  Use a regular folder structure
---
  
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
    value](/developer/current-version/reference/file-types/tsv.php)
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

`<lexical model>.model_info`
:   a [metadata file](/developer/cloud/model_info) detailing the lexical
    model's origin, version, requirements, and capabilities  
    This file greatly assists the process of making your lexical model
    readily available for public download. Please see the [.model_info
    section](/developer/cloud/model_info) for more details.
