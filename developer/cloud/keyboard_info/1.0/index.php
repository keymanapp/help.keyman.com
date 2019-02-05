<?php
  require_once('includes/template.php'); 
  
  // Required
  head([
    'title' =>'.keyboard_info 1.0 Specification',
    'css' => ['template.css','index.css','prism.css'],
    'showMenu' => true
  ]);
?>
<h2>.keyboard_info 1.0 Specification</h2>

<p>This file will be created by the PR submitter of the keyboard, for new pull requests. It is a JSON file, with the following members. The <b>.keyboard_info</b> file will be used when building keyboard layouts for deployment; the master version of the file lives in the keyboard repository. During CI deployment, it will be read from the source repository, extended with the required generated fields and this new version pushed with the compiled resources to the download store.</p>

<h3>KeyboardInfo Object</h3>

<p>Note: The <b>Generated </b>column indicates if the field will be generated if it is not present in the source repository during the CI deployment process. Fields that are <b>Required</b> and not <b>Generated</b> must be completed by the keyboard author.</p>

<table class='language-javascript display'>
<thead>
<tr>
<th><b>Member</b></th>
<th><b>Required in source?</b></th>
<th><b>Required in distribution</b></th>
<th><b>Generated?</b></th>
<th><b>Notes</b></th>
</tr>
</thead><tbody>
<tr>
<td>id</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td>
  <p><b>string</b>, the same as the name of the folder, lower case. In the <b>release/</b> folder, this name must be a 
  valid Javascript identifier, and follow the rules in the 
  <a href="https://help.keyman.com/developer/keyboards">Keyboard Cloud Repository documentation</a>.</p>

  <p><b>Example:</b> <code>"id": "fv_blackfoot"</code></p>

  <p><b>Generation: </b>from folder name.</p>
</td>
</tr>
<tr>
<td>name</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td>
  <p><b>string</b>, the human readable name of the keyboard. This will usually differ from the id.</p>

  <p><b>Generation:</b> from .kmp info, package name. If a .kmp is not included, it is sourced from the .js with a regular expression.</p>
</td>
</tr>
<tr>
<td>authorName</td>
<td></td>
<td></td>
<td>yes</td>
<td>
  <p><b>string</b>, the name of the author</p>

  <p><b>Generation:</b> from .kmp info</p>
</td>
</tr>
<tr>
<td>authorEmail</td>
<td></td>
<td></td>
<td>yes</td>
<td>
  <p><b>string</b>, the email address of the author</p>

  <p><b>Generation:</b> from .kmp info</p>
</td>
</tr>
<tr>
<td>description</td>
<td></td>
<td></td>
<td></td>
<td>
  <p><b>string</b>, a textual description of the keyboard. This may contain some minimal HTML (p, b, i, u, span, a, ul, ol, li, br, hr, h1-h4 tags).</p>

  <p><b>No Automatic Generation:</b> this information is not consistently available elsewhere. If not specified, then a 
  description will be generated based on the supported languages at runtime by the consumer of the json.</p>
</td>
</tr>
<tr>
<td>license</td>
<td>yes</td>
<td>yes</td>
<td></td>
<td>
  <p><b>string</b>, the possible values for <b>license</b> vary by location in the repository:</p>
  <ul>
    <li><b>release/</b> and <b>experimental/</b> keyboards must be <code>"mit"</code>.</li>
    <li><b>legacy/</b> keyboards will be <code>"freeware"</code>, 
      <code>"shareware"</code> or <code>"commercial"</code>.</li>
  </ul>
  <p>This must always be specified, even for <b>release/</b> and <b>experimental/</b> keyboards,
  because this must be an explicit decision by the keyboard author for legal reasons.</p>
</td>
</tr>
<tr>
<td>languages</td>
<td>yes</td>
<td>yes</td>
<td></td>
<td>
  <p><b>array or objects</b>; an array of BCP 47 codes, or an object with its member names being BCP 47 codes and values being <b>KeyboardLanguageInfo</b> objects.</p>

  <p><b>Generation:</b> There is now some automatic generation of language names. The font and example information in the keyboard list is not available elsewhere.</p>
</td>
</tr>
<tr>
<td>lastModifiedDate</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td>
  <p><b>string</b>, the last time the keyboard was modified, in RFC3339, UTC <code>YYYY-MM-DDThh:mm:ss[.nnn]Z</code></p>

  <p><b>Generation:</b> the time that the .keyboard_info file is generated</p>
</td>
</tr>
<tr>
<td>links</td>
<td></td>
<td></td>
<td></td>
<td>
  <p><b>array</b>, of <b>KeyboardLinkInfo</b> objects</p>
