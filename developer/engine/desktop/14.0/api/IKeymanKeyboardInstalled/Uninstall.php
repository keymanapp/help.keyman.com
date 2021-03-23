<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardInstalled::Uninstall Method"
  ]);
?>

<h1>IKeymanKeyboardInstalled::Uninstall Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardInstalled::Uninstall</code> method uninstalls the keyboard file (.kmx) and related artefacts from Keyman Engine for Windows. This includes deleting the files from the
Keyman Engine keyboard store, removing registry settings, and removing Windows input methods.</p>

<p>This method removes the keyboard layout from all languages it is associated with.</p>

<p>Changes associated with calling this method are applied immediately; <a href='../IKeymanKeyboardsInstalled/Apply'><code>IKeymanKeyboardsInstalled::Apply</code></a> does not
need to be called. However, changes to the Windows input methods are applied asynchronously.</p>

<p class='note'>This method requires elevated privileges.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Uninstall(bool void)</code></pre>
