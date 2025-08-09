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
    <key id="uppercase-c" output="C" />
    <key id="lambda" output="λ" />
    <key id="ক" output="ক" />
</keys>
```

Note that the identifier doesn't have to be plain ASCII, as in the last key shown above, which has the ID of `ক`.

In the following sections we will discuss more advanced uses of keys.

## Switch Keys

A key within a touch layout can switch to a different [layer](./layers) by use of the `layerId` attribute, which names another layer. For example, this key switches to the "numbers" layer:

```xml
<key id="switch-numbers" layerId="numbers" />
```

Such a key would otherwise have a blank keycap (because it doesn't produce any output), so it is recommended to use a [`display`](./displays) element to give it an identifiable appearance. See the [displays](./displays#example-displays-element) section for an example.

## Key Geometry

### Width

Keys are normally the same width (width="1" or width="1.0"). In some cases, a key is given a larger width for layout reasons.
The Khmer letter naa "ណ" is a little wider, so the key could be made wider to match. Widths are in tenths of a key width.

```xml
    <key id="naa" width="1.8" output="ណ" />
```

### Gap

Sometimes on a key layout, it can be useful to have a blank area without any keys. For example, a shifted layer may not have a shifted key defined for each base key.  The `gap="true"` attribute indicates that a key is a gap and has no output and no key cap display.

There is a pre-defined key named `gap` that has the gap attribute set. It is possible to add
additional gap keys if desired. The following defines `gap` as its normal definition, and then defines a 3-key wide gap.

```xml
<key id="gap" gap="true" /> <!-- This is implied, but we can define it explicitly.-->
<key id="widegap" gap="true" width="3" />
```

### Stretch

The stretch attribute defines a key that expands to fill all available horizontal space.
This is used with the spacebar.

```xml
<key id="space" output=" " stretch="true" />
```

## Marker key

Markers are discussed in more detail [markers](./markers) and [transforms](./transforms).
For this discussion, it's used with a key that doesn't generate any actual output, but represents an invisible
non-text data item that is used for later processing.

```xml
<key id="accent-grave" output="\m{grave}" />
```

The marker's id here is `grave`.

Next, we will learn about customizing key [displays].

[repertoire]: ./planning#repertoire
[displays]: ./displays
[keys]: ../reference/keys
[key]: ../reference/key
