---
title: The Keybag
---

The first major part of authoring your keyboard consists in setting up the keybag.

You can think of the keybag as if it were a literal "bag of keys" from which you can bring out a key and place it into the right spot in your layout.

The keybag is not one-for-one with the [repertoire], due to the following reasons:

- There may be text which is of the repertoire which are not typed by the user directly at all, but are accessed via transforms. For example, suppose `œ` were part of the repertoire, but accessed by the user by typing `o` + `e`. There might not be an `œ` key, though it is in the repertoire.

- There may also be more than one key which produces the same output, but has a distinct identity as a key. For example, there might be a key producing `a` which is used on a hardware layer, but also another key also producing `a` on one of the touch layers which has gestures attached to it such as a long press yielding `à`, `á`, `â` etc.  The two `a` keys have diferent identities (`id=` attribute) and differ in other properties.

…

Next, we will learn about customizing key [displays](./displays).

[repertoire]: ./planning#repertoire
