---
title: KMManager.getLanguageCorrectionPreferenceKey()
---

## Summary
A constant to use as a shared preference key to store whether the LMLayer should enable corrections for a given language.

## Syntax
```java
KMManager.getLanguageCorrectionPreferenceKey(String langID)
```

### Parameters

`langId`
: The BCP 47 language ID

### Returns
Returns the language correction preference key as a String.

## Description
Use this method to get String that can be used as a shared preference key.

The String is a constant of `langId` plus a suffix `.mayCorrect`.

## Examples

### Example: Using `getLanguageCorrectionPreferenceKey()`
The following script illustrates the use of `getLanguageCorrectionPreferenceKey()`:

```java
    SharedPreferences prefs = ...; // Get the app's shared preferences
    String langID = "ta";    
    boolean key  = KMManager.getLanguageCorrectionPreferenceKey(langID);

    boolean mayCorrect = prefs.getBoolean(key, true);
```

## See also
* [getLanguagePredictionPreferenceKey()](getLanguagePredictionPreferenceKey)
