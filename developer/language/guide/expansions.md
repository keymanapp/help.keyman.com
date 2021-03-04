---
title: Range expansions
---

Range expansions are a language feature that reduce verbosity in Keyman Keyboard Language (.kmn) files by making it possible to collapse sequential ranges with a new `..` operator. It is envisioned that these will be used primarily in stores.

Two kinds of expansions are available: character ranges, and virtual key ranges.

The syntax is:

```keyman
char .. char
vkey .. vkey
```

Where the `char` terminator is a single normal character, and the `vkey` terminator is a single virtual key. `outs` is permissible for terminators but no other statement is allowed. Whitespace is per normal Keyman keyboard language syntax.

## Character Ranges

Character ranges will replace the range with the set of characters between the terminators, based on the Unicode value of the terminators.

### Examples

```keyman
store(alphabet) 'a' .. 'z'
store(alpha_not_bq) 'ac'..'pr'..'z'
store(capitals) U+0041 .. U+005A
```

## Virtual Key Ranges

Virtual key ranges work in a similar fashion, but with virtual keys. The starting and terminating virtual key must have the same shift state. This will be most useful for character and numeric virtual keys, as the ranges are based on the numeric value of the virtual key as defined by Windows, not its position on the keyboard.

### Examples

```keyman
store(alphakeys) [K_A] .. [K_Z]
store(numkeys) [K_0] .. [K_9]
```

## Using Ranges

Ranges must be positive, that is, you cannot use `'z' .. 'a'`.

While range expansions are not expected to be very useful in rules, it is still permitted. `context()` and other offsets are calculated on the expanded form, not the collapsed form. Similarly, `any()`/`index()` offsets are calculated on the expanded form.

```keyman
'a' .. 'z' > context(3)  c this produces 'c', not 'z'
```

Because ranges are expanded at compile time, ranges that are overly long will result in an error, so you cannot use, for example:

```keyman
store(AllUnicode) U+0020 .. U+10FFFF
```

The precise maximum length of a range is dependent on the context where it is used.

The changes are entirely compiler-based; no change is made to the .kmx file format or to the Keyman apps, so this functionality can be used in the 14.0 compiler to target earlier versions of Keyman.

## Version history

* Version 14.0: Expansion support added to compiler; backwardly compatible with earlier versions of Keyman
