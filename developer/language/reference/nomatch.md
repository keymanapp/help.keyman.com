---
title: nomatch
---

## Summary

The **`nomatch`** rule is fired if no other rule is matched or fired in
the same group, with some caveats.

## Syntax

```
nomatch > ...
```

## Description

`nomatch` is similar to the [`match` rule](match), but instead of the
rule being fired when a rule was matched, it will be used when no rule
is matched in the group. A `nomatch` rule can include [`use()`
statements](use), [`return` statements](return), [`beep`
statements](beep) and characters.

Caveat: `nomatch` will not be fired in a `using keys` group if the
current keystroke does not produce a character in normal use (for
example, modified keys, function keys). This is by design, and is
intended to ensure that function keys, and modified keys such as Ctrl+X,
were passed through to the underlying application.

## Examples

### Example: Using `nomatch`

```
begin > use(constraints)
group(constraints) using keys

c Block two diacritics on one vowel
any(vowel) any(diacritic) + any(diacriticKey) > context beep
nomatch > use(main)

group(main) using keys

+ any(diacriticKey) > index(diacritic, 1)
```

## Platforms

The `nomatch` rule can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `nomatch` rule was introduced in Keyman 3.0.

## See also

-   [`match` rule](match)
-   [Using groups](../guide/groups)
