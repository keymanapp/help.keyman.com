---
title: &message
---

## Summary

The **`&message`** store provides a generic notice that will be
displayed when a keyboard is installed.

## Syntax

```
store(&message) "messageText"
```

### Parameters

`messageText`
:   A message to be displayed to the end user when the keyboard is
    installed.

## Description

This is a generic message, such as a shareware notice that you can
display when the keyboard is installed. This statement is optional.

[!NOTE]
**The `MESSAGE` statement is deprecated and will be not be supported for
keyboards that target Keyman 19.0 or later. Instead use the `&message`
store.**

## Examples

### Example: Using `&message`

```
store(&message) "This keyboard is freely redistributable."
```

## Platforms

The `&message` statement can be used in keyboards on all platforms, but
will be displayed only on the following platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
|    ✔   |   ✔   |   ✘   |      ✘     |     ✘      | ✘  |    ✘   |

## Version history

The `&message` store was introduced in Keyman 5.0.

The `MESSAGE` statement was introduced in Keyman 5.0.
