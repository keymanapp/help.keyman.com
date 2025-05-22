---
title: beep
---

## Summary

The **`beep`** statement emits a sound or otherwise provides feedback to
the user that the key they typed was not permitted.

## Syntax

```
beep
```

## Description

The `beep` statement produces a beep with the system speaker when the
rule is matched. In Keyman Desktop, `beep` will produce the sound
specified by "Asterisk" in Windows Sounds configuration. In KeymanWeb,
`beep` will flash the current text field instead of producing a sound.
Other systems may use alternate forms of feedback, such as vibration.
When using the `beep` statement, remember that it will delete all that
was matched on the left side of the rule if you don't precede it with
[`context` statement](context) or appropriate characters. The `beep`
statement is only valid in the output.

## Examples

### Example: Using `beep`

The example given below will, if it receives a key that is in the `key`
group, and the context ends with a `cons` character, ignore the key and
leave the context alone.

```
any(cons) + any(key) > context beep
```

## Platforms

The `beep` statement can be used in keyboards on all platforms. The
feedback given may differ depending on the platform.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

The beep statement was introduced in Keyman 3.0.

## See also

-   [`match` rule](match)
-   [`nomatch` rule](nomatch)
-   [`nul` statement](nul)
