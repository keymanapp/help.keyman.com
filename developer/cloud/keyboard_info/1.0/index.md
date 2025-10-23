---
title: .keyboard_info 1.0 Specification
---

This file will be created by the PR submitter of the keyboard, for new pull requests. It is a JSON file, with the following members. The **.keyboard_info** file will be used when building keyboard layouts for deployment; the master version of the file lives in the keyboard repository. During CI deployment, it will be read from the source repository, extended with the required generated fields and this new version pushed with the compiled resources to the download store.

## KeyboardInfo Object

> [!Note]
> The **Generated** column indicates if the field will be generated if it is not present in the source repository during the CI deployment process. Fields that are **Required** and not **Generated** must be completed by the keyboard author.

| Member | Required in source? | Required in distribution | Generated? | Notes |
|--------|---------------------|--------------------------|------------|-------|
| id |  | yes | yes | **string**, the same as the name of the folder, lower case. In the **release/** folder, this name must be a valid Javascript identifier, and follow the rules in the [Keyboard Cloud Repository documentation](https://help.keyman.com/developer/keyboards).<br><br>**Example:** `"id": "fv_blackfoot"`<br><br>**Generation:** from folder name. |
| name |  | yes | yes | **string**, the human readable name of the keyboard. This will usually differ from the id.<br><br>**Generation:** from .kmp info, package name. If a .kmp is not included, it is sourced from the .js with a regular expression. |
| authorName |  |  | yes | **string**, the name of the author<br><br>**Generation:** from .kmp info |
| authorEmail |  |  | yes | **string**, the email address of the author<br><br>**Generation:** from .kmp info |
| description |  |  |  | **string**, a textual description of the keyboard. This may contain some minimal HTML (p, b, i, u, span, a, ul, ol, li, br, hr, h1-h4 tags).<br><br>**No Automatic Generation:** this information is not consistently available elsewhere. If not specified, then a description will be generated based on the supported languages at runtime by the consumer of the json. |
| license | yes | yes |  | **string**, the possible values for **license** vary by location in the repository:<br>- **release/** and **experimental/** keyboards must be `"mit"`.<br>- **legacy/** keyboards will be `"freeware"`, `"shareware"` or `"commercial"`.<br><br>This must always be specified, even for **release/** and **experimental/** keyboards, because this must be an explicit decision by the keyboard author for legal reasons. |
| languages | yes | yes |  | **array or objects**; an array of BCP 47 codes, or an object with its member names being BCP 47 codes and values being **KeyboardLanguageInfo** objects.<br><br>**Generation:** There is now some automatic generation of language names. The font and example information in the keyboard list is not available elsewhere. |
| lastModifiedDate |  | yes | yes | **string**, the last time the keyboard was modified, in RFC3339, UTC `YYYY-MM-DDThh:mm:ss[.nnn]Z`<br><br>**Generation:** the time that the .keyboard_info file is generated |
| links |  |  |  | **array**, of **KeyboardLinkInfo** objects |
| packageFilename |  | yes <a href='#note-1'>(1)</a> | yes <a href='#note-1'>(1)</a> | **string**, filename of the .kmp file that will be distributed, relative to the keyboard base folder, including extension, required for **experimental/** and **legacy/** folders. If no .kmp exists, then keyboard is js only. For **release/** folders, this must be **id/build/id.kmp**.<br><br>**Generation:** if more than one .kmp exists, then fail. |
| packageFileSize |  |  | yes | **number**, integer size of the .kmp file that will be distributed.<br><br>**Generation:** This will normally be generated automatically. |
| jsFilename |  | yes <a href='#note-1'>(2)</a> | yes <a href='#note-1'>(2)</a> | **string**, filename of the .js file that will be distributed, e.g. "gff_amh.js".<br><br>**packageFilename** and/or **jsFilename** must be specified for **legacy** and **experimental** keyboards.<br><br>**Generation:** for release, must be **id.js**. |
| jsFileSize |  |  | yes | **number**, integer size of the .js file that will be distributed.<br><br>**Generation:** This will normally be generated automatically. |
| documentationFilename |  |  |  | **string**, filename of the .pdf or .rtf format documentation file associated with the keyboard, relative to the keyboard base folder.<br><br>**No Automatic Generation:** This may be difficult to ascertain as the file loses path when compiled into a .kmp. |
| documentationFileSize |  |  | yes | **number**, integer size of the **documentationFileName** file that will be distributed.<br><br>**Generation:** This will normally be generated automatically. |
| isRTL |  |  | yes | **boolean**, true if the .js keyboard should be right-to-left.<br><br>**Generation:** This can usually be generated automatically from the .js file, by heuristic. If the heuristic is not working, add the appropriate value to the source .keyboard_info file. |
| encodings |  |  | yes | **array**, of up to 2 **strings**, `"unicode"` and/or `"ansi"`.<br><br>**Generation:** from .kmx, .js. |
| packageIncludes |  | yes <a href='#note-1'>(1)</a> | yes <a href='#note-1'>(1)</a> | **array**, of **strings**. Metadata used mostly by legacy keyboards. This flags whether a package includes:<br>- `"fonts"` - one or more fonts<br>- `"documentation"` - documentation, in PDF, RTF or HTML format, excluding welcome.htm and readme<br>- `"visualKeyboard"` - a KVK file<br>- `"welcome"` - a welcome.htm file<br><br>**Generation:** from .kmp |
| version |  |  | yes | **string**, the file version of the keyboard / package.<br><br>**Generation:** from .kmp, .js. If no version number is present in the compiled file, assumes `"1.0"` |
| minKeymanVersion |  | yes | yes | **string**. The minimum version of Keyman that can read this keyboard. If present, must be a two part version string, starting from `"6.0"` and up. Note: for versions below 10.0, this value is used in KeymanWeb, but the version mapping is based on Keyman Desktop version numbers. For versions 10.0 and above, all platforms have a synchronized version number. See [KeymanWeb Versioning](/developer/cloud/versioning) for more detail.<br><br>**Generation:** from .kmp, .js. |
| helpLink |  |  |  | **string**. If present, the link to this keyboard's help page on help.keyman.com.<br><br>**Generation:** if **id/source/help/id.php** exists. |
| platformSupport |  | yes | yes | A **KeyboardPlatformInfo** object.<br><br>**Generation:** from .kmp, .js existence. Assumes, if .kmp exists, that `"macos"`, `"windows"` are supported; if .js exists, `"ios"`, `"android"`, `"web"` are supported. |
| legacyId |  |  |  | **number**, the integer identifier for the keyboard in the legacy Tavultesoft keyboard database. |
| sourcePath |  |  | yes | **string**, the relative path of the keyboard in the /keymanapp/keyboards GitHub repository, starting with `release/`, `experimental/` or `legacy/`.<br><br>**Generation:** This will normally be generated automatically. |
| related |  |  |  | **object**, with each property an id of a keyboard and corresponding value is a **KeyboardRelatedInfo**. |
| deprecated |  |  | yes | **boolean**, true if the keyboard has been deprecated.<br><br>**Generation:** Always generated automatically, currently only visible on api.keyman.com/search. |

## KeyboardLanguageInfo Object

| Member | Required? | Notes |
|--------|-----------|-------|
| font |  | **KeyboardFontInfo** object containing information about a recommended font for use with the keyboard. |
| oskFont |  | **KeyboardFontInfo** object containing information about a recommended font for use with the on screen keyboard. If not present, uses **font**. If both are not present, then Keyman uses the default system font. |
| example |  | **KeyboardExampleInfo** object containing a sample text that the user can type to give them an idea of how to start to use the keyboard. |
| displayName |  | **string**, a descriptive name of the language to display to users in the format: *language (script, region)*. If the BCP 47 code does not contain script or region subtags, only the language name is displayed.<br><br>**Example:** `"displayName": "Central Atlas Tamazight (Tifinagh, Morocco)"`<br><br>**Generation:** This will be generated automatically from the BCP 47 code. |
| languageName |  | **string**, the name of the language subtag in the BCP 47 code.<br><br>**Example:** `"languageName": "Central Atlas Tamazight"`<br><br>**Generation:** This will be generated automatically from the BCP 47 code. |
| scriptName |  | **string**, the name of the script subtag in the BCP 47 code.<br><br>**Example:** `"scriptName": "Tifinagh"`<br><br>**Generation:** This will be generated automatically from the BCP 47 code. |
| regionName |  | **string**, the name of the region subtag in the BCP 47 code.<br><br>**Example:** `"regionName": "Morocco"`<br><br>**Generation:** This will be generated automatically from the BCP 47 code. |

## KeyboardLinkInfo Object

| Member | Required? | Notes |
|--------|-----------|-------|
| name | yes | **string**, the text to be shown in the link |
| url | yes | **string**, the fully qualified url of the link. |

## KeyboardPlatformInfo Object

| Member | Required? | Notes |
|--------|-----------|-------|
| windows <br>macos <br>desktopWeb <br>ios <br>android <br>mobileWeb <br>linux |           | **string**, for all members: one of `"dictionary"`, `"full"`, `"basic"`, or `"none"`. If member is missing, `"none"`.<br><br>- `"dictionary"`: keyboard includes dictionary, e.g. IME or suggestion/autocompletion support.<br>- `"full"`: keyboard is designed and optimised for the platform, and works well with it.<br>- `"basic"`: keyboard compiles for the platform but has not been optimised for it (e.g. a Windows keyboard compiled to web, with no touch-specific support, will still work on a touch platform but will have a desktop-shaped touch keyboard with too many keys on it).<br>- `"none"`: keyboard does not work on the platform |


## KeyboardFontInfo Object

| Member | Required? | Notes |
|--------|-----------|-------|
| family | yes | **string**, family name of the font; can be used by Keyman Engine to locate an already installed font of the same name. |
| source | yes | **string**, filename, relative to .keyboard_info file. |
| size   |     | **string**, in CSS Units, default 100%. |

## KeyboardExampleInfo Object

| Member | Required? | Notes |
|--------|-----------|-------|
| keys |  | One of the following types:<br><br>- **string**, a list of keystrokes to type to produce a short sample text using this keyboard, must be plain text US English keycaps, e.g. `"Tiena ysTlN"`, cannot use modifiers other than Shift.<br>- **array** of **strings** and/or **KeyboardExampleKeyInfo** objects, e.g. `["Tiena", { "modifiers": ["shift"], "key": "K_SPACE" }, "ysTlN" ]`.<br><br>This is not intended to give a full description of the keyboard but rather a simple example that introduces the user to the way the keyboard works. |
| text |  | **string**, the result of the keystrokes typed, i.e. a Unicode string. |
| note |  | **string**, a text note that helps to explain the example to the user. |

## KeyboardExampleKeyInfo Object

| Member | Required? | Notes |
|--------|-----------|-------|
| modifiers |  | **array** of `"shift"`, `"ctrl"`, `"alt"`, `"left-ctrl"`, `"left-alt"`, `"right-ctrl"`, `"right-alt"` **strings**. |
| key | yes | **string**. A valid `K_` identifier, from the first two lists in [https://help.keyman.com/developer/language/guide/virtual-keys](https://help.keyman.com/developer/language/guide/virtual-keys) (i.e., excluding reserved virtual key codes). Touch-specific keys such as `T_xxx` or `U_abcd` are not permitted. |

## KeyboardRelatedInfo Object

| Member | Required? | Notes |
|--------|-----------|-------|
| deprecates |  | **boolean**, if **true**, then this keyboard is intended to deprecate another keyboard with the parent member name, and Keyman will upgrade it to this keyboard if found, ignoring version numbers. |
| deprecatedBy |  | **boolean**, if **true**, then this keyboard has been deprecated by the keyboard referred to. This member should not be set in the source .keyboard_info but will be returned from queries to api.keyman.com. |
| note |  | **string**, a textual description of the relationship between the keyboards. |

* <a name="note-1">1</a>: Required for desktop distributions, not for web distributions.

* <a name="note-2">2</a>: Required for web distributions, not for desktop distributions.

## Schema

A validating schema for the object is online at [https://api.keyman.com/schemas/keyboard_info.source.json](https://api.keyman.com/schemas/keyboard_info.source.json) and [https://api.keyman.com/schemas/keyboard_info.distribution.json](https://api.keyman.com/schemas/keyboard_info.distribution.json). .keyboard_info files in the repository must validate against the source json; after build, the resulting .keyboard_info will validate against the distribution json.

## Validation

The keyboard repository build process validates the JSON schema, then copies the .keyboard_info into the build/ folder and populates missing generated fields. If a field is already present, it will be validated for correctness against the compiled keyboard files, but will not be overridden.

Any errors in a .keyboard_info file will cause the build to fail.

## Examples

This is a sample minimal source .keyboard_info file. Note that as you can see, only two fields are required for the source file. The build process will generate any missing fields that it can. Generally speaking, it is better to keep the file minimal to avoid duplication.

```javascript
{
  "license": "mit",
  "languages": ["crl", "crj"]
}
```

The following is a reasonably comprehensive example .keyboard_info file for a Tibetan keyboard. This illustrates deprecated keyboards; many of these fields will typically be generated automatically from the compiled keyboard data:

```javascript
{
  "id" : "tibetan_unicode_direct_input",
  "name" : "Tibetan Unicode Direct Input",
  "description" : "Tibetan Unicode Direct Input is designed to type all Tibetan characters and stacks directly. You get a Tibetan character every time you press a key, without having to use the Alt key or complex transliteration combinations. The keyboard types in a phonetic style based on the English (QWERTY) layout.\r\n\r\nThis keyboard also features special menus for Tibetan symbols and lets you type Latin and Cyrillic letters. ",
  "jsFilename" : "tibetan_unicode_direct_input-1.1.js",
  "documentationFilename" : "tibetan unicode direct input help.pdf",
  "packageFilename" : "tibetan_unicode_direct_input.kmp",
  "authorEmail" : "linguasoft@surfeu.at",
  "platformSupport" : {
    "desktopWeb" : "full",
    "ios" : "basic",
    "android" : "basic"
  },
  "minKeymanVersion" : "7.0",
  "packageIncludes" : [
    "fonts",
    "documentation",
    "visualKeyboard",
    "welcome"
    ],
  "version" : "1.1",
  "license" : "mit",
  "languages" : {
    "adi" : {
      "font" : {
        "family" : "TibetanWeb",
        "source" : "DDC_Uchen.ttf"
      },
      "oskFont" : {
        "family" : "TibetanWebOsk",
        "source" : [
          "DDC_Uchen.ttf",
          "ddc_uchen-webfont.svg#ddc_uchenregular"
          ]
      }
    },
    "bod" : {
      "font" : {
        "family" : "TibetanWeb",
        "source" : "DDC_Uchen.ttf"
      },
      "oskFont" : {
        "family" : "TibetanWebOsk",
        "source" : [
          "DDC_Uchen.ttf",
          "ddc_uchen-webfont.svg#ddc_uchenregular"
          ]
      },
      "example" : {
        "keys" : "bod sKd",
        "text" : "\u0F56\u0F7C\u0F51\u0F0B\u0F66\u0F90\u0F51",
        "note" : "Name of language"
      }
    }
  },
  "lastModifiedDate" : "2015-02-16T07:34:55Z",
  "encodings" : [
    "unicode"
    ],
  "related" : {
    "tibetan unicode direct input" : {
      "deprecates" : true
    }
  },
  "legacyId" : 364
}
```