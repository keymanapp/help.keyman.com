---
title: Long lines and continuations 
---

If you have a long line, you can wrap it to the next line by inserting a
backslash (`\`) as the last character on the line. The primary
limitation is that you cannot use comments except on the last line of a
continuation. The backslash must not be inside quotes.

## Examples

```
store(LaoConsonants) U+0E81 U+0E82 U+0E84 U+0E87 U+0E88 U+0E8A U+0E8D U+0E94 \
                     U+0E95 U+0E96 U+0E97 U+0E99 U+0E9A U+0E9B U+0E9C U+0E9D \
                     U+0E9E U+0E9F U+0EA1 U+0EA2 U+0EA3 U+0EA5 U+0EA7 U+0EAA \
                     U+0EAB U+0EAD U+0EAE    c list of all the Lao consonants
```

## Version history

Long line wrapping was introduced in Keyman 3.0.
