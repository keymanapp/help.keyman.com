<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: FocusLastActiveElement"
  ]);

  require_once("includes/__docheader.php");
?>

<h1 class="title" id="FocusLastActiveElement">FocusLastActiveElement</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Restore the focus to the element active before input was moved to KeymanWeb.</p>

<?php

syntax("$kmw.FocusLastActiveElement()");
params();
returns();

?>

<h3 id="ReplacedBy" name="ReplacedBy">Replaced By</h3>

<p><a href="../core/focusLastActiveElement"><code><?="$kmw.focusLastActiveElement()"?></code></a>
</p>