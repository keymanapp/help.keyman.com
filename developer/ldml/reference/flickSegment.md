---
title: flickSegment
---

## Summary

The **`flickSegment`** element represents one particular set of gestures which
will produce a specific output.

## Syntax

```xml
<flickSegment>
</flickSegment>
```

### Attributes

`id` :   The …

## Description

The `flickSegment` element is used to represent one set of gestures (an ordered
path), and their output. For example,  "Sliding the touch North produces `A`".
It could include more than one keyword, such as "Sliding the touch West and then
South produces `B`".

### Directions

The following table attempts to show the eight directions supported by the
format, relative to the center (•). So `nw` for Northwest means diagonally
Up-and-Left, whereas `e` for East means directly to the right.

|      |     |      |
|------|-----|------|
| `nw` | `n` | `ne` |
|  `w` |  •  | `e`  |
| `sw` | `s` | `se` |

## Examples

### Example: Using `flickSegment`

```xml
<flickSegment>
</flickSegment>
```

## Version history

The `flickSegment` element was added in LDML v46

<!-- ## See also

- … -->

## See Also

- LDML Specification: [`<flickSegment>` in UTS#35 Part
  7][tr35-element-flickSegment]

[tr35-element-flickSegment]:
    https://www.unicode.org/reports/tr35/tr35-keyboards.html#element-flicksegment

