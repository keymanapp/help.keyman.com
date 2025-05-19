---
title: &newLayer store
---

## Summary

The `&newLayer` store reports on whether the user changed the active layer
in the previous keystroke. It is a read-only store used in [`begin
PostKeystroke`](begin) processing.

## Syntax

```keyman
if(&newLayer = '') ... > ...
if(&newLayer = 'shift') ... > ...
```

## Description

The `&newLayer` system store is a read only store set immediately before
[`begin PostKeystroke`](begin) is called, to the name of the new layer, if
the previous keystroke changed the layer (e.g. by the user touching a
modifier key), or to an empty string (`""`) otherwise.

Keyman determines that a layer has changed in the following circumstances:

* If the user selects a key with a "next layer" property set to anything
  other than `(none)`, even if set to the current layer. (This allows the
  keyboard to easily override switching on a single key).
* If a rule is fired that calls the [`layer()` statement](layer), even if
  the layer passed in is the same as the current layer.

At other times, the value of the `&newLayer` store may not be current.

The `&newLayer` store is used only in touch keyboards, and will always have
the value of `""` in other contexts.

## Example

See [Casing Support](../guide/casing-support) for a more comprehensive example.

```keyman
begin PostKeystroke > use(post)

store(digit) '0'..'9'

group(post) readonly
    c stay on the numeric layer if we are there already
    if(&newLayer = "") if(&layer = 'numeric') any(digit) > context

    c don't cancel caps lock layer
    if(&layer = 'caps') > context

    c no other changes, so detect sentence or layer change, as long
    c as the user hasn't attempted to change layer themselves
    if(&newLayer = "") > use(nextLayer)

group(nextLayer) readonly
    num > layer('shift')
    '. ' > layer('shift')
```

## Platforms

While the `&newLayer` store is accessible on all platforms, it only has
meaning on touch platforms (mobile web, iOS, Android).

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
|     ✔   |   ✔   |   ✔   |      ✔      |      ✔     |  ✔  |    ✔   |

## Version history

* Version 15.0: `&newLayer` support introduced

## See Also

* [`&oldLayer` store](oldlayer)
