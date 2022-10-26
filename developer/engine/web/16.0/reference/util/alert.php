<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: alert"
  ]);

  require_once("includes/__docheader.php");
?>

<h1 class="title" id="alert">alert</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Generates a KeymanWeb alert window.</p>

<?php
syntax("keyman.util.alert(msg, fn)");
params("msg", "string", "Alert message text.",
  "fn", "optional function()", "Function to be called upon alert dismissal.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>The optional second parameter specifies a function to be called when the window is dismissed.</p>