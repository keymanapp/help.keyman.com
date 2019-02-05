<?php
  require_once('includes/template.php');
  require_once('includes/__docheader.php');

  head([
    'title' => "Function: activatingUI"
  ]);
?>

<h1 class="title" id="core_activatingUI">activatingUI</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Sets an internal flag to notify KeymanWeb of change in UI activation state.</p>

<?php
syntax("$kmw.activatingUI(state);") ;
params("state", "boolean|number", "Used to signify if the user is interacting with KeymanWeb UI elements.");
returns("undefined");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This function is used by the various non-mobile UI implementations to aid the KeymanWeb engine with internal bookkeeping.
In particular, it is necessary for accurately tracking effects related to the active control when interacting with UI elements.</p>

<p>As a result, this function should only ever be utilized within custom UI code.</p>