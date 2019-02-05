<?php
  require_once('includes/template.php');

  head([
    'title' => "KMConvert Command Line Keyboard Conversion Utility"
  ]);
?>

<h1>KMConvert Command Line Keyboard Conversion Utility</h1>

<p>KMConvert converts keyboard layouts between different formats. It is located in <code>%ProgramFiles(x86)%\Keyman\Keyman Developer</code>. KMConvert
will generate a full Keyman template project from the imported layout or data, in a new folder named with the ID of the keyboard. It will not overwrite 
an existing folder.</p>

<p>The following parameters are available:</p>

<pre><code class='language-none'>kmconvert import-windows -klid &lt;source-klid&gt; [additional-options]
kmconvert template -id &lt;keyboard_id&gt; [additional-options]</code></pre>

<h3>Available conversion modes</h3>

<p>The conversion mode must be specified as the first parameter.</p>

<dl>
  <dt><code>import-windows</code></dt>
  <dd>Imports a Windows keyboard into a new Keyman keyboard project. The <code>-klid</code> parameter is required.</dd>

  <dt><code>template</code></dt>
  <dd>Creates a blank keyboard project in the repository template format. The <code>-id</code> parameter is required.</dd>
</dl>

<h3>Parameters</h3>
  
<dl>
  <dt><code>-klid &lt;source-klid&gt;</code></dt>
  <dd>The KLID of the keyboard to import, per LoadKeyboardLayout. This must be an eight digit hex identifier, such 
      as <code>00000409</code> for English (US), kbdus.dll. This parameter is only valid for <code>import-windows</code>
      conversion mode.</dd>
  
  <dt><code>-id &lt;keyboard_id&gt;</code></dt>
  <dd>The id of the keyboard to create. Required for <code>template</code>, optional for <code>import-windows</code>.
      In <code>import-windows</code> mode, you can use a format string with the placeholder <code>%s</code> which will
      be replaced with the source filename, e.g. <code>kbdus</code>. If not specified, then the source filename will
      form the id of the generated keyboard.</dd>
  
  <dt><code>-nologo</code></dt>
  <dd>Don't show the program description and copyright banner</dd>
  
  <dt><code>-o &lt;destination&gt;</code></dt>
  <dd>The target folder to write the keyboard project into, defaults to <code>.\</code></dd>
  
  <dt><code>-name &lt;data&gt;</code></dt>
  <dd>Name of the keyboard, e.g. <code>My First Keyboard</code>, <code>%s Basic</code>.
      Format strings are only valid in <code>import-windows</code> mode; <code>%s</code>
      will be replaced with the friendly English name of the imported keyboard.</dd>
  
  <dt><code>-copyright &lt;data&gt;</code></dt>
  <dd>Copyright string for the keyboard, defaults to <code>Copyright (C)</code></dd>
  
  <dt><code>-version &lt;data&gt;</code></dt>
  <dd>Version number of the keyboard, defaults to <code>1.0</code></dd>

  <dt><code>-languages &lt;data&gt;</code></dt>
  <dd>Space-separated list of BCP 47 tags, e.g. <code>en-US tpi-PG</code></dd>

  <dt><code>-author &lt;data&gt;</code></dt>
  <dd>Name of author of the keyboard, no default.</dd>
</dl>