</td>
</tr>
<tr>
<td>packageFilename</td>
<td></td>
<td>yes <a href='#note-1'>(1)</a></td>
<td>yes <a href='#note-1'>(1)</a></td>
<td>
  <p><b>string</b>, filename of the .kmp file that will be distributed, relative to the keyboard base folder, 
  including extension, required for <b>experimental/ </b>and <b>legacy/</b> folders. If no .kmp exists,
  then keyboard is js only. For <b>release/</b> folders, this must be 
  <b><i>id</i></b><b>/build/</b><b><i>id</i></b><b>.kmp</b>.</p>

  <p><b>Generation:</b> if more than one .kmp exists, then fail.</p>
</td>
</tr>
<tr>
<td>packageFileSize</td>
<td></td>
<td></td>
<td>yes</td>
<td>
  <p><b>number</b>, integer size of the .kmp file that will be distributed.

  <p><b>Generation:</b> This will be normally generated automatically.</p>
</td>
</tr>
<tr>
<td>jsFilename</td>
<td></td>
<td>yes <a href='#note-2'>(2)</a></td>
<td>yes <a href='#note-2'>(2)</a></td>
<td>
  <p><b>string</b>, filename of the .js file that will be distributed,  e.g. "gff-amh-1.0.js".</p>

  <p><b>packageFilename </b>and/or <b>jsFilename </b>must be specified for <b>legacy</b>
  and <b>experimental</b> keyboards.</p>

  <p><b>Generation:</b> for release, must be <b><i>id-keyboardVersion</i></b><b>.js</b>.</p>
</td>
</tr>
<tr>
<td>jsFileSize</td>
<td></td>
<td></td>
<td>yes</td>
<td>
  <p><b>number</b>, integer size of the .js file that will be distributed.

  <p><b>Generation:</b> This will be normally generated automatically.</p>
</td>
</tr>
<tr>
<td>documentationFilename</td>
<td></td>
<td></td>
<td></td>
<td>
  <p><b>string</b>, filename of the .pdf or .rtf format documentation file associated with the keyboard,
  relative to the keyboard base folder.</p>

  <p><b>No Automatic Generation:</b> This may be difficult to ascertain as the file loses
  path when compiled into a .kmp.</p>
</td>
</tr>
<tr>
<td>documentationFileSize</td>
<td></td>
<td></td>
<td>yes</td>
<td>
  <p><b>number</b>, integer size of the <b>documentationFileName</b> file that will be distributed.

  <p><b>Generation:</b> This will be normally generated automatically.</p>
</td>
</tr>
<tr>
<td>isRTL</td>
<td></td>
<td></td>
<td>yes</td>
<td>
  <p><b>boolean</b>, true if the .js keyboard should be right-to-left.

  <p><b>Generation:</b> This can usually be generated automatically from the .js file,
  by heuristic. If the heuristic is not working, add the appropriate value to the source 
  .keyboard_info file.</p>
</td>
</tr>
<tr>
<td>encodings</td>
<td></td>
<td></td>
<td>yes</td>
<td>
  <p><b>array</b>, of up to 2 <b>strings</b>, <code>"unicode"</code> and/or
    <code>"ansi"</code>.</p>

  <p><b>Generation:</b> from .kmx, .js.</p>
</td>
</tr>
<tr>
<td>packageIncludes</td>
<td></td>
<td>yes <a href='#note-1'>(1)</a></td>
<td>yes <a href='#note-1'>(1)</a></td>
<td>
  <p><b>array</b>, of <b>strings</b>. Metadata used mostly by legacy keyboards. This flags whether a package includes:</p>
  <ul>
    <li><code>"fonts"</code> - one or more fonts</li>
    <li><code>"documentation"</code> - documentation, in PDF, 
        RTF or HTML format, excluding welcome.htm and readme</li>
    <li><code>"visualKeyboard"</code> - a KVK file</li>
    <li><code>"welcome"</code> - a welcome.htm file</li>
  </ul>
  
  <p><b>Generation: </b>from .kmp</p>
</td>
</tr>
<tr>
<td>version</td>
<td></td>
<td></td>
<td>yes</td>
<td>
  <p><b>string</b>, the file version of the keyboard / package.</p>

  <p><b>Generation:</b> from .kmp, .js. If no version number is present in the
  compiled file, assumes <code>"1.0"</code></p>
