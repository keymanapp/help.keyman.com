<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: BuildVisualKeyboard"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="BuildVisualKeyboard">BuildVisualKeyboard</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>Create a copy of the OSK for embedding in documentation or help page.</p>

<?php
  syntax("keyman.BuildVisualKeyboard(keyboardID, staticFlag, layoutFormFactor, layerID)");
  params("keyboardID", "string", "Identifying name of the keyboard.",
    "staticFlag", "number", "Deprecated parameter; should be set to 1.",
    "layoutFormFactor", "optional string", "A string describing the layout to use for the generated keyboard.  Should be one of the following:".
      "\n<ul><li><code>'desktop'</code></li><li><code>'phone'</code></li></li><li><code>'tablet'</code></li></ul>Defaults to <code>'desktop'</code>.",
    "layerID", "optional string|number", "Name or index of the layer to be shown.  If not specified, defaults to 'default', the base layer."
  );
  returns("Element", "A non-interactive DIV object will filled keyboard layer content.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>Generates a non-interactive <code>&lt;div&gt;</code> element with the complete structure of the specified layer of an
  on-screen keyboard (OSK) that the user can then utilize for documentation or other purposes.
</p>