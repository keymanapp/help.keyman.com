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

Each layer has an optional id, and a required modifier set.  The id is used to distinguish layers when using keys that switch layers. Also, the layer with the id of `base` is the default layer for touch keyboards.

### Modifiers

Each layer has a set of modifiers defined. For hardware keyboards, this specifies which layer will be selected based on the modifiers in the hardware keyboards.

## Overview of Layers and Layer Groups

Here is a reference image to help you understand layers and layer groups.

![Image showing three layer groups. First, a layer group for hardware, with a base and shifted layer.  Then, a layer group for touch or mobile devices, that is less than (in this example) 100 millimeters wide, having a "123" key to switch to numbers. Finally, a layer group for wider or tablet devices, that is a width of 100 or greater millimeters, having a separate number row above the keyboard.](/cdn/dev/img/developer/ldml/layers.png)
