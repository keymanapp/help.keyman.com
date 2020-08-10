<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardFile2::Install2 Method"
  ]);
?>

<h1>IKeymanKeyboardFile2::Install2 Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardFile2::Install2</code> method installs the keyboard file (.kmx) into Keyman Engine for Windows. This
includes copying the file into the Keyman Engine keyboard store, adding registry settings, and optionally installing the Windows
input method. As installing Windows input methods is an asynchronous process, this method may not be complete when it returns.</p>

<p>This method adds the keyboard to the default language as specified in the <a href='../IKeymanKeyboard/DefaultBCP47Languages'><code>IKeymanKeyboard::DefaultBCP47Languages</code></a> property.
This method is the same as calling <a href='../IKeymanKeyboardsInstalled/Install'><code>IKeymanKeyboardsInstalled::Install</code></a>
and passing the <a href='../IKeymanKeyboard/Filename'><code>IKeymanKeyboard::Filename</code></a> property from this instance.</p>

<p class='note'>This method requires elevated privileges.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Install(bool Force, bool InstallDefaultLanguage)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>Force</code></dt>
  <dd>If <code>True</code>, overwrites an existing keyboard entry.</dd>

  <dt><code>InstallDefaultLanguage</code></dt>
  <dd>If <code>True</code>, installs the Windows input method for the default language.</dd>
</dl>

<h2>See also</h2>

<dl>
  <dt><a href='../IKeymanKeyboardsInstalled/Install'><code>IKeymanKeyboardsInstalled::Install</code></a></dt>
  <dd>Installs a keyboard file and input method for default language</dd>

  <dt><a href='../IKeymanKeyboardsInstalled2/Install2'><code>IKeymanKeyboardsInstalled::Install2</code></a></dt>
  <dd>Installs a keyboard file, optionally with input method for default language</dd>

  <dt><a href='../IKeymanKeyboardFile/Install'><code>IKeymanKeyboardFile::Install</code></a></dt>
  <dd>Installs a keyboard file and input method for default language</dd>
</dl>