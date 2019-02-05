<?php
require_once('includes/template.php');
require_once('includes/__docheader.php');

$baselanguage = "language-javascript";

// Required
head([
    'title' =>'KeymanWeb Server Data API',
]);

?>

<h1>API object - Languages</h1>

<?php
obj_spec("Languages",
    "languages", "Array", "Array of corresponding <a href='obj-language'><code>Language</code></a> objects."
);
?>
