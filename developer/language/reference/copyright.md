---
title: &copyright
---

## Summary

The **`&copyright`** store allows a keyboard author to embed a copyright
statement in a keyboard when it is compiled.

## Syntax

```
store(&copyright) "message"
```

### Parameters

`message`
:   A copyright message that will be displayed verbatim in the copyright
    area of the keyboard metadata display in the Keyman user interface.

[!NOTE]
**The `COPYRIGHT` header is deprecated and will be not be supported for
keyboards that target Keyman 19.0 or later. Instead the `&copyright`
store should be used.**

## Examples

### Example: Using `&copyright`

```
store(&copyright) "Copyright © 2001 Joe Bloggs"
```

## Platforms

The `&copyright` store can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|---------|-------|-------|-------------|------------|-----|---------|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

The `&copyright` store was introduced in Keyman 5.0, deprecating the
`COPYRIGHT` header statement

The `COPYRIGHT` statement was introduced in Keyman 4.0.
