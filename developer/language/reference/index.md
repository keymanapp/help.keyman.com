---
title: Keyman Keyboard Language Reference
---

[`any()` statement](any "any() statement")
:   Matches on an array of characters

[`&baselayout` store](baselayout "&baselayout store")
:   Determines the current system hardware keyboard layout

[`baselayout()` statement](baselayout "baselayout() statement")
:   Determines the current system hardware keyboard layout

[`beep` statement](beep "beep statement")
:   Generates a beep on the speaker (or a flash on web devices)

[`begin` statement](begin "begin statement")
:   Defines the starting group for the keyboard layout

[`&Bitmap` store, `BITMAP` statement, `BITMAPS` statement](bitmap "&Bitmap store and BITMAP statement")
:   An image that appears in the language menu

[`call()` statement](call "call() statement")
:   Calls an Input Method Extension

[`&CapsAlwaysOff` store, `CAPS ALWAYS OFF` statement](caps "Caps Lock stores and statements")
:   Manages CAPS LOCK behaviour - pressing Caps Lock key has no effect

[`&CapsOnOnly` store, `CAPS ON ONLY` statement](caps "Caps Lock stores and statements")
:   Manages CAPS LOCK behaviour - pressing Caps Lock key only switches
    on Caps Lock state

[`&CasedKeys` store](casedkeys)
:   Defines a range of virtual keys affected by Caps Lock

[`context` statement](context "context statement")
:   Outputs the context part of a rule

[`&Copyright` store and `COPYRIGHT` statement](copyright "&Copyright store and COPYRIGHT statement")
:   A copyright message for the keyboard

[`deadkey()`, `dk()` statement](deadkey "deadkey(), dk() statement")
:   Matches and generates deadkeys

[`&displayMap` store](displaymap)
:   Specifies a mapping file for on screen keyboard display data

[`&EthnologueCode` store](ethnologuecode "&EthnologueCode store")
:   The ISO 639-3 (formerly SIL Ethnologue) code for the language
    (Deprecated)

[`group()` statement](group "group() statement")
:   Starts a new group of rules

[`&Hotkey` store and `HOTKEY` statement](hotkey "&Hotkey store and HOTKEY statement")
:   Sets a default activation hotkey for the keyboard

[`&includecodes` store](includecodes "&includecodes store")
:   Reference an external file for named character constants

[`if()` statement](if "if() statement")
:   Tests a store or system state for a value

[`index()` statement](index "index() statement")
:   Outputs from an array of characters

[`&keyboardversion` store](keyboardversion "&keyboardversion store")
:   Specifies the version of the keyboard

[`&kmw_embedcss` store](kmw_embedcss "&kmw_embedcss store")
:   Specifies an additional library of CSS code to be embedded in a web
    or touch keyboard

[`&kmw_embedjs` store](kmw_embedjs "&kmw_embedjs store")
:   Specifies an additional library of Javascript code to be embedded in
    a web or touch keyboard

[`&kmw_helpfile` store](kmw_helpfile "&kmw_helpfile store")
:   Specifies the embedded help html file for web keyboards

[`&kmw_helptext` store](kmw_helptext "& store")
:   Specifies the embedded help text for web keyboards

[`&kmw_rtl` store](kmw_rtl "&kmw_rtl store")
:   Specifies the directionality of text controls for web keyboards

[`&Language` store, `LANGUAGE` statement](language "&Language store, LANGUAGE statement")
:   Specifies the system language to install or associate with the
    keyboard (Deprecated)

[`&layer` store](layer "&layer store")
:   Tests or sets the current touch keyboard layer visible on the on
    screen keyboard

[`layer()` statement](layer "layer() statement")
:   Sets the current touch keyboard layer visible on the on screen
    keyboard

[`LAYOUT` statement](layout "LAYOUT statement")
:   Windows system layout for the keyboard (Obsolete)

[`&layoutfile` store](layoutfile "&layoutfile store")
:   Specifies the JSON format touch keyboard layout filename

[`match` rule](match "match rule")
:   A system rule that is fired after another rule is matched in the
    same group

[`&Message` store and `MESSAGE` statement](message "&Message store and MESSAGE statement")
:   A message that appears when the keyboard is installed

[`&mnemoniclayout` system store](mnemoniclayout "&mnemoniclayout store")
:   Sets a keyboard to be mnemonic or positional

[`&Name` store and `NAME` statement](name "&Name store and NAME statement")
:   The name of the keyboard

[`&newLayer` store](newlayer)
:   Reports on which layer the current touch keyboard has recently changed to
    in a `PostContext` process

[`nomatch` rule](nomatch "nomatch rule")
:   A system rule that is fired when no rule is matched in a group

[`notany()` statement](notany "notany() statement")
:   Matches anything not in a particular array of characters

[`nul` statement](nul "nul statement")
:   Forces no output on a rule, or enforces empty context

[`&OldCharPosMatching` store](oldcharposmatching "&OldCharPosMatching store")
:   Turns on the Keyman 5.0 and earlier character position matching (not
    implemented)

[`&oldLayer` store](oldlayer)
:   Reports on which layer the current touch keyboard has recently changed
    from in a `PostContext` process

[`outs()` statement](outs "outs() statement")
:   Outputs an array of characters

[`&platform` store](platform "&platform store")
:   Determines the current platform keyboard is operating on

[`platform()` statement](platform "platform() statement")
:   Determines the current platform keyboard is operating on

[`reset()` statement](reset "reset() statement")
:   Resets a store to its initial value

[`return` statement](return "return statement")
:   Stops processing of the current keystroke

[`save()` statement](save "save() statement")
:   Persists a store value for next edit session

[`set()` statement](set "set() statement")
:   Sets a store or system state to a specific value

[`&ShiftFreesCaps` store, `SHIFT FREES CAPS` statement](caps "Caps Lock stores and statements")
:   Manages CAPS LOCK behaviour - pressing Shift key turns off Caps Lock

[`store()` statement](store "store() statement")
:   Defines an array of characters

[`&targets` store](targets "&targets store")
:   Specifies the platforms which the compiler will generate outputs for

[`use()` statement](use "use() statement")
:   Starts processing in another group

[`&Version` store and `VERSION` statement](version "&Version store and VERSION statement")
:   The Keyman keyboard version

[`&VisualKeyboard` store](visualkeyboard "& store")
:   Specifies the .kvk visual keyboard file associated with the keyboard

[`&windowslanguages` store](windowslanguages "&windowslanguages store")
:   Specifies a set of Windows language codes to which the keyboard can
    be associated (Deprecated)

## See also

-   [Keywords by type](_keywordsbytype)
-   [Keyman keyboard language guide](../guide)
