---
title: Customizing Keytop Displays
---

## Why customize the display

Normally, the display of a keytop, whether in a touch enironment or the on-screen display of a hardware keyboard, simply matches the characrer output.  So, a key that outputs `a` will have a keytop that looks like `a`.

However, there are some situations where it is desireable to customize the display of a key. This is where the [display] element is useful.  This is an optional element.

Some situations where you might want to customize the display are as follows.  This isn't an exhaustive list and there may be more situations where the display feature is useful.

- Invisible characters: A key may output invisible text of some sort, such as a space, control, or a keyboard [marker](./markers.md).  Such keys can have a customized keycap that displays something helpful for the users. For example, `sp` for a space key.

- Non-output keys: A key which switches layers, such as one that changes to a shift or alternate layer.

- Visible characters with challenging display:  doubled combining marks or combining marks without a base character might need special handling, such as choosing a different base character. A combining circumflex U+0302 could be represented by a caret `^` or perhaps by use of U+25CC followed by the combining character: `◌̂`

## displayOptions



## Example displays element



With the key display customized, it's time now to arrange the keys into [layouts](./layouts).

[display]: ../reference/display
