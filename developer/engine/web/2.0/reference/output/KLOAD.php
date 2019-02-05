<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: KLOAD"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KLOAD">KLOAD</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Load an option <a href="/developer/language/guide/stores"><code class="language-keyman">store</code></a>
  value from a cookie or default value if no prior stored value exists.</p>

<?php
syntax("KeymanWeb.KLOAD(kbdName, storeName, value);");
params("kbdName", "string", "The keyboard's identifying internal name.",
  "storeName", "string", "The option <code class='language-keyman'>store</code> name that is embedded in the cookie's name.",
  "value", "string", "A value for the store to use as default if no prior value exists.");
returns("string", "The current value of the store, or the default <code>value</code> provided if the store's value is <code>undefined</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p><code>KeymanWeb.KLOAD()</code> and <a href="KSAVE"><code>KeymanWeb.KSAVE()</code></a> provide API-based functionality
  similar to that of the keyboard language's option <code class='language-keyman'>store</code>. Values will persist across
  multiple visits to the site by use of cookies.  However, these functions cannot interact with
  <code class="language-keyman">store</code>s from existing compiled keyboards due to compilation optimizations.  As such,
  they are most useful for custom-coded web-oriented keyboards.
</p>

<h2>See also</h2>

<p><a href="KSAVE"><code>KeymanWeb.KSAVE();</code></a></p>