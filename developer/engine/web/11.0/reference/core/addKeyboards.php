<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: addKeyboards"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_addKeyboards">addKeyboards</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Adds keyboards to keymanweb.</p>

<?php

syntax("keyman.addKeyboards(spec[, spec...])");

params("spec", "string|Object", "keyboard name string or keyboard metadata JSON object");

returns("undefined");

?>


<h2 id="Description" name="Description">Description</h2>

<p>
The keyboard spec can be a string or an object. Multiple keyboard specs can be specified in a single call, which can
  reduce the round-trip cost of multiple calls to Keyman Cloud servers (when using Keyman Cloud).
</p>

<p>
  For general information and example uses of this method, please see the
  <a href="../../guide/adding-keyboards.php">Adding Keyboards</a> page from the guide section.
</p>

<h3>Using a <code>string</code></h3>
<p>
When keyboard spec is a string, the Keyman Cloud is used to source the keyboard file. Keymanweb will load webfonts and
  keyboard file automatically on demand. The string format is one of the following:
</p>

<div class="itemizedlist"><ul type="disc">
  <li><code class="code">'keyboardID'</code>: Adds a specific keyboard, linking it to the default language for the keyboard</li>
  <li><code class="code">'@languageID'</code>: Adds the default keyboard for the specified BCP 47 language code</li>
  <li><code class="code">'keyboardID@languageID'</code>: Loads a specific keyboard + language combination</li>
</ul></div>

<p>
The keyboard catalogue is online at <a class="ulink" href="http://keyman.com/developer/keymanweb/keyboards.php" target="_blank">http://keyman.com/developer/keymanweb/keyboards.php</a>.
</p>

<h3>Using an <code>object</code></h3>
<p>
When keyboard spec is an object, then more parameters can be specified, including sourcing the keyboard from locations other than the Keyman Cloud.
  The specification of the object is related to the Keyman Cloud JSON API (formerly known as KeymanWeb Server Data API):
</p>

<?php

obj_spec("spec",
  "name", "required string", "Name of the keyboard.",
  "id", "required string", "ID (internal name) of keyboard, together with version always matches the filename of the keyboard",
  "filename", "required string", "url of keyboard *.js file, relative (to page) or absolute",
  "languages", "required array|object", "An array of objects (see definition below) or single object linked to the keyboard.",
  "rtl", "optional boolean", "<code>true</code> if the keyboard targets a right-to-left script.  May be set to <code>false</code> ".
    "or left <code>undefined</code> otherwise.",
  "version", "optional string", "Version of keyboard *.js file"
);

echo "<hr>\n";

// Used multiple times in the below block to simplify coding the list of regions.
function region($long, $abbr) {
  return "<li><code>'$long'</code> (<code>'$abbr'</code>)</li>\n";
}

obj_spec("spec.languages",
  "name", "required string", "Name of the language.",
  "id", "required string" , "BCP 47 language code.",
  "region", "optional string", "<em>Required</em> when using the Toolbar UI.  May be set with one of the following region names:<ul>".
    region("World", "un").region("Africa", "af").region("Asia", "as").
    region("Europe", "eu").region("South America", "sa").region("North America", "na").
    region("Oceania", "oc").region("Central America", "ca").region("Middle East", "me").
    "</li></ul>"
,
  "font", "optional array|object", "An array of Font objects (see definition below) or single object describing fonts for input fields ".
    "and the OSK (if <code>oskFont</code> is not present.)",
  "oskFont", "optional array|object", "An array of Font objects (see <code>font</code> definition below) or single object describing ".
    "fonts for the OSK."
);

echo "<hr>\n";

obj_spec("spec.languages.font",
  "family", "required string", "Font family that KeymanWeb will provide for this font.",
  "filename", "required array", "Array of URLs where font resources can be accessed, relative to the <a href='init'>".
    "<code>fonts</code> initialization property</a>.  Multiple font resources can be specified as platform font format ".
    "support varies and KeymanWeb will pick the most appropriate for the platform.",
  "size", "optional string", "Font size (in CSS dimensions).  If not specified, then <code>1em</code> is used."

);
?>