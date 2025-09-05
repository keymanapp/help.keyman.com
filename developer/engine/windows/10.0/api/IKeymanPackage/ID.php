<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackage::ID Property"
  ]);
?>

<h1>IKeymanPackage::ID Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackage::ID</code> property returns
the base name of the package .kmp file, sans extension. The full filename,
including path, of the package is available in the <a href='Filename'><code>Filename</code></a> property.</p>

<p>No two packages
can share the same identifier in a Keyman Engine installation. The identifier
is case insensitive and should consist of letters, digits and underscore, although
some legacy identifiers may contain other characters as well. The initial letter of
an identifier should be a letter.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly string ID</code></pre>
