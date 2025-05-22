---
title: &targets
---

## Summary

The **`&targets`** store specifies the target platforms for which a
keyboard should be built.

## Syntax

```
store(&targets) "target [target ...]"
```

### Parameters

`target`
:   The name of a platform to compile for.

## Description

The `&targets` store specifies the targets which the compiler will
build.

The following targets are available:

`any`
:   Compile for all platforms

`windows`
:   Build a .kmx file, with Windows support

`macosx`
:   Build a .kmx file, with macOS support

`linux`
:   Build a .kmx file, with Linux support (supported in 11.0 onward)

`desktop`
:   Build a .kmx file, with support for Windows, macOS, and Linux
    (default if `&targets` store is not present)

`web`
:   Build a .js file, with KeymanWeb support

`iphone`
:   Build a .js file, with Keyman for iPhone and iPad support

`ipad`
:   Build a .js file, with Keyman for iPhone and iPad support

`androidphone`
:   Build a .js file, with Keyman for Android phone support

`androidtablet`
:   Build a .js file, with Keyman for Android tablet support

`mobile`
:   Build a .js file, with support for any Keyman product on any phone

`tablet`
:   Build a .js file, with support for any Keyman product on any tablet



Currently, the compile targets can be broken down into two categories:

.kmx file
:   A binary keyboard file installable into desktop platforms (Keyman
    Desktop, Keyman for macOS, and Keyman for Linux)

.js file
:   A JavaScript keyboard file installable into Keyman Engine for Web,
    Keyman Engine for Android and Keyman Engine for iOS

The compiler currently makes only these two distinctions, however the
`&targets` store may be used on clients or as metadata in the future to
help narrow down supported platforms for keyboards.

The Keyman Developer 9.0 compiler requires the `&targets` store to build
for touch and web platforms.

## Examples

### Example: Using `&targets`

```
store(&targets) 'any'
```

## Platforms

The `&targets` store is used on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `linux` target was enabled in Keyman 11.0

The documentation for `desktop` target was corrected from .js to .kmx
file in Keyman 10.0

The `&targets` store was added in Keyman 9.0.
