<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeyman::Hotkeys Property"
  ]);
?>

<h1>IKeyman::Hotkeys Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeyman::Hotkeys</code> property returns the Keyman <code><a href='../IKeymanHotkeys'>IKeymanHotkeys</a></code> interface which
provides a list of configured user interface hotkeys. Hotkeys for activating a specific keyboard layout are not listed here; these are visible
under the <code><a href='../IKeymanLanguage/Hotkey'>IKeymanLanguage::Hotkey</a></code> property.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanHotkeys* Hotkeys</code></pre>
