---
title: &includecodes
---

## Summary

The **`&includecodes`** store imports an external file of character
constants.

## Syntax

```
store(&includecodes) "filename"
```

### Parameters

`filename`
:   The file to import, relative to keyboard source path.

## Description

The `&includecodes` store allows you to reference an external file for
[named character constants](../guide/constants). Keyman Developer
includes unicodedata.txt, which lists all the named Unicode characters -
as of version 17.0, it includes all the Unicode 15.1 characters.

The file format is based on unicodedata.txt. Fields are delimited by
semicolon (;) and only the first two fields are used by Keyman
Developer.

Constants referenced in the file can be used with the `$` prefix in your
keyboard source.

``` none
####;CONSTANT_NAME;additional data
```

`####`
:   A 4-6 digit Unicode character value, e.g. 0061, for 'a'

`CONSTANT_NAME`
:   A case insensitive name. Characters allowed are `A-Z`, `0-9`, space
    and underscore (`_`). Note that space will be converted to
    underscore (`_`) by Keyman Developer when the file is imported.

`additional data`
:   Ignored by Keyman Developer.

## Example

The following example shows an inline constant.

```
store(CCedilla) U+00E7
+ [RALT K_C] > $CCedilla
```

The same inline constant can be placed in a separate text file:

``` none
00E7;CCEDILLA
```

This file is then referenced in the keyboard source:

```
store(&includecodes) "codes.txt"
+ [RALT K_C] > $CCedilla
```

## Platforms

The `&includecodes` store can be used in keyboards for all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `&includecodes` statement was introduced in Keyman 5.0.
