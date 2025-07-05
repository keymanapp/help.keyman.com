---
title: LDML overview
---

LDML is the Locale Data Markup Language. It it an XML-based format
specified as the Unicode Consortium’s specification [UTS#35 Part 7],
maintained by the [Common Locale Data Repository (CLDR)][CLDR]
Technical Commitee.

LDML itself has several parts which describe diferent aspects of locale data.  This document describes the part pertaining to keyboards, part 7.

## File Structure

Source files have the **.xml** extension and are [XML] (text) files.  Any
text editor can be used.  An editor which understands XML and can highlight
syntax is preferred, such as that built into Keyman Developer.

### Attributes and Escaping

The LDML structure does not use any "element text", all text is in attributes.
Attributes are opened and closed with double quotes `"`.

Many attributes support escaping. That is, if you need to use a double quote
within an attribute, the double quote must be escaped.
For example, for a string variable with the value `I said, "yes"` it could be accomplished as shown:

```xml
<string id="yes" value="I said, \u{22}yes\u{22}"/>
```

This notation is described in [Unicode UTS #18 section 1.1][UTS18escaping] and
consists of `\u{` followed by 1-6 hex digits and closed with `}`.
`\u{1E8CA}` and `\u{1e8CA}` and `\u{1e8Ca}` all refer to
U+1E8CA 𞣊 "MENDE KIKAKUI DIGIT FOUR". Upper and lower case does not matter.

Escaping is not allowed everywhere.
A double quote is not valid as the id of a key, for example, so the `<key id=`
element does not support escaping.

### Comments

XML comments may be put anywhere, they do not affect the keyboard nor are
they processed by any code.

```xml
<!-- This is a comment -->
<!-- So is
this-->
```

You can use comments to temporarily remove an element from processing.
The following  "key" element is commented out, and so is not a part of
the keyboard.

```xml
    <!-- <key id="abc" output="def" /> -->
```

### XML Prologue

As an XML file, the XML prologue is needed.
The prologue should be exactly as shown.
(A DTD not used.)

```xml
<?xml version="1.0" encoding="UTF-8"?>
```

### Outer `keyboard3` Element

The root element of a keyboard file is the [`keyboard3`][keyboard3] element.

Note the `xmlns` and `conformsTo` elements both refer to a version of CLDR,
in this case v47. For compatibility, you should set these to the earliest possible
version number.
<!-- TODO LDML-DOCS: more guidance on how to choose version # vs. keyman versions -->

The `locale` attribute is the _primary_ [BCP 47] locale for the keyboard.
See [choosing a locale](choosing-locale) for more information about choosing
locale id(s) for your keyboard.

```xml
<keyboard3
    conformsTo="47"
    xmlns="https://schemas.unicode.org/cldr/47/keyboard3"
    locale="bn" >
    …
</keyboard3>
```

[CLDR]: https://cldr.unicode.org
[UTS#35 Part 7]: https://www.unicode.org/reports/tr35/tr35-keyboards.html
[BCP 47]: ../../current-version/reference/bcp-47
[keyboard3]: ../reference/keyboard3
[UTS18escaping]: https://www.unicode.org/reports/tr18/#Hex_notation
[XML]: https://www.w3.org/XML/
