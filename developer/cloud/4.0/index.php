<?php
require_once('includes/template.php');
require_once('includes/__docheader.php');

$baselanguage = "language-javascript";

// Required
head([
  'title' =>'KeymanWeb Server Data API',
]);

?>

<div class='body_text'>
<h1>KeymanWeb Cloud Services API - version 4.0</h1>

<h3>API usage</h3>

<p>Version 4.0 of the API is a RESTful web service available through HTTPS that returns only UTF-8 JSON format data.
  URIs in the data will reflect the protocol that is used to query the web service.</p>
  
<h3 style='clear:both'>Endpoints</h3>

<p>The two endpoints below can be used interchangeably. api.keyman.com is the modern endpoint; future services will
be available there.</p>

<ul>
  <li>https://api.keyman.com/cloud/4.0</li>
  <li>https://r.keymanweb.com/api/4.0</li>
</ul>

<h3 style='clear:both'>Interfaces</h3>

<table class='display grid'>
  <thead>
    <tr><th>Call</th><th>Description</th></tr>
  </thead>
  <tbody>
    <tr>
      <td style='white-space: nowrap; vertical-align: top'>GET <a href='https://api.keyman.com/cloud/4.0/languages' target='_blank'>https://api.keyman.com/cloud/4.0/languages</a></td>
      <td>
        Returns a CloudServices object with a Languages object, that contains a list of all language and keyboard combinations
        available on the server.  This call will return full details of every language, keyboard 
        and font combination.  It is typically around 150KB.
      </td>
    </tr>
    <tr>
      <td style='white-space: nowrap; vertical-align: top'>GET <a href='https://api.keyman.com/cloud/4.0/languages/fra' target='_blank'>https://api.keyman.com/cloud/4.0/languages/<b>fra</b></a></td>
      <td>
        Returns a CloudServices object with a Language object for a language identified by the language code <b>fra</b>.
      </td>
    </tr>
    <tr>
      <td style='white-space: nowrap; vertical-align: top'>GET <a href='https://api.keyman.com/cloud/4.0/languages/fra/european' target='_blank'>https://api.keyman.com/cloud/4.0/languages/<b>fra/european</b></a></td>
      <td>
        Returns a CloudServices object with a Language object for a language identified by the language code <b>fra</b> and
        its associated keyboard identified by id <b>european</b>.
      </td>
    </tr>
    <tr>
      <td style='white-space: nowrap; vertical-align: top'>GET <a href='https://api.keyman.com/cloud/4.0/keyboards' target='_blank'>https://api.keyman.com/cloud/4.0/keyboards</a></td>
      <td>
        Returns a CloudServices object with a Keyboards object that contains a list of all keyboards on the server.  The response
        is typically around 75KB.
      </td>
    </tr>
    <tr>
      <td style='white-space: nowrap; vertical-align: top'>GET <a href='https://api.keyman.com/cloud/4.0/keyboards/european' target='_blank'>https://api.keyman.com/cloud/4.0/keyboards/<b>european</b></a></td>
      <td>
        Returns a CloudServices object with a Keyboard object for the keyboard identified by id <b>european</b>, and a list of all
        languages associated with that keyboard.
      </td>
    </tr>
    <tr>
      <td style='white-space: nowrap; vertical-align: top'>GET <a href='https://api.keyman.com/cloud/4.0/keyboards/european/fra' target='_blank'>https://api.keyman.com/cloud/4.0/keyboards/<b>european</b>/<b>fra</b></a></td>
      <td>
        Returns a CloudServices object with a Keyboard object for the keyboard identified by id <b>european</b>, and the language
        associated with <b>fra</b>.
      </td>
    </tr>
  </tbody>
</table>

<?php
params("The parameters below can be provided as query parameters in the URL.",
  "device", "optional", <<<END
  Can currently be any of the following: <code>"windows"</code>, <code>"macosx"</code>, <code>"iphone"</code>, 
  <code>"ipad"</code>, <code>"androidphone"</code>, <code>"androidtablet"</code>, <code>"mobile"</code>, <code>"desktop"</code>, 
  <code>"tablet"</code>, <code>"any"</code>.
  The server will filter keyboards according to the device type.  If absent, then <code>"any"</code> is used.
END
, "dateformat", "optional", 'Can be <code>"seconds"</code> or <code>"standard"</code>.  If absent, then <code>"standard"</code> is used.'.
  '  Reflects the format of any date values returned.',
  "keyboardVersion", "optional", "Specifies the version of the keyboard to retrieve.  Must be <code>'current'</code>, ".
    "<code>'all'</code> or a valid version string, such as <code>'1.1'</code>.",
  "languageidtype", "optional", 'Can be <code>"iso6393"</code> or <code>"bcp47"</code>.  If absent, then <code>"iso6393"</code> is used.'.
  '  Reflects the type of any language identifiers returned.',
  "version", "optional", 'The version of Keyman Engine, e.g. <code>"10.0"</code>. If absent, uses <code>"2.0"</code>. The server will filter keyboards'.
  '  that are available for that version of Keyman Engine. (See <a href="../versioning.php">KeymanWeb Versioning</a> for details on valid version numbers.)'
);
?>

<h2>Returned JSON</h2>

<h3 name="obj-cloudservices">The CloudServices object</h3>

<p>The <code>CloudServices</code> object is the base object returned from any API call.  Note that the members
<code>keyboards</code>, <code>languages</code>, <code>keyboard</code>, and <code>language</code> are all mutually exclusive.</p>
<?php
obj_spec(false,
  "options", "required Object", "An <a href='#obj-options'><code>Options</code></a> object corresponding to the user-selected query options",
  "languages", "optional", "A <a href='obj-languages'><code>Languages</code></a> object.",
  "keyboard", "optional", "<a href='obj-keyboard'><code>Keyboard</code></a> object or Array of <a href='obj-keyboard'><code>Keyboard</code></a> objects.",
  "language", "optional", "<a href='obj-language'><code>Language</code></a> object."
);
?>

<h3><a id="obj-options">The Options object</a></h3>

<p>The <code>Options</code> object returns the original query parameters plus contextual information.  Contains the following members:</p>
<?php

obj_spec(false,
  "context", "required string", "The context of the call.  Will be one of the following four values: <code>'keyboards'</code>, ".
    "<code>'languages'</code>, <code>'keyboard'</code>, <code>'language'</code>",
  "dateFormat", "required string", "Either <code>'seconds'</code> or <code>'standard'</code>, corresponding to the requested ".
    "date format if specified.",
  "device", "required string", "Target device.  Will be 'all' if not specified.",
  "keyboardid", "optional string", "id of the keyboard queried, if provided.",
  "languageid", "optional string", "id of the language queried, if provided.",
  "keyboardBaseUri", "required string", "fully qualified base path of any keyboard filenames presented in the data.",
  "fontBaseUri", "required string", "fully qualified base path of any font filenames presented in the data."
);

?>

<h2>Example Call</h2>

<?= codebox("GET https://api.keyman.com/cloud/4.0/keyboards/european/fra", "http"); ?>

<p>Returns:</p>

<?=
codebox(<<<END
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
END
, "json");
?>
  
</div>
