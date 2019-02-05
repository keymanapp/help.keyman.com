<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: KIFS"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KIFS">KIFS</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>KIFS compares the content of a <a href="/developer/language/guide/stores#toc-system-stores">system
    <code class="language-keyman">store</code></a> with a string value.</p>

<?php
syntax("KeymanWeb.KIFS(systemId, strValue, Pelem);");
params("systemId", "number", "The ID of the system store to test.",
  "strValue", "string", "The string value to be used for comparison.",
  "Pelem", "Element", "The page element currently active.  (This parameter exists for use by possible future extensions.");
returns("boolean", "<code>true</code> if the value matches that of the system store, otherwise <code>false</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>Only system IDs <code>31</code> (<code>platform</code>) and <code>33</code> (<code>layer</code>) are currently supported.</p>
<p>For <code>platform</code>, any combination of the following may be tested against the current device and browser:
<ul>
  <li><dl><dt>Input method:</dt><dd><code>['touch', 'hardware']</code></dd></dl></li>
  <li><dl><dt>any combination of OS: </dt><dd><code>['windows', 'android', 'ios', 'macosx', 'linux']</code></dd></dl></li>
  <li><dl><dt>form factor: </dt><dd><code>['desktop', 'tablet', 'phone']</code></dd></dl></li>
  <li><dl><dt>browser: </dt><dd><code>['native', 'web', 'ie', 'chrome', 'firefox', 'safari', 'opera']</code></dd></dl></li>
</ul>
</p>
<p>Only one of each category may be matched at a time.</p>

<h2>See also</h2>

<p><a href="KSETS"><code>KeymanWeb.KSETS()</code></a></p>