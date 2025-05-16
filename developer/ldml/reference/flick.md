---
title: flick
---

## Summary

The **`flick`** element represents a set of possible flick gestures.

## Syntax

```xml
<flick>
</flick>
```

### Attributes

`id`
:   The identifier for this flick. Only one flick may have this identifier, but it doesn't have to be diffrent from any other kinds of identifiers.

## Description

The **`flick`** element represents a set of possible flick gestures which can result in output text.

The element is referenced by its id, allowing multiple [`<key>`](key) elements to reference and reuse the same flick set.

## Examples

### Example: Using `flick`

```xml
<flick id="a">
</flick>
```

## Version history

The `flick` element was added in LDML v46

<!-- ## See also

- … -->