</td>
</tr>
<tr>
<td>minKeymanVersion</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td>
  <p><b>string</b>. The minimum version of Keyman that can read 
  this keyboard. If present, must be one of <code>"6.0"</code>, <code>"7.0"</code>, <code>"8.0"</code>, 
  <code>"9.0"</code>, <code>"10.0"</code>. Note that this value is used in KeymanWeb, but the version
  mapping is based on Keyman Desktop version numbers. See <a href='/developer/cloud/versioning.php'>KeymanWeb
  Versioning</a> for more detail.
  </p>

  <p><b>Generation:</b> from .kmp, .js.</p>
</td>
</tr>
<tr>
<td>helpLink</td>
<td></td>
<td></td>
<td></td>
<td>
  <p><b>string</b>. If present, the link to this keyboard's help page on help.keyman.com.</p>

  <p><b>Generation:</b> if <b><i>id</i></b><b>/source/help/</b><b><i>id</i></b><b>.php</b> exists.</p>
</td>
</tr>
<tr>
<td>platformSupport</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td>
  <p>A <b>KeyboardPlatformInfo </b>object.</p>

  <p><b>Generation: </b>from .kmp, .js existence. Assumes, if .kmp exists, that <code>"macos"</code>, 
  <code>"windows"</code> are supported; if .js exists, <code>"ios"</code>, <code>"android"</code>, 
  <code>"web"</code> are supported.</p>
</td>
</tr>
<tr>
<td>legacyId</td>
<td></td>
<td></td>
<td></td>
<td>
  <p><b>number</b>, the integer identifier for the keyboard in the legacy Tavultesoft keyboard database.</p>
</td>
</tr>
<tr>
<td>sourcePath</td>
<td></td>
<td></td>
<td>yes</td>
<td>
  <p><b>string</b>, the relative path of the keyboard in the /keymanapp/keyboards GitHub repository, starting
  with <code>release/</code>, <code>experimental/</code> or <code>legacy/</code>.

  <p><b>Generation:</b> This will be normally generated automatically.</p>
</td>
</tr>
<tr>
<td>related</td>
<td></td>
<td></td>
<td></td>
<td>
  <p><b>object</b>, with each property an id of a keyboard and corresponding value is a <b>KeyboardRelatedInfo</b>.</p>
</td>
</tr>
</tbody>
</table>

<h3>KeyboardLanguageInfo Object</h3>
<table class='language-javascript display'>
<thead>
<tr>
<th><b>Member</b></th>
<th><b>Required?</b></th>
<th><b>Notes</b></th>
</tr>
</thead>
<tbody>
<tr>
<td>displayName</td>
<td>yes</td>
<td>
  <p><b>string</b>, a descriptive name of the language to display to users in the format: <i>language (script, region)</i>.
    If the BCP 47 code does not contain script or region subtags, only the language name is displayed.</p>
  <p><b>Example:</b> <code>"displayName": "Central Atlas Tamazight (Tifinagh, Morocco)"</code></p>
  <p><b>Generation:</b>This will be generated automatically from the BCP 47 code.</p>
</td>
</tr>
</tbody>
<tbody>
<tr>
<td>languageName</td>
<td>yes</td>
<td>
  <p><b>string</b>, the name of the language subtag in the BCP 47 code.</p>
  <p><b>Example:</b><code>"languageName": "Central Atlas Tamazight"</code></p>
  <p><b>Generation:</b>This will be generated automatically from the BCP 47 code.</p>
</td>
</tr>
</tbody>
<tbody>
<tr>
<td>scriptName</td>
<td></td>
<td>
  <p><b>string</b>, the name of the script subtag in the BCP 47 code.</p>
  <p><b>Example:</b><code>"scriptName": "Tifinagh"</code></p>
  <p><b>Generation:</b>This will be generated automatically from the BCP 47 code.</p>
</td>
</tr>
</tbody>
<tbody>
<tr>
<td>regionName</td>
<td></td>
<td>
  <p><b>string</b>, the name of the region subtag in the BCP 47 code.</p>
  <p><b>Example:</b><code>"regionName": "Morocco"</code></p>
  <p><b>Generation:</b>This will be generated automatically from the BCP 47 code.</p>
</td>
</tr>
</tbody>
<tbody>
<tr>
<td>font</td>
<td></td>
<td><p><b>KeyboardFontInfo </b>object containing information about a  recommended font for use with the keyboard.</p></td>
</tr>
<tr>
<td>oskFont</td>
<td></td>
<td><p><b>KeyboardFontInfo </b>object containing information about a  recommended font for use with the on screen keyboard. If not present, uses <b>font</b>. If both are not present, then Keyman uses the default system font.</p></td>
</tr>
<tr>
<td>example</td>
<td></td>
<td><p><b>KeyboardExampleInfo</b> object containing a sample text that the user can type to give them an idea of how to start to use the keyboard.</p></td>
</tr>
</tbody>
</table>

