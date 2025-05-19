---
title: use() statement
---

## Summary

The `use()` statement transfers control to another group.

## Syntax

```
begin > use(groupName)
... > use(groupName)
```

### Parameters

`groupName`
: The name of the group to transfer control to.

## Description

The `use()` statement tells Keyman to switch processing to a new group; after
Keyman has gone through the new group, and any other nested groups, it will
return to the previous one. The `use()` statement can be used with the
[`match`](match) and [`nomatch`](nomatch) rules; it will work the same way.

The current output is moved to the context before the new group is entered, so
the new group will see the output from the fired rule as its context. This means
that the context is no longer consistent once control returns to the rule with
the `use()` statement, so no [`context`](context) or [`index()`](index)
statements should be used after a `use()` statement in a rule.

**Note:** the `match` rule will **not** be fired if the rule in the group that
was matched includes a `use()` statement in its output. A workaround for this
situation is to duplicate the `match` rule output in the output of rules that
contain `use()` statements. A more comprehensive solution may be included in
future versions of the language.

## Examples

### Example: Using `use()`

```
any(Vowel) + any(DiacriticKey) > context index(Diacritic, 2) use(AdjustVowels)

group(AdjustVowels)
any(Vowel) U+0300 > index(VowelWithGrave, 1)
```

## Platforms

The `use()` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `use()` statement was introduced in Keyman 3.0.

## See also

* [Using groups](../guide/groups)
* [`group()` statement](group)