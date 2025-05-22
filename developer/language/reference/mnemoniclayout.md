---
title: &mnemoniclayout
---

## Summary

The **`&mnemoniclayout`** store controls whether a keyboard is
positional or mnemonic.

## Syntax

```
store(&mnemoniclayout) isMnemonic
```

### Parameters

`isMnemonic`
:   A string value, set to `"1"` for a mnemonic layout, or `"0"` for
    positional.

## Description

Keyman supports two different types of keyboards: positional and
mnemonic keyboards.

With a mnemonic keyboard, Keyman will instead examine the character
output by the current Windows keyboard layout. For example, with
English, French, and German Windows keyboard layouts, pressing "z" will
produce the same output, even though the "z" key is in different
positions on all three layouts.

Virtual keys do change their behaviour somewhat in a mnemonic layout.
For the "white" character keys (i.e. numbers, alphabet, and punctuation
keys on the primary section of the keyboard), 'virtual character keys'
are used instead of regular virtual keys. See the section on [virtual
keys and virtual character keys](../guide/virtual-keys) for details.

Mnemonic layouts work with Latin-script base layouts. While conceptually
they could work with any base layout, the majority of non-Latin script
keyboards also include Latin script on the key caps, and most of these
follow the US QWERTY layout. European layouts, however, do not follow
the US QWERTY layout.

The layout of a positional keyboard is based on the scan codes sent by
the keyboard, which are related to the actual key location on the
keyboard. This means that if you press any particular key, the output
will be the same regardless of the underlying physical keyboard or the
keyboard layout selected in Control Panel. In general the layout of the
keyboard does not change, but there are a small handful of keys that may
move depending on the physical construction of the keyboard.

Positional keyboards are based on a US English layout: any positional
keyboard that tries to match keystrokes with characters or virtual keys
not present on a US English layout (except `[K_oE2]`, an extra key on
European keyboards to the right of the Shift key), will not function
correctly. If you are creating a positional keyboard, and you do not use
a US English layout normally, we suggest you install another language in
Control Panel and assign the US English layout to it, so that you can
easily switch to it to write your keyboard. You can also view [a
reference diagram of the US English keyboard
layout](../guide/us-english).

All Keyman keyboards are positional by default. To make a keyboard
mnemonic, include the `&mnemonicLayout` store and set its value to `1`.

## Examples

### Example: Using `&mnemoniclayout`

```
store(&mnemoniclayout) "1"
```

## Platforms

The `&mnemoniclayout` statement is supported only on desktop keyboards.
On touch keyboards, the keys match to US key codes in the touch
definition. Web keyboards have limitations due to the inconsistent
ability to determine the active physical layout.

While mnemonic keyboards work on Mac or Linux, you cannot select a
different base keyboard.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | 1/2   | ✘     | 1/2         | ✘          | ✘   | ✘       |

## Version history

The `&mnemoniclayout` store was introduced in Keyman 6.0.
