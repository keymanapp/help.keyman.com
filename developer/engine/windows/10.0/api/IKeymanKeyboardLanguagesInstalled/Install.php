<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardLanguagesInstalled::Install Method"
  ]);
?>

<h1>IKeymanKeyboardLanguagesInstalled::Install Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguagesInstalled::Install</code> adds the keyboard layout to the referenced BCP 47 language code in Windows. If the
language code is not yet installed, this method installs it as well.</p>

<p>This method is asynchronous.</p>

<p class='note'>This method requires elevated privileges.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Install(string Bcp47Code)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>Bcp47Code</code></dt>
  <dd>The BCP 47 code to associate the keyboard with. Windows will normalize these codes so after installation you may find the layout available
  under a normalized code and not the one you expected.</dd>
</dl>
