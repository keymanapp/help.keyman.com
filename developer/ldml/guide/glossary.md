---
title: Glossary for LDML
---

## B {#b-glossary}

### BCP 47 language tag

A standardized code that is used to identify human languages on the Internet.
More on [BCP 47](https://www.rfc-editor.org/info/bcp47).

There are many possible subtags, but only three types are currently used in most
places in Keyman Developer:

* [language
  subtag](../../current-version/reference/bcp-47#toc-the-language-subtag)
* [script subtag](../../current-version/reference/bcp-47#toc-the-script-subtag)
* [region subtag](../../current-version/reference/bcp-47#toc-the-region-subtag)

More information about BCP 47 language tag and full details on [how they are
used in Keyman Developer](../../current-version/reference/bcp-47).

## G {#g-glossary}

### Gestures

On a [touch keyboard](#touch-keyboard), a gesture refers to an action other than
a simple touch/tap on the key.  Gestures are used to access features of the
keyboard which may be less commonly used, but to save space by not requiring a
additional key.  For example, a long press on the `e` key might result in being
able to choose accented letters such as `é` and others without needing to have
both an `e` and an `é` key in the same layer.

The gestures supported by LDML are:

* Flicks: where the finger slides off of the key in a particular direction.

* Multitap: where the key is tapped multiple times in rapid succession.
    Sometimes known as a **rota**.

* Long press: where the key is held down for a period of time, producing a
    pop-up menu of additional choices.

## H {#h-glossary}

### Hardware keyboard

A hardware keyboard refers to the assignment of a particular physical
arrangement of keys. Basic assignments of key function are based on which
modifiers are held down at the same time as a key is pressed. For an LDML
keyboard, more complicated multi-key sequences are accomplished using
[transforms](./transforms).

Compare to [touch keyboard](#touch-keyboard)

## T {#t-glossary}

### Touch keyboard

A touch keyboard is one that is meant to be shown on screen, activated by finger
touch or other gestures.  It can have multiple layers, switchable by choosing
other keys.  For example, there may be a key which switches to a layer
containing numbers, or a key which switches to a layer containing uppercase
letters.
