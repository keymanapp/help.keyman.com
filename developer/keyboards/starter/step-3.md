---
title: Step 3: Organizing the Keyboard Files (deprecated)
---

**Note:** This guide is deprecated. Consider using the [GitHub Keyboard
Submission Guide](../github) instead.

## Use ASCII characters for keyboard base names

Each keyboard in the repository is stored in a folder with the same name
as the base name of the keyboard. The base name of the keyboard can
**only** contain these characters:

-   letters \[`a-z`\] (lower case)
-   digits \[`0-9`\]
-   underscore \[`_`\] (no hyphens `-` which are reserved).

This restriction removes a lot of complexities with dealing with legacy
and cross-platform systems and integrating with the web tools, which use
the base name of the keyboard as a Javascript symbol.

While you may see some existing keyboards which are not named according
to this convention, new keyboards must follow the ASCII naming
convention. This applies to the filename of the keyboard; the
descriptive name (**`store(&name)`**) is a Unicode string, and therefore
can contain any Unicode character.

The keyboard name is used as a key for automatic updates on all
platforms. Do not include the version of the keyboard in the filename,
unless you want to make a new version a completely separate deployment
because it has changed so substantially that users would not want to
update to it automatically. In this situation, a new keyboard name is
probably a wiser choice.

The keyboard name must also be unique in the repository. For less widely
used languages, you may be able to get away with the name of the
language, but for languages with a large number of speakers, there will
probably be more than one keyboard layout, and you will need to be a bit
more creative – “`tamil`” is not going to be a good keyboard name.

## Use one keyboard per folder

In your *keyboards-starter* folder on your hard drive, make folders for
each keyboard you create. In addition to our first sample keyboard name
**sample1**, I'll list an additional sample keyboard **mysample2** to
illustrate how additional keyboards would be made. Using Explorer, we
create the folder structures:

``` none
c:\projects\keyboards-starter\sample1\release
c:\projects\keyboards-starter\mysample2\release
```

Each of your keyboards needs a "release" folder which matches the layout
of the full keyboards repo. When the time comes to submit a keyboard, we
create a Pull Request where we upload the entire "release" folder (1 per
pull request), where it will get merged according to the first letter in
the keyboard base name. Continuing with our sample keyboard names, we
create the additional subfolders:

``` none
c:\projects\keyboards-starter\sample1\release\s\sample1
c:\projects\keyboards-starter\mysample2\release\m\mysample2
```

Down in these folders, we will create our keyboard source files.

## Use a regular folder structure

The folder structure for each keyboard has the following components:

`build\`
:   not stored in the repository; output files will go here

`extras\`
:   other related files, e.g. Word documents, databases, experimental
    files

`source\`
:   keyboard source files, including any files that will be packaged in
    the build

`source\help\<keyboard>.php`
:   php help file which is uploaded to help.keyman.com

`source\welcome\`
:   welcome.htm and any resources referenced from the welcome.htm file

`docs\`
:   development documentation for the keyboard

`<keyboard>.kpj`
:   the Keyman Developer project file for the keyboard  
    The `.kpj` project file will contain references to the keyboard
    `.kmn` and `.kps` file and must set the output path to
    **`$PROJECTPATH\build`**. Do not include the `.kpj.user` file in the
    repository. The file should have the same base name as the
    folder/keyboard.

`README.md`
:   description of the keyboard, target languages, target devices,
    author, etc.

`HISTORY.md`
:   details on major changes to the keyboards (repository commits covers
    detail)

`LICENSE.md`
:   the open source license for the keyboard. This file should include a
    copyright message, including a date or range of dates encompassing
    the timeframe in which the keyboard was first created until the most
    recent version, e.g. `Copyright (C) 2016-2021 K Author`. You may
    choose to add copyright messages to other files, but if you do, you
    may wish to omit the date range in order to reduce unnecessary
    maintenance work when changes to the keyboard are required.

## Copy Template Files

The *keyboards-starter* repo contains a set of `.md` 
files you can copy and fill with details relevant to
your keyboard. They're available at the
**`template/release/t/template/`** folder. The `.md` files use
[Markdown](https://daringfireball.net/projects/markdown/),
an easy-to-read plain text format that can be converted to HTML.

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

Now that you know how to organize the keyboard files, let's learn some
principles for contributing keyboards.

[Step 4: Principles for Contributing Keyboards](step-4)
