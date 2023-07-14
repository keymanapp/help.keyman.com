---
title: &version
---
  
## Summary

The **`&version`** store determines the Keyman version which the
keyboard will target.

## Syntax

```
store(&version) "version"
```

### Parameters

`version`
:   The version of Keyman to target. This can be `5.0`, `6.0`, `7.0`,
    `8.0` or `9.0`.

## Description

The `&version` store allows Keyman to easily distinguish what version of
Keyman the keyboard was written for and handle it accordingly. The
`&version` store is required. For new keyboards, use `9.0` as the
version number.

The keyboard version is used by Keyman Desktop for Windows. Versioning
on other platforms generally matches the current 9.0 feature set.

The `VERSION` statement is deprecated, instead use the `&version` store.

## Examples

### Example: Using `&version`

```
store(&version) '9.0'
```

## Platforms

The `&version` store can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `VERSION` statement was introduced in Keyman 3.0.

The `&version` store was added in Keyman 5.0.

Each subsequent version of Keyman updates the maximum store value
accordingly to its major version.

## See also

-   [`&keyboardversion` store](keyboardversion.php)
