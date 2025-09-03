<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardLanguage::LangID Property"
  ]);
?>

<h1>IKeymanKeyboardLanguage::LangID Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguage::LangID</code> property returns a Windows LANGID for the Windows language.
If the language does not have a LangID defined, then this returns <code>0</code>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly long LangID</code></pre>
