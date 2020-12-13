<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardOption::Value Property"
  ]);
?>

<h1>IKeymanKeyboardOption::Value Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardOption::Value</code> property controls the current value of the option. Valid values depend on the keyboard layout.</p>

<p>Changes to this value will be applied after <a href='../IKeymanKeyboardsInstalled/Apply'><code>IKeymanKeyboardsInstalled::Apply</code></a> is called.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>string Value</code></pre>
