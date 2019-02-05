<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: KB"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KB">KB</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Flash body or element as substitute for an audible feedback <a href="/developer/language/reference/beep">
    <code class="language-keyman">beep</code></a>.</p>

<?php
syntax("KeymanWeb.KB(Pelem);");
params("Pelem", "Element", "The page element to be temporarily set flashing.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>This function is designed to implement feedback for erroneous input sequences, as with the keyboard language
  <a href="/developer/language/reference/beep"><code class="language-keyman">beep</code></a> command.  The flashing
  feedback should last approximately 1/20 of a second.
</p>