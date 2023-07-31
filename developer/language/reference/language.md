---
title: &language
---
  
## Summary

The **`&language`** store specifies the Windows system language that a
keyboard should be associated with on install.

## Syntax

```
store(&language) "langcode"
```

### Parameters

`langcode`
:   The Windows language ID to associate the keyboard with on install.
    This can be specified as a single number, hexadecimal, for the
    Windows `LANGID` format, or as a pair of numbers separated by comma,
    for the Windows `PRILANGID, SUBLANGID` format.

## Description

The `&language` store specifies the Windows system language that a
keyboard should be associated with. It is not used on other platforms,
which previously used the [`&ethnologuecode` store](ethnologuecode).

If the specified language is available on the user's system, Keyman
Desktop will install it and register an input method for that language.
The Keyman Desktop keyboard will then be activated whenever the language
is selected using Windows' language selector in the task bar.

The `LANGUAGE` statement and the `&language` store are deprecated, and
the Keyboard Package
[metadata](/developer/current-version/reference/file-types/metadata#obj-language)
should be used to define the language data instead.

[Microsoft language identifier
reference](http://msdn2.microsoft.com/en-us/library/ms776294.aspx){.ulink
target="_blank"}

## Examples

### Example: Using `&language`

```
store(&language) "x401"  c Use this keyboard with the Arabic locale
```

```
store(&language) "9, 1"  c Use this keyboard with the US English locale
```

## Version history

Keyman 10.0: The `&language` store was deprecated.

In Keyman 8.0, the language association is used in editions of Keyman.

Keyman 7.0: Added support for single value `LANGID` format.

In Keyman 7.0, the `&language` store was used only by Professional
Edition.

Keyman 5.0: Added `&language` store and deprecated `LANGUAGE` statement.

The `LANGUAGE` statement was introduced in Keyman 4.0.

## Platforms

The `&language` store is used on the following platforms. It will be
ignored on all other platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✘     | ✘     | ✘           | ✘          | ✘   | ✘       |

## See also

-   [`&ethnologuecode` store](ethnologuecode)
-   [`&windowslanguages` store](windowslanguages)