<h3>KeyboardLinkInfo Object</h3>
<table class='display'>
<thead>
<tr>
<th><b>Member</b></th>
<th><b>Required?</b></th>
<th><b>Notes</b></th>
</tr>
</thead>
<tbody>
<tr>
<td>name</td>
<td>yes</td>
<td><p><b>string</b>, the text to be shown in the link</p></td>
</tr>
<tr>
<td>url</td>
<td>yes</td>
<td><p><b>string</b>, the fully qualified url of the link.</p></td>
</tr>
</tbody>
</table>

<h3>KeyboardPlatformInfo Object</h3>
<table class='language-javascript display'>
<thead>
<tr>
<th><b>Member</b></th>
<th><b>Required?</b></th>
<th><b>Notes</b></th>
</tr>
</thead>
<tbody>
<tr>
<td>windows</td>
<td></td>
<td rowspan="7">
  <p><b>string</b>, for all members: one of <code>"dictionary"</code>, <code>"full"</code>, <code>"basic"</code>, or <code>"none"</code>.
  If member is missing, <code>"none"</code>.</p>
  
  <ul>
    <li><code>"dictionary"</code>: keyboard includes dictionary, e.g. IME or suggestion/autocompletion support.</li>
    <li><code>"full"</code>: keyboard is designed and optimised for the platform, and works well with it.</li>
    <li><code>"basic"</code>: keyboard compiles for the platform but has not been optimised for it (e.g. a 
    Windows keyboard compiled to web, with no touch-specific support, will still work on a touch platform
    but will have a desktop-shaped touch keyboard with too many keys on it).</li>
    <li><code>"none"</code>: keyboard does not work on the platform</li>
  </ul>
</td>
</tr>
<tr>
<td>macos</td>
<td></td>
</tr>
<tr>
<td>desktopWeb</td>
<td></td>
</tr>
<tr>
<td>ios</td>
<td></td>
</tr>
<tr>
<td>android</td>
<td></td>
</tr>
<tr>
<td>mobileWeb</td>
<td></td>
</tr>
<tr>
<td>linux</td>
<td></td>
</tr>
</tbody>
</table>

<h3>KeyboardFontInfo Object</h3>
<table class='display'>
<thead>
<tr>
<th><b>Member</b></th>
<th><b>Required?</b></th>
<th><b>Notes</b></th>
</tr>
</thead>
<tbody>
<tr>
<td>family</td>
<td>yes</td>
<td>
  <p><b>string</b>, family name of the font; can be used by Keyman Engine to locate an already installed font of the same name.</p>
</td>
</tr>
<tr>
<td>source</td>
<td>yes</td>
<td>
  <p><b>string</b>, filename, relative to .keyboard_info file.</p>
</td>
</tr>
<tr>
<td>size</td>
<td></td>
<td>
  <p><b>string</b>, in CSS Units, default 100%.</p>
</td>
</tr>
</tbody>
</table>

<h3>KeyboardExampleInfo Object</h3>
<table class='language-javascript display'>
<thead>
<tr>
<th><b>Member</b></th>
<th><b>Required?</b></th>
<th><b>Notes</b></th>
</tr>
</thead>
<tbody>
<tr>
<td>keys</td>
<td></td>
<td>
  <p>One of the following types:</p>
  
  <ul>
    <li><b>string</b>, a list of keystrokes to type to produce a short sample text using this keyboard, 
    must be plain text US English keycaps, e.g. <code>"Tiena ysTlN"</code>, cannot use modifiers other than Shift.</li>
    <li><b>array</b> of <b>strings</b> and/or <b>KeyboardExampleKeyInfo</b> objects, e.g.
      <code>["Tiena", { "modifiers": ["shift"], "key": "K_SPACE" }, "ysTlN" ]</code>.</li>
  </ul>
  
  <p>This is not intended to give a full description of the keyboard but rather a simple example that introduces the user to the 
     way the keyboard works.</p>
</td>
</tr>
<tr>
<td>text</td>
<td></td>
<td>
  <p><b>string</b>, the result of the keystrokes typed, i.e. a Unicode string.</p>
</td>
</tr>
<tr>
<td>note</td>
<td></td>
<td>
  <p><b>string</b>, a text note that helps to explain the example to the user.</p>
</td>
</tr>
</tbody>
</table>

