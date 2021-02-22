<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardLanguageInstalled2::InstallTip Method"
  ]);
?>

<h1>IKeymanKeyboardLanguageInstalled2::InstallTip Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguageInstalled2::InstallTip</code> installs a registered Keyman Text Services Framework
Text Input Processor (TIP) input method for the specified language for the current user. The input method is installed
persistently over reboots.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void InstallTip(long LangID, string TemporaryKeyboardID);</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>LangID</code></dt>
  <dd>The <code>LANGID</code> to install, which can be found with
  <a href="FindInstallationLangID"><code>FindInstallationLangID</code></a>.</dd>

  <dt><code>TemporaryKeyboardID</code></dt>
  <dd>This value should be passed unmodified from the value returned from <code>FindInstallationLangID</code>. It allows Keyman to
  replace a temporary Windows keyboard with the desired Keyman keyboard, for transient LANGIDs.</dd>
</dl>

<h2>See also</h2>

<dl>
  <dt><a href='FindInstallationLangID'><code>FindInstallationLangID()</code></a></dt>
  <dd>Finds a Windows LANGID for this language's BCP 47 code, including optionally installing a transient language if required.</dd>

  <dt><a href='RegisterTip'><code>RegisterTip()</code></a></dt>
  <dd>Registers a language profile in Text Services Framework for this language (requires elevation).</dd>
</dl>
