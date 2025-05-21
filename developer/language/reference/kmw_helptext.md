---
title: &kmw_helptext
---

## Summary

The **`&kmw_helptext`** store specifies a HTML string that will be
displayed in the footer of the On Screen Keyboard on desktop web
browsers.

## Syntax

```
store(&kmw_helptext) "htmlString"
```

### Parameters

`htmlString`
:   The HTML string to embed, relative to the keyboard file.

## Description

The `&kmw_helptext` store allows you to specify a HTML string that will
be displayed in the footer of the On Screen Keyboard on desktop web
browsers. It is mutually exclusive with the [`&kmw_helpfile`
store](kmw_helpfile).

## Examples

### Example: Using `&kmw_helptext`

```
store(&kmw_helptext) 'For more help, please visit <a href="http://example.com/" target="_blank">example.com</a>'
```

## Platforms

The `&kmw_helptext` store will be used in keyboards on desktop web
platforms. It is ignored on all other platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✘       | ✘     | ✘     | ✔           | ✘          | ✘   | ✘       |

## Version history

The `&kmw_helptext` store was added in Keyman 7.0.

## See also

-   [`&kmw_helpfile` store](kmw_helpfile)
