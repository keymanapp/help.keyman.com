<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard::Version Property"
  ]);
?>

<h1>IKeymanKeyboard::Version Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboard::Version</code> property returns
the <a href='/developer/language/reference/keyboardversion'><code>&amp;keyboardversion</code></a> string 
from the keyboard file. This represents the current version of the keyboard file, and is in the form 
of a dotted numeric string.</p>

<p>The <code>Version</code> property is not related to the <a href='/developer/language/reference/version'><code>&amp;version</code></a> store, 
which determines the minimum Keyman Engine version which a keyboard can be run under.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly string Version</code></pre>
