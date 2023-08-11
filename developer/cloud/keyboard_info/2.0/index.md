---
title: .keyboard_info 1.0 Specification
---

This file will be created by the PR submitter of the keyboard, for new
pull requests. It is a JSON file, with the following members. The
**.keyboard_info** file will be used when building keyboard layouts for
deployment; the master version of the file lives in the keyboard
repository. During CI deployment, it will be read from the source
repository, extended with the required generated fields and this new
version pushed with the compiled resources to the download store.

### KeyboardInfo Object

Note: The **Generated** column indicates if the field will be generated
if it is not present in the source repository during the CI deployment
process. Fields that are **Required** and not **Generated** must be
completed by the keyboard author.

<table class="language-javascript display">
<colgroup>
<col style="width: 20%" />
<col style="width: 20%" />
<col style="width: 20%" />
<col style="width: 20%" />
<col style="width: 20%" />
</colgroup>
<thead>
<tr class="header">
<th><strong>Member</strong></th>
<th><strong>Required in source?</strong></th>
<th><strong>Required in distribution</strong></th>
<th><strong>Generated?</strong></th>
<th><strong>Notes</strong></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td>id</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td><p><strong>string</strong>, the same as the name of the folder,
lower case. In the <strong>release/</strong> folder, this name must be a
valid Javascript identifier, and follow the rules in the <a
href="https://help.keyman.com/developer/keyboards">Keyboard Cloud
Repository documentation</a>.</p>
<p><strong>Example:</strong> <code>"id": "fv_blackfoot"</code></p>
<p><strong>Generation:</strong> from folder name.</p></td>
</tr>
<tr class="even">
<td>name</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td><p><strong>string</strong>, the human readable name of the keyboard.
This will usually differ from the id.</p>
<p><strong>Generation:</strong> from .kmp info, package name. If a .kmp
is not included, it is sourced from the .js with a regular
expression.</p></td>
</tr>
<tr class="odd">
<td>authorName</td>
<td></td>
<td></td>
<td>yes</td>
<td><p><strong>string</strong>, the name of the author</p>
<p><strong>Generation:</strong> from .kmp info</p></td>
</tr>
<tr class="even">
<td>authorEmail</td>
<td></td>
<td></td>
<td>yes</td>
<td><p><strong>string</strong>, the email address of the author</p>
<p><strong>Generation:</strong> from .kmp info</p></td>
</tr>
<tr class="odd">
<td>description</td>
<td></td>
<td></td>
<td></td>
<td><p><strong>string</strong>, a textual description of the keyboard.
This may contain some minimal HTML (p, b, i, u, span, a, ul, ol, li, br,
hr, h1-h4 tags).</p>
<p><strong>No Automatic Generation:</strong> this information is not
consistently available elsewhere. If not specified, then a description
will be generated based on the supported languages at runtime by the
consumer of the json.</p></td>
</tr>
<tr class="even">
<td>license</td>
<td>yes</td>
<td>yes</td>
<td></td>
<td><p><strong>string</strong>, the possible values for
<strong>license</strong> vary by location in the repository:</p>
<ul>
<li><strong>release/</strong> and <strong>experimental/</strong>
keyboards must be <code>"mit"</code>.</li>
<li><strong>legacy/</strong> keyboards will be <code>"freeware"</code>,
<code>"shareware"</code> or <code>"commercial"</code>.</li>
</ul>
<p>This must always be specified, even for <strong>release/</strong> and
<strong>experimental/</strong> keyboards, because this must be an
explicit decision by the keyboard author for legal reasons.</p></td>
</tr>
<tr class="odd">
<td>languages</td>
<td>yes</td>
<td>yes</td>
<td></td>
<td><p><strong>array or objects</strong>; an array of BCP 47 codes, or
an object with its member names being BCP 47 codes and values being
<strong>KeyboardLanguageInfo</strong> objects.</p>
<p><strong>Generation:</strong> There is now some automatic generation
of language names. The font and example information in the keyboard list
is not available elsewhere.</p></td>
</tr>
<tr class="even">
<td>lastModifiedDate</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td><p><strong>string</strong>, the last time the keyboard was modified,
in RFC3339, UTC <code>YYYY-MM-DDThh:mm:ss[.nnn]Z</code></p>
<p><strong>Generation:</strong> the time that the .keyboard_info file is
generated</p></td>
</tr>
<tr class="odd">
<td>links</td>
<td></td>
<td></td>
<td></td>
<td><p><strong>array</strong>, of <strong>KeyboardLinkInfo</strong>
objects</p></td>
</tr>
<tr class="even">
<td>packageFilename</td>
<td></td>
<td>yes <a href="#note-1">(1)</a></td>
<td>yes <a href="#note-1">(1)</a></td>
<td><p><strong>string</strong>, filename of the .kmp file that will be
distributed, relative to the keyboard base folder, including extension,
required for <strong>experimental/</strong> and <strong>legacy/</strong>
folders. If no .kmp exists, then keyboard is js only. For
<strong>release/</strong> folders, this must be
<strong><em>id</em>/build/<em>id</em>.kmp</strong>.</p>
<p><strong>Generation:</strong> if more than one .kmp exists, then
fail.</p></td>
</tr>
<tr class="odd">
<td>packageFileSize</td>
<td></td>
<td></td>
<td>yes</td>
<td><p><strong>number</strong>, integer size of the .kmp file that will
be distributed.</p>
<p><strong>Generation:</strong> This will normally be generated
automatically.</p></td>
</tr>
<tr class="even">
<td>jsFilename</td>
<td></td>
<td>yes <a href="#note-2">(2)</a></td>
<td>yes <a href="#note-2">(2)</a></td>
<td><p><strong>string</strong>, filename of the .js file that will be
distributed,  e.g. "gff_amh.js".</p>
<p><strong>packageFilename</strong> and/or <strong>jsFilename</strong>
must be specified for <strong>legacy</strong> and
<strong>experimental</strong> keyboards.</p>
<p><strong>Generation:</strong> for release, must be
<strong><em>id</em>.js</strong>.</p></td>
</tr>
<tr class="odd">
<td>jsFileSize</td>
<td></td>
<td></td>
<td>yes</td>
<td><p><strong>number</strong>, integer size of the .js file that will
be distributed.</p>
<p><strong>Generation:</strong> This will normally be generated
automatically.</p></td>
</tr>
<tr class="even">
<td>documentationFilename</td>
<td></td>
<td></td>
<td></td>
<td><p><strong>string</strong>, filename of the .pdf or .rtf format
documentation file associated with the keyboard, relative to the
keyboard base folder.</p>
<p><strong>No Automatic Generation:</strong> This may be difficult to
ascertain as the file loses path when compiled into a .kmp.</p></td>
</tr>
<tr class="odd">
<td>documentationFileSize</td>
<td></td>
<td></td>
<td>yes</td>
<td><p><strong>number</strong>, integer size of the
<strong>documentationFileName</strong> file that will be
distributed.</p>
<p><strong>Generation:</strong> This will normally be generated
automatically.</p></td>
</tr>
<tr class="even">
<td>isRTL</td>
<td></td>
<td></td>
<td>yes</td>
<td><p><strong>boolean</strong>, true if the .js keyboard should be
right-to-left.</p>
<p><strong>Generation:</strong> This can usually be generated
automatically from the .js file, by heuristic. If the heuristic is not
working, add the appropriate value to the source .keyboard_info
file.</p></td>
</tr>
<tr class="odd">
<td>encodings</td>
<td></td>
<td></td>
<td>yes</td>
<td><p><strong>array</strong>, of up to 2 <strong>strings</strong>,
<code>"unicode"</code> and/or <code>"ansi"</code>.</p>
<p><strong>Generation:</strong> from .kmx, .js.</p></td>
</tr>
<tr class="even">
<td>packageIncludes</td>
<td></td>
<td>yes <a href="#note-1">(1)</a></td>
<td>yes <a href="#note-1">(1)</a></td>
<td><p><strong>array</strong>, of <strong>strings</strong>. Metadata
used mostly by legacy keyboards. This flags whether a package
includes:</p>
<ul>
<li><code>"fonts"</code> - one or more fonts</li>
<li><code>"documentation"</code> - documentation, in PDF, RTF or HTML
format, excluding welcome.htm and readme</li>
<li><code>"visualKeyboard"</code> - a KVK file</li>
<li><code>"welcome"</code> - a welcome.htm file</li>
</ul>
<p><strong>Generation:</strong> from .kmp</p></td>
</tr>
<tr class="odd">
<td>version</td>
<td></td>
<td></td>
<td>yes</td>
<td><p><strong>string</strong>, the file version of the keyboard /
package.</p>
<p><strong>Generation:</strong> from .kmp, .js. If no version number is
present in the compiled file, assumes <code>"1.0"</code></p></td>
</tr>
<tr class="even">
<td>minKeymanVersion</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td><p><strong>string</strong>. The minimum version of Keyman that can
read this keyboard. If present, must be a two part version string,
starting from <code>"6.0"</code> and up. Note: for versions below 10.0,
this value is used in KeymanWeb, but the version mapping is based on
Keyman Desktop version numbers. For versions 10.0 and above, all
platforms have a synchronized version number. See <a
href="/developer/cloud/versioning">KeymanWeb Versioning</a> for more
detail.</p>
<p><strong>Generation:</strong> from .kmp, .js.</p></td>
</tr>
<tr class="odd">
<td>helpLink</td>
<td></td>
<td></td>
<td></td>
<td><p><strong>string</strong>. If present, the link to this keyboard's
help page on help.keyman.com.</p>
<p><strong>Generation:</strong> if
<strong><em>id</em>/source/help/<em>id</em>.php</strong>
exists.</p></td>
</tr>
<tr class="even">
<td>platformSupport</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td><p>A <strong>KeyboardPlatformInfo</strong> object.</p>
<p><strong>Generation:</strong> from .kmp, .js existence. Assumes, if
.kmp exists, that <code>"macos"</code>, <code>"windows"</code> are
supported; if .js exists, <code>"ios"</code>, <code>"android"</code>,
<code>"web"</code> are supported.</p></td>
</tr>
<tr class="odd">
<td>legacyId</td>
<td></td>
<td></td>
<td></td>
<td><p><strong>number</strong>, the integer identifier for the keyboard
in the legacy Tavultesoft keyboard database.</p></td>
</tr>
<tr class="even">
<td>sourcePath</td>
<td></td>
<td></td>
<td>yes</td>
<td><p><strong>string</strong>, the relative path of the keyboard in the
/keymanapp/keyboards GitHub repository, starting with
<code>release/</code>, <code>experimental/</code> or
<code>legacy/</code>.</p>
<p><strong>Generation:</strong> This will normally be generated
automatically.</p></td>
</tr>
<tr class="odd">
<td>related</td>
<td></td>
<td></td>
<td></td>
<td><p><strong>object</strong>, with each property an id of a keyboard
and corresponding value is a
<strong>KeyboardRelatedInfo</strong>.</p></td>
</tr>
<tr class="even">
<td>deprecated</td>
<td></td>
<td></td>
<td>yes</td>
<td><p><strong>boolean</strong>, true if the keyboard has been
deprecated.</p>
<p><strong>Generation:</strong> Always generated automatically,
currently only visible on api.keyman.com/search.</p></td>
</tr>
</tbody>
</table>

