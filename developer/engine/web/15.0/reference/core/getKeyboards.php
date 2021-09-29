<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: getKeyboards"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_getKeyboards">getKeyboards</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Get details of currently installed keyboards.</p>

<?php
syntax("keyman.getKeyboards()");
params();
returns("Array", "An array of specifications for the currently-installed keyboards.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>See <a href="getKeyboard.php"><?="keyman.getKeyboard()"?></a> for detail on the returned keyboard specification objects.</p>
<p>See also <a href="addKeyboards"><?="keyman.addKeyboards()"?></a>.</p>