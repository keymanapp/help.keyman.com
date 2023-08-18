---
title: KeymanWeb Cloud Services API - version 2.0
---

### API usage

Version 2.0 of the API is a RESTful web service available through HTTP
and HTTPS that returns only UTF-8 JSON formatted data. URIs in the data
will reflect the protocol that is used to query the web service.

### Endpoints

The two endpoints below can be used interchangeably. api.keyman.com is
the modern endpoint; future services will be available there.

-   https://api.keyman.com/cloud/4.0
-   https://r.keymanweb.com/api/4.0

### Interfaces

| Call                                                                                                                                            | Description                                                                                                                                                                                                                                                        |
|-------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| GET [https://api.keyman.com/cloud/2.0/languages](https://api.keyman.com/cloud/2.0/languages){target="_blank"}                                   | Returns a CloudServices object with a Languages object, that contains a list of all language and keyboard combinations available on the server. This call will return full details of every language, keyboard and font combination. It is typically around 150KB. |
| GET [https://api.keyman.com/cloud/2.0/languages/**fra**](https://api.keyman.com/cloud/2.0/languages/fra){target="_blank"}                       | Returns a CloudServices object with a Language object for a language identified by the language code **fra**.                                                                                                                                                      |
| GET [https://api.keyman.com/cloud/2.0/keyboards](https://api.keyman.com/cloud/2.0/keyboards){target="_blank"}                                   | Returns a CloudServices object with a Keyboards object that contains a list of all keyboards on the server. The response is typically around 75KB.                                                                                                                 |
| GET [https://api.keyman.com/cloud/2.0/keyboards/**european**](https://api.keyman.com/cloud/2.0/keyboards/european){target="_blank"}             | Returns a CloudServices object with a Keyboard object for the keyboard identified by id **european**, and a list of all languages associated with that keyboard.                                                                                                   |
| GET [https://api.keyman.com/cloud/2.0/keyboards/**european**/**fra**](https://api.keyman.com/cloud/2.0/keyboards/european/fra){target="_blank"} | Returns a CloudServices object with a Keyboard object for the keyboard identified by id **european**, and the language associated with **fra**.                                                                                                                    |

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

`languageidtype`
:   <span class="optional">optional</span>
:   Can be `"iso6393"` or `"bcp47"`. If absent, then `"iso6393"` is
    used. Reflects the type of any language identifiers returned.

`version`
:   <span class="optional">optional</span>
:   The version of Keyman Engine, e.g. `"10.0"`. If absent, uses
    `"9.0"`. The server will filter keyboards that are available for
    that version of Keyman Engine. (See [KeymanWeb
    Versioning](../versioning) for details on valid version numbers.)

## Returned JSON

### The CloudServices object

The `CloudServices` object is the base object returned from any API
call. Note that the members `keyboards`, `languages`, `keyboard`, and
`language` are all mutually exclusive.



`options`
:   `Object`
:   An [`Options`](#obj-options) object corresponding to the
    user-selected query options

`keyboards`
:   <span class="optional">optional</span>
:   Array of [`Keyboard`](obj-keyboard) objects.

`languages`
:   <span class="optional">optional</span>
:   Array of [`Language`](obj-language) objects.

`keyboard`
:   <span class="optional">optional</span>
:   [`Keyboard`](obj-keyboard) object.

`language`
:   <span class="optional">optional</span>
:   [`Language`](obj-language) object.



### <span id="obj-options">The Options object</span>

The `Options` object returns the original query parameters plus
contextual information. Contains the following members:



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



## Example Call

``` http
GET https://api.keyman.com/cloud/2.0/keyboards/european/fra
```

Returns:

``` json
{
  "options": {
    "context":"keyboard",
    "dateFormat":"standard",
    "device":"any",
    "keyboardBaseUri":"https:\/\/s.keyman.com\/kmw\/kbd\/",
    "fontBaseUri":"https:\/\/r.keymanweb.com\/20\/fonts\/",
    "keyboardid":"european",
    "languageid":"fra"
  },
  "keyboard":{
    "id":"european",
    "filename":"european.js",
    "lastModified":"2012-03-02T16:36:15+11:00",
    "maxVersion":299,
    "languages":[
      {
        "id":"fra",
        "name":"French",
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
