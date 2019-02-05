<?php
require_once('includes/template.php');
require_once('includes/__docheader.php');

$baselanguage = "language-javascript";

// Required
head([
  'title' =>'KeymanWeb Server Data API',
]);

?>

<h1>API object - Language</h1>

<?php
obj_spec("Language",
  "name", "required string", "Name of language",
  "id", "required string", "ISO 639-3 language code.",
  "keyboards", "optional Array", "Array of corresponding <a href='obj-keyboard'><code>Keyboard</code></a> objects.",
  "font", "optional Object", "<a href='obj-font'><code>Font</code></a> object describing font for input fields (and OSK, if <code>oskFont</code>".
    " is not present).  Only present when a <code>Language</code> object is a child of a <code>Keyboard</code> object.",
  "oskFont", "optional Object", "<a href='obj-font'><code>Font</code></a> object describing font for the OSK.  Only ".
    "present when a <code>Language</code> object is a child of a <code>Keyboard</code> object.",
  "example", "optional Object", "<a href='obj-example'><code>Example</code></a> object.  Only present when a ".
    "<code>Language</code> object is the child of a <code>Keyboard</code> object."
);
?>

<h2>Example case</h2>

  <p>The following is extracted from <a href="https://api.keyman.com/cloud/3.0/languages/heb">
      https://api.keyman.com/cloud/3.0/languages/heb</a>.</p>

<?= codebox(<<<END
"language": {
  "name":         "Hebrew",
  "id":           "heb",
  "keyboards":    [
                    {
    "id":             "galaxiehebrewkm6",
    "name":           "Hebrew Phonetic (Galaxie)",
    "filename":       "galaxiehebrewkm6\/1.0\/galaxiehebrewkm6-1.0.js",
    "version":        "1.0",
    "lastModified":   "2014-03-21T16:22:19+11:00",
    "fileSize":       6880,
    "rtl":            true
                    }, {
    "id":             "hebrew",
    "name":           "Hebrew",
    "filename":       "hebrew\/1.0\/hebrew-1.0.js",
    "version":        "1.0",
    "lastModified":   "2014-03-21T16:22:19+11:00",
    "fileSize":       6892,
    "rtl":            true
                  }
                ]
}
END
);
?>