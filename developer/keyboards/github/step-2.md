---
title: Step 2: Organizing the Keyboard Files
---

# Step 2: Organizing the Keyboard Files

## Use one keyboard per folder

As was mentioned earlier ([Preliminary Step: Is Your Keyboard Ready?](step-0)), 
the GitHub repository requires a specific structure for the keyboard files. 
Each keyboard needs to be in its own folder. 
That folder must have the same name as the .kpj file in that folder.

Normally, when it is time to submit the keyboard on GitHub, 
you will drag the folder ("sample1" in the example) to the "release/s" folder on GitHub, 
so that the result is "release/s/sample1". 
Or if you want to use the "experimental" section of the repository, 
you'll aim for the "experimental/s" folder. 

But suppose your keyboard folder starts with a letter that doesn't appear? 
In that case, you'll need to use the folder "s" which contains the "sample1" folder. 
You can drag the "s" folder to the "release" (or "experimental") folder on GitHub, to get the "release/s/sample1" result.

Now let's check our keyboard source files.

## Include these files

The following files should be included for your keyboard in the `source` folder. Some keyboards may have additional source files.

<dl>

<dt>`<keyboard>.kmn`</dt>

<dd>The keyboard source file.</dd>

<dt>`<keyboard>.kvks`</dt>

<dd>The desktop on screen keyboard source (XML) file (if it exists).</dd>

<dt>`<keyboard>.ico` (in the past some keyboards used `<keyboard>.bmp`)</dt>

<dd>The keyboard icon.</dd>

<dt>`<keyboard>.keyman-touch-layout` (in the past some keyboards used `<keyboard>-layout.js`)</dt>

<dd>The touch keyboard definition.</dd>

<dt>`<keyboard>.kps`</dt>

<dd>The package source file. 
See the Keyman Developer [reference](/developer/current-version/guides/distribute/packages) for what to include within the package source file, 
but remember that when you reference any built files within the package, make sure you reference them from your `build` folder.</dd>

<dt>Font and documentation files</dt>

<dd>Any files you reference in the package source .kps file, such as fonts, documentation, should be included in the `source` folder.</dd>

</dl>

## Do not include these files

The following files should **not** be included because they are generated at build time:

<dl>

<dt>`<keyboard>.kmx`</dt>

<dd>The compiled keyboard file for Desktop.</dd>

<dt>`<keyboard>.kmp`</dt>

<dd>The compiled keyboard package file.</dd>

<dt>`<keyboard>.kvk`</dt>

<dd>The compiled (binary) on screen keyboard.</dd>

<dt>`<keyboard>.js`</dt>

<dd>The compiled keyboard file for web and touch platforms.</dd>

</dl>

Once you're done creating and testing your keyboard, you're ready to share the keyboard with us.

[Step 3: Submitting a GitHub Pull Request](step-3 "Step 3: Submitting a GitHub Pull Request")
