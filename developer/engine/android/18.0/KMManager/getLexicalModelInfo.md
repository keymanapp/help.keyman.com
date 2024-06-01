---
title: KMManager.getLexicalModelInfo()
---

## Summary

The `getLexicalModelInfo()` method returns returns dictionary information of the specified lexical model.

## Syntax

```java
KMManager.getLexicalModelInfo(Context context, int index)
```

`context`
: The context.

`index`
: Non-negative position of the installed lexical model

### Returns
Returns a dictionary containing information on the specified lexical model.


## Description
Use this method to get details about a sepcified lexical mode. (language and keyboard information)

## Examples

### Example: Using `getLexicalModelInfo()`

The following code illustrates the use of `getLexicalModelInfo()`:
```java
    // Gets information on the first installed lexical model
    HashMap<String, String> lexicalModelInfo = KMManager.getLexicalModelInfo(context, 0);
```
