---
title: Caps Lock stores
---

## Summary

The Caps Lock stores control the behaviour of Caps Lock on desktop
operating systems.

## Syntax

``` keyman
store(&capsalwaysoff) "1"
store(&capsononly) "1"
store(&shiftfreescaps) "1"
```

## Description

These three stores, all optional, control how Keyman works with the Caps
Lock key. The first store, `&capsalwaysoff`, makes sure that Caps Lock
cannot be turned on while the keyboard is active, and it turns Caps Lock
off when the keyboard is switched on.

The other two statements, `&capsononly`, and `&shiftfreescaps` are
usually used together. `&capsononly` makes the Caps Lock key work like a
typewriter Caps Lock, where pressing it turns it on only.
`&shiftfreescaps` tells Keyman to recognize the use of the Shift key to
turn Caps Lock off. Using these two together makes Keyman work like many
European keyboards.

While technically a value of `0` could be used in the store value, this
is equivalent to omitting the store altogether, and the store should
usually be omitted in this case.

> [!NOTE]
> The legacy `CAPS ALWAYS OFF`, `CAPS ON ONLY` and `SHIFT FREES CAPS`
> headers are deprecated and will be not be supported for keyboards that
> target Keyman 19.0 or later.

## Examples

### Example: Using Caps Lock stores

```
store(&capsalwaysoff) "1"
store(&capsononly) "1"
store(&shiftfreescaps) "1"
```

## Platforms

The Caps Lock statements can be used in keyboards on the following
platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✘     | ✘           | ✘          | ✘   | ✘       |

While Caps Lock statements can be used in Keyman for Linux and KMFL they
don't yet work properly as of version 14.0.

## Version history

The Caps Lock stores were introduced in Keyman 5.0, deprecating
`CAPS ALWAYS OFF`, `CAPS ON ONLY` and `SHIFT FREES CAPS` header
statements.

The Caps Lock headers were introduced in Keyman 4.0.
