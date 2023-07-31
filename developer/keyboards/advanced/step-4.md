---
title: Step 4: Organizing the Keyboard Files
---
  
## Use one keyboard per folder

### Create a Git branch

When working with several keyboards at the same time, separate each
keyboard on different Git branches. We recommend naming each branch with
its keyboard name. From the Git Bash command prompt, we create and
checkout a Git branch named after the sample keyboard **sample1**. The
desktop and touch layout keyboards for **sample1** can be in the same
folder on the same Git branch. (If we were also working on a second
keyboard named **mysample2**, that would go on a Git branch named
**mysample2**).

``` bash
cd /c/projects/keyboards
git checkout -b sample1 master
```

### Related Keyboards in a Package

If you have a set of related keyboards, these can be deployed together
in a single keyboard package and included on the same Git branch.
However, in the keyboards repository, each keyboard is configured in its
own folder, and the combined package can be included as a separate
target in the **`release/packages`** top-level folder.

For example, if you have two keyboards for an **`xyz`** language where
one uses a Latin script and another Arabic script, they could be in a
package folder **`xyz`**:

``` code
c:\projects\keyboards\release\xyz\xyz_arabic\
c:\projects\keyboards\release\xyz\xyz_latin\
```

### A Single Keyboard Folder (No Package)

In your **keyboards** folder on your hard drive, use Explorer to make a
folder for the keyboard you're creating:

``` none
c:\projects\keyboards\release\s\sample1\
```

Your keyboard needs to be in the "release" folder according to the first
letter of the keyboard name because this matches the layout of the full
keyboards repo.

Now that we've created a folder for our keyboard, we will create our
keyboard source files.

## Include these files

The following files should be included for your keyboard in the
**`source`** folder. Some keyboards may have additional source files:

`<keyboard>.kmn`
:   The keyboard source file.

`<keyboard>.kvks`
:   The desktop on screen keyboard source (XML) file (if it exists).

`<keyboard>.ico (or .bmp)`
:   The keyboard icon.

`<keyboard>.keyman-touch-layout or <keyboard>-layout.js`
:   The touch keyboard definition.

`<keyboard>.kps`
:   The package source file. See the Keyman Developer
    [reference](/developer/current-version/guides/distribute/packages)
    for what to include within the package source file, but remember
    that when you reference any built files within the package, make
    sure you reference them from your **`build`** folder.

Font and documentation files
:   Any files you reference in the package source .kps file, such as
    fonts, documentation, should be included in the **`source`** folder.

## Do not include these files

The following files should **`not`** be included because they are
generated at build time:

`<keyboard>.kmx`
:   The compiled keyboard file for Desktop.

`<keyboard>.kmp`
:   The compiled keyboard package file.

`<keyboard>.kvk`
:   The compiled (binary) on screen keyboard.

`<keyboard>.js`
:   The compiled keyboard file for web and touch platforms.

Once you're done creating and testing your keyboard, you're ready to
share the keyboard with us.

[Step 5: Submitting a GitHub Pull Request](step-5)
