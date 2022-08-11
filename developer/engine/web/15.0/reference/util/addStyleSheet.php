<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: addStyleSheet"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="addStyleSheet">addStyleSheet</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Generates a style sheet element for use in adding or overriding default On-Screen Keyboard styles.</p>

<?php
syntax("keyman.util.addStyleSheet(sheet)");
params("sheet", "string", "A string representing a CSS style sheet.");
returns("Object", "A page element representing the newly-embedded style sheet.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>
  See our list of <a href="../osk/classes">standard OSK style names</a> as a reference if implementing your own stylesheets.
</p>

<p>See also <a href="linkStyleSheet"><code>keyman.util.linkStyleSheet()</code></a> and
  <a href="removeStyleSheet"><code>keyman.util.removeStyleSheet()</code></a>.
</p>