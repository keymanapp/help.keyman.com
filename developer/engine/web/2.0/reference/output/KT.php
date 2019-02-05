<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: KT"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KT">KT</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Inserts a text string and optional <a href="/developer/language/reference/deadkey"><code class="language-keyman">deadkey</code></a>
  into the active output element.</p>

<?php
syntax("KeymanWeb.KT(text, dk);");
params("text", "string", "The text to insert.",
  "dk", "optional number", "The deadkey's id, if one is to be inserted.");
returns("boolean", "<code>true</code> if the operation is successful, otherwise <code>false</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This function is designed to allow custom UI elements or custom OSK displays (as for the
  <a href="https://keymanweb.com/#eng,Keyboard_european2">EuroLatin2 keyboard</a>) to
  directly insert input into a control without losing the current input state due to loss of focus for the control.
  It is safe for use outside of keyboard code.
</p>