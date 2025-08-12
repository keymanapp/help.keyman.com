---
title: &version
---

## Summary

The **`&version`** store determines the Keyman version which the
keyboard will target. The keyboard will not be installable into
earlier versions of Keyman.

## Syntax

```
store(&version) "version"
```

### Parameters

`version`
:   The version of Keyman to target. This can be `5.0`, `6.0`, `7.0`,
    `8.0`, `9.0`, `10.0`, `14.0`, `15.0`, `16.0`, or `17.0`.

## Description

The `&version` store allows Keyman to distinguish what version of
Keyman the keyboard was written for and handle it accordingly.

**Note:** there is a difference between [`&keyboardversion`](keyboardversion),
which documents the keyboard version, and `&version`, which
determines which version of Keyman a keyboard will run with.

The `&version` store is optional. For most keyboards, it should be omitted.

If the `&version` store is omitted, the compiler will infer the lowest
version that supports the full set of features used in the keyboard, and
assign that version number value to this store internally. The compiler will
also report on the version it infers in the compile process.

> [!NOTE] With Keyman Developer 15.0, 16.0, and 17.0, there is one scenario where
> the `&version` store is required: multi-part Unicode identifiers in the touch
> layout (e.g. `U_0061_0300`) are processed too late in the compile process to
> affect the minimum version inference, and so in this situation, `&version`
> must be set to `15.0` or later. In Keyman Developer 18.0, the compiler has 
> been updated to resolve this, so the `&version` store is no longer required.

> [!NOTE]
> The `VERSION 'x.y'` format of this statement is deprecated and will be
> not be supported for keyboards that target Keyman 19.0 or later. Instead
> use the `&version` store format.

## Examples

### Example: Using `&version`

```
store(&version) '15.0'
```

## Platforms

The `&version` store can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

* Keyman 10.0: The `&version` store was made optional
* Keyman 5.0: The `&version` store was added.
* Keyman 3.0: The `VERSION` statement was introduced.

## See also

- [`&keyboardversion` store](keyboardversion)
