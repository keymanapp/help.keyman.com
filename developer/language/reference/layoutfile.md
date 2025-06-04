---
title: &layoutfile
---

## Summary

The **`&layoutfile`** store specifies a touch layout description file to
embed into the keyboard.

## Syntax

```
store(&layoutfile) "layoutFilename"
```

### Parameters

`layoutFilename`
:   The name of the touch layout .JSON file to incorporate into the
    compiled keyboard.

## Description

The `&layoutfile` store specifies a touch layout .JSON file to
incorporate in the Keyman keyboard. If a touch layout is not specified,
then Keyman will build one from the visual keyboard description file
referenced in the [`&visualkeyboard` store](visualkeyboard). If
neither is specified, then Keyman builds a touch layout based on the US
English desktop keyboard layout.

## Examples

### Example: Using `&layoutfile`

```
store(&layoutfile) 'greek.keyman-touch-layout'
```

In Keyman Developer 9.0 and earlier versions, the `&layoutfile` store
referenced a .JSON file with the keyboard id suffixed with -layout.js.
Keyman Developer 10.0 will still compile keyboards that reference the
.JSON .js files, but it is recommended that you rename the layoutfile to
avoid confusing it with the .js compiled Keyman touch layout keyboard.

You can do this by renaming the .js file to the keyboard id suffixed
with .keyman-touch-layout, updating the reference to the file in the
.kmn file, and then loading and saving the .kmn file in Keyman
Developer.

## Platforms

The `&layoutfile` store will be used in touch platforms. It is ignored
on all other platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✘       | ✘     | ✘     | ✘           | ✔          | ✔   | ✔       |

## Version history

The `&layoutfile` store example updated to .keyman-touch-layout
extension in Keyman 10.0

The `&layoutfile` store was added in Keyman 9.0.

## See also

-   [Designing touch layouts with Keyman
    Developer](/developer/current-version/guides/develop/)
-   [`&visualkeyboard` store](visualkeyboard)
-   [`&layer` store](layer)
