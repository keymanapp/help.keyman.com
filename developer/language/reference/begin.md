---
title: begin rule
---

## Summary

The `begin` rules define the entry point groups for the keyboard.

## Syntax

```keyman
begin [entrypoint] > use(startGroup)
```

### Parameters

`entrypoint`

: `Unicode`, `NewContext`, or `PostKeystroke`, or `ANSI` (deprecated). If
omitted, assumes `ANSI`.

`startGroup`

: The group that will be called.

## Description

The `begin` rule tells Keyman which groups should be entry points to the
keyboard.

Each entry point has a particular purpose:

`Unicode`

: the entry point for a keystroke in a Unicode-aware application. This is the
most common entry point for a keyboard. The `startGroup` can be a `using keys`
group, a `readonly` group or a context-only group.

`NewContext`

: the entry point into the keyboard when the user enters a new text field, or
moves the input cursor into another part of the current text field. This does
not imply that there is no context available, but that the context has changed.
This is used most commonly to select a starting layer for a touch layout. The
`startGroup` must be a `readonly` group. `NewContext` is currently supported
only in Web Core platforms - web, iOS and Android.

`PostKeystroke`

: the entry point into a keyboard after keystroke and/or model input event has
completed. While some of the same functionality can be replicated by including
it in the `begin Unicode` processing, this entry point is called after both
model input (e.g. selecting a word from the banner), and after `nextlayer`
processing from the touch layout, giving the keyboard a chance to adjust the
layer and other variable stores. The `startGroup` must be a `readonly` group.
`PostKeystroke` is currently supported only in Web Core platforms - web, iOS and
Android.

`ANSI` (deprecated)

: Old Keyman keyboards may include this entry point for a keystroke in a
non-Unicode-aware application. This mode is deprecated, and only supported on
the Windows platform. If `entrypoint` is omitted, the ANSI option is assumed,
which matches the legacy Keyman 4.0 and older `begin` rule. In this context,
`ANSI` means the current legacy system codepage for the computer.

A `begin` rule can be included for each entry point in a single keyboard file.

The right hand side of the `begin` rule may contain only a [`use()`
statement](use).

The `begin` rule is the only rule that is not part of a group, and is required
for every keyboard.

## Examples

### Example: using `begin` in a Unicode keyboard

```keyman
begin Unicode > use(main)

group(main) using keys
```

### Example: using `begin NewContext` and `begin PostKeystroke`

See [Casing Support](../guide/casing-support) for a more comprehensive example.

```keyman
begin NewContext > use(new)
begin PostKeystroke > use(post)

group(new) readonly

group(post) readonly
```

## Platforms

The `begin` statement can be used in keyboards on all platforms. In version 15,
not all platforms support all entry points.

| Entrypoint    |Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------------|--------|-------|-------|-------------|------------|-----|---------|
| Unicode	      |   ✔    |   ✔   |   ✔   |      ✔      |      ✔    |   ✔  |    ✔    |
| NewContext    |   ✘    |   ✘   |   ✘   |      ✔      |      ✔    |   ✔  |    ✔    |
| PostKeystroke |   ✘    |   ✘   |   ✘   |      ✔      |      ✔    |   ✔  |    ✔    |
| ANSI          |   ✔    |   ✘   |   ✘   |      ✘      |      ✘    |   ✘  |    ✘    |


## Version history

* Version 15.0: `NewContext` and `PostKeystroke` support introduced.
* This line originated in SIL-CC, and a simplified version was used in Keyman
  for consistency. The ANSI/Unicode distinction was introduced in Keyman 5.

## See also

* [Keyman language overview](../guide/overview)
* [Using groups](../guide/groups)
* [`group()` statement](group)