### KeyboardLanguageInfo Object

**Member**

**Required?**

**Notes**

font

**KeyboardFontInfo** object containing information about a  recommended
font for use with the keyboard.

oskFont

**KeyboardFontInfo** object containing information about a  recommended
font for use with the on screen keyboard. If not present, uses **font**.
If both are not present, then Keyman uses the default system font.

example

**KeyboardExampleInfo** object containing a sample text that the user
can type to give them an idea of how to start to use the keyboard.

displayName

**string**, a descriptive name of the language to display to users in
the format: *language (script, region)*. If the BCP 47 code does not
contain script or region subtags, only the language name is displayed.

**Example:**
`"displayName": "Central Atlas Tamazight (Tifinagh, Morocco)"`

**Generation:**This will be generated automatically from the BCP 47
code.

languageName

**string**, the name of the language subtag in the BCP 47 code.

**Example:**`"languageName": "Central Atlas Tamazight"`

**Generation:**This will be generated automatically from the BCP 47
code.

scriptName

**string**, the name of the script subtag in the BCP 47 code.

**Example:**`"scriptName": "Tifinagh"`

**Generation:**This will be generated automatically from the BCP 47
code.

regionName

**string**, the name of the region subtag in the BCP 47 code.

**Example:**`"regionName": "Morocco"`

