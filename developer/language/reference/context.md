---
title: context
---
  
## Summary

The **`context`** statement reproduces part or all of the context
buffer.

## Syntax

```
... > context
... > context(offset)
... context(offset) > ...
```

### Parameters

`offset`
:   The character offset in the context from which the output character
    is selected, starting at `1`. The index increments for each
    character or statement found, with two caveats:
    -   [`outs()`](outs) statements are expanded prior to calculating
        the offset.
    -   [`if()`](if) statements are not included in the calculation of
        the offset, which is different to how [`index()`](index)
        statements calculate offset.

    This offset must be less than the offset of the `context()`
    statement itself, if the `context()` statement is in the context
    (third form above).

## Description

The `context` statement reproduces the context stored from the rule
match, or a single character of it, into the output. Use the `context`
statement as much as possible as it is significantly faster than using
the index statement.

A single character from the context can be output (on the right-hand
side of a rule) or matched (on the left-hand side of a rule) using the
`context()` form.

Note that although the `context()` form can be used in the left-hand
side of a rule, the `context` form cannot.

## Examples

### Example: Using `context`

```
any(cons) "W" + any(key) > context index(keyout,3)
"contex" + "t" > context(2) context(6)     c outputs "ox"
```

## Platforms

The `context` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

Support for [`notany()`](notany) together with `context()` added in
KeymanWeb 14.0.

The context(n) form was introduced in version 6.0.

The context statement was introduced in Keyman 3.0.

## See also

-   `if()` statement
-   `outs()` statement
