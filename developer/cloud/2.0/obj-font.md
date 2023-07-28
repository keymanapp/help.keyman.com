---
title: API object - Font
---

The `Font` object provides details on fonts for the keyboard/language
and contains the following members:



`family`
:   `string` <span class="optional">optional</span>
:   Font family that KeymanWeb will provide for this font.

`size`
:   `string` <span class="optional">optional</span>
:   Font size (in CSS dimensions). If not specified, then `1em`.

`source`
:   `Array` <span class="optional">optional</span>
:   Array of downloadable filenames for this font, which should be
    combined with [`options.fontBaseUri`](index.php#obj-options).


## Example case

The following is extracted from
<https://api.keyman.com/cloud/2.0/languages/lao>.

```obj-font
family:     "LaoWeb"
source:
  0:        "saysettha_OT.ttf"
  1:        "saysettha_web.woff"
  2:        "SAYSETT0.eot"
```

Alternate formatting:

``` obj-font
"font": {
  "family":     "LaoWeb",
  "source":     [
                  "saysettha_OT.ttf",
                  "saysettha_web.woff",
                  "SAYSETT0.eot"
                ]
}
```