**Generation:**This will be generated automatically from the BCP 47
code.

### KeyboardLinkInfo Object

| **Member** | **Required?** | **Notes**                                        |
|------------|---------------|--------------------------------------------------|
| name       | yes           | **string**, the text to be shown in the link     |
| url        | yes           | **string**, the fully qualified url of the link. |

### KeyboardPlatformInfo Object

<table class="language-javascript display">
<colgroup>
<col style="width: 33%" />
<col style="width: 33%" />
<col style="width: 33%" />
</colgroup>
<thead>
<tr class="header">
<th><strong>Member</strong></th>
<th><strong>Required?</strong></th>
<th><strong>Notes</strong></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td>windows</td>
<td></td>
<td rowspan="7"><p><strong>string</strong>, for all members: one of
<code>"dictionary"</code>, <code>"full"</code>, <code>"basic"</code>, or
<code>"none"</code>. If member is missing, <code>"none"</code>.</p>
<ul>
<li><code>"dictionary"</code>: keyboard includes dictionary, e.g. IME or
suggestion/autocompletion support.</li>
<li><code>"full"</code>: keyboard is designed and optimised for the
platform, and works well with it.</li>
<li><code>"basic"</code>: keyboard compiles for the platform but has not
been optimised for it (e.g. a Windows keyboard compiled to web, with no
touch-specific support, will still work on a touch platform but will
have a desktop-shaped touch keyboard with too many keys on it).</li>
<li><code>"none"</code>: keyboard does not work on the platform</li>
</ul></td>
</tr>
<tr class="even">
<td>macos</td>
<td></td>
</tr>
<tr class="odd">
<td>desktopWeb</td>
<td></td>
</tr>
<tr class="even">
<td>ios</td>
<td></td>
</tr>
<tr class="odd">
<td>android</td>
<td></td>
</tr>
<tr class="even">
<td>mobileWeb</td>
<td></td>
</tr>
<tr class="odd">
<td>linux</td>
<td></td>
</tr>
</tbody>
</table>

