---
title: Compile Targets
---

Keyman supports a prefix at the start of the line to identify lines that should only be
compiled for a specific target. If the prefix is omitted, then the line will be compiled
for all targets.

Compile targets are deprecated in Keyman 17.0, and will be not be supported for keyboards
that target Keyman 19.0 or later.

A more flexible mechanism is available with [`platform()` statements](../reference/platform). While `platform()`
statements cannot provide alternate metadata for different platforms, they do support a
much broader range of platforms, which is important for JavaScript (web) keyboards
which are compiled once for many platforms.

The primary purpose of compile targets is to tell the compiler not to attempt to compile
lines which utilises functionality that is not available for the given target.

Keyman directly supports the following compile targets. For legacy reasons, these names
do not correspond as obviously to the compiler types as might be expected.

* `$keyman:` Compile this line into .kmx (desktop) or .js (web and mobile) targets
* `$keymanonly:` Compile for .kmx (desktop) targets only
* `$keymanweb:` Compile for .js (web and mobile) targets only

If any other compile targets are found, the line will be ignored. This allows for forward
compatibility with future targets. Other known targets are:

* `$weaver:` SILKey (legacy Keyman clone for Mac OS 9 and earlier), replaced by Keyman for macOS
* `$kmfl:` KMFL - Keyman clone for Linux, replaced by Keyman for Linux

Compile targets function slightly differently to the `platform()` statements:

* Compile targets control what gets compiled into the keyboard, whereas the `platform()`
  statement result is determined at run time. This means you cannot use `platform()`
  statements to prevent a line from being compiled into a keyboard.
* Compile targets can also be applied to any line of code whereas `platform()` statements
  apply only to rules.

## Example

```
c Note: return statement is only supported in .kmx in Keyman 13
$keymanonly: + 'a' > 'a' return
```

## Version history

* Version 7.1. Add support for `$keymanweb` and `$keymanonly` targets
* Version 3.2. Add support for `$keyman` and `$weaver` (SILKey) targets
