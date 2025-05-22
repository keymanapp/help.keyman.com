---
title: Strings
---

# Strings

A string is a sequence of characters. Strings can be made up of multiple concatenated substrings. There is no general limit on the length of a string, although Keyman does impose limits on strings in various situations.

The following string formats are available:

| Type | Description | Example |
| --- | --- | --- |
| Quoted strings | a list of characters, enclosed either by `"` or `'` quote characters. Can use any characters apart from controls. To use quotes in the string, enclose with the other quote type. | `store(vowels) "aeiou"`  <br>`+ '"' > 'quote'` |
| Unicode character codes | a single character in U+xxxxxx format. Range `U+0020` – `U+10FFFF`. | `+ U+0020 > 'space'` |

Strings are concatenated by listing them together, separated by spaces. For example, the following two lines are equivalent:

```
U+0041 U+0042 U+000043 U+44 "abc"
"ABCDabc"
```

Character codes below `U+0020` should not be used as their meaning differs between applications. Some legacy keyboards may still use codes such as `U+000D` for carriage return, but this usage is not portable.

The following string formats have been removed in Keyman Developer 19:

| Type | Description | Example |
| --- | --- | --- |
| Decimal character codes | a single character, in decimal format. | `+ d32 > 'space'` |
| Hexadecimal character codes | a single character in hexadecimal format. | `+ x20 > 'space'` |
| Octal character codes | a single character in octal format. | `+ 40 > 'space'` |

## History

* Support for decimal, hexadecimal, and octal character code formats have been removed in Keyman Developer 19.

## See also

*   [Unicode support](unicode "Unicode support")