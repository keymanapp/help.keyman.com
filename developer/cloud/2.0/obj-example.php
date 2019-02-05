<?php
require_once('includes/template.php');
require_once('includes/__docheader.php');

$baselanguage = "language-javascript";

// Required
head([
  'title' =>'KeymanWeb Server Data API',
]);

?>

<h1>API object - Example</h1>

<p>The <code>Example</code> object provides an example piece of text to demonstrate how to use a keyboard.
  Contains the following members:</p>

<?php
obj_spec(false,
  "text", "string", "Output text that the key sequence will produce.",
  "keys", "string", "Key sequence (based on US English) to produce output text.",
  "note", "string", "An English note about the meaning of the text example."
);
?>

<h2>Example case</h2>

<p>The following is extracted from <a href="https://api.keyman.com/cloud/2.0/languages/lao">
    https://api.keyman.com/cloud/2.0/languages/lao</a>.</p>

<?= codebox(<<<END
example:  
  keys:   "rklkjk;d=wfh"
  text:   "ພາສາລາວກໍໄດ້"
  note:   "\"Lao Language Okay\""
END
); ?>

<p>Alternate formatting:</p>

<?= codebox(<<<END
"example": {
  "keys":     "rklk]k;d=wfh",
  "text":     "\u0e9e\u0eb2\u0eaa\u0eb2\u0ea5\u0eb2\u0ea7\u0e81\u0ecd\u0ec4\u0e94\u0ec9",
  "note":     "\"Lao Language Okay\""
}
END
); ?>
