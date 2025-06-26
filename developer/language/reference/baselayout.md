---
title: baselayout() statement
---

## Summary

The `baselayout()` statement tests the physical hardware keyboard that the
Keyman keyboard is running on top of.

## Syntax

```keyman
baselayout(layoutName) ... > ...
if(&baselayout = layoutName) ... > ...
```

### Parameters

`layoutName`

: The name or identifier of the layout to compare against. This should be an ISO
639 Language Name and ISO3166 Country Code pair, separated by `-` (hyphen), e.g.
`"en-US"`, or it can be the name of a Windows keyboard DLL, e.g. `"kbdus.dll"`.
The second form is self-evidently not portable, as it relies on Windows DLLs,
and is best avoided.

## Description

The `baselayout()` statement allows a keyboard to test the user's physical
layout and adjust the ruleset accordingly. For example, several Classical Greek
keyboards placed the iota subscript on the <kbd>|</kbd> (vertical
bar) key. This is reasonably accessible on a US keyboard, but is much harder to
find on some European layouts. Adding an alternate method of accessing the key
on a European layout reduces the complexity of using the keyboard.

The `baselayout()` statement is currently only supported on Keyman Desktop for
Windows, as determining the base layout on web platforms is inconsistent. The
concept of a base layout is not present on touch devices. On web and touch
devices, the `baselayout()` test will return `true` only for `"en-US"`.

Typically, the `baselayout()` form is cleaner to use than the `if(&baselayout)`
form. However, the `if()` form has one advantage: you can do a negative test
with the `!=` operator.

## Examples

### Example: Using `baselayout()`

```keyman
+ '|' > U+0345
baselayout('fr-FR') + '§' > U+0345
```

## Platforms

The `baselayout()` statement can be used in keyboards on all platforms, but all
platforms other than Windows match only on `'en-US'` or `'kbdus.dll'` at
present.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
|    ✔    |   ✘   |   ✘   |      ✘      |      ✘    |   ✘  |    ✘   |

## Version history

Note: full support is available in Keyman Desktop 9.0.511.0 and Keyman Developer
9.0.511.0 and later versions, due to bugs in earlier builds.

The `baselayout()` statement was introduced in Keyman 9.0.