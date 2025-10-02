---
title: keyboard3
---

## Summary

The **`keyboard3`** element is the top level element in each LDML Keyboard file.

## Syntax

```xml
<keyboard3 conformsTo=… draft=… locale…>
    …
</keyboard3>
```

### Attributes

`conformsTo` - Required
:   This indicates the minimum supported version number of CLDR that this file conforms to.  In other words, this file may not use features from CLDR versions after this number. This must be a whole number such as "46". See [CLDR Releases] for a current list of CLDR versions. Authors should use the _minimum_ possible number here so that the keyboard is the most widely usable.

`draft` - Optional
:   For keyboards which are contributed to CLDR itself, this indicates the approval level of the [CLDR keyboard process]. For keyboard authors, it is best to omit this attribute or set it to `contributed`. Other possible values include `approved`, `unconfirmed`, and `provisional`.

`locale` - Required
:   This attribute specifies the [BCP 47] tag used for the primary locale for this keyboard. The [`locales`](./locales) element can be used to specify additional locales, however, at least one locale must be specified in the `locale` attribute.

## Description

The `keyboard3` element contains all other elements of the keyboard, and its attributes provide important metadata about the keyboard.

It is named "3" because it is the third version of the LDML Keyboard format.

## Examples

### Example: Using `keyboard3`

```xml
<keyboard3 conformsTo="47" draft="unconfirmed" locale="kk-Arab">
    …
</keyboard3>
```

## Version history

The `keyboard3` element was added in LDML v46. The `draft` attribute was added in LDML v47.

[CLDR Releases]: https://cldr.unicode.org/index/downloads
[CLDR keyboard process]: https://cldr.unicode.org/index/process/keyboard-repository-process
[BCP 47]: ../../current-version/reference/bcp-47

## See Also

- LDML Specification: [`<keyboard3>` in UTS#35 Part 7][tr35-element-keyboard3]

[tr35-element-keyboard3]: https://www.unicode.org/reports/tr35/tr35-keyboards.html#element-keyboard3

