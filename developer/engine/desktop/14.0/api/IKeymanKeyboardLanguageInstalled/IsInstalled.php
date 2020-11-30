<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardLanguageInstalled::IsInstalled Property"
  ]);
?>

<h1>IKeymanKeyboardLanguageInstalled::IsInstalled Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguageInstalled::IsInstalled</code> property returns <code>TRUE</code> if the
keyboard is currently associated with this language in Windows. If the language is not currently installed, 
then it is a suggested language for the keyboard, per the package metadata.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly BOOL IsInstalled</code></pre>
