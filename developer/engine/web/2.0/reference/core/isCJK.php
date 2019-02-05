<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: isCJK"
  ]);
  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_isCJK">isCJK</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Test if a given keyboard or keyboard stub (or the current keyboard) is for Chinese, Japanese, or Korean.</p>

<?php
  syntax("$kmw.isCJK(keyboard);");
  params("keyboard", "optional object", "A loaded keyboard.  Defaults to the currently-active keyboard if not specified.");
  returns("boolean", "<code>true</code> if the keyboard uses a pick list, as with the keyboards mentioned before, <code>false</code> if not.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>East Asian keyboards (and some others) may use an IME with a "pick list" of characters, requiring special handling.
</p>