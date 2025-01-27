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
**Note:** Don't do this yet -- you'll drag files to GitHub in step 3!

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
 For more information on including fonts with your keyboard, see [Including fonts in your keyboard package](#toc-including-fonts-in-your-keyboard-package) below.

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

## Including fonts in your keyboard package

It is possible to include one or more font files in your keyboard package. When installing the keyboard, Keyman also installs the fonts from the package.

If the font is unique to your keyboard, then the files for the font can be included in the "source" folder under your keyboard project folder and included in the keyboard package. (Note that any fonts included in the Keyman keyboards repository need to be licensed so that they can be freely redistributed. We recommend the Open Font License, https://openfontlicense.org)

However, a number of fonts, which are used by multiple keyboards, have been placed in subfolders under a "shared" folder. The Keyman developers can update the fonts in one place and all the keyboards that use those fonts will benefit. If you desire to include one of these shared fonts in your keyboard, we prefer that you access the existing shared font files, rather than include another copy with your keyboard.

If you have the entire repository on your local computer, as is the case for those using the "Advanced" directions, you already have all the shared fonts and you can just access them by navigating to them. But how can you access the shared fonts if you are using the "GitHub" directions?

The answer is to create the portion of the shared folder structure that contains the fonts you need. You'll then be able to reference these files when creating your keyboard package and have the correct path.

Take the example of the "ausephon" keyboard which includes the Charis SIL font files from the shared folder. This would mean creating a folder structure on your computer with:

release/a/ausephon - where the "ausephon" folder contains the files for the "ausephon" keyboard 
release/shared/fonts/sil/charis - where the "charis" folder contains the files for Charis SIL (from https://github.com/keymanapp/keyboards/tree/master/release/shared/fonts/sil/charis)

The purpose of all this is to get the proper path when referencing these "shared" font files from the keyboard package. You won't be including any of the shared font files in your keyboard submission, but the paths to the fonts will be correct because you created the same folder structure used in Keyman's keyboards repository.

When specifying the font files for the keyboard package (on the Packaging tab in Keyman Developer), navigate to the correct subfolder under the "shared" folder ("charis" in this example), so that the package source (.kps) file will have the correct path.

Once you have compiled the keyboard and built the keyboard package successfully, you're ready to move on to submitting your keyboard project folder. (In this example, the "ausephon" folder would be submitted, but the "charis" folder would not be submitted.)
