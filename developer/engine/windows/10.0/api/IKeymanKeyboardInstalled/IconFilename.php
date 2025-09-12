<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardInstalled::IconFilename Property"
  ]);
?>

<h1>IKeymanKeyboardInstalled::IconFilename Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardInstalled::IconFilename</code> property returns the fully qualified filename of a Windows .ico file that is generated
from the icon resource contained within the keyboard when the keyboard is installed. This icon file is used when Keyman creates a Windows input 
method associated with the Keyman keyboard layout.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly string IconFilename</code></pre>
