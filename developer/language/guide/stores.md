---
title: Using Stores
---

Stores provide a facility to match a character against an array of
characters. This means they can be used to reduce multiple rules down
into a single rule. They can also be used to give mnemonic names to
strings.

The most common use of stores is to reduce the number of rules required
in a keyboard by matching multiple characters rather than a single
character in a rule.

## Creating stores

Stores are created with the [`store()` statement](../reference/store):

```
store(storeName) storeContents
```

Where `storeName` is an identifier you give to the store, and
`storeContents` is the store's contents, expressed as a string or a
sequence of Unicode character constants.

Store names may contain nearly any Unicode character. Only control characters,
non-characters (e.g. U+FFFF), space characters (e.g. U+0020, U+00A0),
parentheses (`(`,`)`), brackets (`[`,`]`), and commas (`,`) are not allowed.
Whitespace is allowed, but not required, around the parentheses for the store
statement:

```
c these are both valid:
store(vowels_lower)'aeiou'
store ( vowels_upper ) 'AEIOU'
```

All stores must be given unique identifiers, and are visible throughout
the keyboard file. A `store()` statement can be placed anywhere in a
keyboard source file, and its visibility is unaffected: it can even be
placed after references to the store in other statements.

Apart from characters, two other elements are allowed in stores:
[deadkeys](../reference/deadkey) and [virtual keys](virtual-keys).

Stores have a maximum length of 4095 characters (note that non-character
elements such as virtual keys and deadkeys take more than one character
in the store).

### Examples

```
store(vowels) 'aeiouAEIOU'
store(vowels_lower) 'ae' U+0069 U+006F U+0075
store(φωνήεντα) 'αειου'
store(vowel_keys) [K_A] [K_E] [K_I] [K_O] [K_U]
```

## Using stores in rules

Stores are most often used with the `any()` and `index()` statements.
The `any()` statement is used in the context or key section of the rule,
and will match any character in the specified store, remembering its
index.

```
    any(storeName) + ... > ...
    ... + any(storeName) > ...
```

The `index()` statement is used to look up a character in a store at the
index where a specified `any()` statement matched a character. The
`any()` statement used to obtain the index is referenced by its
character position in the context (and key) part of the rule. In the
first example line, the `any()` statement is the first element
(character or statement) in the rule, so the offset is 1. In the second
example line, if the three dots represent one single character or
statement, the `any()` is the second element of the rule so the offset
is 2. Since the context part of a rule can contain several characters or
statements, the offset for the `any()` could be greater than two.

```
index(storeName, offset)
```

Note that an `index()` statement may reference an `any()` statement
which uses a different store: the only requirement is that the stores
used by each have the same length.

### Examples

In the following example, the `index()` statement translates the lower
case vowels to upper case vowels:

```
store(lowercase) "aeiou"
store(uppercase) "AEIOU"

+ any(lowercase) > index(uppercase, 1)    c translate vowels to upper case
```


A more useful example shows how a vowel followed by a circumflex can be
translated automatically into the combined character:

```
store(vowel) 'aeiouAEIOU'
store(vowel_circum) 'âêîôûÂÊÎÔÛ'
any(vowel) + '^' > index(vowel_circum, 1)
```

If we wanted to type the circumflex before the vowel, the code would be:
(note the offset in the index statement is 2, not 1)

```
store(vowel) 'aeiouAEIOU'
store(vowel_circum) 'âêîôûÂÊÎÔÛ'
any(vowel) + '^' > index(vowel_circum, 2)
```

Another example of using `any()` and `index()` is given in the [keyboard
design
tutorial](/developer/current-version/guides/develop/tutorial/step-6).

## Outputting stores

The [`outs()` statement](../reference/outs) can be used to output the
contents of a store. This can be used in another store, or in the
context or output of a rule.

```
    outs(storeName)
```

Stores that contain only a single character are usually used to define
[named constants](constants).

### Examples

The following examples show the `outs()` statement and an example of
named constants:

```
store(vowels_lower) 'aeiou'
store(vowels_upper) 'AEIOU'
store(vowels) outs(vowels_lower) outs(vowels_upper)

store(vowel_a) 'a'
store(vowel_alpha) 'α'
+ outs(vowel_a) > outs(vowel_alpha)
+ $vowel_a > $vowel_alpha
```

The **IPAMenu.kmn** sample keyboard included with Keyman Developer gives
an example of the use of stores and `outs()` to create a menu-based
keyboard for entry of characters from the International Phonetic
Alphabet.

## System stores

System stores are stores with a name beginning with `&`, which have a
special purpose, usually defining properties or behaviour of the
keyboard.

Keyman 5.0 introduced the concept of system stores that replace the
header statements used in earlier versions of Keyman. In Keyman 9.0 and
later, system stores are also used to reflect and update system state.
System stores are prefixed with an ampersand (`&`).

### Example

This shows the [`&name` store](../reference/name) in use:

```
store(&name) "My First Keyboard"
```

## IMX definition stores

Stores can be used to define an IMX interface function to be used with
[`call()`](../reference/call). These stores should not then be used for
any other purpose.

### Example

```
    store(DLLFunction) "myimx.dll:KeyEvent"
    + any(key) > call(DLLFunction)
```

## Variable stores

In Keyman 8.0 and later versions, variable stores are supported. These
allow a keyboard to have a store which is updated dynamically while the
keyboard is active, in order to track state. The store value can be
persisted for use in future sessions, or can be updated just for the
current session.

For Keyman 9.0, support was also added for variable system stores. Some
variable system stores are read-only and some are read-write. These
allow the keyboard developer to test or adjust the system configuration,
including swapping touch layout layers and testing the platform the
keyboard is running under.

Variable stores are sometimes called option stores, and the feature has
been known in the past as "keyboard options".

```
store(opt_composed) '0'
store(vowel) 'aeiouAEIOU'
store(vowel_circum) 'âêîôûÂÊÎÔÛ'

+ [CTRL ALT K_1] > set(opt_composed='1')
+ [CTRL ALT K_0] > set(opt_composed='0')
if(opt_composed = '0') any(vowel) + '^' > index(vowel, 2) U+0302
if(opt_composed = '1') any(vowel) + '^' > index(vowel_circum, 2)
```

More information about variable stores is available in the [variable
stores guide](variable-stores).

## Store statements

The following statements are used with stores:

[`any()` statement](../reference/any)

Matches on an array of characters

[`call()` statement](../reference/call)

Calls an Input Method Extension

[`if()` statement](../reference/if)

Tests the content of a variable store

[`index()` statement](../reference/_index)

Outputs from an array of characters

[`outs()` statement](../reference/outs)

Outputs an array of characters

[`reset()` statement](../reference/reset)

Resets the content of a variable store to the default

[`save()` statement](../reference/save)

Persists the content of a variable store

[`set()` statement](../reference/set)

Updates the content of a variable store

[`store()` statement](../reference/store)

Defines an array of characters

## Version history

* Introduced in Keyman 3.0
* Keyman 5.0 added system stores
* Keyman 6.0 added support for deadkeys and virtual keys in stores
* Keyman 7.0 extended maximum store length to 4095 characters
* Keyman 8.0 introduced variable stores
* Keyman 9.0 introduced variable system stores
* Keyman 19.0 tightened the validity of store names (disallowing space, comma,
  non-characters, parentheses, square brackets)
