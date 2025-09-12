<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard::DefaultPrimaryLanguage Property"
  ]);
?>

<h1>IKeymanKeyboard::DefaultPrimaryLanguage Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboard::DefaultPrimaryLanguage</code> property returns
the <a href='/developer/language/reference/language'><code>&amp;language</code></a> value from the keyboard file.</p>

<p>This is informational data and may not be the same as the currently linked languages for the keyboard.</p>

<p>In the future, this will be deprecated in favour of <a href='DefaultBCP47Languages'><code>DefaultBCP47Languages</code></a>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly long DefaultPrimaryLanguage</code></pre>
