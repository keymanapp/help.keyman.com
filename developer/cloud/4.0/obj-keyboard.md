---
title: API object - Keyboard
---

The `Keyboard` object contains the following members:

<div class="itemizedlist" markdown="1">

`name`
:   `string`
:   Name of keyboard

`id`
:   `string`
:   ID of the keyboard, always matches the filename of the keyboard.

`filename`
:   `string`
:   Name of the keyboard .js file which should be combined with
    [`options.keyboardBaseUri`](index#obj-options).

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
:   An array of [`Language`](obj-languages) objects linked to the
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

`desktopKeyboardID`
:   `number` <span class="optional">optional</span>
:   The numerical ID of the corresponding numerical ID for the desktop
    version of the keyboard.

`devices`
:   `Object` <span class="optional">optional</span>
:   An object with the three properties `phone`, `tablet`, and
    `desktop`. Each property holds a numerical value detailing the level
    of support specialized toward each class of device. Please refer to
    [the Developer Keyboard Catalogue
    page](https://keyman.com/developer/keymanweb/keyboards.php) for more
    details.

</div>

## Example case

The following is extracted from
<https://api.keyman.com/cloud/4.0/keyboards/hebrew>.

``` javascript
"keyboard": {
  "id":           "hebrew",
  "name":         "Hebrew",
  "filename":     "hebrew\/1.0\/hebrew-1.0.js",
  "version":      "1.0",
  "lastModified": "2014-03-21T16:22:19+11:00",
  "rtl":          true,
  "devices":      {
    "phone":        1,
    "tablet":       1,
    "desktop":      2
                  },
  "languages":    [
                    {
    "id":             "heb",
    "name":           "Hebrew",
    "region":         3
                    }
                  ]
}
```
