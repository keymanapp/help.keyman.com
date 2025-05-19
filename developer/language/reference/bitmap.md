---
title: &bitmap
---

## Summary

The **`&bitmap`** store defines an icon which is used in the user
interface to indicate that the keyboard is active.

## Syntax

```
store(&bitmap) "filename"
```

### Parameters

`filename`
:   The filename, relative to the keyboard source, of the bitmap or icon
    file to use.

## Description

The bitmap can be in two different formats: .bmp or .ico. A .bmp file
must be a 16x16 image. Keyman supports .ico files with multiple image
sizes, and the appropriate size will be used if available. (For HiDPI
screens on Windows, two image sizes is sufficient for up to 300%
scaling: 16x16 and 48x48.) The .ico format also supports full alpha
transparency.

Specify the full filename, including the file extension, in quotes. If
the icon is in a different folder, then use a relative path to reference
it.

The `&bitmap` store is not required. A generic keyboard icon will be
displayed if no bitmap is specified.

[!NOTE]
**The older `BITMAP` and `BITMAPS` header statements are deprecated and
will be not be supported for keyboards that target Keyman 19.0 or later.**

## Examples

### Example: Using `&bitmap`

```
store(&bitmap) "keyboard.ico"
```

## Platforms

The `&bitmap` store is used on the following platforms. It is ignored on
all other platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✔     | ✔     | ✘           | ✘          | ✘   | ✘       |

## Version history

Keyman 9: Hi DPI support, including .ico files with multiple
resolutions.

Keyman 8: Added support for .ico files.

Keyman 7: A generic keyboard icon is displayed if no bitmap is specified
for the keyboard.

Keyman 5: Added the `&bitmap` store, and made optional.

Keyman 4: Added the `BITMAP` header statement.

Keyman 3: Added the `BITMAPS` header statement was introduced.