### KeyboardFontInfo Object

| **Member** | **Required?** | **Notes**                                                                                                               |
|------------|---------------|-------------------------------------------------------------------------------------------------------------------------|
| family     | yes           | **string**, family name of the font; can be used by Keyman Engine to locate an already installed font of the same name. |
| source     | yes           | **string**, filename, relative to .keyboard_info file.                                                                  |
| size       |               | **string**, in CSS Units, default 100%.                                                                                 |

### KeyboardExampleInfo Object

<table class="language-javascript display">
<colgroup>
<col style="width: 33%" />
<col style="width: 33%" />
<col style="width: 33%" />
</colgroup>
<thead>
<tr class="header">
<th><strong>Member</strong></th>
<th><strong>Required?</strong></th>
<th><strong>Notes</strong></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td>keys</td>
<td></td>
<td><p>One of the following types:</p>
<ul>
<li><strong>string</strong>, a list of keystrokes to type to produce a
short sample text using this keyboard, must be plain text US English
keycaps, e.g. <code>"Tiena ysTlN"</code>, cannot use modifiers other
than Shift.</li>
<li><strong>array</strong> of <strong>strings</strong> and/or
<strong>KeyboardExampleKeyInfo</strong> objects, e.g.
<code>["Tiena", { "modifiers": ["shift"], "key": "K_SPACE" }, "ysTlN" ]</code>.</li>
</ul>
<p>This is not intended to give a full description of the keyboard but
rather a simple example that introduces the user to the way the keyboard
works.</p></td>
</tr>
<tr class="even">
<td>text</td>
<td></td>
<td><p><strong>string</strong>, the result of the keystrokes typed, i.e.
a Unicode string.</p></td>
</tr>
<tr class="odd">
<td>note</td>
<td></td>
<td><p><strong>string</strong>, a text note that helps to explain the
example to the user.</p></td>
</tr>
</tbody>
</table>

