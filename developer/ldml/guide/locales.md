---
title: Choosing a locale
---

As part of your keyboard development, you must choose one or more [BCP 47]
locale codes to associate with the keyboard.

The primary locale id is stored in the `locale` attribute of the
[`keyboard3`][keyboard3] (outer) element, while any additional locale ids are
stored in the optional [`locales`][locales] element.

Examples:

- `km` — Khmer
- `suz-Sunu` — Sunuwar language, in the Sunuwar script
- `fa-t-k0-isiri` — Persian ISIRI keyboard

[BCP 47]: ../../current-version/reference/bcp-47
[keyboard3]: ../reference/keyboard3
[locales]: ../reference/locales
