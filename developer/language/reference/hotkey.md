---
title: &hotkey
---

## Summary

The **`&hotkey`** store defines a default hotkey that can be used to
switch on the keyboard.

## Syntax

```
store(&hotkey) virtualKey
```

### Parameters

`virtualKey`
:   A virtual key format key code, including square brackets. See format
    note below for versions 12.0 and earlier.

The `&hotkey` store specifies the hotkey that Keyman will use to turn
the keyboard on. When this hotkey is pressed, any active keyboard will
be turned off and the new keyboard will be turned on. The hotkey must be
enclosed in square brackets.

The hotkey can be any standard, non-modifier key, with any combination
of the Shift, Control and Alt keys also pressed. Only `SHIFT`, `CTRL`
and `ALT` modifiers are permitted.

The `&hotkey` store is optional.

Note that the default hotkey can be changed by a user after a keyboard
is installed. Don't rely on it never changing in any documentation that
you include with the keyboard.

[!NOTE]
**The older `HOTKEY` statement is deprecated and will be not be supported for
keyboards that target Keyman 19.0 or later.**

## Format Note

In Keyman Developer 12.0 and earlier, the `virtualKey` parameter had to
be enclosed in both quotes and square brackets. As of Keyman Developer
13.0, the quotes are no longer required.

## Examples

### Example: Using `&hotkey`

```
store(&hotkey) [ALT SHIFT K_PAUSE]   c Alt+Shift+Pause
```

## Platforms

The `&hotkey` store is used in keyboards on the following platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✘     | ✘     | ✘           | ✘          | ✘   | ✘       |

## Version history

Keyman Developer 13 no longer requires the virtual key to be in quotes
as well as square brackets.

The virtual key hotkey format was introduced in Keyman 3.1.

Hotkeys were introduced in Keyman 1.0.

## See also

-   [Virtual keys](../guide/virtual-keys)
