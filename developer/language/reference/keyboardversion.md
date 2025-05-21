---
title: &keyboardversion
---

## Summary

The **`&keyboardversion`** store documents the version of the keyboard.

## Syntax

```
store(&keyboardversion) "version"
```

### Parameters

`version`
:   The version of the keyboard, in a dotted numeric format. For
    example, `2.0` is a higher version than `1.11`, which is a higher
    version than `1.9.3`.

## Description

The `&keyboardversion` store documents the version of the keyboard.
Keyman uses this on touch platforms to check for updated versions of the
keyboard and update them automatically.

The version string should match as far as possible the package version
string, when a keyboard is included in a package.

**Note:** there is a difference between `&keyboardversion`, which documents
the keyboard version, and [`&version`](version), which determines which
version of Keyman a keyboard will run with.

A keyboard version should be updated whenever there are changes to a
keyboard. A good principle to follow is to increment the major version
number for a keyboard that has significant new functionality, to
increment the minor version number for changes that impact functionality
but not in a significant manner, and optionally to use a third number
for bug fixes.

## Examples

### Example: Using `&keyboardversion`

```
store(&keyboardversion) '1.1.2'
```

## Platforms

The `&keyboardversion` store can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `&keyboardversion` store was added in Keyman 9.0.

## See also

-   [`&version` store](version)
