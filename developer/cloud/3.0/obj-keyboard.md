---
title: API object - Keyboard
---

The `Keyboard` object contains the following members:


`name`
:   `string` <span class="optional">optional</span>
:   Name of keyboard

`id`
:   `string`
:   ID of the keyboard, always matches the filename of the keyboard.

`filename`
:   `string`
:   Name of the keyboard .js file which should be combined with
    [`options.keyboardBaseUri`](index.php#obj-options).

`default`
:   `boolean` <span class="optional">optional</span>
:   `true` if the keyboard is the recommended default for the language.
    `false` if absent.

`rtl`
:   `boolean` <span class="optional">optional</span>
:   `true` if the keyboard targets a right-to-left script. `false` if
    absent.

`lastModified`
:   `string|number`
:   Date the keyboard was last updated.

`fileSize`
:   `number`
:   Size of the keyboard file, in bytes.

`version`
:   `string`
:   Version number of the keyboard.

`languages`
:   `Array` <span class="optional">optional</span>
:   An array of [`Language`](obj-language) objects linked to the
    keyboard.

`font`
:   `Object` <span class="optional">optional</span>
:   [`Font`](obj-font) object describing font for input fields (and OSK,
    if `oskFont` is not present). Only present when a `Keyboard` object
    is a child of a `Language` object.

`oskFont`
:   `Object` <span class="optional">optional</span>
:   [`Font`](obj-font) object describing font for the OSK. Only present
    when a `Keyboard` object is a child of a `Language` object.

`example`
:   `Object` <span class="optional">optional</span>
:   [`Example`](obj-example) object. Only present when a `Keyboard`
    object is the child of a `Language` object.



## Example case

The following is extracted from
<https://api.keyman.com/cloud/3.0/keyboards/hebrew>.

```keyboard
"keyboard": {
  "id":           "hebrew",
  "filename":     "hebrew\/1.0\/hebrew-1.0.js",
  "version":      "1.0",
  "lastModified": "2014-03-21T16:22:19+11:00",
  "rtl":          true,
  "languages":    [
                    {
    "id":             "heb",
    "name":           "Hebrew",
                    }
                  ]
}
```
