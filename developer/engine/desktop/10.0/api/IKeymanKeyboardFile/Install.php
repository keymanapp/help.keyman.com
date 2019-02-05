<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardFile::Install Method"
  ]);
?>

<h1>IKeymanKeyboardFile::Install Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardFile::Install</code> method installs the keyboard file (.kmx) into Keyman Engine for Windows. This includes copying the file into the
Keyman Engine keyboard store, adding registry settings, and installing the Windows input method. As installing Windows input methods is an asynchronous process,
this method may not be complete when it returns.</p>

<p>This method adds the keyboard to the default language as specified in the <a href='../IKeymanKeyboard/DefaultBCP47Languages'><code>IKeymanKeyboard::DefaultBCP47Languages</code></a> property. 
This method is the same as calling <a href='../IKeymanKeyboardsInstalled/Install'><code>IKeymanKeyboardsInstalled::Install</code></a>
and passing the <a href='../IKeymanKeyboard/Filename'><code>IKeymanKeyboard::Filename</code></a> property from this instance.</p>

<p class='note'>This method requires elevated privileges.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Install(bool Force)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>Force</code></dt>
  <dd>If <code>True</code>, overwrites an existing keyboard entry.</dd>
</dl>
