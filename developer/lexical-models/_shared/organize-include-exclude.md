## Include these files
  
The following files should be included for your lexical model in the
**`source`** folder. Some lexical models may have additional source
files:

`<lexical model>.model.ts`
:   The lexical model source file.

`<wordlist>.tsv`
:   The wordlist used for your lexical model.

`<lexical model>.kps`
:   The package source file. See the Keyman Developer
    [reference](/developer/current-version/guides/lexical-models/distribute/tutorial)
    for what to include within the package source file. Remember that
    when you reference any built files within the package, make sure you
    reference them from your **`build`** folder.

Documentation files
:   Any files you reference in the package source .kps file, such as
    documentation, should be included in the **`source`** folder.

## Do not include these files

The following files should **`not`** be included because they are
generated at build time:

`<lexical model>.js`
:   The compiled lexical model file.

`<lexical model>.kmp`
:   The compiled lexical model package file.
