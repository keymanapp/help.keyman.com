<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardInstalled::Languages Property"
  ]);
?>

<h1>IKeymanKeyboardInstalled::Languages Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardInstalled::Languages</code> property returns an 
<a href='../IKeymanKeyboardLanguagesInstalled'><code>IKeymanKeyboardLanguagesInstalled</code></a> reference which lists the Windows 
languages with which the keyboard is currently associated, as well as any suggested languages for the keyboard that are not currently
installed.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanKeyboardLanguagesInstalled* Languages</code></pre>
