---
title: notany()
---

## Summary

The **`notany()`** statement will match any character not in a given
store.

## Syntax

```
notany(storeName) + ... > ...
```

### Parameters

`storeName`
:   The name of the store from which a match must be avoided.

## Description

The `notany()` statement will match any character that is not in the
[store](store) referenced by `storeName`. The `notany()` statement is only valid
in the context part of a [rule](../guide/rules).

The `notany()` statement cannot be together with an [`index()`](index)
statement, but can be used with the [`context`](context) statement.

The `notany()` statement does not match when there is no character at
that position in the context (e.g. at the start of a document). To match
this, use the [`nul`](nul) statement.

## Examples

Use `notany()` to prevent diacritics being applied to punctuation:

```
notany(punctuation) + any(diacriticKey) > context(1) index(diacritic,2)
```

## Platforms

The `notany()` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

* Support for `notany()` together with [`context()`](context) added in KeymanWeb
  14.0 (web and mobile platforms).
* Introduced in version 7.0.

## See also

-   [Using stores](../guide/stores)
-   [`any()` statement](./any)
-   [`store()` statement](./store)
