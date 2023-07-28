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

`minVersion`
:   `string` <span class="optional">optional</span>
:   Minimum build version of KeymanWeb that the keyboard will work with.

`maxVersion`
:   `string` <span class="optional">optional</span>
:   Maximum build version of KeymanWeb that the keyboard will work with.

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

</div>

## Example case

The following is extracted from
<https://api.keyman.com/cloud/2.0/keyboards/hebrew>.

```obj-keyboard
"keyboard": {
  "id":           "hebrew",
  "name":         "Hebrew",
  "filename":     "hebrew.js",
  "lastModified": "2016-06-17T07:51:52+10:00",
  "rtl":          true,
  "languages":    [
                    {
    "id":             "heb",
    "name":           "Hebrew",
                    }
                  ]
}
```
