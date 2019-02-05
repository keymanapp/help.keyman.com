<?php
require_once('includes/template.php');
require_once('includes/__docheader.php');

$baselanguage = "language-javascript";

// Required
head([
  'title' =>'KeymanWeb Server Data API',
]);

?>

<h1>API object - Font</h1>

<p>The <code>Font</code> object provides details on fonts for the keyboard/language and contains the following members:</p>

<?php
obj_spec(false,
  "family", "optional string", "Font family that KeymanWeb will provide for this font.",
  "size", "optional string", "Font size (in CSS dimensions).  If not specified, then <code>1em</code>.",
  "source", "optional Array", "Array of downloadable filenames for this font, which should be combined with ".
  "<a href='index.php#obj-options'><code>options.fontBaseUri</code></a>."
);
?>

<h2>Example case</h2>

<p>The following is extracted from <a href="https://api.keyman.com/cloud/2.0/languages/lao">
    https://api.keyman.com/cloud/2.0/languages/lao</a>.</p>

<?= codebox(<<<END
family:     "LaoWeb"
source:
  0:        "saysettha_OT.ttf"
  1:        "saysettha_web.woff"
  2:        "SAYSETT0.eot"
END
); ?>

<p>Alternate formatting:</p>

<?=codebox(<<<END
"font": {
  "family":     "LaoWeb",
  "source":     [
                  "saysettha_OT.ttf",
                  "saysettha_web.woff",
                  "SAYSETT0.eot"
                ]
}
END
);
?>
