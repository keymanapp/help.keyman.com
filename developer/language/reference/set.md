---
title: set()
---

## Summary

The `set()` statement changes the value of a variable store.

The `set()` statement can also be used to set certain system store values, which controls some aspects of Keyman.

## Syntax

```
... > set(storeName = value)
... > set(&systemStore = value)
```

### Parameters

`storeName`
: The name of the variable store to be updated.

`&systemStore`
: The name of a system store to be updated. The following system stores are supported:

   * [`&layer`](layer) - set the visible layer on a touch keyboard

`value`
: A string value or the name of another store to retrieve a value from.

## Description

The `set()` statement allows the content of a store to be changed dynamically, either to a string value or to the content of another store, during use of the keyboard. Changing store content while using one application will change it for all applications until Keyman is closed or the keyboard is uninstalled. If you want to make the changed store content permanent, to become the default content when restarting Keyman, the `set()` statement should be followed by a [`save()` statement](save).

## Examples

### Example: Using `set()`

```
store(opt1) '0'
+ [CTRL ALT K_1] > set(opt1='1')
+ [CTRL ALT K_2] > set(opt1='2')
```

## Platforms

The `set()` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

Keyman for macOS 11.0.221 added support for `if()`, `set()`, `save()` and `reset()` for variable stores.

The `set()` statement was introduced in Keyman 8.0.

## See also

* [Using variable stores](../guide/variable-stores)
* [`if()` statement](if)
* [`layer()` statement and &layer system store](layer)
* [`reset()` statement](reset "reset() statement")
* [`reset()` statement](reset)
* [`save()` statement](save)
* [`store()` statement](store)
