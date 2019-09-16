<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: removeStyleSheet"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="removeStyleSheet">removeStyleSheet</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Remove user-defined style sheet.</p>

<?php
syntax("keyman.util.removeStyleSheet(Pelem);");
params("Pelem", "Element", "Element representing the style sheet to be removed.");
returns("boolean", "<code>true</code> if the style sheet element was successfully removed, ".
  "otherwise <code>false</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>If the element does not represent a style sheet, this function will not remove the element and will simply return <code>false</code>.</p>
<p>See also <a href="addStyleSheet"><code>keyman.util.addStyleSheet()</code></a> and
  <a href="linkStyleSheet"><code>keyman.util.linkStyleSheet()</code></a>.
</p>