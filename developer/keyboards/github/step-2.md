---
title: Step 2: Organizing the Keyboard Files
---
## Use one keyboard per folder

As was mentioned earlier ([Preliminary Step: Is Your Keyboard Ready?](step-0)), 
the GitHub repository requires a specific structure for the keyboard files. 
Each keyboard needs to be in its own folder. 
That folder must have the same name as the .kpj file in that folder.

When it is time to submit the keyboard on GitHub, you will need to place it in a
specific folder. For the example "sample1", it would need to go into a "release/s" folder,
so that the result is "release/s/sample1". Or if you want to use the "experimental"
section of the repository, you'll aim for the "experimental/s" folder. 
**Note:** Don't do this yet -- you'll drag files to GitHub in the step 3!

But suppose your keyboard folder starts with a letter that doesn't appear? 
In that case, you'll need to create a folder called "s" which contains the "sample1" folder. 
Then, in step 3, you will drag the "s" folder to the "release" (or "experimental") folder on
GitHub, to get the "release/s/sample1" (or "experimental/s/sample") result.

Now let's check our keyboard source files.

## Include these files

The following files should be included for your keyboard in the `source` folder. Some keyboards may have additional source files.
In this list, `xyz` represents the keyboard name (which will also be the name of the folder in which the `source` folder is located).

`xyz.kmn`
 : The keyboard source file.

`xyz.kvks`
 : The desktop on screen keyboard source (XML) file (if it exists).

`xyz.ico` (in the past some keyboards used `xyz.bmp`)
 : The keyboard icon.

`xyz.keyman-touch-layout` (in the past some keyboards used `xyz-layout.js`)
 : The touch keyboard definition.

`xyz.kps`
 : The package source file. 
See the Keyman Developer [reference](/developer/current-version/guides/distribute/packages) for what to include within the package source file, 
but remember that when you reference any built files within the package, make sure you reference them from your `build` folder.

Font and documentation files
 : Any files you reference in the package source .kps file, such as fonts, documentation, should be included in the `source` folder.

## Do not include these files

The following files should **not** be included in the `source` folder because they are generated at build time:

`xyz.kmx`
 : The compiled keyboard file for Desktop.

`xyz.kmp`
 : The compiled keyboard package file.

`xyz.kvk`
 : The compiled (binary) on screen keyboard.

`xyz.js`
 : The compiled keyboard file for web and touch platforms.

Once you're done creating and testing your keyboard, you're ready to share the keyboard with us.

[Step 3: Submitting a GitHub Pull Request](step-3 "Step 3: Submitting a GitHub Pull Request")
