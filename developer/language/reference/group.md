---
title: group() statement
---

## Summary

The `group()` statement defines a set of rules to be processed together.

## Syntax

```keyman
group(groupName)
group(groupName) using keys
group(groupName) readonly
```

### Parameters

`groupName`

: The unique name of the group, which can be referenced by [`use()`
statements](use).

The `group()` statement tells Keyman to start a new set of rules. Keyman
supports three sorts of groups: key processing groups, read-only groups, and
context processing groups. Key processing groups can include context checking,
but context processing groups cannot include key checking. Read-only groups,
like context processing groups, cannot include key checking. Keyman will use
first the group specified in the [`begin` statement](begin), and move from
there onto other groups.

To tell Keyman that the group should include key processing, you should include
the `using keys` section of the statement; if that is omitted, the group checks
only the context. The keystroke will remain the same during processing; you can
have many groups that each use `using keys`, and the keystroke will be the same
for all of them. The key section of a rule (including the `+` sign) is not valid
for context processing groups.

#### Read-only groups

Read-only groups are new in Keyman 15. They are used primarily from `NewContext`
and `PostKeystroke` entry points, and indicate that text output is not permitted
from rules within the group. The purpose of these groups is typically to change
the current layer of the touch keyboard, or perform similar state updates.

[`use()` statements](use) in a read-only group may only reference other
read-only groups.

An implicit [`context` statement](context) is added to the front of every rule
output in a read-only group, if it is not already present, to ensure that the
input context is not modified. As it is not legal to have an empty output, you
may use the `context` statement, not the `nul` statement on the right-hand side
of an otherwise empty output.

In a read-only group, only the following output statements are permitted:

* [`call()`](call) - the custom function must not attempt to do any output
* [`context`](context) - only at the start of the output
* [`use()`](use) - use other `readonly` groups
* [`set()`](set)
* [`reset()`](reset)
* [`save()`](save)

## Examples

### Example: Using `group()`

See [Casing Support](../guide/casing-support) for a more comprehensive example of `readonly` groups.

```
group(main) using keys
  + [K_K] > U+0E01

group(syllablecheck)
  any(cons) any(vowel) any(cons) > context $nbsp

group(nextLayer) readonly
  '. ' > layer('shift')
```

## Platforms

The `group()` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
|     ✔   |   ✔   |   ✔   |      ✔      |      ✔     |  ✔  |    ✔   |

## Version history

* The group construct was introduced in Keyman 3.0.
* The `readonly` group type was introduced in Keyman 15.0.

## See also

* [Using groups](../guide/groups)
* [Casing support](../guide/casing-support)
* [`use()` statement](use)
