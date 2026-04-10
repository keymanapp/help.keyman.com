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
Keyman uses this to check for updated versions of the keyboard and update 
them automatically.

Generally, this version string should also be used by the distribution 
package, by setting the `FollowKeyboardVersion` option in the package
properties.

**Note:** there is a difference between `&keyboardversion`, which documents
the keyboard version, and [`&version`](version), which determines which
version of Keyman a keyboard will run with.

The keyboard version must be updated whenever there are changes to a
keyboard.

A good principle to follow is to increment the major version number for a 
keyboard that has significant new functionality, to increment the minor 
version number for changes that impact functionality but not in a 
significant manner, and optionally to use a third number for bug fixes.
This pattern is similar to the [semantic versioning](https://semver.org) 
model.

The version string may only include digits (`0123456789`) and period (`.`).
Each component is treated as an integer (leading zeros, such as `2.01`, are 
not sigificant and should be avoided to prevent confusion).

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
