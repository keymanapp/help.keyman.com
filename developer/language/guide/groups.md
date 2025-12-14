---
title: Using Groups
---

Groups provide a facility for grouping related rules, similar to functions in
other programming languages. When used effectively, groups can reduce the size
and complexity of your keyboards significantly.

Groups can match on context only, or on context and keystroke. The context-only
groups can be very useful for pre- and post-processing rules, such as reordering
stacked diacritics.

In Keyman 15.0 and later versions, groups can also be read-only. This is
important for contexts where emitting output is not possible, such as when a
new context is selected.

Only the first rule in the group that matches will be fired. There are two
special rules, [`match`](../reference/match) and
[`nomatch`](../reference/nomatch) that will then fire if a rule is either
matched or not matched, respectively. The criteria for not matching is a little
more nuanced, however, as a keystroke is deemed to have not matched only if it
would have generated a character anyway, so <kbd>F1</kbd> would not fire the
`nomatch` rule, unlike a character key.

Rules in a group have a special order. They are ordered first by length of
context, with longest context first, and then by line order in the file. This
slightly non-intuitive ordering makes it much simpler to group rules according
to their function, rather than necessarily by their priority.

The examples below show the three types of groups.

```
group(mygroup)                   c context only
  'a' > 'b'

group(mygroup) readonly          c read only
  'a' > context set(aPressed = '1')

group(mygroup) using keys        c context and keystroke
  'a' + 'a' > 'c'
```

Group names may contain nearly any Unicode character. Only control characters,
non-characters (e.g. U+FFFF), space characters (e.g. U+0020, U+00A0),
parentheses (`(`,`)`), brackets (`[`,`]`), and commas (`,`) are not allowed.
Whitespace is allowed, but not required, around the parentheses for the group
statement:

```
c these are both valid:
group(main)using keys
group ( main )
```

## `using keys` clause

To tell Keyman that the group should include key processing, you should include
the `using keys` section of the statement; if that is left out, the group checks
the context only. The keystroke will remain the same during processing; you can
have many groups that each use `using keys`, and the keystroke will be the same
for all of them. The key section of a rule (including the `+` sign) is not valid
for context processing groups.

## `readonly` clause

Read-only groups are new in Keyman 15. They are used primarily from `NewContext`
and `PostKeystroke` entry points, and indicate that text output is not permitted
from rules within the group. The purpose of these groups is typically to change
the current layer of the touch keyboard, or perform similar state updates.

[`use()` statements](../reference/use) in a read-only group may only reference
other read-only groups.

An implicit [`context` statement](../reference/context) is added to the front of
every rule output in a read-only group, if it is not already present, to ensure
that the input context is not modified. As it is not legal to have an empty
output, you may use the `context` statement, not the `nul` statement on the
right-hand side of an otherwise empty output.

In a read-only group, only the following output statements are permitted:

* [`call()`](../reference/call) - the custom function must not attempt to do any
  output
* [`context`](../reference/context) - only at the start of the output
* [`use()`](../reference/use) - use other `readonly` groups
* [`set()`](../reference/set)
* [`reset()`](../reference/reset)
* [`save()`](../reference/save)

See [Casing Support](casing-support) for a comprehensive example of
how read-only groups are used.

## `use` statement

The [`use()`](../reference/use) statement allows you move into another group
when a rule is matched. All output from the current group preceding the `use()`
statement is processed into the context before the subsequent group is entered
(although it is not sent to the application until processing finishes for the
current keystroke). For example:

```
c This example prohibits two vowels in a row
store(vowel) 'aeiouAEIOU'

begin Unicode > use(precheck)

group(precheck)
any(vowel) > context use(precedingVowel)
nomatch > use(main)    c Preceding character is not a vowel. Do normal processing.

group(precedingVowel) using keys
+ any(vowel) > beep
nomatch > use(main)    c This key is not a vowel. Do normal processing.

group(main) using keys
c Main processing goes here
```

Some important things to note from this example:

The first rule (`any(vowel) > context use(precedingVowel)`) uses the
[`context`](../reference/context) statement to copy the matched context to the
output, so that Keyman can move it back into the context for use with the
`precedingVowel` group. If you do not do this, the context will be dropped
before `precedingVowel` is used, and the character will be deleted from the
screen.

**Note:** the `match` rule will **not** be fired if the rule in the group that
was matched includes a `use()` statement in its output. A workaround for this
situation is to duplicate the `match` rule output in the output of rules that
contain `use()` statements. A more comprehensive solution may be included in
future versions of the language.

## Empty final group

There is a side-effect of keystroke processing, when the last group that is
processed during a keystroke event has the following properties:

1. it is a context and keystroke group (`using keys`), and
2. is has no `nomatch` rule, and
3. it has no rule matching the keystroke

In this situation, the keystroke will be emitted to the application, even if it
was matched in earlier groups.

See [Control keys and control characters](control-keys) for further discussion.

### Example with Enter or Tab

This is can helpful, for example, if you want to process a change at the end of
a word which might be the last word in a line or in a text field, where the user
presses <kbd>Enter</kbd> or <kbd>Tab</kbd>:

```
begin Unicode > use(main)

group(main) using keys

+ 's' > 'σ'
'σ + [K_ENTER] > 'ς' use(final)
'σ + [K_TAB] > 'ς' use(final)

group(final) using keys
c Empty group causes keystroke to be emitted
```

Note: the name of the group is not significant.

## Statements and rules used with groups

The following statements and special rules are used with groups:

[`begin` rule](../reference/begin)
: Defines the starting group for the keyboard layout

[`group()` statement](../reference/group)
: Starts a new group of rules

[`match` rule](../reference/match)
: A system rule that is fired when another rule in the group is matched

[`nomatch` rule](../reference/nomatch)
: A system rule that is fired when no rule is matched

[`return` statement](../reference/return)
: Stops processing of the current keystroke

[`use()` statement](../reference/use)
: Starts processing in another group

## Version history

* Keyman 19.0 tightened the validity of store names (disallowing space, comma,
  non-characters, parentheses, square brackets)
