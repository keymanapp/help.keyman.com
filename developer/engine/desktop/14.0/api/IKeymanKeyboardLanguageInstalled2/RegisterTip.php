<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardLanguageInstalled2::RegisterTip Method"
  ]);
?>

<h1>IKeymanKeyboardLanguageInstalled2::RegisterTip Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguageInstalled2::RegisterTip</code> registers a Keyman Text Services Framework
Text Input Processor (TIP) input method for the specified language. This method requires elevation.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void RegisterTip(long LangID);</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>LangID</code></dt>
  <dd>The <code>LANGID</code> to register, which can be found with
  <a href="FindInstallationLangID"><code>FindInstallationLangID</code></a>.</dd>
</dl>

<h2>See also</h2>

<dl>
  <dt><a href='FindInstallationLangID'><code>FindInstallationLangID()</code></a></dt>
  <dd>Finds a Windows LANGID for this language's BCP 47 code, including optionally installing a transient language if required.</dd>

  <dt><a href='InstallTip'><code>InstallTip()</code></a></dt>
  <dd>Installs a registered language profile (persists over reboot) for the current user.</dd>
</dl>
