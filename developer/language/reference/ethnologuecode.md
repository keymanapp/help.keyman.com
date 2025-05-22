---
title: &EthnologueCode
---

## Summary

The **`&EthnologueCode`** store specifies the language code a keyboard
is designed for, from the ISO 639-3 standard.

[!NOTE]
**The `&EthnologueCode` store is deprecated and will be not be supported for
keyboards that target Keyman 19.0 or later. Keyboard Package
[metadata](/developer/current-version/reference/file-types/metadata#obj-language)
should be used instead, which is defined by the BCP 47 language code in
the [keyboard
editor](/developer/current-version/context/keyboard-editor#details).**

## Syntax

``` keyman
store(&Ethnologuecode) "code[ code2 [...]]"
```

### Parameters

`code`, `code2`...
:   The ISO 639-3 (formerly Ethnologue) codes for which the keyboard is
    designed.

## Description

The optional `&EthnologueCode` store specifies the language the keyboard
is made for by use of an ISO 639-3 three-letter language code. This
information is intended for use by third-party applications, and is also
used by the compiler to generate metadata for KeymanWeb.

For a list of codes, or more information about Ethnologue, see
[www.ethnologue.com](http://www.ethnologue.com/)
.

Multiple codes can be included by separating them with spaces. You
should not include punctuation between codes. However, for legacy
reasons, applications that process this store should ignore any
punctuation found.

A proposed addition to this field is to add script or country
identifiers as needed.

## Examples

### Example: Using `&ethnologuecode`

```
store(&ethnologuecode) "ice"    c Icelandic
```

## Platforms

The `&ethnologuecode` store can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

Keyman 10.0: The `&Ethnologuecode` store was deprecated.

The `&Ethnologuecode` store was introduced in Keyman 6.0.
