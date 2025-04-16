---
title: if()
---

## Summary

The `if()` statement allows a rule to be applied conditionally on the basis of the content of a variable store.

The `if()` statement can also be used to test the value of certain system stores, such as `&platform`.

## Syntax

```
if(storeName comparison store2) ... > ...
if(storeName comparison constant) ... > ...
if(&systemStore comparison store2) ... > ...
if(&systemStore comparison constant) ... > ...
```

### Parameters

`storeName`
: The variable store to test.

`&systemStore`
: The system store to test. The supported system stores are listed below; see
  associated topics for more detail:

   * [`&platform`](platform) - test the platform the keyboard is running
   * [`&layer`](layer) - test the currently visible layer on a touch keyboard
   * [`&baselayout`](baselayout) - test the hardware base layout the user has
     configured
   * [`&newLayer`](newlayer) - test the name of the new layer, if the previous keystroke changed the layer, or to an empty string otherwise
   * [`&oldLayer`](oldlayer) - test the name of the previously selected layer, if the previous keystroke changed the layer, or to an empty string otherwise

`comparison`
: Either `=` or `!=`, for equal and not equal, respectively.

`store2`
: The name of a store to compare to

`constant`
: A string value to compare to

## Description

The `if()` statement allows any rule to be applied conditionally, depending on
the content of store `storeName`, which can be defined either during keyboard
configuration or dynamically by using a `set()` statement. The content of
`storeName` is tested to see whether it matches (or does not match) a string or
the content of another store, and the following rule used or ignored
accordingly.

A variable store (used in an `if()`, `set()`, `save()` or `reset()` statement)
should not also be used to match context or key, or output in a rule. (Note:
this advice has changed from previous versions of Keyman. The compiler will warn
on this misuse.)

Certain statements must appear in specific positions in the rule. The following
order is enforced by the compiler:

1. `nul`
2. `if()`, `baselayout()` and `platform()`
3. All other statements and characters

## Example

```
if(opt1 = '1') + any(letterGroup1) > index(outputGroup1,2)
```

The rule to output a character from the `outputGroup1` store according to a
keystroke matching a character in store `letterGroup1` will only be applied if
the content of store `opt1` is exactly equal to the string '1'.

Where two or more separate options are held in stores, the different options can
be tested together (logical "AND"):

```
if(opt1 = '1') if(opt2 = '1') + any(letterGroup1) > index(outputGroup1,3)
```

or separately (logical "OR"):

```
if(opt1 = '1') + any(letterGroup1) > index(outputGroup1,2)
if(opt2 = '1') + any(letterGroup1) > index(outputGroup1,2)
```

Applying a rule only on a specific platform (see also
[compile targets](../guide/compile-targets)):

```
if(&platform = 'web') + any(letterGroup1) > index(outputGroup1, 2)
```

## Platforms

The `if()` statement can be used in keyboards on the following platforms.

Currently, only Windows and Linux support the options.htm form to set variable stores
through a configuration user interface.

<table class='platform'>
  <thead>
    <tr><th>Feature</th><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><th>`if()`</th><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
    <tr><th>options.htm</th><td>✔</td><td>✘</td><td>✔</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td></tr>
  </tbody>
</table>

## Version history

The `if()` statement was introduced in Keyman 8.0.

Keyman 9.0: Added support for variable system stores.

Keyman for macOS 11.0.221 added support for `if()`, `set()`, `save()` and `reset()` for variable stores.

## See also

* [Using variable stores](../guide/variable-stores)
* [`baselayout()` statement and &baselayout system store](baselayout)
* [`layer()` statement and &layer system store](layer)
* [`platform()` statement and &platform system store](platform)
* [`reset()` statement](reset)
* [`save()` statement](save)
* [`set()` statement](set)
* [`store()` statement](store)
