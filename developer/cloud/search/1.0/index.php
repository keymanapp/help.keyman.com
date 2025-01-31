<?php
  require_once('includes/template.php');

  // Required
  head([
    'title' =>'Keyboard search API 1.0 Specification',
    'css' => ['template.css','prism.css'],
    'showMenu' => true
  ]);
?>
<h2>Keyboard search API 1.0 Specification</h2>

<p>Documents the <b>api.keyman.com/search</b> endpoint.</p>

<p>This API is deprecated and has been replaced with <a href='../2.0'>version 2.0</a>.</p>

<h3>Parameters</h3>

<dl>
  <dt>q</dt>
  <dd>The search query. A string to search for. The following special identifiers can be used to filter the search:
    <ul>
      <li><code>id</code>: searches only against identifiers</li>
      <li><code>c[ountry]</code>: searches only for countries that match</li>
      <li><code>l[anguage]</code>: searches only for languages that match</li>
      <li><code>k[eyboard]</code>: searches only for keyboards that match</li>
      <li><code>legacy</code>: searches only for keyboards with a specific integer legacy identifier (combine with <code>k:</code>)</li>
      <li><code>all</code>: returns all languages that match the result, even if no keyboards are available for the language</li>
    </ul>
    Wildcards are not permitted, except for the special <code>l:*</code> which is used to return all languages supported
  </dd>

  <dt>platform</dt>
  <dd>Optionally, limit the results for keyboards to those that work on a target platform. Note: this does not limit language or country.
    Possible values: <code>windows</code>, <code>macos</code>, <code>linux</code>, <code>desktopWeb</code>, <code>mobileWeb</code>, <code>android</code>, <code>ios</code>
  </dd>
</dl>

<h3>Search Object</h3>

<p>A valid response will start with a <code>Search</code> object.</p>

<table class='language-javascript display'>
<thead>
  <tr>
    <th><b>Member</b></th>
    <th><b>Notes</b></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>languages</td>
    <td><code>Array</code> of <a href='#toc-searchlanguage-object'><code>SearchLanguage</code></a> objects that matched the search query. The query searches
    against id and name, and matches alternate names for the language as well as the primary name specified by BCP 47.</td>
  </tr>

  <tr>
    <td>keyboards</td>
    <td><code>Array</code> of <a href='../../keyboard_info'><code>.keyboard_info</code></a> objects that matched the search query. The query searches
    against id, name, and description.</td>
  </tr>

  <tr>
    <td>countries</td>
    <td><code>Array</code> of <a href='#toc-searchcountry-object'><code>SearchCountry</code></a> objects that matched the search query. The query searches
    against id and name.</td>
  </tr>

  <tr>
    <td>rangematch</td>
    <td>An optional textual description of the search that can be used to prefix the results.</td>
  </tr>
</tbody>
</table>

<h3 name='SearchLanguage'>SearchLanguage Object</h3>

<p>This represents a single language in the search results.</p>

<table class='language-javascript display'>
<thead>
  <tr>
    <th><b>Member</b></th>
    <th><b>Notes</b></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>id</td>
    <td>The BCP 47 id of the language.</td>
  </tr>

  <tr>
    <td>name</td>
    <td>A name for the language.</td>
  </tr>

  <tr>
    <td>keyboards</td>
    <td>An array of keyboard identifiers that are available for the language.</td>
  </tr>
</tbody>
</table>

<h3 name='SearchCountry'>SearchCountry Object</h3>

<p>This represents a single language in the search results.</p>

<table class='language-javascript display'>
<thead>
  <tr>
    <th><b>Member</b></th>
    <th><b>Notes</b></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>id</td>
    <td>The two letter RFC 3066 code for the country</td>
  </tr>

  <tr>
    <td>name</td>
    <td>A name for the country</td>
  </tr>

  <tr>
    <td>area</td>
    <td>The region of the world that the country is in</td>
  </tr>

  <tr>
    <td>languages</td>
    <td>An array of <a href='#toc-searchlanguage-object'><code>SearchLanguage</code></a> objects</td>
  </tr>
</tbody>
</table>

<h3>Schema</h3>

<p>A validating schema for the object is online at <a href="https://api.keyman.com/schemas/search.json">https://api.keyman.com/schemas/search.json</a>.</p>

<h3>Rate limiting and usage</h3>

<p>There is currently no rate limiting for searches.</p>

<h3>Examples</h3>

<p>These examples were run from the live data and can be re-run at any time.</p>

<p><b><a href='https://api.keyman.com/search/?q=khmer' target='_blank'>q=khmer</a></b></p>

