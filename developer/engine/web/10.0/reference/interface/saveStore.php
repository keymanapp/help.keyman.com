<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: saveStore"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KSAVE">saveStore (KSAVE)</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Save an option <a href="/developer/language/guide/stores"><code class="language-keyman">store</code></a>
  value to a cookie for the active keyboard.</p>

<?php
syntax("keyman.interface.saveStore(storeName, value);", "KeymanWeb.KSAVE(storeName, value); // Shorthand");
params("storeName", "string", "The option <code class='language-keyman'>store</code> name, which will be embedded in the cookie's name.",
  "value", "string", "The option value to save.");
returns("boolean", "<code>true</code> if the operation is successful, otherwise <code>false</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p><a href="loadStore"><code>keyman.interface.loadStore()</code></a> and <code>keyman.interface.saveStore()</code>provide API-based functionality
  similar to that of the keyboard language's option <code class='language-keyman'>store</code>. Values will persist across
  multiple visits to the site by use of cookies.  However, these functions cannot interact with
  <code class="language-keyman">store</code>s from existing compiled keyboards due to compilation optimizations.  As such,
  they are most useful for custom-coded web-oriented keyboards.
</p>

<h2>See also</h2>

<p><a href="loadStore"><code>keyman.interface.loadStore();</code></a></p>