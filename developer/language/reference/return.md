---
title: return
---

## Summary

The **`return`** statement stops processing rules for the current
keystroke event.

## Syntax

```
... > return
```

## Description

## Examples

### Example: Using `return`

The `return` statement tells Keyman to stop processing rules and wait
for the next keystroke event. Keyman will immediately return control to
the user, and will not process other groups in the call stack, so this
will skip [`match` rules](match), for example.

```
nomatch > return
```

## Platforms

The `return` statement is supported only on desktop keyboards.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✘           | ✘          | ✘   | ✘       |

## Version history

The `return` statement was introduced in Keyman 3.0.
