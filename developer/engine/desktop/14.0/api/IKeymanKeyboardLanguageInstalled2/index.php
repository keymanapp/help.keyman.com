<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanKeyboardLanguageInstalled2 Interface"
  ]);
?>

<h1>IKeymanKeyboardLanguageInstalled2 Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguageInstalled2</code> interface adds extension functions for installing languages. These functions
should be used in preference to the now-deprecated
<a href="../IKeymanKeyboardLanguagesInstalled/Install"><code>IKeymanKeyboardLanguagesInstalled::Install</code></a> and
<a href="../IKeymanKeyboardLanguagesInstalled/InstallByLangID"><code>IKeymanKeyboardLanguagesInstalled::InstallByLangID</code></a>
methods.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanKeyboardLanguageInstalled2', '../'); ?>

<h2>Methods</h2>

<dl>
  <dt><a href='FindInstallationLangID'><code>FindInstallationLangID()</code></a></dt>
  <dd>Finds a Windows LANGID for this language's BCP 47 code, including optionally installing a transient language if required.</dd>

  <dt><a href='InstallTip'><code>InstallTip()</code></a></dt>
  <dd>Installs a registered language profile (persists over reboot) for the current user.</dd>

  <dt><a href='IsRegistered'><code>IsRegistered()</code></a></dt>
  <dd>Returns true if there is an associated registered language profile.</dd>

  <dt><a href='RegisterTip'><code>RegisterTip()</code></a></dt>
  <dd>Registers a language profile in Text Services Framework for this language (requires elevation).</dd>
</dl>

<h2>History</h2>

<p>Added in Keyman Engine for Windows 14.0.</p>
