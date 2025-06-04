---
title: &oldLayer store
---

## Summary

The `&oldLayer` store reports on whether the user changed the active layer
in the previous keystroke. It is a read-only store used in [`begin
PostKeystroke`](begin) processing.

## Syntax

```keyman
if(&oldLayer = '') ... > ...
if(&oldLayer = 'shift') ... > ...
```

## Description

The `&oldLayer` system store is a read only store set immediately before
[`begin PostKeystroke`](begin) is called, to the name of the previously
selected layer, if the previous keystroke changed the layer (e.g. by
the user touching a modifier key), or to an empty string (`""`) otherwise.

Keyman determines that a layer has changed in the following circumstances:

* If the user selects a key with a "next layer" property set to anything
  other than `(none)`, even if set to the current layer. (This allows the
  keyboard to easily override switching on a single key).
* If a rule is fired that calls the [`layer()` statement](layer), even if
  the layer passed in is the same as the current layer.

At other times, the value of the `&oldLayer` store may not be current.

The `&oldLayer` store is used only in touch keyboards, and will always have
the value of `""` in other contexts.

## Platforms

While the `&oldLayer` store is accessible on all platforms, it only has
meaning on touch platforms (mobile web, iOS, Android).

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

* Version 15.0: `&oldLayer` support introduced

## See Also

* [`&newLayer` store](newlayer)
