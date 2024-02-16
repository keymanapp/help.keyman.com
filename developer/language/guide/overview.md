---
title: Keyman language overview
---
  
The Keyman keyboard programming language is a language designed around
transforming inputs to outputs, through rules rather than through static
tables. Source files have the **.kmn** extension and are text files.

## Line Types

Rules, comments and metadata in Keyman keyboard files are terminated by
the end of a line.

Each line in a keyboard file must be a rule, comment, store, group or
header, or blank.

[Rules](rules)
:   A rule is the basic part of a Keyman keyboard. Each rule defines
    what a keystroke will output, when certain characters are already
    displayed on the screen.

[Comments](comments)
:   A comment is treated as whitespace and the content of comments is
    always ignored by the compiler.

[Stores](stores)
:   A store is a string constant or variable.

[Groups](groups)
:   Rules are organised in groups for processing.

[Headers](headers)
:   Headers, or system stores, provide metadata for the keyboard.

### Illustration of line types

The following snippet illustrates the different types of lines you will
find in a keyboard file:

![Overview of keyboard file line
types](/cdn/dev/img/developer/language/language-overview.png)

## Encoding

The recommended text encoding is UTF-8, although UTF-16 and "ANSI"
(CP-1252) are also supported. A Byte Order Mark should be used for UTF-8
and UTF-16 keyboards, and the development tools will add these
automatically.

Line breaks can be either CRLF or LF.

## Related files

A keyboard file often requires other source files, in a variety of
languages. All these files are optional.

[On Screen Keyboard (.kvk)](/developer/current-version/reference/file-types/kvk)
:   A binary file that determines the visual presentation of a keyboard
    file.

[Touch Layout File (\_layout.js)](/developer/current-version/guides/develop/creating-a-touch-keyboard-layout-for-amharic)
:   A JSON file that determines the presentation and actions of a touch
    layout.

[Icon (.ico, .bmp)](../reference/bitmap)
:   A small picture that is used in the user interface to represent the
    keyboard.

[Embedded CSS](../reference/kmw_embedcss) and [Javascript](../reference/kmw_embedjs)
:   Provide for additional web-specific formatting or logic for the
    keyboard.

[Named character code definition files](../reference/includecodes)
:   Provides character code definitions.

[Help HTML File](../reference/kmw_helpfile)
:   A HTML snippet that can replace the On Screen Keyboard in desktop
    web keyboard files.
