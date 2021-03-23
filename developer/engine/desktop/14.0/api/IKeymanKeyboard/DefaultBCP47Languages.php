<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard::DefaultBCP47Languages Property"
  ]);
?>

<h1>IKeymanKeyboard::DefaultBCP47Languages Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboard::DefaultBCP47Languages</code> property returns
the <a href='/developer/language/reference/ethnologuecode'><code>&amp;ethnologuecode</code></a> string from the keyboard file.
The first language code in the string is the primary language.</p>

<p>This is informational data and may not be the same as the currently linked languages for the keyboard.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly string DefaultBCP47Languages</code></pre>
