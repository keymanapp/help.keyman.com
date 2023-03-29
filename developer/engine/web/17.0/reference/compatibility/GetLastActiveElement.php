<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: GetLastActiveElement"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="GetLastActiveElement">GetLastActiveElement</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Returns the last active target element before the current KMW operation.</p>

<?php
syntax("keyman.GetLastActiveElement();");
params();
returns("Element", "The requested element.");
?>

<h3 id="ReplacedBy" name="ReplacedBy">Replaced By</h3>

<p><a href="../core/getLastActiveElement"><code><?="keyman.getLastActiveElement()"?></code></a>
</p>