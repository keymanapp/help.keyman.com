<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: getAbsoluteX"
  ]);

  require_once("includes/__docheader.php");
?>

<h1 class="title" id="getAbsoluteX">getAbsoluteX</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Get the absolute x-coordinate of an element.</p>

<?php
syntax("$kmw.util.getAbsoluteX(Pelem);");
params("Pelem", "Element", "An HTML element.");
returns("number", "The specified element's absolute x-coordinate on the page.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>See also:  <a href="getAbsolute"><code><?="$kmw.util.getAbsolute()"?></code></a>,
  <a href="getAbsoluteY"><code><?="$kmw.util.getAbsoluteY()"?></code></a>
</p>