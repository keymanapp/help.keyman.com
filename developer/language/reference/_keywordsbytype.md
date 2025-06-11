---
title: Keywords by Type
---

## System stores

[`&Bitmap` store, `BITMAP` statement, `BITMAPS` statement](bitmap)
:   An image that appears in the language menu

[`&CapsOnOnly` store, `CAPS ON ONLY` statement](caps)
:   Manages CAPS LOCK behaviour - pressing Caps Lock key only switches
    on Caps Lock state

[`&CapsAlwaysOff` store, `CAPS ALWAYS OFF` statement](caps)
:   Manages CAPS LOCK behaviour - pressing Caps Lock key has no effect

[`&ShiftFreesCaps` store, `SHIFT FREES CAPS` statement](caps)
:   Manages CAPS LOCK behaviour - pressing Shift key turns off Caps Lock

[`&Copyright` store and `COPYRIGHT` statement](copyright)
:   A copyright message for the keyboard

[`&displayMap` store](displaymap)
:   Specifies a mapping file for on screen keyboard display data

[`&EthnologueCode` store](ethnologuecode)
:   The ISO 639-3 (formerly SIL Ethnologue) code for the language
    (Deprecated)

[`&Hotkey` store and `HOTKEY` statement](hotkey)
:   Sets a default activation hotkey for the keyboard

[`&includecodes` store](includecodes)
:   Reference an external file for named character constants

[`&keyboardversion` store](keyboardversion)
:   Specifies the version of the keyboard

[`&kmw_embedcss` store](kmw_embedcss)
:   Specifies an additional library of CSS code to be embedded in a web
    or touch keyboard

[`&kmw_embedjs` store](kmw_embedjs)
:   Specifies an additional library of Javascript code to be embedded in
    a web or touch keyboard

[`&kmw_helpfile` store](kmw_helpfile)
:   Specifies the embedded help html file for web keyboards

[`&kmw_helptext` store](kmw_helptext)
:   Specifies the embedded help text for web keyboards

[`&kmw_rtl` store](kmw_rtl)
:   Specifies the directionality of text controls for web keyboards

[`&Language` store, `LANGUAGE` statement](language)
:   Specifies the system language to install or associate with the
    keyboard (Deprecated)

[`LAYOUT` statement](layout)
:   Windows system layout for the keyboard (Deprecated)

[`&layoutfile` store](layoutfile)
:   Specifies the JSON format touch keyboard layout filename

[`&Message` store and `MESSAGE` statement](message)
:   A message that appears when the keyboard is installed

[`&mnemoniclayout` system store](mnemoniclayout)
:   Sets a keyboard to be mnemonic or positional

[`&Name` store and `NAME` statement](name)
:   The name of the keyboard

[`&OldCharPosMatching` store](oldcharposmatching)
:   Turns on the Keyman 5.0 and earlier character position matching (not
    implemented)

[`&targets` store](targets)
:   Specifies the platforms which the compiler will generate outputs for

[`&Version` store and `VERSION` statement](version)
:   The Keyman keyboard version

[`&VisualKeyboard` store](visualkeyboard)
:   Specifies the .kvk visual keyboard file associated with the keyboard

[`&windowslanguages` store](windowslanguages)
:   Specifies a set of Windows language codes to which the keyboard can
    be associated (Deprecated)

> [!NOTE]
> The older header statements are deprecated and will not be supported for keyboards that target Keyman 19.0 or later. [system stores](stores#toc-system-stores) should be used in place of header keywords.

## Variable system stores

[`&baselayout` store](baselayout)
:   Determines the current system hardware keyboard layout

[`&layer` store](layer)
:   Tests or sets the current touch keyboard layer visible on the on
    screen keyboard

[`&platform` store](platform)
:   Determines the current platform keyboard is operating on

## Rule keywords

[`any()` statement](any)
:   Matches on an array of characters

[`baselayout()` statement](baselayout)
:   Determines the current system hardware keyboard layout

[`beep` statement](beep)
:   Generates a beep on the speaker (or a flash on web devices)

[`call()` statement](call)
:   Calls an Input Method Extension

[`context` statement](context)
:   Outputs the context part of a rule

[`deadkey()`, `dk()` statement](deadkey)
:   Matches and generates deadkeys

[`if()` statement](if)
:   Tests a store or system state for a value

[`index()` statement](index)
:   Outputs from an array of characters

[`layer()` statement](layer)
:   Sets the current touch keyboard layer visible on the on screen
    keyboard

[`notany()` statement](notany)
:   Matches anything not in a particular array of characters

[`nul` statement](nul)
:   Forces no output on a rule, or enforces empty context

[`outs()` statement](outs)
:   Outputs an array of characters

[`platform()` statement](platform)
:   Determines the current platform keyboard is operating on

[`reset()` statement](reset)
:   Resets a store to its initial value

[`return` statement](return)
:   Stops processing of the current keystroke

[`save()` statement](save)
:   Persists a store value for next edit session

[`set()` statement](set)
:   Sets a store or system state to a specific value

[`use()` statement](use)
:   Starts processing in another group

## Structural keywords

[`begin` statement](begin)
:   Defines the starting group for the keyboard layout

[`group()` statement](group)
:   Starts a new group of rules

[`match` rule](match)
:   A system rule that is fired after another rule is matched in the
    same group

[`nomatch` rule](nomatch)
:   A system rule that is fired when no rule is matched in a group

[`store()` statement](store)
:   Defines an array of characters
