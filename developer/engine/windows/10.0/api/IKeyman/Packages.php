<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeyman::Packages Property"
  ]);
?>

<h1>IKeyman::Packages Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeyman::Packages</code> property returns the Keyman <code><a href='../IKeymanPackagesInstalled'>IKeymanPackagesInstalled</a></code> interface which
provides a list of installed Keyman keyboard packages.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanPackagesInstalled* Packages</code></pre>
