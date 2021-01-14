<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: getOption"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="getOption">getOption</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Get a KeymanWeb, On-Screen Keyboard or User Interface option value.</p>

<?php
syntax("keyman.util.getOption(optionName, dflt);");
params("optionName", "string", "The named initialization option.",
  "dflt", "optional string|Object", "The value to return if the option is not set.");
returns("string|Object", "The value of the option (if set).  If not set and no value is provided for <code>dflt</code>, ".
  "returns the empty string.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>See also <a href="setOption"><code>keyman.util.setOption()</code></a>.
</p>