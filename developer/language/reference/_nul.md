---
title: nul
---

## Summary

The `nul` statement has two purposes: in the output of a rule, it signifies
deleting context and keystroke, and at the start of the context it signifies
that the context buffer in the application must be empty (or no longer than the
context of the rule) in order for the rule to match.

## Syntax

``` keyman
nul [...] [+ key] > output
[...] [+ key] > nul
```

## Description

The `nul` statement will delete the context and key on the left hand side of the
rule from the output; it is equivalent to having an empty output (which is not
allowed). The `nul` statement probably will not be used often, because there are
not many times you would want to delete the context and keystroke. The `nul`
command must be the only character or command on the right hand side of the
rule.

`nul` can be used in the context in one special situation. It is used at the
start of the context to tell Keyman to find a match only if the `nul` statement
is before the start of the context buffer. For example, you may use this to test
if the user is typing a character at the start of a paragraph, and use a
different character in this situation.

Be careful when using `nul` in the context. In legacy environments, such as many
Windows applications, the context buffer will be empty after cursor movement,
menu access, or many other situations. This means that the `nul` keyword may
match in situations where you are not expecting it, for example in the middle of
a word.

In modern environments, such as touch devices, web keyboards, and some modern
Linux, macOS, and Windows applications, the `nul` keyword will match at the
start of a text buffer, and nowhere else. For example, in Microsoft Word, it
will match at the start of the document, after a page, column or section break,
at the start of a header or footer, at the start of a table cell and other
similar situations.

## Note

If the context in a rule has both an [`if()` statement](if) and a `nul`
statement, then the `nul` statement must come first.

## Examples

### Example: Using `nul` on the right hand side of the context

This example will delete a visible Malayalam virama when a is typed.

``` keyman
U+0D4D + 'a' > nul
```

### Example: Using `nul` on the left hand side of the context

This example will capitalize a letter at the start of a buffer.

``` keyman
nul + 'a' > 'A'
```

> [!Hint]
> This is not the recommended approach to casing. See
> [Casing Support](../guide/casing-support.md) for better ways to implement
> this.

## Platforms

The `nul` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `nul` statement was introduced in Keyman 3.0.

## See also

-   [`context` statement](../reference/context)
