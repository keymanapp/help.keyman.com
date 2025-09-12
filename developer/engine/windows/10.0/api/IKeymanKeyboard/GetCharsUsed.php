<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard::GetCharsUsed Method"
  ]);
?>

<h1>IKeymanKeyboard::Version GetCharsUsed Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboard::GetCharsUsed</code> method returns
the character repertoire of the keyboard layout, that is, the Unicode characters that the 
keyboard generates and references. This can be helpful for determining support for a given
keyboard, e.g. related fonts, and is built up by scanning all the keyboard output and context
strings in the keyboard layout.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>string GetCharsUsed(void)</code></pre>
