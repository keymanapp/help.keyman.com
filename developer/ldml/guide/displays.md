---
title: Customizing Keytop Displays
---

## Why customize the display

Normally, the display of a keytop, whether in a touch environment or the on-screen display of a hardware keyboard, simply matches the characrer output.  So, a key that outputs `a` will have a keytop that looks like `a`.

However, there are some situations where it is desirable to customize the display of a key. This is where the [display] element is useful.  This is an optional element.

Some situations where you might want to customize the display are as follows.  This isn't an exhaustive list and there may be more situations where the display feature is useful.

- Invisible characters: A key may output invisible text of some sort, such as a space, control, or a keyboard [marker](./markers.md).  Such keys can have a customized keycap that displays something helpful for the users. For example, `sp` for a space key.

- Switch keys: A key which switches layers, such as one that changes to a shift or alternate layer.

- Visible characters with challenging display:  doubled combining marks or combining marks without a base character might need special handling, such as choosing a different base character. A combining circumflex U+0302 could be represented by a caret `^`.

## Example displays element

```xml
<displays>
    <!-- show the key which outputs a no-break space as 'NBSP' -->
    <display output="\u{00A0}" display="NBSP" />
    <!-- show the marker 'grave' as a backquote -->
    <display output="\m{grave}" display="`" />
    <!-- show the key named 'switch-numbers' as '123' -->
    <display keyId="switch-numbers" display="123" />
</displays>
```

## displayOptions

The `displayOptions` has a single configurable option at present, the baseCharacter.

In Lao for example, it's sometimes preferred to use `x` as the base for showing combining marks, rather than the dotted circle ◌.

This is a hint for platforms to suggest using an alternative character. It doesn't require any specific behavior.

```xml
<displays>
    <!-- other 'display' elements-->
    <displayOptions baseCharacter="x"/>
</displays>
```


With the key display customized, it's time now to arrange the keys into [layers](./layers).

[display]: ../reference/display
