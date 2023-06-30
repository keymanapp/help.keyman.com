---
title:  Designing keyboards for use across multiple platforms 
---

Keyman Developer offers the capacity to develop keyboards for multiple
platforms and environments with the same source material. As it is
sometimes beneficial to provide custom-tailored support for the features
of particular platforms, please keep the following in mind when
designing a keyboard to enhance its potential use.

Keyman keyboards run on Windows, macOS, Linux, iOS, and Android devices
and in web browsers. There are differences in how keyboards work for
each of these platforms and Keyman automatically adapts to each platform
as far as possible.

### Keyboard Design {#keyboard-design}

Keyboards are not a "one size fits all" problem in the world of
computing. Keyboards that work well for desktops and laptops with their
physical keyboards typically function quite differently from mobile
phones and tablets with their touch-based keyboard layouts. While not
strictly necessary, a keyboard developer should develop a touch layout
for keyboards that might see use on mobile devices.

See our [Creating a touch keyboard layout for
Amharic](/developer/current-version/guides/develop/creating-a-touch-keyboard-layout-for-amharic)
guide for an in-depth discussion of the benefits of touch layouts and
some philosophy on touch keyboard design.

While the presented layout will differ according to the physical device
it is running on, the keyboard logic implemented in keyboard rules will
be available to all platforms. This includes functionality such as
reordering of input, normalization, and prevention of invalid sequences.

In the case that a keyboard should have special features or handling on
a given platform, consider use of the
[`platform()`](/developer/language/reference/platform) statement to
allow your keyboard the flexibility necessary to accomplish those goals.

## Implementation Note {#implementation-note}

Internally, Keyman for iPhone and iPad and Keyman for Android use
KeymanWeb to display the touch keyboard, and to process rules. KeymanWeb
keyboards (.js format) support basically all the same functionality as
Keyman Desktop keyboards (.kmx format). There are a few store()
statements specific to KeymanWeb that are detailed below.

If you do not provide a touch layout in your keyboard design, KeymanWeb
will use the desktop On Screen Keyboard (.kvk / .kvks format) data.
While the basic 'desktop'-style keyboard can work on mobile devices, it
is generally suboptimal because keys are organised as in a physical
layout, resulting in too many keys on each layer, which are small and
hard to select reliably.

### Additional Stores for KeymanWeb {#additional-stores-for-keymanweb}

The following Keyman Keyboard Language system stores provide
functionality specific to KeymanWeb:

-   [`&kmw_embedcss`:](/developer/language/reference/kmw_embedcss "&kmw_embedcss store")
    Specifies an additional library of CSS code to be embedded in a web
    or touch keyboard
-   [`&kmw_embedjs`:](/developer/language/reference/kmw_embedjs "&kmw_embedjs store")
    Specifies an additional library of Javascript code to be embedded in
    a web or touch keyboard
-   [`&kmw_helpfile`:](/developer/language/reference/kmw_helpfile "&kmw_helpfile store")
    Specifies the embedded help html file for web keyboards
-   [`&kmw_helptext`:](/developer/language/reference/kmw_helptext "& store")
    Specifies the embedded help text for web keyboards
-   [`&kmw_rtl`:](/developer/language/reference/kmw_rtl "&kmw_rtl store")
    Specifies the directionality of text controls for web keyboards

### Recommendations for Supporting Multiple Platforms {#recommendations-for-supporting-multiple-platforms}

-   Only Unicode keyboards are supported for KeymanWeb (.js format)
    keyboards.
-   When using keys with modifiers, use just Shift, AltGr (Right Alt)
    and Shift+AltGr. The left-hand modifiers should be reserved for
    system functions (such as hotkeys), and the Right Ctrl modifier can
    also be difficult, especially on macOS.
-   When designing your touch layout, layers correspond roughly to
    modifiers, but avoid following the modifier paradigm for any layer
    apart from Shift: it usually makes more sense to use long-press
    menus rather than having an AltGr layer.
-   Do include a visual keyboard and help information - this makes the
    keyboard vastly more useable.
-   Save your keyboard file with a filename comprised of the letters a-z
    (lower case), digits 0-9, and underscore (\_).
    -   See [our keyboard submission guidelines
        page](/developer/keyboards/#toc-use-ascii-characters-for-keyboard-base-names)
        for more details.
-   Virtual key output is not supported: this is legacy functionality
    that has many compatibility concerns and should not be used on any
    platform.
-   The [`platform()` statement](/developer/language/reference/platform)
    and [`$keymanonly` and `$keymanweb` compile
    targets](compile-targets) can be used to manage implementation
    differences between .kmx and .js compiled keyboard files. Where
    possible, use `platform()` statements.
