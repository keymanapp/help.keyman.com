<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeyman::Languages Property"
  ]);
?>

<h1>IKeyman::Languages Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeyman::Languages</code> property returns the Keyman <code><a href='../IKeymanLanguages'>IKeymanLanguages</a></code> interface which
provides a list of all currently available Windows languages and input methods.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanLanguages* Languages</code></pre>
