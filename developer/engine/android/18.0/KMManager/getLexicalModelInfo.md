---
title: KMManager.getLexicalModelInfo()
---

## Summary

The `getLexicalModelInfo()` method returns returns dictionary information of the specified lexical model.

## Syntax

```java
HashMap<String,String> KMManager.getLexicalModelInfo(Context context, int index)
```

### Parameters

`context`
: The context.

`index`
: Zero-based index of the installed lexical model

### Returns
Returns a dictionary containing information on the specified lexical model.


## Description
Use this method to get details about a specified lexical model. (language and keyboard information)

## Examples

### Example: Using `getLexicalModelInfo()`

The following code illustrates the use of `getLexicalModelInfo()`:
```java
    // Gets information on the first installed lexical model
    HashMap<String, String> lexicalModelInfo = KMManager.getLexicalModelInfo(context, 0);
```
