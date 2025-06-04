---
title: match rule
---

## Summary

The `match` rule is fired after any rule is matched and fired in the same group.

## Syntax

```
match > ...
```

## Description

In each group, if Keyman finds a `match` rule, it will fire it after a rule in
the group was matched. A match rule can include [`use()` statements](use),
[`return` statements](return), [`beep` statements](beep) and characters.

**Note:** the `match` rule will **not** be fired if the rule in the group that
was matched includes a `use()` statement in its output. A workaround for this
situation is to duplicate the `match` rule output in the output of rules that
contain `use()` statements. A more comprehensive solution may be included in
future versions of the language.

## Examples

### Example: Using `match`

```
group(main) using keys

any(vowel) + '^' > context U+0302
match > use(CombineDiacritics)

group(CombineDiacritics)

any(vowel) U+0302 > index(vowelWithCircumflex, 1)
```

## Platforms

The `match` rule can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
|     ✔   |   ✔   |   ✔   |      ✔      |      ✔     |  ✔  |    ✔   |

## Version history

The `match` rule was introduced in Keyman 3.0.

## See also

* [`nomatch` rule](nomatch)
* [Using groups](../guide/groups)
