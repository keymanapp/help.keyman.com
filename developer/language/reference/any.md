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
`inputStore`. This statement is only valid on the left side of a rule;
the [`index()` statement](_index) is used to match again or output
the character matched by the `any()` statement in the output. The
`any()` statement remembers the offset in the store where the match
occurred for later use with the `index()` statement.

Note that [`outs()` statements](outs) are expanded in stores, so the
character offset match is on the fully expanded version of the store.
Other specials, such as deadkeys or virtual keys, are only a single
character wide when measuring offset.

## Examples

```
store(keys) 'abcde'
store(output) 'αβγδε'
+ any(keys) > index(output,1)
```

## Platforms

The `any()` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `any()` keyword was introduced in Keyman 3.0.

Keyman 6.0 added support for deadkeys and virtual keys in stores

## See also

-   [Using stores](../guide/stores)
-   `index()` statement
-   `notany()` statement
-   `store()` statement
