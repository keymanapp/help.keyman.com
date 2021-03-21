<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardInstalled::InstallVisualKeyboard Method"
  ]);
?>

<h1>IKeymanKeyboardInstalled::InstallVisualKeyboard Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardInstalled::InstallVisualKeyboard</code> method installs a visual keyboard file (.kvk) and associates it with the keyboard. The visual keyboard file
is copied into the Keyman keyboard store. If a visual keyboard is already installed for the keyboard, then the new visual keyboard replaces the old one.</p>

<p>Typically, a keyboard and visual keyboard will be installed together as part of a package, but this method can be helpful for testing and development of keyboards.</p>

<p>Changes associated with calling this method are applied immediately; <a href='../IKeymanKeyboardsInstalled/Apply'><code>IKeymanKeyboardsInstalled::Apply</code></a> does not
need to be called.</p>

<p>A visual keyboard can be uninstalled with <a href='../IKeymanVisualKeyboard/Uninstall'><code>IKeymanVisualKeyboard::Uninstall</code></a>.</p>

<p class='note'>This method requires elevated privileges.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void InstallVisualKeyboard(string Filename)</code></pre>
