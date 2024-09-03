---
title: any()
---

## Summary

The **`any()`** statement matches a character from an input store.

## Syntax

```
any(inputStore)
```

### Parameters

`inputStore`
:   A store from which the current character in the context or key part
    of the rule must be matched.

## Description

The **`any()`** statement will match any character that is in the store
`inputStore`. This statement is only valid in the context part or the key part
of a [rule](../guide/rules).

The [`index()`](index) statement is used together with the `any()` statement, to
match the same character again (when used in the context), or output the
character matched (when used in the output). The `any()` statement remembers the
offset in the store where the match occurred for later use with the `index()`
statement.

Note that [`outs()`](outs) statements are expanded in stores, so the character
offset match is on the fully expanded version of the store. Other specials, such
as deadkeys or virtual keys, are only a single character wide when measuring
offset.

## Examples

```
store(keys) 'abcde'
store(output) 'αβγδε'
store(diacriticKey) "`'"
store(diacritic) U+0300 U+0301
+ any(keys) > index(output,1)
any(output) + any(diacriticKey) > context index(diacritic, 1)
```

## Platforms

The `any()` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

* Keyman 6.0 added support for deadkeys and virtual keys in stores.
* The `any()` keyword was introduced in Keyman 3.0.

## See also

-   [Using stores](../guide/stores)
-   `index()` statement
-   `notany()` statement
-   `store()` statement
