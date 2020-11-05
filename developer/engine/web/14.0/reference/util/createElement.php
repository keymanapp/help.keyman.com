<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: createElement"
  ]);

  require_once("includes/__docheader.php");
?>

<h1 class="title" id="createElement">createElement</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Create an unselectable HTML element for the <span class="emphasis"><em>KeymanWeb</em></span> On-Screen keyboard and User Interfaces.</p>

<?php
syntax("keyman.util.createElement(nodeName);");
params("nodeName", "string", "Name for the newly-created element.");
returns("Element", "The new, requested user-unselectable HTML element.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>Elements created with this function do not capture the focus. Use <code>document.createElement</code>
      to create normally selectable elements.
</p>