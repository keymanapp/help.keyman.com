---
title: API object - Font
---

The `Font` object provides details on fonts for the keyboard/language
and contains the following members:

<div class="itemizedlist" markdown="1">

`family`
:   `string` <span class="optional">optional</span>
:   Font family that KeymanWeb will provide for this font.

`size`
:   `string` <span class="optional">optional</span>
:   Font size (in CSS dimensions). If not specified, then `1em`.

`source`
:   `Array` <span class="optional">optional</span>
:   Array of downloadable filenames for this font, which should be
    combined with [`options.fontBaseUri`](index#obj-options).

</div>

## Example case

The following is extracted from
<https://api.keyman.com/cloud/4.0/languages/lao>.

``` javascript
family:     "LaoWeb"
source:
  0:        "saysettha_web.ttf"
  1:        "saysettha_web.woff"
  2:        "saysettha_web.eot"
  3:        "saysettha_OT.mobileconfig"
```

Alternate formatting:

``` javascript
"font": {
  "family":     "LaoWeb",
  "source":     [
                  "saysettha_web.ttf",
                  "saysettha_web.woff",
                  "saysettha_web.eot",
                  "saysettha_OT.mobileconfig"
                ]
}
```
