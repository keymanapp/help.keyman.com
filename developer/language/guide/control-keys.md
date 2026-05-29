---
title: Control keys and control characters
---

This document outlines current best practices for circumstances in which it can
be helpful to process control keys such as <kbd>Tab</kbd>, <kbd>Enter</kbd>, and
<kbd>Backspace</kbd> (not the <kbd>Ctrl</kbd> key, which is a modifier key), or
work with control characters such as Carriage Return (CR, `U+000D`), Line Feed
(LF, `U+000A`), or Tab (`U+0009`).

# Control keys

When a keyboard does not have any reference to control keys, Keyman does not attempt
to interpret or modify key events for these keys, and passes the event on to the
application, which will handle them as normal.

For example, in Microsoft Word, <kbd>Tab</kbd> may insert a tab into the
document, or move to the next cell in a table -- and Keyman cannot know which of
these will happen. Or in a form, <kbd>Enter</kbd> may submit the form, rather
than inserting a new line character into the current field.

Handling a control key can be helpful if you want to process a change at the end
of a word which might be the last word in a line or in a text field, where the
user presses <kbd>Enter</kbd> or <kbd>Tab</kbd>.

Now, Keyman does not allow keys in the output part of a rule. At first glance,
this would seem to make it impossible to handle a key event from a control key
and still get its default behavior in the application. However, we can make use
of a pattern using multiple groups: an [empty final group](groups#empty-final-group)
will pass the key event on to the application.

The following example for Greek illustrates this pattern; compare how
<kbd>Space</kbd> and <kbd>Enter</kbd> have been handled:

```
+ 's' > $medialSigma

c Transform medial sigma at end of word to final sigma
$medialSigma + [K_SPACE] > $finalSigma ' '

c If Enter key is pressed after a medial sigma, transform that to
c a final sigma, then pass the Enter key on to the application
$medialSigma + [K_ENTER] > $finalSigma use(emit)

c ...

group(emit) using keys
c this empty group will emit the original keystroke
```

## Backspace

It can also be helpful in Keyman to handle the <kbd>Backspace</kbd> key in a
number of situations: decomposing characters, reordering, or deleting multiple
components together. Keyman allows this with rules matching `[K_BKSP]`.

For example, in Khmer, subscript consonants are encoded with a subscript
("coeng") marker `U+17D2`, followed by the consonant character. The [Khmer
Angkor keyboard](https://github.com/keymanapp/keyboards/blob/master/release/k/khmer_angkor/source/khmer_angkor.kmn)
treats these two characters as a single element in its touch keyboard, so the
user will never even see the coeng marker character. When <kbd>Backspace</kbd>
is pressed, the keyboard deletes both characters together:

```
platform('touch') U+17D2 any(consonant) + [K_BKSP] > nul
```

Pressing the <kbd>Backspace</kbd> key at the start of a text block in a complex document
may delete a break (or formatting) before the text block; 
for example, it may delete a bullet from a bullet
list. You should avoid overriding this behavior, which is application-specific.

```
nul + [K_BKSP] > nul     c DO NOT DO THIS
+ [K_BKSP] > nul         c DO NOT DO THIS EITHER
```

# Control characters in output

It is best to never emit control characters from a Keyman rule. Applications
may not be expecting control characters from the keyboard and there may be
unexpected consequences, such as inserting a new line character into a single
line text field. See the [Control keys](#toc-control-keys) section for a strategy
for emitting default key events instead.

This does mean that you cannot really change the behavior of control keys with
Keyman (apart from suppressing the key behavior altogether). This is outside the
current scope of Keyman's design.

# Control characters in context

While Keyman keyboards should not emit control characters, there are use cases
for detecting control characters in the context.

In a Polytonic Greek keyboard, you may wish to automatically insert breathing
marks at the start of words. In a touch keyboard, you may want to [recognize the
start of a sentence](casing-support) and switch to a Shift layer.

However, you do need to be careful here. When recognizing the control character
in the context, it is easy to accidentally emit the control character in the
output. For example, the following rule in a Hindi keyboard may appear harmless,
but actually deletes and re-inserts the LF character, which can be problematic
in some applications:

```
  c linebreak, add full svara.
  U+000A U+094D > U+000A U+0905 c a    c DO NOT DO THIS
```

Instead, we can make use of how Keyman applies the [`context`](../reference/context)
statement. When Keyman encounters the `context` statement at the start of the
output, it does not delete and re-insert the characters found there. So we can
process the required character change in a separate group, without accidentally
touching the control character:

```
  U+000A U+094D > context use(full-svara-after-lf)

  group(full-svara-after-lf)

  c here we know that we have an LF immediately prior
  U+094D > U+0905 c a
```

This behavior is present from v6.0 of Keyman, but may be improved
in a future version, so that working around this in the keyboard becomes
unnecessary [issue #14718](https://github.com/keymanapp/keyman/issues/14718).

Using control characters in the context in a [`readonly`
group](groups#readonly-clause) is safe; no special handling is required.

# Non-breaking space (NBSP) in context

Non-breaking space (NBSP, U+00A0) is used in the digital world to prevent automatic line
breaks from being inserted between two words. Said another way, it prevents two words
being separated on to two separate lines. In some applications NBSP are returned in the
context to Keyman. Therefore in this case NBSP should be considered in a rule that detects
a blank space.

A example taken from the [greek_tonzio keyboard](https://github.com/keymanapp/keyboards/tree/master/release/g/greek_tonizo). This keyboard uses stores; see  [`store()`](../reference/store):

```
c Characters usually found before words  These characters are Space, parenthesis, quotes etc and to this we add the nbsp 
store(beforeWordChars)  U+0020 U+0028 U+002D U+0027 \
                        U+0022 U+003A U+007B U+00AB \
                        U+00B6 U+00A9 U+000A U+00A0 

c These are the characters [ ἀ ἐ ἠ ἰ ὀ ὑ ὠ Ἀ Ἐ Ἠ Ἰ Ὀ Ὑ Ὠ]                        
store(fwnWithBreathing) U+1F00 U+1F10 U+1F20 U+1F30 U+1F40 U+1F51 U+1F60 \
                        U+1F08 U+1F18 U+1F28 U+1F38 U+1F48 U+1F59 U+1F68
```

Then we can have a rule that adds the breathing when the encountering a "before word" character:
```
c ------- GENERAL RULE: AUTOMATIC PSILI AT BEGINNING OF WORD STARTING WITH VOWEL ------
any(beforeWordChars) + any(vowels) > context index(fwnWithBreathing,2)
```

A simple example: when <kbd>e</kbd> is pressed, output an `ἐ` after a space, and output `ε` otherwise:
```
store(spaceChrs)  U+0020 U+00A0 
c This nbsp Unicode Character is U+00A0 and space is U+0020. 
+ [K_E] > U+03B5
any(spaceChrs) + [K_E] > context U+1f10
```

# References

* [Issue #14148](https://github.com/keymanapp/keyman/issues/14148#issuecomment-3269582559)
* [Issue #14718](https://github.com/keymanapp/keyman/issues/14718)
