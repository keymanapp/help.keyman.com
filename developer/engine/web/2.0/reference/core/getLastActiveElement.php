<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: getLastActiveElement"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_getLastActiveElement">getLastActiveElement</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Return the last element activated before input was moved to KeymanWeb.</p>

<?php
syntax("$kmw.getLastActiveElement();");
params();
returns("Element", "The last element activated before KeymanWeb activated.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>...
</p>