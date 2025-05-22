---
title: call()
---

## Summary

The **`call()`** statement calls an external library.

## Syntax

``` keyman
store(callDefinitionStore) "myimx.dll:KeyEvent"

... > call(callDefinitionStore)
```

### Parameters

`callDefinitionStore`
:   The store which defines the external library function. The format of
    the store is discussed below.

## Description

The **`call`**`()` statement calls an Input Method Extension (IMX) DLL.
Functionally it behaves like the [`use()` statement](use), and can be
used anywhere the `use()` statement is valid except after the [`begin`
statement](begin).

As the **`call`**`()` statement originated on Microsoft Windows, the
definition is based on Windows requirements. The store given must be
referencing a function in an external DLL, which should be installed as
part of a package into the same path as the keyboard.

On Javascript-based platforms, including web, Android and iOS, the
`callDefinitionStore` value is interpreted slightly differently. The DLL
filename is ignored, which means each called function must have a unique
name (i.e. you cannot reference two DLLs from the same keyboard that
have the same function name). The compiler will locate a file with the
name of the function and a '.call_js' extension, and will embed the
source from this file into the compiled keyboard. In the example above,
to compile for KeymanWeb, the file 'KeyEvent.call_js' must exist in the
same folder as the .kmn file. The .call_js file must be encoded in UTF-8
(with or without UTF-8 BOM).

The IMX functionality supports both 32-bit and 64-bit DLLs. A 64-bit DLL
should be named with a .x64.dll extension, rather than just .dll.

The specification for the Windows DLL is available in the [IMX
documentation](/developer/current-version/guides/develop/imx). The
specification for Javascript IMX functions is available in the [IMX Web
documentation](/developer/current-version/guides/develop/imx/web).

## Examples

### Example: Using `call()`

```
store(DLLFunction) "myimx.dll:KeyEvent"
+ any(key) > call(DLLFunction)
```

## Platforms

The `call()` statement can be used in keyboards on the following
platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✘     | ✘     | ✔           | ✔          | ✔   | ✔       |

## <span id="id486825"></span>Version history

Keyman 8.0: Added support for x64.

Keyman 8.0: Added support for web IMX.

The call statement was introduced in Keyman 6.0.

## See also

-   [IMX Interface for Keyman
    Desktop](/developer/current-version/guides/develop/imx/)
-   [IMX Interface for
    KeymanWeb](/developer/current-version/guides/develop/imx/web)
-   [`use()` statement](use)
