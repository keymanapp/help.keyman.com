<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardsInstalled::GetKeyboardFromFile Method"
  ]);
?>

<h1>IKeymanKeyboardsInstalled::GetKeyboardFromFile Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardsInstalled::GetKeyboardFromFile</code> method loads the keyboard file referred to by Filename and returns details about the file.
It does not install the keyboard for use.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>IKeymanKeyboardFile* GetKeyboardFromFile(string Filename)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt>Filename</dt>
  <dd>The fully-qualified path to the .kmx file to be loaded.</dd>
</dl>
