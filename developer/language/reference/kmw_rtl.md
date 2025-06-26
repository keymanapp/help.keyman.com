---
title: &kmw_rtl
---

## Summary

The **`&kmw_rtl`** store specifies whether a keyboard works with a
left-to-right or a right-to-left script on web platforms.

## Syntax

```
store(&kmw_rtl) "value"
```

### Parameters

`value`
:   If `1`, then specifies right-to-left, otherwise, or if omitted,
    specifies left-to-right.

## Description

The `&kmw_rtl` store allows you to specify the directionality of the
target script of the keyboard. Keyman Engine for Web will use this flag
to set the directionality of edit controls.

## Examples

### Example: Using `&kmw_rtl`

```
store(&kmw_rtl) '1'
```

## Platforms

The `&kmw_rtl` store will be used in web platforms. It is ignored on all
other platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✘       | ✘     | ✘     | ✔           | ✔          | ✘   | ✘       |

## Version history

The `&kmw_rtl` store was added in Keyman 7.0.
