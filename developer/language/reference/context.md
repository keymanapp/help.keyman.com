---
title: context
---

## Summary

The `context` statement reproduces part or all of the context buffer.

## Syntax

```
... > context
... > context(offset)
... context(offset) > ...
```

### Parameters

`offset`

: The character offset in the context from which the output character is
  selected, starting at `1`. The index increments for each character or
  statement found, with one caveat:

  - [`outs()`](outs) statements are expanded prior to calculating the offset.

  If the `context()` statement is in the context (third form above), the offset
  must be less than the offset of the `context()` statement itself.

  The offset cannot reference a [`nul`](nul) or [`if`](if) statement, as both of
  these are non-character statements.

## Description

The `context` statement reproduces the context stored from the rule match, or a
single character of it, into the output. If you do not need to change the context,
then use the `context` statement as the first element of your rule output, as
this allows Keyman to skip deletion and re-insertion of the context into the
text store of the active document.

A single character from the context can be output (on the right-hand side of a
rule) or matched (on the left-hand side of a rule) using the `context()` form.

Note that although the `context()` form can be used in the left-hand side of a
rule, the `context` form cannot.

## Examples

### Example: Using `context`

```
c match a char from the 'cons' store, 'W' and any 'key', don't change the output
any(cons) "W" + any(key) > context index(keyout,3)

c when the user types 'context', change it to 'ox'
"contex" + "t" > context(2) context(6)     c outputs "ox"

c when a user types two identical consonants, delete one of them,
c on the next matching key from the 'key' store
any(cons) context(1) + any(key) > context(1) index(keyout, 3)
```

## Platforms

The `context` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

- Offset calculations for `nul` were documented in 18.0 along with bug fixes in
  Keyman Core.

- Support for [`notany()`](notany) together with `context()` added in KeymanWeb
  14.0.

- The `context(n)` form was introduced in version 6.0.

- The `context` statement was introduced in Keyman 3.0.

## See also

- `if()` statement
- `outs()` statement
