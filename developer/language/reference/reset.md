---
title: reset()
---

## Summary

The **`reset()`** statement restores a variable store to its original
value.

## Syntax

```
... > reset(StoreName)
```

### Parameters

`storeName`
:   The name of the variable store to be reset to its original value.

## Description

The `reset()` statement is used on the right hand (output) side of a
rule to restore a variable to the current default value - either the
store content as defined in the keyboard source file, or the value
persisted previously in the system settings by [`save()`](save) or
by the keyboard configuration dialog.

## Examples

### Example: Using `reset()`

```
store(opt1) '1'
+ [CTRL ALT K_0] > reset(opt1)
```

## Platforms

The `reset()` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `reset()` statement was introduced in Keyman 8.0.

Keyman for macOS 11.0.221 added support for `if()`, `set()`, `save()`
and `reset()` for variable stores.

## See also

-   [Using variable stores](../guide/variable-stores)
-   [`if()` statement](./if)
-   [`save()` statement](./save)
-   [`set()` statement](./set)
-   [`store()` statement](./store)
