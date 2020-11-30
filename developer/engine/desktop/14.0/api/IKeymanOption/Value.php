<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanOption::Value Property"
  ]);
?>

<h1>IKeymanOption::Value Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanOption::Value</code> property sets or returns the current
value for the option. After changing the value, you will need to 
call <a href='../IKeymanOptions/Apply'><code>IKeymanOptions::Apply</code></a>
to push the changes through to Keyman Engine.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>variant Value</code></pre>

