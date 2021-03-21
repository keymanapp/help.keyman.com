<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: setActiveKeyboard"
  ]);
  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_setActiveKeyboard">setActiveKeyboard</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Change the currently active keyboard.</p>

<?php
syntax("keyman.setActiveKeyboard(keyboardName, languageCode);");
params("keyboardName", "string", "The ID (internal name) of the keyboard to be set as active.",
  "languageCode", "optional string", "The BCP 47 code for the keyboard's language.");
returns("Promise", "A <a href='https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise'>".
  "JavaScript Promise</a> fulfilled upon successfully linking and activating the keyboard.");
?>

<h2 id="Description" name="Description">Description</h2>
<p>Calls to <code>setActiveKeyboard</code> are asynchronous for keyboards not previously set as active.</p>
<p>Use the <code>internalName</code> and <code>languageCode</code> keyboard variables.
  If <code>languageCode</code> is defaulted, <code>setActiveKeyboard</code> will select the
      language code for the first matching keyboard stub.
</p>