### KeyboardExampleKeyInfo Object

| **Member** | **Required?** | **Notes**                                                                                                                                                                                                                                         |
|------------|---------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| modifiers  |               | **array** of `"shift"`, `"ctrl"`, `"alt"`, `"left-ctrl"`, `"left-alt"`, `"right-ctrl"`, `"right-alt"` **strings**.                                                                                                                                |
| key        | yes           | **string**. A valid `K_` identifier, from the first two lists in <https://help.keyman.com/developer/language/guide/virtual-keys> (i.e., excluding reserved virtual key codes). Touch-specific keys such as `T_xxx` or `U_abcd` are not permitted. |

### KeyboardRelatedInfo Object

| **Member**   | **Required?** | **Notes**                                                                                                                                                                                                     |
|--------------|---------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| deprecates   |               | **boolean**, if **true**, then this keyboard is intended to deprecate another keyboard with the parent member name, and Keyman will upgrade it to this keyboard if found, ignoring version numbers.           |
| deprecatedBy |               | **boolean**, if **true**, then this keyboard has been deprecated by the keyboard referred to. This member should not be set in the source .keyboard_info but will be returned from queries to api.keyman.com. |
| note         |               | **string**, a textual description of the relationship between the keyboards.                                                                                                                                  |

<span id="note-1">1</span>: Required for desktop distributions, not for
web distributions.

<span id="note-2">2</span>: Required for web distributions, not for
desktop distributions.

### Schema

A validating schema for the object is online at
<https://api.keyman.com/schemas/keyboard_info.source.json> and
<https://api.keyman.com/schemas/keyboard_info.distribution.json>.
.keyboard_info files in the repository must validate against the source
json; after build, the resulting .keyboard_info will validate against
the distribution json.

### Validation

The keyboard repository build process validates the JSON schema, then
copies the .keyboard_info into the build/ folder and populates missing
generated fields. If a field is already present, it will be validated
for correctness against the compiled keyboard files, but will not be
overridden.

Any errors in a .keyboard_info file will cause the build to fail.

### Examples

This is a sample minimal source .keyboard_info file. Note that as you
can see, only two fields are required for the source file. The build
process will generate any missing fields that it can. Generally
speaking, it is better to keep the file minimal to avoid duplication.

``` javascript
{
  "license": "mit",
  "languages": ["crl", "crj"]
}
```

The following is a reasonably comprehensive example .keyboard_info file
for a Tibetan keyboard. This illustrates deprecated keyboards; many of
these fields will typically be generated automatically from the compiled
keyboard data:

``` javascript
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

### Version History

1.0, 2017-09-14
:   Initial version

1.0.1, 2018-01-31
:   Add file sizes, isRTL, sourcePath fields so we can supply these to
    the legacy KeymanWeb Cloud API endpoints. Remove references to .kmx
    being a valid package format.

1.0.2, 2018-02-10
:   Add dictionary to platform support choices. Fixed default for
    platform to 'none'.

1.0.3, 2018-02-12
:   Renamed minKeymanDesktopVersion to minKeymanVersion to clarify that
    this version information applies to all platforms.

1.0.4 2018-11-26
:   Add helpLink field that contains the link to a keyboard help page on
    help.keyman.com.

1.0.5 2018-12-18
:   Deprecate languages\[\] array. Update KeyboardLanguageInfo object to
    include subtag names.

1.0.6 2019-09-06
:   No changes (originally in
    [\#36](https://github.com/keymanapp/help.keyman.com/pull/36) removed
    some unused fields but these are still in use. Reverted in
    2020-06-10.).
