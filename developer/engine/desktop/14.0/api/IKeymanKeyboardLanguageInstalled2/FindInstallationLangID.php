<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardLanguageInstalled2::FindInstallationLangID Method"
  ]);
?>

<h1>IKeymanKeyboardLanguageInstalled2::FindInstallationLangID Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguageInstalled2::FindInstallationLangID</code> method finds a LANGID for the language, which
can then be passed into <a href="RegisterTip"><code>IKeymanKeyboardLanguageInstalled2::RegisterTip</code></a> and
<a href="InstallTip"><code>IKeymanKeyboardLanguageInstalled2::InstallTip</code></a> to complete registration.</p>

<p>If the BCP 47 tag does not have a corresponding system LANGID, then Windows will allocate one of four transient LANGIDs to
the tag. These LANGIDs can differ between systems. In this situation, Windows installs a temporary placeholder system keyboard
which Keyman then replaces as it completes the installation process.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>bool FindInstallationLangID(long* LangID, string* TemporaryKeyboardID, bool *RegistrationRequired, tagKeymanInstallFlags Flags);</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>LangID</code></dt>
  <dd>On success, this is filled with the corresponding <code>LANGID</code>.</dd>

  <dt><code>TemporaryKeyboardID</code></dt>
  <dd>On success, and if the <code>kifInstallTransientLanguage</code> flag is specified, this may contain a string which should be
   passed to <code>InstallTip</code> to be replaced with the Keyman keyboard. Internally, this string conforms to the Windows API
   <code>InstallLayoutorTip</code> format.</dd>

  <dt><code>RegistrationRequired</code></dt>
  <dd>If <code>True</code>, a call to <code>RegisterTip</code> will be required to complete installation of this language, as Keyman
  is not currently registered for this language with the Text Services Framework.</dd>

  <dt><code>Flags</code></dt>
  <dd>Can be <code>0</code> or <code>kifInstallTransientLanguage</code>. If <code>kifInstallTransientLanguage</code> is specified,
  then Keyman will install a transient language (Windows 8 or later) for BCP 47 tags that do not have a corresponding system LANGID.</dd>
</dl>

<h2>Returns</h2>

<p>Returns <code>True</code> if a corresponding <code>LANGID</code> was found.

<h2>See also</h2>

<dl>
  <dt><a href='InstallTip'><code>InstallTip()</code></a></dt>
  <dd>Installs a registered language profile (persists over reboot) for the current user.</dd>

  <dt><a href='RegisterTip'><code>RegisterTip()</code></a></dt>
  <dd>Registers a language profile in Text Services Framework for this language (requires elevation).</dd>
</dl>
