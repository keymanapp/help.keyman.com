---
title: KMManager.getMaySendCrashReport()
---

## Summary
The **getMaySendCrashReport()** method returns whether Keyman Engine is allowed to send crash reports over the network to sentry.keyman.com.

## Syntax
```java
KMManager.getMaySendCrashReport()
```

## Returns
Returns `true` if crash reports can be sent over the network to sentry.keyman.com, `false` otherwise.

## Description
Use this method to check if Keyman Engine will be accessing the network to send crash reports.

## Examples

### Example: Using getMaySendCrashReport()
The following script illustrates the use of `getMaySendCrashReport()`: 
```java
    if (KMManager.getMaySendCrashReport()) {
        // do something
    } 
```

## See also
* [setMaySendCrashReport](setMaySendCrashReport)
