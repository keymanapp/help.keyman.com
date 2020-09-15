<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardLanguagesInstalled2::Add Method"
  ]);
?>

<h1>IKeymanKeyboardLanguagesInstalled2::Add Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguagesInstalled2::Add</code> adds an entry to the in-memory list in preparation for registration and
installation with the functions in the <a href="../IKeymanKeyboardLanguageInstalled2"><code>IKeymanKeyboardLanguageInstalled2</code></a>
interface.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>IKeymanKeyboardLanguagesInstalled Add(string Bcp47Tag)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>Bcp47Tag</code></dt>
  <dd>The BCP 47 tag to associate the keyboard with. Windows will normalize these codes so after installation you may find the
  layout available under a normalized code and not the one you expected.</dd>
</dl>
