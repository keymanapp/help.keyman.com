---
title: Using constraint rules 
---

Constraints are rules that restrict certain combinations from being
typed. Constraints can be made with any rules, even `match` or `nomatch`
rules.

Typical constraints would reject isolated keystrokes, keystrokes
following a certain context, or certain context and keystroke
combinations.

## Rejecting keystrokes {#rejecting-keystrokes}

To make a keystroke produce no output, you use the [`nul`
statement](../reference/nul). For example, we could use the following
rule to prevent the user from typing "Q":

    + "Q" > nul

In some cases, you might want to let the user know that they typed an
illegal key; for this you would use the [`beep`
statement](../reference/beep). The `beep` statement, like the `nul`
statement, produces no output, but it plays the sound assigned to
"Default Beep" in the Sounds Control Panel.

    + "Q" > beep

One difference between the `nul` and `beep` statements is that the `nul`
statement is only valid as the whole output, while the `beep` statement
can be used as just a part of the output.

## Rejecting keystrokes after a context {#rejecting-keystrokes-after-a-context}

In order to reject a keystroke following a certain context, you make the
rule output just the context. Logically, you use the `context` statement
for this:

    "ba" + "d" > context

This would have the effect of ignoring the "d": the output would be the
context, so to the user it would appear as though they had never typed
the "d". You can also use the `beep` statement here to aurally alert the
user that they typed a bad word.

    "ba" + "d" > context beep

## Rejecting both context and keystroke {#rejecting-both-context-and-keystroke}

In certain special situations, you might wish to reject both the context
and the keystroke. You can use the `nul` statement to achieve this aim:

    "eras" + "e" > nul

This would effectively erase the context and the key. As in both
situations above, you can also use the `beep` statement here to alert
the user with a warning beep:

    "eras" + "e" > beep

## Typical usage of constraints {#typical-usage-of-constraints}

For a typical keyboard, you might use a constraint in a [`nomatch`
rule](../reference/nomatch), to prevent the user from typing anything
that is not matched by another rule.

Alternatively, you might want to restrict a few certain combinations: in
this case you might put specific constraint rules in the first group of
a keyboard, and use a `nomatch` rule to process all other (allowed)
input with another group. The separation of legal and illegal input into
separate groups will make the keyboard's operation clearer.

## See also

-   [`nul` statement](../reference/nul "nul statement")
-   [`beep` statement](../reference/beep "beep statement")
-   [`nomatch` rule](../reference/nomatch "nomatch rule")
