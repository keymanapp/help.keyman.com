---
title: &kmw_helpfile
---

## Summary

The **`&kmw_helpfile`** store specifies an external HTML snippet file
that should be embedded into a compiled web or touch keyboard, and
displayed in place of the on screen keyboard.

## Syntax

```
store(&kmw_helpfile) "filename"
```

### Parameters

`filename`
:   The filename of the HTML file to embed, relative to the keyboard
    file.

## Description

The `&kmw_helpfile` store allows you to specify a HTML file to embed
into a Keyman web keyboard for desktop keyboards. This HTML file should
not include `<head>` or `<body>` tags, as will be a snippet only. On a
desktop browser, the contents of this file will replace the On Screen
Keyboard. It is mutually exclusive with the [`&kmw_helptext`
store](kmw_helptext).

## Examples

### Example: Using `&kmw_helpfile`

```
store(&kmw_helpfile) 'custom-osk.html'
```

## Platforms

The `&kmw_helpfile` store will be used in keyboards on desktop web
platforms. It is ignored on all other platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✘       | ✘     | ✘     | ✔           | ✘          | ✘   | ✘       |

## Version history

The `&kmw_helpfile` store was added in Keyman 7.0.

## See also

-   [`&kmw_helptext` store](kmw_helptext)
