<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard::DefaultWindowsLanguages Property"
  ]);
?>

<h1>IKeymanKeyboard::DefaultWindowsLanguages Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboard::DefaultWindowsLanguages</code> property returns
the <a href='/developer/language/reference/windowslanguages'><code>&amp;windowslanguages</code></a> value from the keyboard file.</p>

<p>This is informational data and may not be the same as the currently linked languages for the keyboard. This is a space separated
list of hexadecimal coded Windows LANGID values.</p>

<p>In the future, this will be deprecated in favour of <a href='DefaultBCP47Languages'><code>DefaultBCP47Languages</code></a>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly long DefaultWindowsLanguages</code></pre>
