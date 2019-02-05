<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: KIK"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_xxx">KIK</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Returns <code>true</code> if the input event corresponds to a keypress event resulting in character output.</p>

<?php
syntax("KeymanWeb.KIK(e);");
params("e", "Object", "The event object to be evaluated.");
returns("boolean", "<code>true</code> if the event would produce text output, otherwise <code>false</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This function is designed to facilitate filtering of keystrokes, allowing custom-coded keyboards to ignore function-oriented
  keystroke events that should never be used for text generation, such as for F1-F12.  </p>
<p>The logic corresponds to that for the keyboard language <a href="/developer/language/reference/nomatch">
    <code class="language-keyman">nomatch</code></a> rule.
</p>