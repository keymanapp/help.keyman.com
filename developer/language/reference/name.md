---
title: &name
---

## Summary

The **`&name`** store specifies the name of the keyboard presented in
the user interface.

## Syntax

```
store(&name) "nameText"
```

### Parameters

`nameText`
:   The name of the keyboard to be presented to the user.

## Description

The `&name` store lets you give a more descriptive name to your keyboard
than just the file name. If `&name` isn't specified in the keyboard
file, Keyman will use the filename of the keyboard, excluding the
extension, so the `&name` statement is optional.

If a name is specified in the keyboard file, care should be taken to
ensure that you give it an easily recognisable and unique name. For
example, rather than call your keyboard `"Dutch"`, which may confuse
users who may have a system Dutch keyboard already installed, you could
call your keyboard `"Dan's Dutch"` or `"Double Dutch"`.

[!NOTE]
**The `NAME` statement is deprecated and will be not be supported for
keyboards that target Keyman 19.0 or later. Instead use the `&name`
store.**

## Examples

### Example: Using `&name`

```
store(&name) "Double Dutch"
```

## Platforms

The `&name` store can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `&name` store was introduced in Keyman 5.0.

The `NAME` statement was introduced in Keyman 3.0.
