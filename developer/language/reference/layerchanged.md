---
title: &LayerChanged store
---

## Summary

The `&LayerChanged` store reports on whether the user changed the active layer
in the previous keystroke. It is a read-only store used in [`begin
PostKeystroke`](begin) processing.

## Syntax

```keyman
if(&LayerChanged = '0') ... > ...
if(&LayerChanged = '1') ... > ...
```

## Description

The `&LayerChanged ` system store is a read only store set immediately before
[`begin PostKeystroke`](begin) is called, to `1` if the previous keystroke
changed the layer (e.g. by the user touching a modifier key), or to `0` otherwise.

At other times, the value of the `&LayerChanged` store may not be current.

The `&LayerChanged` store is used only in touch keyboards, and will always have
the value of `0` in other contexts.

## Example

See [Casing Support](../guide/casing-support) for a more comprehensive example.

```keyman
begin PostKeystroke > use(post)

store(digit) '0'..'9'

group(post) readonly
    c stay on the numeric layer if we are there already
    if(&layerChanged = "0") if(&layer = 'numeric') any(digit) > context

    c don't cancel caps lock layer
    if(&layer = 'caps') > context

    c no other changes, so detect sentence or layer change, as long
    c as the user hasn't attempted to change layer themselves
    if(&layerChanged = "0") > use(nextLayer)

group(nextLayer) readonly
    num > layer('shift')
    '. ' > layer('shift')
```

## Platforms

While the `&LayerChanged` store is accessible on all platforms, in only has
meaning on touch platforms (mobile web, iOS, Android).

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

## Version history

* Version 15.0: &LayerChanged support introduced

