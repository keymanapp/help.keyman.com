---
title: alignInputs (deprecated)
---

## Summary

(Deprecated) Adjusts touch-mode element overlays, realigning them over their
base elements.

## Syntax

```js
keyman.alignInputs(elements);
```

### Parameters

`elements`

: Type: `array` (optional)

  A list of elements with touch overlays to be repositioned on the page. When
  not provided, all such elements will be realigned.

### Return Value

`undefined`

## Description

To prevent a system-level keyboard from displaying on mobile devices, KeymanWeb
uses "touch-alias" overlay elements over webpage inputs to intercept typing
requests and instead display its own keyboard for use. KeymanWeb does its best
to keep the overlays on top of their original elements, calling this function as
needed.

As there have been occasional bugs related to these overlays, this function
exposes the ability for a web designer to manually trigger realignment to
facilitate more intuitive behavior for end users in case a workaround is ever
needed for a bug in the future.

## Example

```js
keyman.alignInputs();
```

## History

* Deprecated in Keyman 16.0 ([#7360](https://github.com/keymanapp/keyman/pull/7360))
