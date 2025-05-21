---
title: &visualkeyboard
---

## Summary

The **`&visualkeyboard`** store specifies an On Screen Keyboard source
file to generate the On Screen Keyboard.

## Syntax

```
store(&visualkeyboard) "visualkeyboardname"
```

### Parameters

`visualkeyboardname`
:   The name of the On Screen Keyboard
    [.kvks](../../10.0/reference/file-types/kvks) source file to
    reference in the compiled keyboard.

## Description

The `&visualkeyboard` store specifies a .kvks file to reference in the
compiled Keyman keyboard. The .kvks (XML format) is compiled into a .kvk
binary On Screen Keyboard which needs to be distributed with the .kmx.

However, for web and touch keyboards, the .kvks file is embedded into
the compiled keyboard .js file. The .kvk file does not need to be
distributed for these platforms.

## Examples

### Example: Using `&visualkeyboard`

```
store(&visualkeyboard) 'greek.kvks'
```

In Keyman Developer 9.0 and earlier versions, the `&visualkeyboard`
store referenced a binary .kvk file. Keyman Developer 10.0 will still
compile keyboards that reference the binary .kvk files, but it is
recommended that you update to using a .kvks file. You can do this by
renaming the .kvk file to .kvks, updating the reference to the file in
the .kmn file, and then loading and saving the .kmn file in Keyman
Developer.

## Platforms

The `&visualkeyboard` store is used in all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `&visualkeyboard` store changed from .kvk to .kvks in Keyman 10.0.

The `&visualkeyboard` store was added in Keyman 8.0.

## See also

-   [`&layoutfile` store](layoutfile)
