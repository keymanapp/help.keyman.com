<?php
require_once('includes/template.php');
require_once('includes/__docheader.php');

$baselanguage = "language-javascript";

// Required
head([
  'title' =>'KeymanWeb Server Data API',
]);

?>

<h1>API object - Keyboard</h1>

<?php
obj_spec("Keyboard",
  "name", "required string", "Name of keyboard",
  "id", "required string", "ID of the keyboard, always matches the filename of the keyboard.",
  "filename", "required string", "Name of the keyboard .js file which should be combined with <a href='index#obj-options'>" .
    "<code>options.keyboardBaseUri</code></a>.",
  "default", "optional boolean", "<code>true</code> if the keyboard is the recommended default for the language.  ".
    "<code>false</code> if absent.",
  "rtl", "optional boolean", "<code>true</code> if the keyboard targets a right-to-left script.  <code>false</code> if absent.",
  "lastModified", "required string|number", "Date the keyboard was last updated.",
  "fileSize", "required number", "Size of the keyboard file, in bytes.",
  "version", "required string", "Version number of the keyboard.",
  "languages", "optional Array", "An array of <a href='obj-languages'><code>Language</code></a> objects linked to the keyboard.",
  "font", "optional Object", "<a href='obj-font'><code>Font</code></a> object describing font for input fields (and OSK, if <code>oskFont</code>".
    " is not present).  Only present when a <code>Keyboard</code> object is a child of a <code>Language</code> object.",
  "oskFont", "optional Object", "<a href='obj-font'><code>Font</code></a> object describing font for the OSK.  Only ".
    "present when a <code>Keyboard</code> object is a child of a <code>Language</code> object.",
  "example", "optional Object", "<a href='obj-example'><code>Example</code></a> object.  Only present when a ".
    "<code>Keyboard</code> object is the child of a <code>Language</code> object.",
  "desktopKeyboardID", "optional number", "The numerical ID of the corresponding numerical ID for the desktop version of the keyboard.",
  "devices", "optional Object", "An object with the three properties <code>phone</code>, <code>tablet</code>, and <code>desktop</code>. ".
    "Each property holds a numerical value detailing the level of support specialized toward each class of device.  Please refer to ".
    "<a href='https://keyman.com/developer/keymanweb/keyboards.php'>the Developer Keyboard Catalogue page</a> for more details."
);
?>

<h2>Example case</h2>

<p>The following is extracted from <a href="https://api.keyman.com/cloud/4.0/keyboards/hebrew">
    https://api.keyman.com/cloud/4.0/keyboards/hebrew</a>.</p>

<?= codebox(<<<END
"keyboard": {
  "id":           "hebrew",
  "name":         "Hebrew",
  "filename":     "hebrew\/1.0\/hebrew-1.0.js",
  "version":      "1.0",
  "lastModified": "2014-03-21T16:22:19+11:00",
  "rtl":          true,
  "devices":      {
    "phone":        1,
    "tablet":       1,
    "desktop":      2
                  },
  "languages":    [
                    {
    "id":             "heb",
    "name":           "Hebrew",
    "region":         3
                    }
                  ]
}
END
);
?>
