<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard::Filename Property"
  ]);
?>

<h1>IKeymanKeyboard::Filename Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboard::Filename</code> property returns
the fully qualified filename of the keyboard .kmx file. If the
parent interface is <a href='../IKeymanKeyboardFile'><code>IKeymanKeyboardFile</code></a>,
then the filename is the same as the file used to instantiate the interface; otherwise,
the file will be in the Keyman keyboard store, and should not be moved out of the store
except by calling the <a href='../IKeymanKeyboardInstalled/Uninstall'><code>IKeymanKeyboardInstalled::Uninstall</code></a>
method.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly string Filename</code></pre>
