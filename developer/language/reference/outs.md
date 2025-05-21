---
title: outs()
---

## Summary

The **`outs()`** statement emits the contents of a given store to the
current point in the program source.

## Syntax

```
store(store1) ... outs(storeName) ...
... outs(storeName) ... + ... >  ...
... > ... outs(storeName) ...
```

### Parameters

`storeName`
:   The name of the store to be emitted.

## Description

The `outs()` statement simply copies the store `storeName` into the
position in which it has been inserted. This can be used in stores, in
the context and the output. If the store to be emitted is a single
character or virtual key, it can also be used in the key part of the
rule.

If a store is a single character, it can also be emitted using the
[named constants](../guide/constants) prefix `$`, for example `$aleph`.

When using `outs()` in the context, the characters in the store are
included in offset counts.

## Examples

### Example: Using `outs()`

```
store(conskeys)  "BCDFGHJKLMNPQRSTVWXYZ"
store(cons)      "bcdfghjklmnpqrstvwxyz"
store(vowelkeys) "AEIOU"
store(vowels)    "aeiou"
store(allkeys) outs(conskeys) outs(vowelkeys)
store(letters) outs(cons) outs(vowels)

c using outs in the context

outs(vowels) + any(conskeys) > context index(cons, 6)
```

## Platforms

The `outs()` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `outs()` statement was introduced in Keyman 3.0.

## See also

-   [Using stores](../guide/stores)
-   [Named constants](../guide/constants)
