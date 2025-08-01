---
title: Defining Layers
---

A layer defines are how keys are arranged for display and use.
For hardware layouts, a layer determines which hardware key connects to which key from the keybag.
For touch layouts, or hardware keyboards in an on-screen visual presentation, the layer controls how the keys are displayed on the screen for interaction with the finger or mouse.

## Layer Groups (`layers`)

A layer group or [`layers`](../reference/layers) element occurs one or more times in the keyboard file.
There may be at most one layer group for the hardware keyboard, and then one or more layer group for different widths (sizes) of touch layouts, such as for a phone versus a tablet.  As noted, a hardware layout can be used for on-screen/touch, but a touch layout cannot be used for hardware, so we recommend starting with a hardware layout.

### Hardware Layer Groups

The hardware layer group has a `formId=` attribute referencing the physical layout of the keys, such as `iso` or `us` for the European 102 key layout (with a key between the shift and Z key) and the US 101 key layout (with no key between the shift and Z) respectively.  Other layouts supported include `abnt2`, `jis`, and `ks`.

### Touch Layer Groups

Touch layer groups always have the attribute `formId="touch"`, and are distinguished from each other by the `minDeviceWidth=` attribute, which specifies a minimum width, in millimeters, that the layout group must have.

## Defining a Layer

Now we come to discuss the actual [`layer`](../reference/layer) element.

### Layer ID

The ID is required for touch layers, but is optional for hardware layers. The layer with the ID of `base` is the starting layer.

Keys can switch layers by referencing this layer in their `layerId` attribute.

### Modifiers

The modifiers are required for hardware layers, but are optional for touch layers.

Each layer has a set of modifiers defined. For hardware keyboards, this specifies which layer will be selected based on the modifiers held down. `none` is used for the layer with no modifiers.

For example, `modifiers="none"` or `modifiers="shift"`.  See [`layer`](../reference/layer) for further details.

### Rows

Each layer contains one or more [`row`](../reference/row) elements, in order from top to bottom.

For example, most hardware keyboards have five rows including the space bar.
Note that for hardware layouts, only the "alphanumeric" keys, that is, the keys which produce a character or space, are included.  Shift, Control, and any other device-specific hardware keys are not included.

For touch keyboards, the number of rows is completely up to the keyboard author. Different layers or layer groups do not have to have the same number of rows.

The `keys` attribute of each `row` is a space-separated list of key IDs.

Example:

```xml
<layer modifiers="none">
    <row keys="c-tikka 1 2 3 4 5 6 7 8 9 0 hyphen equal" />
    <row keys="q w e r t y u i o p g-tikka h-maqtugha" />
    <row keys="a s d f g h j k l semi-colon hash" />
    <row keys="z-tikka z x c v b n m comma period slash" />
    <row keys="space" />
</layer>
```

## Overview of Layers and Layer Groups

Here is a reference image to help you understand layers and layer groups.

![Image showing three layer groups. First, a layer group for hardware, with a base and shifted layer.  Then, a layer group for touch or mobile devices, that is less than (in this example) 100 millimeters wide, having a "123" key to switch to numbers. Finally, a layer group for wider or tablet devices, that is a width of 100 or greater millimeters, having a separate number row above the keyboard.](/cdn/dev/img/developer/ldml/layers.png)

