---
title: store()
---

## Summary

The **`store()`** statement defines a store.

## Syntax

```
store(storeName) value
```

### Parameters

`storeName`
:   The name of the store to be defined.

`value`
:   An extended string value.

## Description

The `store()` statement lets you store a string of characters or keys in
a buffer for use elsewhere in the keyboard source file. The `store()`
statement can be used with [`any()`](any) and [`index()`](index) to
reduce sets of similar rules down to a single rule. A store is
terminated at the end of the line (or continuation lines). Stores can
contain characters, [virtual keys](../guide/virtual-keys), [`deadkey()`
statements](deadkey), and [`outs()` statements](outs).

There are several types of stores. The store type is determined by a set
of requirements.

System stores
:   A system store has a name prefixed with `&`. The `&` prefix is
    reserved and cannot be used for other types of stores. See the
    [Keywords index](_keywordsbytype) for a list of system stores.

Variable stores
:   Variable stores, sometimes also known as option stores, can be used
    with the [`if()`](if), [`set()`](set), [`save()`](save), and
    [`reset()`](reset) statements to control [keyboard
    variables](../guide/variable-stores).

IMX definition stores
:   These are used with the [`call()` statement](call) to define
    external functions for the keyboard to call.

Standard stores
:   All other stores are standard stores, and can be used with
    [`any()`](any), [`index()`](index) and [`outs()`](outs) statements.

## Examples

### Example: Using standard stores

```
store(vowelKey) 'aeiou'
store(vowel) 'αειου'

+ any(vowelKey) > index(vowel, 1)
```

### Example: Using system stores

```
store(&name) 'My Greek Keyboard'
store(&version) '9.0'
```

### Example: Using variable stores

```
store(opt1) '0'

+ [CTRL ALT K_1] > set(opt1='1') save(opt1)
+ [CTRL ALT K_0] > set(opt1='0') save(opt0)
```

## Platforms

The `store()` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

Version 8.0 added variable stores.

Version 6.0 added `deadkey()` and virtual key support within stores.

Version 5.0 added system stores and IMX definition stores.

The `store()` statement was introduced in Keyman 3.0.

## See also

-   [Using stores](../guide/stores)
-   [Using variable stores](../guide/variable-stores)
-   [`any()` statement](any)
-   [`call()` statement](call)
-   [`if()` statement](if)
-   [`index()` statement](index)
-   [`outs()` statement](outs)
-   [`reset()` statement](reset)
-   [`save()` statement](save)
-   [`store()` statement](store)
