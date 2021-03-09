<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardInstalled::Loaded Property"
  ]);
?>

<h1>IKeymanKeyboardInstalled::Loaded Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardInstalled::Loaded</code> property controls whether or not the keyboard is
currently available for use and visible to the user in the keyboard picker. When this property is 
changed, <a href='../IKeymanKeyboardsInstalled/Apply'><code>IKeymanKeyboardsInstalled::Apply</code></a>
must be called to apply the setting to Keyman Engine.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>bool Loaded</code></pre>
