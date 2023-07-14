---
title: Unicode support
---
  
The [`begin`](../reference/begin) statement defines where processing
begins when a key is pressed. Keyman first determines whether the active
application can accept Unicode input, and then selects the Unicode or
ANSI begin statement accordingly.

The character encoding of a .kmn file is determined by the Byte Order
Mark (BOM) prolog on the file. This is inserted automatically by Keyman
Developer, but if you use an alternate editor, you may need to turn on
the BOM for your .kmn files, in particular for UTF-8. We recommend the
UTF-8 file format for .kmn files, but UTF-16 and CP-1252 ("ANSI") are
also supported.

The character encoding of a .kmn file is not related to the compiled
keyboard character encodings. Internally, Keyman Desktop uses UTF-16 on
Windows, but KeymanWeb and other platforms may use UTF-8.

The remainder of this document discusses only the usage of character
codes within strings in Keyman keyboards, and not the file formats
themselves.

Keyman supports the full Unicode character set. Keyboards can use
characters between `U+0020` and `U+10FFFF`. Characters below U+0020
should not be used, as they are control characters.

When referencing characters by code point (as opposed to in a quoted
string), surrogate character codes (`U+D800`–`U+DFFF`) should not be
used, and the compiler will warn accordingly. Instead the appropriate
Unicode codepoint should be used.

Unicode characters can be specified in all of the methods referred to in
the [strings](strings) topic, but the `U+xxxx` method is recommended for
clarity.

## Normalisation

Keyman does not do any normalisation. The codes specified in a keyboard
are the exact codes that are used. However, some applications internally
normalise the text store as users type. This can lead to rules
unexpectedly failing to match. One appropriate solution is to include
both normal Unicode normalisation forms (NFC and NFD) in the context of
rules. Make sure that your output always targets a single normalisation
form, as in the following example, which uses NFD ('decomposed') output:

```
U+0061 U+0302 + "'" > U+0061 U+0302 U+0301  c ấ
U+00E2 + "'" > U+0061 U+0302 U+0301
```

The alternate example uses NFC ('composed') output:

```
U+0061 U+0302 + "'" > U+1EA5  c ấ
U+00E2 + "'" > U+1EA5
```

## Version history

Unicode support was introduced in Keyman 5.0.

## See also

-   [`begin` statement](../reference/begin)
-   [Strings](strings)
