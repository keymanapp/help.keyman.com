<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardLanguageInstalled::ProfileGUID Property"
  ]);
?>

<h1>IKeymanKeyboardLanguageInstalled::ProfileGUID Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguageInstalled::ProfileGUID</code> property returns the profile GUID associated 
with the Text Services Framework (TSF) Text Input Processor (TIP) installed for this keyboard, for this language.
If the language is not currently installed, then returns <code>GUID_NULL</code>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly GUID ProfileGUID</code></pre>