<h3>KeyboardExampleKeyInfo Object</h3>
<table class='language-javascript display'>
<thead>
<tr>
<th><b>Member</b></th>
<th><b>Required?</b></th>
<th><b>Notes</b></th>
</tr>
</thead>
<tbody>
<tr>
<td>modifiers</td>
<td></td>
<td>
  <p><b>array</b> of <code>"shift"</code>, <code>"ctrl"</code>, <code>"alt"</code>, <code>"left-ctrl"</code>, 
  <code>"left-alt"</code>, <code>"right-ctrl"</code>, <code>"right-alt"</code> <b>strings</b>.</p>
</td>
</tr>
<tr>
<td>key</td>
<td>yes</td>
<td class='language-keyman'>
  <p><b>string</b>. A valid <code>K_</code> identifier, from the first two lists 
  in <a href="https://help.keyman.com/developer/language/guide/virtual-keys">https://help.keyman.com/developer/language/guide/virtual-keys</a>
  (i.e., excluding reserved virtual key codes). Touch-specific keys such as <code>T_xxx</code> or <code>U_abcd</code> are not permitted.</td>
</tr>
</tbody>
</table>

<h3>KeyboardRelatedInfo Object</h3>
<table class='display'>
<thead>
<tr>
<th><b>Member</b></th>
<th><b>Required?</b></th>
<th><b>Notes</b></th>
</tr>
</thead>
<tbody>
<tr>
<td>deprecates</td>
<td></td>
<td>
  <p><b>boolean</b>, if <b>true</b>, then this keyboard is intended to deprecate another keyboard with the parent member name, 
  and Keyman will upgrade it to this keyboard if found, ignoring version numbers.</p>
</td>
</tr>
<tr>
<td>deprecatedBy</td>
<td></td>
<td>
  <p><b>boolean</b>, if <b>true</b>, then this keyboard has been deprecated by the keyboard referred to. This member should not
  be set in the source .keyboard_info but will be returned from queries to api.keyman.com.</p>
</td>
</tr>
<tr>
<td>note</td>
<td></td>
<td>
  <p><b>string</b>, a textual description of the relationship between the keyboards.</p>
</td>
</tr>
</tbody>
</table>

<p><a name='note-1'>1</a>: Required for desktop distributions, not for web distributions.</p>
<p><a name='note-2'>2</a>: Required for web distributions, not for desktop distributions.</p>

<h3>Schema</h3>

<p>A validating schema for the object is online at <a href="https://api.keyman.com/schemas/keyboard_info.source.json">https://api.keyman.com/schemas/keyboard_info.source.json</a> and <a href="https://api.keyman.com/schemas/keyboard_info.distribution.json">https://api.keyman.com/schemas/keyboard_info.distribution.json</a>. .keyboard_info files in the repository must validate against the source json; after build, the resulting .keyboard_info will validate against the distribution json.</p>

<h3>Validation</h3>

<p>The keyboard repository build process validates the JSON schema, then copies the .keyboard_info into the build/ folder and populates missing generated fields. If a field is already present,
it will be validated for correctness against the compiled keyboard files, but will not be overridden.</p>

<p>Any errors in a .keyboard_info file will cause the build to fail.</p>

<h3>Examples</h3>

<p>This is a sample minimal source .keyboard_info file. Note that as you can see, only two fields are required for the source file. The build
process will generate any missing fields that it can. Generally speaking, it is better to keep the file minimal to avoid duplication.</p>

<pre><code class='language-javascript'>
{
  "license": "mit", 
  "languages": ["crl", "crj"]
}
</code></pre>

<p>The following is a reasonably comprehensive example .keyboard_info file for a Tibetan keyboard. This illustrates deprecated keyboards;
many of these fields will typically be generated automatically from the compiled keyboard data:</p>

<pre><code class='language-javascript'>
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
</code></pre>

<h3>Version History</h3>

<dl>
  <dt>1.0, 2017-09-14</dt>
  <dd>Initial version</dd>
  
  <dt>1.0.1, 2018-01-31</dt>
  <dd>Add file sizes, isRTL, sourcePath fields so we can supply these to the legacy KeymanWeb Cloud API endpoints. Remove references to .kmx being a valid package format.</dd>
  
  <dt>1.0.2, 2018-02-10</dt>
  <dd>Add dictionary to platform support choices. Fixed default for platform to 'none'.</dd>

  <dt>1.0.3, 2018-02-12</dt>
  <dd>Renamed minKeymanDesktopVersion to minKeymanVersion to clarify that this version information applies to all platforms.</dd>

  <dt>1.0.4 2018-11-26</dt>
  <dd>Add helpLink field that contains the link to a keyboard help page on help.keyman.com.</dd>

  <dt>1.0.5 2018-12-18</dt>
  <dd>Deprecate languages[] array. Update KeyboardLanguageInfo object to include subtag names.</dd>
</dl>
