<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: setOption"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="setOption">setOption</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Set a KeymanWeb, On-Screen Keyboard or User Interface option value.</p>

<?php
syntax("$kmw.util.setOption(optionName, value);");
params("optionName", "string", "The named initialization option.",
  "value", "optional string|Object", "The value the option will be set to.  Clears the option's current value if left blank.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>See also <a href="setOption"><code><?="$kmw.util.getOption()"?></code></a>.
</p>
