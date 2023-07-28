---
title: &windowslanguages
---
  
## Summary

The **`&windowslanguages`** store specifies a list of alternate
languages that a Keyman keyboard works with in Windows.

## Syntax

```
store(&windowslanguages) "code [code ...]"
```

### Parameters

`code`
:   The identifier of the language to reference. This can be specified
    as a single number, hexadecimal, for the Windows `LANGID` format.

## Description

The `&windowslanguages` store specifies additional Windows system
languages that a keyboard may be associated with. It is not used on
other platforms, which instead use the [`&ethnologuecode`
store](ethnologuecode.php).

[Microsoft language identifier
reference](http://msdn2.microsoft.com/en-us/library/ms776294.aspx){.ulink
target="_blank"}

## Examples

### Example: Using `&windowslanguages`

```
store(&windowslanguages) 'x0409 x0809'
```

## Platforms

The `&windowslanguages` store is used only in Windows platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✘     | ✘     | ✘           | ✘          | ✘   | ✘       |

## Version history

Keyman 10.0: The `&windowslanguages` store was deprecated.

The `&windowslanguages` store was added in Keyman 8.0.

## See also

-   [`&language` store](language)
