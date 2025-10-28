---
title: Using Rules
---

A rule is the basic part of a Keyman keyboard. Each rule defines what a
keystroke will output, when certain characters are already displayed on
the screen. A rule is also used to pre-process and post-process the
characters being output to the screen.

A rule is made up of three parts:

```keyman
context + keystroke > output
```

The *context* refers to what is already displayed on the screen. A rule
will only be fired if the context and the keystroke both match. The
*output* will replace the context matched on the left hand side of the
rule.

### Example: key sequences
```
+ 'A' > 'Ж'
+ 'B' > 'Z'
'Z' + 'Ж' > 'տ'
```

In advanced [groups](groups), the *keystroke* section of the rule may be
omitted for processing on the context and output.

## Rule Order {#rule-order}

Rules have a special order. They are ordered first by length of context,
with longest context first, and then by line order in the file. This
slightly non-intuitive ordering makes it much simpler to group rules
according to their function, rather than necessarily by their priority.

See also [groups](groups).

## Statement Use {#statement-use}

The three different parts of a rule may contain Unicode characters and
various statements.

### Context Statement Use {#context-statement-use}

The *context* part of the rule may contain Unicode characters and certain statements:

[`nul` statement](../reference/_nul)
:   Enforces empty context.

[`if()` statement](../reference/if)
:   Tests a store or system state for a value

[`baselayout()` statement](../reference/baselayout)
:   Determines the current system hardware keyboard layout

[`platform()` statement](../reference/platform)
:   Determines the current platform keyboard is operating on

[`any()` statement](../reference/any "any() statement")
:   Matches on an array of characters

[`context` statement](../reference/context "context statement")
:   Outputs the context part of a rule (single character only)

[`deadkey()`, `dk()` statement](../reference/deadkey "deadkey(), dk() statement")
:   Matches and generates deadkeys

[`index()` statement](../reference/_index "index() statement")
:   Outputs from an array of characters

[`notany()` statement](../reference/notany "notany() statement")
:   Matches anything not in a particular array of characters

[`outs()` statement](../reference/outs "outs() statement")
:   Outputs an array of characters

Certain statements must appear in specific positions in the rule. The following order is enforced by the compiler:

1. `nul`
2. `if()`, `baselayout()` and `platform()`
3. All other statements and characters

### Keystroke Statement Use {#keystroke-statement-use}

The *keystroke* part of the rule may contain a Unicode character representing
the value on the key cap of the base keyboard, a virtual key, a virtual
character key, or one of the following statements:

[`any()` statement](../reference/any "any() statement")
:   Matches on an array of characters

[`outs()` statement](../reference/outs "outs() statement")
:   Outputs an array of characters

Only a single character, statement, virtual character key or virtual key is
allowed in the keystroke part of the rule.

* [Keys, virtual keys, and virtual character Keys](virtual-keys)

### Output Statement Use {#output-statement-use}

The *output* part of the rule may contain Unicode characters and certain statements:

[`beep` statement](../reference/beep "beep statement")
:   Generates a beep on the speaker (or a flash on web devices)

[`call()` statement](../reference/call "call() statement")
:   Calls an Input Method Extension

[`context` statement](../reference/context "context statement")
:   Outputs the context part of a rule

[`deadkey()`, `dk()` statement](../reference/deadkey "deadkey(), dk() statement")
:   Matches and generates deadkeys

[`index()` statement](../reference/_index "index() statement")
:   Outputs from an array of characters

[`layer()` statement](../reference/layer "layer() statement")
:   Sets the current touch keyboard layer visible on the on screen
    keyboard

[`nul` statement](../reference/_nul "nul statement")
:   Forces no output on a rule, or enforces empty context

[`outs()` statement](../reference/outs "outs() statement")
:   Outputs an array of characters

[`reset()` statement](../reference/reset "reset() statement")
:   Resets a store to its initial value

[`return` statement](../reference/return "return statement")
:   Stops processing of the current keystroke

[`save()` statement](../reference/save "save() statement")
:   Persists a store value for next edit session

[`set()` statement](../reference/set "set() statement")
:   Sets a store or system state to a specific value

[`use()` statement](../reference/use "use() statement")
:   Starts processing in another group

**Note:** In [read-only groups](groups#readonly-clause), only a subset of these
statements may be used.

## context statement {#context-statement}

One of the important statements that can be used in rules is the
`context` statement.

The [`context` statement](../reference/context) will transfer the
*context* of the rule into the *output*, for example:

```keyman
"abc" + "d" > context "D"
```

will, when `abc` is on the screen, and <span class="key">d</span> is
pressed, replace `abc` with `abcD`. You can also put a single character
from the context into the output using `context()`:

```keyman
"abc" + "d" > "D" context(2)
```

This will output `Db` when <span class="key">abcd</span> is typed.

## History

* 14.0: The compiler now enforces order of statements within the context part of the rule
