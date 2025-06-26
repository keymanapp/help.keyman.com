---
title: deadkey
---

## Summary

The **`deadkey()`** emits a invisible placeholder in the output, or
matches an invisible placeholder in the context.

## Syntax

``` keyman
deadkey(deadkeyName) + ... > ...
... > deadkey(deadkeyName)

dk(deadkeyName) + ... > ...
... > dk(deadkeyName)
```

### Parameters

`deadkeyName`
:   A unique name for the deadkey.

## Description

The `deadkey()` or `dk()` statement lets you program an invisible
placeholder variable into the output of a rule, which can then be
matched by future rules. The deadkey will be processed by Keyman as if
it were a normal character, but it is not output onto the screen,
instead being stored internally in the context. A keyboard has a limit
of 65,534 unique deadkeys.

While Keyman deadkeys arose from the concept of deadkeys in Windows,
they are considerably more flexible. A deadkey in context will not be
ignored by the keyboard rule matching algorithm, and multiple deadkeys
can be present at one time.

Deadkeys are however ephemeral. When the user moves to another text
field or uses the mouse or cursor keys to navigate in the current text
field, the deadkey buffer will be reset. While this may seem unhelpful
at first, it in fact provides a more consistent experience for the end
user, as editing seemingly identical pieces of text will not result in
differing behaviour.

The [`set()` statement](set) can be used to control persistent variables
in a keyboard.

Note: While Keyman supports consecutive deadkeys between two real
characters, as of build 2.0.390, KeymanWeb does not. This may be
addressed in a future version.

Deadkeys can be used in stores and matched with [`any()`](any) and
output with [`index()`](index).

Any deadkeys inserted by another rule immediately before or after the
character to the left of the insertion point will be deleted when
backspace is pressed, unless backspace is overridden with a keyboard
rule. This can be illustrated with the following implicit rule (\*
indicates 0 or more deadkeys; 'char' is any character):

```
dk()* any(char) dk()* + [K_BKSP] > nul
```

## Examples

### Example: Using `deadkey()`

```
+ '`' > dk(backquote)
dk(backquote) + 'e' > 'è'
```

### Example: Using `dk()`
An example for turning the two sequences (w and ew) into the same character, but distinguish them so that you can treat them differently in future matches.
```
c "w" produces "ư"
+ "w" > "ư"
"ư" + "w" > "w" c going back to "w"

c "e" + "w" also produces "ư" but uses dk(e)
"e" + "w" > "ư" dk(e)

c therefore, the next "w" will turn "ư" to "e"; result: "ew"
"ư" dk(e) + "w" > "ew"
```

## Platforms

The `deadkey()` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

Numbered deadkeys were introduced in version 3.0. Keyman 5.0 and later
support named deadkeys. The use of numbered deadkeys is still supported,
but not recommended; named deadkeys make the keyboard source much more
readable.
