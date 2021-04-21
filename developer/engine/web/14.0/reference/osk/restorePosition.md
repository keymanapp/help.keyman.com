---
title: restorePosition
---

## Summary

Move OSK back to default position, floating under active input element, for
desktop OSK.

## Syntax

```js
keyman.osk.restorePosition();
```

## Return Value

```js
undefined
```

## Description

This is the equivalent of pressing the pin in the title bar of the desktop OSK.
The user may move the OSK, after which point the OSK stays where the user has
placed it. Similarly, calling [`setPos()`](setPos) will fix the position of the
OSK. Calling `restorePosition()` resets the position of the OSK and re-attaches
it to the bottom of the active input element.
