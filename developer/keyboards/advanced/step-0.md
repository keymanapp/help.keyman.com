---
title: Preliminary Step: Is Your Keyboard Ready?
---
  
## Folder and File Structure and Naming

The files for each keyboard are organized in a specific fashion to make
it possible for the keyboards to be built automatically. If you are
using Keyman Developer (version 11 or later), you can select "New
Project" from the "Project" menu, then "Basic" and Keyman Developer will
help you create folder and file names that meet the following
requirements.

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
    recent version, e.g. `Copyright (C) 2016-2021 K Author`. The license
    text must be copied verbatim from the [MIT license](https://github.com/keymanapp/keyboards/blob/master/release/template/LICENSE.md)
    and may not be modified in any way.
    
    You may choose to add copyright messages to other files, but if you do, 
    you may wish to omit the date range in order to reduce unnecessary
    maintenance work when changes to the keyboard are required.

## Copy Template Files

If you used "Project", "New Project", "Basic" as mentioned above, Keyman
Developer will have created files in your keyboard project folder
similar to those mentioned in the next paragraph, so you can skip that
step because you won't need to copy them.

The **keyboards** repo contains a set of `.md` 
files you can copy and fill with details relevant to your keyboard.
They're available at the **`release/template/`** folder. The `.md` files
use
[Markdown](https://daringfireball.net/projects/markdown/),
an easy-to-read plain text format that can be converted to HTML.

## Contributing keyboards

We do have a baseline for accepting contributed keyboards. While we can
work with you on getting your keyboards ready, you can ease the process
dramatically by following the guidelines we’ve already written.

These design patterns and requirements assume some knowledge of Keyman
Developer and Keyman keyboard development. Keyman Developer is
downloadable from
[https://keyman.com/developer](https://keyman.com/developer),
and the documentation is online at
[https://help.keyman.com/developer](https://help.keyman.com/developer).

## Designing your keyboard layout

Use the documentation links above to learn how to create keyboard
layouts; [read the
tutorials](https://help.keyman.com/developer/current-version/guides/),
[our blog](https://blog.keyman.com/category/developing-keyboards/); the
[Keyboard Quality
Whitepaper](/developer/whitepaper1.1.pdf) (desktop
focused keyboards) will be helpful for learning how to develop your
keyboards and documentation to a high standard.

You can create a single keyboard layout that targets both desktop/laptop
computers and phone/tablet touch devices. We encourage you to develop
new keyboard layouts that target all devices.

## Set keyboard project output path

The Keyman keyboards repository is organized so that each keyboard
builds into its own **build\\** folder. With your keyboard project open
in Keyman Developer, set the project output path through the menu:

Project --&gt; Project Settings...

![](/cdn/dev/img/developer/keyboards/project-settings.png)

## Assigning an open source license

When you share your keyboard with the world, you will need to assign a
specific [open source
license](https://opensource.org/licenses). There are
hundreds of prewritten licenses, but for keyboards to be included in
this repository, you must use the MIT license:

MIT license
:   A permissive license that is short and to the point. It lets people
    do anything with your code with proper attribution and without
    warranty.

The MIT license is explored in detail at
[choosealicense.com](https://choosealicense.com/licenses/),
from which the description above was taken.

In Step 1 we'll get set up for making a submission to the Keyman
keyboards repository.

[Step 1: Setup - One Time Only](step-1)
