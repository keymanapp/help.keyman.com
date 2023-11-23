---
title: KeymanWeb Cloud Services API - version 4.0
---

### API usage

Version 4.0 of the API is a RESTful web service available through HTTPS
that returns only UTF-8 JSON format data. URIs in the data will reflect
the protocol that is used to query the web service.

### Endpoints

The two endpoints below can be used interchangeably. api.keyman.com is
the modern endpoint; future services will be available there.

-   https://api.keyman.com/cloud/4.0
-   https://r.keymanweb.com/api/4.0

### Interfaces

| Call                                                                                                                           | Description                                                                                                                                                                                                                                                        |
|--------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| GET <https://api.keyman.com/cloud/4.0/languages>                                                                               | Returns a CloudServices object with a Languages object, that contains a list of all language and keyboard combinations available on the server. This call will return full details of every language, keyboard and font combination. It is typically around 150KB. |
| GET [https://api.keyman.com/cloud/4.0/languages/**fra**](https://api.keyman.com/cloud/4.0/languages/fra)                       | Returns a CloudServices object with a Language object for a language identified by the language code **fra**.                                                                                                                                                      |
| GET [https://api.keyman.com/cloud/4.0/languages/**fra/european**](https://api.keyman.com/cloud/4.0/languages/fra/european)     | Returns a CloudServices object with a Language object for a language identified by the language code **fra** and its associated keyboard identified by id **european**.                                                                                            |
| GET <https://api.keyman.com/cloud/4.0/keyboards>                                                                               | Returns a CloudServices object with a Keyboards object that contains a list of all keyboards on the server. The response is typically around 75KB.                                                                                                                 |
| GET [https://api.keyman.com/cloud/4.0/keyboards/**european**](https://api.keyman.com/cloud/4.0/keyboards/european)             | Returns a CloudServices object with a Keyboard object for the keyboard identified by id **european**, and a list of all languages associated with that keyboard.                                                                                                   |
| GET [https://api.keyman.com/cloud/4.0/keyboards/**european**/**fra**](https://api.keyman.com/cloud/4.0/keyboards/european/fra) | Returns a CloudServices object with a Keyboard object for the keyboard identified by id **european**, and the language associated with **fra**.                                                                                                                    |

### Parameters

The parameters below can be provided as query parameters in the URL.

`device`
:   <span class="optional">optional</span>
:   Can currently be any of the following: `"windows"`, `"macosx"`,
    `"iphone"`, `"ipad"`, `"androidphone"`, `"androidtablet"`,
    `"mobile"`, `"desktop"`, `"tablet"`, `"any"`. The server will filter
    keyboards according to the device type. If absent, then `"any"` is
    used.

`dateformat`
:   <span class="optional">optional</span>
:   Can be `"seconds"` or `"standard"`. If absent, then `"standard"` is
    used. Reflects the format of any date values returned.

`keyboardVersion`
:   <span class="optional">optional</span>
:   Specifies the version of the keyboard to retrieve. Must be
    `'current'`, `'all'` or a valid version string, such as `'1.1'`.

`languageidtype`
:   <span class="optional">optional</span>
:   Can be `"iso6393"` or `"bcp47"`. If absent, then `"iso6393"` is
    used. Reflects the type of any language identifiers returned.

`version`
:   <span class="optional">optional</span>
:   The version of Keyman Engine, e.g. `"10.0"`. If absent, uses
    `"2.0"`. The server will filter keyboards that are available for
    that version of Keyman Engine. (See [KeymanWeb
    Versioning](../versioning) for details on valid version numbers.)

## Returned JSON

### The CloudServices object

The `CloudServices` object is the base object returned from any API
call. Note that the members `keyboards`, `languages`, `keyboard`, and
`language` are all mutually exclusive.

<div class="itemizedlist" markdown="1">

`options`
:   `Object`
:   An [`Options`](#obj-options) object corresponding to the
    user-selected query options

`languages`
:   <span class="optional">optional</span>
:   A [`Languages`](obj-languages) object.

`keyboard`
:   <span class="optional">optional</span>
:   [`Keyboard`](obj-keyboard) object or Array of
    [`Keyboard`](obj-keyboard) objects.

`language`
:   <span class="optional">optional</span>
:   [`Language`](obj-language) object.

</div>

### <span id="obj-options">The Options object</span>

The `Options` object returns the original query parameters plus
contextual information. Contains the following members:

<div class="itemizedlist" markdown="1">

`context`
:   `string`
:   The context of the call. Will be one of the following four values:
    `'keyboards'`, `'languages'`, `'keyboard'`, `'language'`

`dateFormat`
:   `string`
:   Either `'seconds'` or `'standard'`, corresponding to the requested
    date format if specified.

`device`
:   `string`
:   Target device. Will be 'all' if not specified.

`keyboardid`
:   `string` <span class="optional">optional</span>
:   id of the keyboard queried, if provided.

`languageid`
:   `string` <span class="optional">optional</span>
:   id of the language queried, if provided.

`keyboardBaseUri`
:   `string`
:   fully qualified base path of any keyboard filenames presented in the
    data.

`fontBaseUri`
:   `string`
:   fully qualified base path of any font filenames presented in the
    data.

</div>

## Example Call

``` http
GET https://api.keyman.com/cloud/4.0/keyboards/european/fra
```

Returns:

``` javascript
{
  "options": {
    "context":"keyboard",
    "dateFormat":"standard",
    "device":"any",
    "keyboardBaseUri":"https:\/\/s.keyman.com\/keyboard\/",
    "fontBaseUri":"https:\/\/s.keyman.com\/font\/deploy\/",
    "keyboardid":"european",
    "languageid":"fra"
    "keyboardVersion":"current"
  },
  "keyboard":{
    "id":"european",
    "name":"EuroLatin Keyboard",
    "filename":"european/1.1/european-1.1.js",
    "version":"1.1",
    "desktopKeyboardID":348,
    "lastModified":"2015-03-25T19:49:46+11:00",
    "devices":{
      "phone":0,
      "tablet":0,
      "desktop":2
    }
    "languages":[
      {
        "id":"fra",
        "name":"French",
        "region":4,
        "font":{
          "family":"LatinWeb",
          "source":"DejaVuSans.ttf"
        }
        "example":{
          "keys":"`A bient^ot",
          "text":"\u00c0 bient\u00f4t",
          "note":"\"Goodbye\""
        }
      }
    ]
  }
}
```
