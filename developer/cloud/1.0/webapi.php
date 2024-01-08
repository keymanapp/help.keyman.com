<?php
  $pagename = 'KeymanWeb Server Data API';
  $pagetitle = 'KeymanWeb Server Data API';
  $MainPage = true;
  require_once('header.php');

  echo <<<END
<div class='body_text'>

<p>The KeymanWeb Subscription Server has a RESTful JSON API which allows you to query it for information
about available languages, keyboards and fonts.</p>

<h3>Version Information and History</h3>

<p>Version: 1.0</p>

<h3>API usage</h3>

<p>Version 1.0 of the API is a RESTful web service that returns only UTF-8 JSON format data.  It can be called
over HTTP or HTTPS.  URIs in the data will reflect the protocol that is used to query the web service.</p>

<h3 style='clear:both'>Endpoints</h3>

<p>The two endpoints below can be used interchangeably. api.keyman.com is the modern endpoint; future services will
be available there.</p>

<ul>
  <li>https://api.keyman.com/cloud/4.0</li>
  <li>https://r.keymanweb.com/api/4.0</li>
</ul>

<h3>Interfaces</h3>

<table class='display'>
  <thead>
    <tr><th>Call</th><th>Description</th></tr>
  </thead>
  <tbody>
    <tr>
      <td>GET https://api.keyman.com/cloud/1.0/languages</td>
      <td>
        Returns a Languages object, that contains a list of all language and keyboard combinations
        available on the server.  This call will return full details of every language, keyboard
        and font combination.  It is typically around 100KB.
      </td>
    </tr>
    <tr>
      <td>GET https://api.keyman.com/cloud/1.0/languages/<b>aaa</b></td>
      <td>
        Returns a Language object for a language identified by the language code <b>aaa</b>.
      </td>
    </tr>
    <tr>
      <td>GET http://api.keyman.com/cloud/1.0/keyboards</td>
      <td>
        Returns a Keyboards object, that contains a list of all keyboards on the server.
      </td>
    </tr>
    <tr>
      <td>GET http://api.keyman.com/cloud/1.0/keyboards/<b>european</b></td>
      <td>
        Returns a Keyboard object for the keyboard identified by id <b>european</b>.
      </td>
    </tr>
  </tbody>
</table>

<p><b>Parameters</b></p>

<p>The parameters below are optional and can be provided as query parameters in the URL.</p>

<table class='display'>
  <thead>
    <tr><th>Parameter</th><th>Description</th></tr>
  </thead>
  <tbody>
    <tr>
      <td>device</td>
      <td>Optional.  Can currently be "windows", "macosx", "iphone", "ipad", "androidphone", "androidtablet", "mobile", "desktop", "tablet", "any".
      The server will filter keyboards according to the device type.  If absent, then "all" is used.</td>
    </tr>
    <tr>
      <td>languageidtype</td>
      <td>Optional.  Can currently be "iso6393" or "bcp47".  If absent, then "iso6393" is used.</td>
    </tr>
    <tr>
      <td>version</td>
      <td>Optional.  The version of Keyman Engine, e.g. "10.0". If absent, uses "2.0". The server will filter keyboards
      that are available for that version of Keyman Engine. (See <a href="../versioning">KeymanWeb Versioning</a> for details on valid version numbers.)</td>
    </tr>
  </tbody>
</table>

<h3>Structure</h3>

<ul>
  <li>Languages object.  A list of languages available on the server.  Contains the following members:
   <ul>
     <li>languages: Array of Language objects (required)</li>
   </ul>
  </li>

  <li>Keyboards object.  A list of languages available on the server or for a given language.  Contains the following members:
    <ul>
      <li>keyboards: Array of Keyboard objects (required)</li>
    </ul>
  </li>

  <li>Language object.  Contains the following members:
    <ul>
      <li>name: Name of language (required)</li>
      <li>id: ISO639-3 language code (required)</li>
      <li>keyboards: Array of Keyboard objects (optional)</li>
    </ul>
  </li>

  <li>Keyboard object.  Contains the following members:
    <ul>
      <li>name: Name of keyboard (required)</li>
      <li>id: ID of keyboard, always matches the filename of the keyboard (required)</li>
      <li>uri: Canonical URI where keyboard .js can be downloaded (required)</li>
      <li>default: <b>true</b> if the keyboard is the recommended default for the language (if absent, then false).</li>
      <li>rtl: <b>true</b> if the keyboard targets a right-to-left script (if absent, then false).</li>
      <li>lastModified: Date the keyboard file was last updated. (required)</li>
      <li>fileSize: Size of the keyboard file in bytes. (required)</li>
      <li>fonts: array of Font objects that are available for use with the keyboard. (optional)</li>
      <li>languages: array of Language objects that are linked to the keyboard. (optional)</li>
    </ul>
  </li>

  <li>Font object:
    <ul>
      <li>name: Font face name as compiled into the font. (required)</li>
      <li>uri: Canonical URI where font .ttf/.otf can be downloaded. (required)</li>
      <li>fileSize: Size of the font file in bytes. (required)</li>
      <li>lastModified: Date the font file was last updated. (required)</li>
      <li>default: <b>true</b> if the font is the recommended default for the keyboard (if absent, then false).</li>
    </ul>
  </li>
</ul>

<h3>Example Call</h3>

<blockquote><pre>
GET https://api.keyman.com/cloud/1.0/languages
</pre></blockquote>

<p>Returns:</p>

<blockquote><pre>
{"languages":
  [
    {"name":"Ghotuo",
     "id":"aaa",
     "keyboards":
       [
         {"id":"naijanfd10",
          "name":"Naija",
          "default":true,
          "uri":"http:\/\/r.keymanweb.com\/kmw\/naijanfd10.js",
          "fileSize":1351,
          "lastModified":"2012-03-02T16:36:15+11:00"
         }
       ]
     },
     ...
  ]
}
</pre></blockquote>

</div>
END;
  require_once('footer.php');
?>
