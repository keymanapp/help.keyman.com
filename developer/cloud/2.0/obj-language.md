---
title: API object - Language
---

The `Language` object contains the following members:

<div class="itemizedlist" markdown="1">

`name`
:   `string`
:   Name of language

`id`
:   `string`
:   ISO 639-3 language code.

`keyboards`
:   `Array` <span class="optional">optional</span>
:   Array of corresponding [`Keyboard`](obj-keyboard) objects.

`font`
:   `Object` <span class="optional">optional</span>
:   [`Font`](obj-font) object describing font for input fields (and OSK,
    if `oskFont` is not present). Only present when a `Language` object
    is a child of a `Keyboard` object.

`oskFont`
:   `Object` <span class="optional">optional</span>
:   [`Font`](obj-font) object describing font for the OSK. Only present
    when a `Language` object is a child of a `Keyboard` object.

`example`
:   `Object` <span class="optional">optional</span>
:   [`Example`](obj-example) object. Only present when a `Language`
    object is the child of a `Keyboard` object.

</div>

## Example case

The following is extracted from
<https://api.keyman.com/cloud/2.0/languages/heb>.

```obj-language
"language": {
  "name":         "Hebrew",
  "id":           "heb",
  "keyboards":    [
                    {
    "id":             "galaxiehebrewkm6",
    "name":           "Hebrew Phonetic (Galaxie)",
    "filename":       "galaxiehebrewkm6-1.0.js",
    "lastModified":   "2016-06-17T07:51:52+10:00",
    "fileSize":       6880,
    "rtl":            true
                    }, {
    "id":             "hebrew",
    "name":           "Hebrew",
    "filename":       "hebrew-1.0.js",
    "lastModified":   "2016-06-17T07:51:52+10:00",
    "fileSize":       6892,
    "rtl":            true,
    "default":        true
                  }
                ]
}
```