<pre><code class='language-javascript'>{
    "languages": [
        {
            "id": "km",
            "name": "Khmer (Battambang Khmer)",
            "keyboards": [
                "kbdkhmr",
                "khmer10",
                "khmer_angkor"
            ]
        }
    ],
    "keyboards": [
        {
            "id": "kbdkhmr",
            "name": "Khmer Basic",
            "links": [],
            "license": "freeware",
            "version": "1.0.1",
            "legacyId": 545,
            "encodings": [
                "unicode"
            ],
            "languages": [
                "km"
            ],
            "authorName": "Tavultesoft",
            "sourcePath": "legacy/kbd/kbdkhmr",
            "authorEmail": "support@tavultesoft.com",
            "description": "This keyboard layout is designed for Khmer.  It includes an on screen keyboard which can be viewed by clicking on the Keyman icon and selecting the On Screen Keyboard menu item. The package also includes the Khmer font <b>Khmer OS</b>. The keyboard layout follows the Windows Vista Khmer layout.",
            "packageFileSize": 110334,
            "packageFilename": "kbdkhmr.kmp",
            "packageIncludes": [
                "fonts",
                "visualKeyboard",
                "welcome"
            ],
            "platformSupport": {
                "macos": "full",
                "windows": "full"
            },
            "lastModifiedDate": "2013-02-18T11:24:02Z",
            "minKeymanVersion": "7.0"
        },
        {
            "id": "khmer_angkor",
            "name": "khmer_angkor",
            "license": "mit",
            "related": {
                "khmer10": {
                    "deprecates": true
                }
            },
            "version": "1.0",
            "encodings": [
                "unicode"
            ],
            "languages": [
                "km"
            ],
            "authorName": "Keyman",
            "jsFileSize": 58055,
            "jsFilename": "khmer_angkor.js",
            "sourcePath": "release/k/khmer_angkor",
            "description": "<p>Khmer Unicode keyboard layout using the NiDA keyboard layout.</p>",
            "packageFileSize": 3072743,
            "packageFilename": "khmer_angkor.kmp",
            "packageIncludes": [
                "welcome",
                "visualKeyboard",
                "documentation"
            ],
            "platformSupport": {
                "ios": "full",
                "macos": "full",
                "android": "full",
                "windows": "full",
                "mobileWeb": "full",
                "desktopWeb": "full"
            },
            "lastModifiedDate": "2018-02-06T04:51:21.539Z",
            "minKeymanVersion": "10.0"
        },
        {
            "id": "khmer10",
            "name": "NiDA Khmer",
            "links": [],
            "license": "freeware",
            "version": "1.0",
            "legacyId": 401,
            "encodings": [
                "unicode"
            ],
            "languages": [
                "km"
            ],
            "authorName": "Andrew Cunningham",
            "jsFileSize": 11824,
            "jsFilename": "khmer10.js",
            "sourcePath": "legacy/k/khmer10",
            "description": "Khmer Unicode keyboard layout using the NiDA keyboard layout.",
            "packageFileSize": 110008,
            "packageFilename": "khmer10.kmp",
            "packageIncludes": [
                "fonts",
                "visualKeyboard"
            ],
            "platformSupport": {
                "ios": "basic",
                "macos": "full",
                "android": "basic",
                "windows": "full",
                "desktopWeb": "full"
            },
            "lastModifiedDate": "2007-02-08T13:43:29Z",
            "documentationFileSize": 22745,
            "documentationFilename": "khmer10.html",
            "minKeymanVersion": "5.0"
        }
    ]
}</code></pre>

<p><b><a href='https://api.keyman.com/search/?q=c:lao' target=_blank>q=c:lao</a></b></p>

<pre><code class='language-javascript'>{
    "rangetext": "Countries matching 'lao'",
    "countries": [
        {
            "id": "LA",
            "name": "Laos",
            "area": "Asia",
            "languages": [
                {
                    "id": "lo",
                    "country_id": "LA",
                    "name": "Lao",
                    "keyboards": [
                        "basiclao",
                        "enhlao",
                        "kbdlao",
                        "lao 2008",
                        "laounicodebasic_on_thaikbd",
                        "lao_2008_basic"
                    ]
                },
                {
                    "id": "kjg",
                    "country_id": "LA",
                    "name": "Khmu",
                    "keyboards": [
                        "kmhmu"
                    ]
                }
            ]
        }
    ]
}</code></pre>

<h3>Version History</h3>

<dl>
  <dt>1.0.5, 2019-12-13</dt>
  <dd>Added deprecated field to keyboard_info</dd>

  <dt>1.0.4, 2018-06-26</dt>
  <dd>Added legacy query filter</dd>

  <dt>1.0.3, 2018-06-14</dt>
  <dd>Added platform parameter</dd>

  <dt>1.0.2, 2018-02-28</dt>
  <dd>Renamed minKeymanDesktopVersion to minKeymanVersion</dd>

  <dt>1.0.1, 2018-02-06</dt>
  <dd>Added SearchCountry definition.</dd>

  <dt>1.0, 2018-01-01</dt>
  <dd>Initial version</dd>
</dl>
