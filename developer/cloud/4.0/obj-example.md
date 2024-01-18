---
title: API object - Example
---

The `Example` object provides an example piece of text to demonstrate
how to use a keyboard. Contains the following members:

<div class="itemizedlist" markdown="1">

`text`
:   `string`
:   Output text that the key sequence will produce.

`keys`
:   `string`
:   Key sequence (based on US English) to produce output text.

`note`
:   `string`
:   An English note about the meaning of the text example.

</div>

## Example case

The following is extracted from
<https://api.keyman.com/cloud/4.0/languages/lao>.

``` javascript
example:
  keys:   "rklkjk;d=wfh"
  text:   "ພາສາລາວກໍໄດ້"
  note:   "\"Lao Language Okay\""
```

Alternate formatting:

``` javascript
"example": {
  "keys":     "rklk]k;d=wfh",
  "text":     "\u0e9e\u0eb2\u0eaa\u0eb2\u0ea5\u0eb2\u0ea7\u0e81\u0ecd\u0ec4\u0e94\u0ec9",
  "note":     "\"Lao Language Okay\""
}
```
