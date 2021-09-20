---
title: KMManager.applyKeyboardHeight()
---

## Summary
The **applyKeyboardHeight()** method sets the height of the keyboard frame.

## Syntax
```java
KMManager.applyKeyboardHeight(Context context, int height)
```

### Parameters

`context`
: The context

`height`
: The height of the keyboard frame in *density-independent pixels (dp)*

## Description
Use this method when you want to increase or decrease the keyboard height. 
This height is independent from the height of the suggestion banner frame.

**Note:** This new keyboard height would be applied for all platforms, so an 
adjusted keyboard height for a phone would appear too small for a tablet.

## Examples

### Example: Using `applyKeyboardHeight()`
The following script illustrates the use of `applyKeyboardHeight()`:

```java
    // Increase the Keyman keyboard height (default Keyman value for most phones is 205dp)
    int newKeyboardHeight = 300;
    KMManager.applyKeyboardHeight(this, newKeyboardHeight);
```

## See also
* [getKeyboardHeight()](getKeyboardHeight)
