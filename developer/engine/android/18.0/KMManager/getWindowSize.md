---
title: KMManager.getWindowSize()
---

## Summary

The `getWindowSize()` method returns the size of the area the window would occupy.

## Syntax

```java
KMManager.getWindowSize(Context context)
```

`context`
: The context.

### Returns
Returns the window size (native resolution) of the display as (int x, int y).

## Description
Use this method to get the size of the entire display. It may or may not include [system decoration areas](https://developer.android.com/reference/android/view/Display)

## Examples

### Example: Using `getWindowSize()`

The following code illustrates the use of `getWindowSize()`:
```java
    Point size = KMManager.getWindowSize(context);
    int screenHeight = size.y;
```

## See also
* [getWindowDensity](getWindowDensity)