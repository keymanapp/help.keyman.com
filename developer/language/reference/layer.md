---
title: &layer / layer() statement
---

## Summary

The **`&layer`** system variable store can be used to set or test the
current layer on the touch keyboard.

In the output part of the rule, you can use the **`layer(...)`**
statement to set the current layer. This is equivalent to using
**`set(&layer=...)`**.

## Syntax

```
if(&layer = "layerName") ... > ...
... > ... layer("layerName")
... > ... set(&layer = "layerName")
```

### Parameters

`layerName`
:   The name of the layer in the touch layout (associated with the
    keyboard) to compare against or to switch to.

## Description

The `&layer` store is used to test and set the current layer of the
keyboard from the keyboard code. Some layer controls can also be made
directly in the touch layout itself with the **Next Layer** control, but
the `&layer` store provides for finer control.

When a key in a touch layout definition includes a **Next Layer**
control, this takes precedence over setting layer via the `layer` store
(as the **Next Layer** control is applied once the rule has finished
processing).

## Examples

### Example: Using `&layer`

```
if(&layer = 'default') + 'a' > 'α'
+ 'b' > 'β' layer('shift')
```

## Platforms

The `&layer` store is used in touch platforms. It is ignored on all
other platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✘       | ✘     | ✘     | ✘           | ✔          | ✔   | ✔       |

## Version history

The `&layer` store was added in Keyman 9.0.

## See also

-   [Designing touch layouts with Keyman
    Developer](/developer/current-version/guides/develop/)
-   [`&layoutfile` store](layoutfile)
