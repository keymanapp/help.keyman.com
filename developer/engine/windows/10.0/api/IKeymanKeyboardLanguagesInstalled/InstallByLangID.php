<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardLanguagesInstalled::InstallByLangID Method"
  ]);
?>

<h1>IKeymanKeyboardLanguagesInstalled::InstallByLangID Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguagesInstalled::InstallByLangID</code> adds the keyboard layout to the referenced LangID language code in Windows. If the 
language code is not yet installed, this method installs it as well.</p>

<p>This method is asynchronous.</p>

<p class='note'>This method requires elevated privileges.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void InstallByLangID(long LangID)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>LangID</code></dt>
  <dd>The language ID code to associate the keyboard with.</dd>
</dl>
