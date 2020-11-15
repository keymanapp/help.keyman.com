<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: setStore"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KSETS">setStore (KSETS)</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p><code>setStore</code> sets the value of a <a href="/developer/language/guide/stores#toc-system-stores">system
    <code class="language-keyman">store</code></a> to a string.</p>

<?php
syntax("keyman.interface.setStore(systemId, strValue, Pelem);", "KeymanWeb.KSETS(systemId, strValue, Pelem); // Shorthand");
params("systemId", "number", "The ID of the system store to set.  Only system ID <code>33</code> (<code>layer</code>) is currently supported.",
  "strValue", "string", "The string value to set as the system store's content.",
  "Pelem", "Element", "The page element currently active.  (This parameter exists for use by possible future extensions.");
returns("boolean", "<code>true</code> if the operation succeeds, otherwise <code>false</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This function is used to set the value of writeable system stores.  Many system stores are readonly, containing metadata
  about an individual keyboard, so <code>keyman.interface.ifStore()</code> will fail upon attempts to modify their values.
</p>
<p>This function cannot modify standard keyboard <a href="/developer/language/guide/stores"><code class="language-keyman">stores</code></a>
  and is limited to system <code class="language-keyman">stores</code> only, as standard keyboard stores are optimized into
  Javascript string literals set directly in code with automatically-generated names.</p>

<h2>See also</h2>

<p><a href="ifStore"><code>keyman.interface.ifStore()</code></a></p>