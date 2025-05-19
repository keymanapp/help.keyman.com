---
title: Header system stores
---

[`&baselayout` store](../reference/baselayout)
:   Can be tested with `if` to determine the current system hardware
    keyboard layout

[`&Bitmap` store](../reference/bitmap)
:   An image that appears in the language menu

[`&CapsOnOnly` store](../reference/caps)
:   Manages CAPS LOCK behaviour - pressing Caps Lock key only switches
    on Caps Lock state

[`&CapsAlwaysOff` store](../reference/caps)
:   Manages CAPS LOCK behaviour - pressing Caps Lock key has no effect

[`&ShiftFreesCaps` store](../reference/caps)
:   Manages CAPS LOCK behaviour - pressing Shift key turns off Caps Lock

[`&Copyright` store](../reference/copyright)
:   A copyright message for the keyboard

<!-- should we remove EthnologueCode from here?-->
[`&EthnologueCode` store](../reference/ethnologuecode)
:   The ISO 639-3 (formerly SIL Ethnologue) code for the language
    (Deprecated)

[`&Hotkey` store](../reference/hotkey)
:   Sets a default activation hotkey for the keyboard

[`&includecodes` store](../reference/includecodes)
:   Reference an external file for named character constants

[`&keyboardversion` store](../reference/keyboardversion)
:   Specifies the version of the keyboard

[`&kmw_embedcss` store](../reference/kmw_embedcss)
:   Specifies an additional library of CSS code to be embedded in a web
    or touch keyboard

[`&kmw_embedjs` store](../reference/kmw_embedjs)
:   Specifies an additional library of Javascript code to be embedded in
    a web or touch keyboard

[`&kmw_helpfile` store](../reference/kmw_helpfile)
:   Specifies the embedded help html file for web keyboards

[`&kmw_helptext` store](../reference/kmw_helptext)
:   Specifies the embedded help text for web keyboards

[`&kmw_rtl` store](../reference/kmw_rtl)
:   Specifies the directionality of text controls for web keyboards

<!-- should this be removed from this file?-->
[`&Language` store](../reference/language)
:   Specifies the system language to install or associate with the
    keyboard (Deprecated)

[`&layer` store](../reference/layer)
:   Tests or sets the current touch keyboard layer visible on the on
    screen keyboard

[`&layoutfile` store](../reference/layoutfile)
:   Specifies the JSON format touch keyboard layout filename

[`&Message` store](../reference/message)
:   A message that appears when the keyboard is installed

[`&mnemoniclayout` store](../reference/mnemoniclayout)
:   Sets a keyboard to be mnemonic or positional

[`&Name` store](../reference/name)
:   The name of the keyboard

[`&OldCharPosMatching` store](../reference/oldcharposmatching)
:   Turns on the Keyman 5.0 and earlier character position matching (not
    implemented)

[`&platform` store](../reference/platform)
:   Can be tested with `if` to determine current platform keyboard is
    operating on

[`&targets` store](../reference/targets)
:   Specifies the platforms which the compiler will generate outputs for

[`&Version` store](../reference/version)
:   The Keyman keyboard version

[`&VisualKeyboard` store](../reference/visualkeyboard)
:   Specifies the .kvk visual keyboard file associated with the keyboard

<!-- should this be removed from this file?-->
[`&windowslanguages` store](../reference/windowslanguages)
:   Specifies a set of Windows language codes to which the keyboard can
    be associated (Deprecated)

[!NOTE]
**The older header keywords are deprecated and will be not be supported for
keyboards that target Keyman 19.0 or later.
[system stores](stores#toc-system-stores) should be used in place of
header keywords.**
