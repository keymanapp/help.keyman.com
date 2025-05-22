---
title: save()
---

## Summary

The **`save()`** statement persists a variable store for future
sessions.

## Syntax

```
... > save(StoreName)
```

### Parameters

`storeName`
:   The name of the variable store to be persisted.

## Description

The `save()` statement is used on the right hand (output) side of a rule
to save a current variable store value to the system settings. This
variable store value will then become the default variable value for
future use. It will typically be used after a [`set()` statement](set)
to make the dynamically changed option value change permanent.

## Examples

### Example: Using `save()`

```
store(opt1) '0'  c Default value on install

+ [CTRL ALT K_1] > set(opt1='1') save(opt1)  c new value now saved to system settings
```

## Platforms

The `save()` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

Keyman for macOS 11.0.221 added support for `if()`, `set()`, `save()`
and `reset()` for variable stores.

The `save()` statement was introduced in Keyman 8.0.

## See also

-   [Using variable stores](../guide/variable-stores)
-   [`if()` statement](./if)
-   [`reset()` statement](./reset)
-   [`set()` statement](./set)
-   [`store()` statement](./store)
