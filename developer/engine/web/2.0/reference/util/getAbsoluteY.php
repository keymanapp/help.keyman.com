<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: getAbsoluteX"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="getAbsoluteY">getAbsoluteY</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Get the absolute y-coordinate of an element.</p>

<?php
syntax("$kmw.util.getAbsoluteY(Pelem);");
params("Pelem", "Element", "An HTML element.");
returns("number", "The specified element's absolute y-coordinate on the page.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>See also:  <a href="getAbsolute"><code><?="$kmw.util.getAbsolute()"?></code></a>,
  <a href="getAbsoluteX"><code><?="$kmw.util.getAbsoluteX()"?></code></a>
</p>