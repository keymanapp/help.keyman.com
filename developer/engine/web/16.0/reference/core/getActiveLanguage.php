<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: getActiveLanguage"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_getActiveLanguage">getActiveLanguage</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Get the language code for the currently selected language.</p>

<?php

syntax("keyman.getActiveLanguage()");
params();
returns("string", "The active language's BCP 47 language code.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>...</p>