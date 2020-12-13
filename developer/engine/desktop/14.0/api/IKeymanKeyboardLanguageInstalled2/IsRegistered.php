<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardLanguageInstalled2::IsRegistered Method"
  ]);
?>

<h1>IKeymanKeyboardLanguageInstalled2::IsRegistered Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguageInstalled2::IsRegistered</code> returns <code>True</code> if a Keyman Text Services Framework
Text Input Processor (TIP) input method is registered for the specified language.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>bool IsRegisterTip();</code></pre>

<h2>Returns</h2>

<p>Returns <code>True</code> if the Keyman TIP is registered for this keyboard language.</p>

<h2>See also</h2>

<dl>
  <dt><a href='RegisterTip'><code>RegisterTip()</code></a></dt>
  <dd>Registers a language profile in Text Services Framework for this language (requires elevation).</dd>
</dl>
