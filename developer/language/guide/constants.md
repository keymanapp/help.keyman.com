---
title: Named Constants
---

Named constants allow you to use a descriptive name for a character, instead of
its code. To define a named constant, use `store(charname) charcode`. When you
wish to refer to the code, use either `outs(charname)` or `$charname`.

The dollar referencing can only be used with named constants. You cannot use it
for stores that have more than one character in them, or for keys or other
non-character stores. Named constants are supported for all Unicode characters
including BMP and SMP (above plane 0).

Named constants can also be loaded from a file with the [`&includecodes` system
store](../reference/includecodes). For instance, the Unicode Character Names can
be used by referencing unicodedata.txt. The format of this file is documented in
the `&includecodes` documentation.

Hangeul syllables are predefined named constants, with the following pattern:

```
$HANGUL_SYLLABLE_<initial><vowel><final>
```

* `initial` can be G, GG, N, D, DD, R, M, B, BB, S, SS, J, JJ, C, K, T, P, H, or
  empty
* `vowel` can be A, AE, YA, YAE, EO, E, YEO, YE, O, WA, WAE, OE, YO, U, WEO, WE,
  WI, YU, EU, YI, or I
* `final` can be G, GG, GS, N, NJ, NH, D, L, LG, LM, LB, LS, LT, LP, LH, M, B, BS, S, SS, NG, J, C, K, T, P, H, or empty

This follows the algorithm documented on
[Wikipedia](https://en.wikipedia.org/wiki/Korean_language_and_computers#Hangul_in_Unicode).

## Example

```
store(CCedilla) U+00E7
+ [RALT K_C] > $CCedilla
```

## Version history

* Named constants were introduced in Keyman 6.0.
* Hangul syllables were improved in Keyman 14.0 and documented in Keyman 15.0

## See also

*   [`outs` statement](../reference/outs "outs statement")
*   [`store` statement](../reference/store "store statement")
*   [`&includecodes` system store](../reference/includecodes "&includecodes system store")