<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardInstalled::KeymanID Property"
  ]);
?>

<h1>IKeymanKeyboardInstalled::KeymanID Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardInstalled::KeymanID</code> property returns the integer identifier for the keyboard used internally by Keyman Engine. This
number is generated when Keyman Engine starts and may be changed at any time.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly long KeymanID</code></pre>
