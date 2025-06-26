---
title: &kmw_embedjs
---

## Summary

The **`&kmw_embedjs`** store specifies an external JavaScript file that
should be embedded into a compiled web or touch keyboard.

## Syntax

```
store(&kmw_embedjs) "filename"
```

### Parameters

`filename`
:   The filename of the JavaScript file to embed, relative to the
    keyboard file.

## Description

The `&kmw_embedjs` store allows you to specify a JavaScript file to
embed into a Keyman touch or web keyboard. This is typically used with
the [`call()` statement](call).

The code is wrapped in a closure, and global variables should be
avoided.

## Examples

### Example: Using `&kmw_embedjs`

```
store(&kmw_embedjs) 'custom-imx.js'
```

## Platforms

The `&kmw_embedjs` store will be used in keyboards on web and touch
platforms. It is ignored on all other platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✘       | ✘     | ✘     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `&kmw_embedjs` store was added in Keyman 7.0.

## See also

-   [`&kmw_embedcss` store](kmw_embedcss)
