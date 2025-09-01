<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanLanguage::KeymanKeyboardLanguage Property"
  ]);
?>

<h1>IKeymanLanguage::KeymanKeyboardLanguage Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanLanguage::KeymanKeyboardLanguage</code> property returns the Keyman Keyboard language association that
is associated with this input method, if the input method is a Keyman input method instance, otherwise <code>KeymanKeyboardLanguage</code>
returns <code>null</code>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly KeymanKeyboardLanguageInstalled* KeymanKeyboardLanguage</code></pre>
