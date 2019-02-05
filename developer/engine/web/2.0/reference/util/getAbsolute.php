<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: getAbsolute"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="getAbsolute">getAbsolute</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Get the absolute position of an element.</p>

<?php
syntax("$kmw.util.getAbsolute(Pelem);");
params("Pelem", "Element", "An HTML element.");
returns("Object", "An object with two <code>number</code> properties (<code>x</code> and <code>y</code>) corresponding to ".
  "the specified element's absolute position on the page.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>See also:  <a href="getAbsoluteX"><code><?="$kmw.util.getAbsoluteX()"?></code></a>,
  <a href="getAbsoluteY"><code><?="$kmw.util.getAbsoluteY()"?></code></a>
</p>