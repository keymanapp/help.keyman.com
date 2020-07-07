<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeyman::Errors Property"
  ]);
?>

<h1>IKeyman::Errors Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeyman::Errors</code> property returns the Keyman <code><a href='../IKeymanErrors'>IKeymanErrors</a></code> interface which
provides a list of errors encountered by the Keyman API, for example when installing a keyboard or package. When the Keyman API raises an
exception, e.g. when trying to install a corrupt package file, there may be additional details available in the <code>Errors</code> collection.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanErrors* Errors</code></pre>
