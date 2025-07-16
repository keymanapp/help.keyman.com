---
title: The Keybag
---

The first major part of authoring your keyboard consists in setting up the keybag.

## What's in the Keybag?

You can think of the keybag as if it were a literal "bag of keys" from which you can bring out a key and place it into the right spot in your layout.

The keybag is not one-for-one with the [repertoire], due to the following reasons:

- There may be text which is of the repertoire which are not typed by the user directly at all, but are accessed via transforms. For example, suppose `œ` were part of the repertoire, but accessed by the user by typing `o` + `e`. There might not be an `œ` key, though it is in the repertoire.

- There may also be more than one key which produces the same output, but has a distinct identity as a key. For example, there might be a key producing `a` which is used on a hardware layer, but also another key also producing `a` on one of the touch layers which has gestures attached to it such as a long press yielding `à`, `á`, `â` etc.  The two `a` keys have diferent identities (`id=` attribute) and differ in other properties.

- Rarer, but it may be possible that a key producing the same output intentionally has a different keycap display in two different contexts. Keys are identified by a unique identifier, so unique keys can have unique key [displays].

## Defining keys in the Keybag

Keys are defined by the [key] element within the [keys] element, as seen in a simple example:

```xml
<keys>
    <key id="A" output="A" />
    <key id="B" output="B" />
    <key id="C" output="C" />
    <key id="lambda" output="λ" />
    <key id="ক" output="ক" />
</keys>
```

Note that the identifier doesn't have to be plain ASCII.

In the following sections we will discuss more advanced uses of keys.

## Gap

## Marker key

## Key width


Next, we will learn about customizing key [displays].

[repertoire]: ./planning#repertoire
[displays]: ./displays
