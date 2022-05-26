---
title: KMManager.setHapticFeedback()
---

## Summary
The **setHapticFeedback()** method sets whether the keyboard vibrates as the user types.

## Syntax
```java
KMManager.setHapticFeedback(boolean value)
```

### Parameters
value

Set `true` to enable keyboard vibrating as the user types, `false` to disable.

## Description
Use this method to enable or disable haptic feedback. This determines if the keyboard vibrates as the user types. 
By default, haptic feedback is disabled.

## Examples

### Example: Using setHapticFeedback()
The following script illustrates the use of `setHapticFeedback()`: 
```java
    // Enable haptic feeedback
    KMManager.setHapticFeedback(true);
```

## History
Added syntax in Keyman Engine for Android 15.0.

## See also
* [getHapticFeedback](getHapticFeedback)
