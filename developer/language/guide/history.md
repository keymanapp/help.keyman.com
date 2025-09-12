---
title: Keyman language history
---

## Keyman 3

*   The structure of rules is not backwardly compatible with earlier versions of
    Keyman. The left hand side of the rule changed from being a sequence of
    keystrokes to being a context + single keystroke.
*   [Stores](stores) were introduced.
*   [Long line](long-lines) support

## Keyman 4

*   The `+` character became required, and usage became stricter to follow the
    standard now: the plus character must separate context from keystroke in a
    rule.
*   Keyboards are now compiled by the developer into .kmx files, rather than
    being distributed as .kmn files.

## Keyman 5

*   Added [Unicode support](unicode)
*   Added [Input Method eXtension support](../reference/call)
*   Deprecated [`bitmaps` statement](../reference/bitmap)
*   Deprecated [`language` statement](../reference/language). Note that the
    `language` statement was reintroduced in Keyman 6 with a new meaning
*   Keyman 5.0 added system stores
*   Deprecated [`layout` statement](../reference/layout)

## Keyman 6

*   Added [named character constant](constants) support
*   Added [Ethnologue (ISO 639-3) code](../reference/ethnologuecode) support
*   Added [Mnemonic layouts](../reference/mnemoniclayout) (reworked in Keyman 8
    and 9)
*   Added [Virtual character keys](virtual-keys) to support mnemonic layouts
*   Keyman 6.0 added support for deadkeys and virtual keys in stores
*   Enhanced [`context()` statement](../reference/context) to work on left hand
    side of rule

## Keyman 7

*   Added [`&visualkeyboard` store](../reference/visualkeyboard)
*   Enhanced [`&language` store](../reference/language) to support combined
    codes
*   Added [`notany()` statement](../reference/notany)
*   Added web keyboard support
*   Enhanced [`&bitmap` store](../reference/bitmap) to support .ico format files
*   Added [`&windowslanguages` store](../reference/windowslanguages)
*   Keyman 7.0 extended maximum store length to 4095 characters

## Keyman 8

*   Added [`if()` statement](../reference/if)
*   Added [`set()` statement](../reference/set)
*   Added [`save()` statement](../reference/save)
*   Added [`reset()` statement](../reference/reset)

## Keyman 9

*   Added [touch device support](/developer/current-version/guides/develop/)
*   Added [`&keyboardversion` store](../reference/keyboardversion)
*   Added [`&kmw_embedcss` store](../reference/kmw_embedcss)
*   Added [`platform` statement](../reference/platform)
*   Added [`layer` statement](../reference/layer)
*   Added [`&targets` store](../reference/targets)
*   Enforced requirement that [`use()`](../reference/use) is last statement in a
    rule

## Keyman 10

*   Changed language tags from ISO 639-3 to BCP 47
*   Deprecated [`&ethnologuecode` store](../reference/ethnologuecode)
*   Deprecated [`&language` store](../reference/language)
*   Deprecated [`&windowslanguages` store](../reference/windowslanguages)
*   Left and right modifiers and Caps Lock modifier are supported for Virtual
    Keys in KeymanWeb 10.0 and later
*   Deadkeys now work 100% identically in KeymanWeb 10.0 and Keyman Desktop
    10.0, in particular using multiple deadkeys in a row.

## Keyman 11

*   [`&targets` store](../reference/targets) now supports `linux`
*   .kmn files without BOM are now treated as UTF-8 unless they contain invalid
    UTF-8 sequences

## Keyman 12

*   No language changes.

## Keyman 13

*   Virtual keys no longer need to be in quotes for the
    [`&hotkey`](../reference/hotkey) store

## Keyman 14

*   Added [range expansions](expansions)
*   Added [`&CasedKeys` store](../reference/casedkeys)
*   [Virtual keys](virtual-keys#common-virtual-key-codes) may now be identified
    by ISO9995 key ids (e.g. `+ [SHIFT E01]`)
*   The compiler now enforces order of certain statements in the
    [context part of the rule](rules)
*   [`notany()`](../reference/notany) and [`context()`](../reference/context)
    are now supported together for KeymanWeb, iOS, Android (#3816)
*   [Hangul named constants](constants) were corrected

## Keyman 15

*   [Unicode key identifiers](virtual-keys#virtual-keys-and-touch-layouts) in
    touch layouts can now have multiple characters, e.g. `U_1000_1001`
*   [Casing support](casing-support) is now available for touch layouts,
    including Caps Lock layer, start of sentence support, and double-tap Shift
    for Caps.
*   Added support for [`begin NewContext`](../reference/begin) and [`begin
    PostKeystroke`](../reference/begin) entrypoints
*   Added support for [`readonly` groups](../reference/group)
*   Added support for [`&newLayer` system store](../reference/newlayer) and
    [`&oldLayer` system store](../reference/oldlayer)

## Keyman 16

*   Initial support for [LDML keyboard](/developer/current-version/context/ldml-editor)
    format in compiled files. Note that this is not a change to the Keyman keyboard language.

## Keyman 17

*   Support for [flick and multi-tap gestures](/developer/current-version/context/keyboard-editor#toc-long-press-flicks-and-multitaps-controls)
    in touch layouts
*   Support for additional special key caps in
    [touch layouts](/developer/current-version/reference/file-types/keyman-touch-layout#toc-key-text):
    `*Sp*`, `*NBSp*`, `*NarNBSp*`, `*EnQ*`, `*EmQ*`, `*EnSp*`, `*EmSp*`,
    `*PunctSp*`, `*ThSp*`, `*HSp*`, `*ZWSp*`, `*ZWJ*`, `*WJ*`, `*CGJ*`,
    `*LTRM*`, `*RTLM*`, `*SH*`, `*HTab*`

## Keyman 19

*   Support for decimal, hexadecimal, and octal [character code
    formats](strings) has been removed.
*   Support for [compile targets](compile-targets) has been removed.
*   Validity of store, group, and deadkey names has been tightened (disallowing
    space, comma, non-characters, parentheses, square brackets)
