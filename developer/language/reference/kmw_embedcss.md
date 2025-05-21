---
title: &kmw_embedcss
---

## Summary

The **`&kmw_embedcss`** store specifies an external CSS file that should
be embedded into a compiled web or touch keyboard and applied on load.

## Syntax

```
store(&kmw_embedcss) "filename"
```

### Parameters

`filename`
:   The filename of the CSS file to embed, relative to the keyboard
    file.

## Description

The `&kmw_embedcss` store allows you to specify a CSS file to embed into
a Keyman touch or web keyboard. The CSS file will be dynamically
injected into the page when the keyboard is loaded or activated, and
removed when it is deactivated.

CSS in this stylesheet should be applied carefully. Keyman already
dynamically styles keyboards to target devices, so you should take into
account different devices and styles. Avoid adjusting box models, sizing
or positioning, as these will not translate between different devices.

A good use for a custom stylesheet is to style a specific key or set of keys
differently, to differentiate them from the rest of the keyboard.  See [Class
Names and Identifiers for On-Screen Keyboard and Other KeymanWeb
Elements](/developer/engine/web/current-version/reference/osk/classes) for
useful class-name and ID structure data useful for creating such a stylesheet.

## Examples

### Example: Using `&kmw_embedcss`

```
store(&kmw_embedcss) 'custom-keys.css'
```

## Platforms

The `&kmw_embedcss` store will be used in keyboards on web and touch
platforms. It is ignored on all other platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✘       | ✘     | ✘     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `&kmw_embedcss` store was added in Keyman 9.0.

## See also

- [`&kmw_embedjs` store](kmw_embedjs)
- [Class Names and Identifiers for On-Screen Keyboard and Other KeymanWeb Elements](/developer/engine/web/current-version/reference/osk/classes)
