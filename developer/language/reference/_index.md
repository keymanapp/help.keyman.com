---
title: index()
---

## Summary

The `index()` statement maps a character from an input store to an output store.

## Syntax

```
any(inputStore) > index(outputStore,offset)
any(inputStore) index(secondStore,offset) > ...
```

### Parameters

`outputStore`, `secondStore`
: The store from which the output character is selected. This store should be
  the same length as the `inputStore`.

`offset`

: The character offset of the `any()` statement in the left hand side of the
  rule to pair with, starting at `1`. The index increments for each character or
  statement found, with one caveat:

  - [`outs()`](outs) statements are expanded prior to calculating the offset.

  If the `index()` statement is in the context (second form above), the offset
  must be less than the offset of the `index()` statement itself.

## Description

The `index()` statement works together with [`any()`](any) to map an array of
characters in `inputStore` to a corresponding array in `outputStore` (or
`secondStore`). `index()` can be used in the context and output sections of a
rule. If used in the context section, the `offset` parameter must be less than
the offset of the `index()` statement in the context.

The stores can include `deadkey()` statements, `outs()` statements and virtual
keys; the `outs()` statement is expanded prior to the calculation of offsets
within the input and output stores. When a store contains virtual keys, it can
be used only with the `any()` statement in the key part of the rule.

Conceptually, the `index()` and `any()` pairing can be expanded into multiple
rules, one for each pair of characters. If expanded, this would grow the rule
set exponentially when multiple pairs of `index()` and `any()` are used in the
same rule.

## Examples

### Example: Using `index()`

This example maps a vowel, followed by a diacritic key, to the same vowel, and a
corresponding combining diacritic mark.

```
store(vowel) "aeiou"
store(diacritickey) "`'^"
store(diacriticCombining) U+0300 U+0301 U+0302

any(vowel) + any(diacritickey) > index(vowel,1) index(diacriticCombining,2)

c this could also be expressed with the context statement:
any(vowel) + any(diacritickey) > context index(diacriticCombining,2)
```

This example does the same as the previous, except it reverses the input order:
a diacritic mark first, then a vowel, and uses the `index()` statement to swap
the results in the output.

```
store(vowel) "aeiou"
store(diacritickey) "`'^"
store(diacriticCombining) U+0300 U+0301 U+0302

any(diacritickey) + any(vowel) > index(vowel,2) index(diacriticCombining,1)
```

The following example shows how the index statement can be used in the left hand
side of a rule. If a repeating vowel is found, then this rule puts a circumflex
on top of both vowels when <key>^</key> is pressed.

```
store(vowel)     "aeiou"
store(vowelcirc) "âêîôû"
any(vowel) index(vowel,1) + "^" > index(vowelcirc,1)
```

## Platforms

The `index()` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔      |

> ### Note
For **mobile** and **mobile web**, the statement is **only** accessible as the
output section of the rule.

## Version history

As of version 6.0, `index()` can also be used in the left-hand side of a rule.

The `index()` statement was introduced in Keyman 3.0.

## See also

-   [Using stores](../guide/stores)
-   [`any()` statement](../reference/any)
-   [`context` statement](../reference/context)
-   [`store()` statement](../reference/store)
