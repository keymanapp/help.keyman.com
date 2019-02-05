<?php
  require_once('includes/template.php');

  head([
    'title' => "Header keywords"
  ]);
?>

<h1 class="title" id="reference__struct_headers">Header keywords</h1>

<p>Header keywords have been replaced by <a href="stores.php" title="Using Stores">system stores</a>.
While all these header keywords will continue to be available in future versions of Keyman, new features are only be accessible
through system stores, and system stores should be used in place of header keywords when updating layouts.</p>

<dl>
  <dt><a href="../reference/baselayout" title="&amp;baselayout store"><code>&amp;baselayout</code> store</a></dt>
  <dd>Can be tested with <code>if</code> to determine the current system hardware keyboard layout</dd>

  <dt><a href="../reference/bitmap" title="&amp;Bitmap store and BITMAP statement"><code>&amp;Bitmap</code> store, <code>BITMAP</code> statement, <code>BITMAPS</code> statement</a></dt>
  <dd>An image that appears in the language menu</dd>

  <dt><a href="../reference/caps" title="Caps Lock stores and statements"><code>&amp;CapsOnOnly</code> store, <code>CAPS ON ONLY</code> statement</a></dt>
  <dd>Manages CAPS LOCK behaviour - pressing Caps Lock key only switches on Caps Lock state</dd>

  <dt><a href="../reference/caps" title="Caps Lock stores and statements"><code>&amp;CapsAlwaysOff</code> store, <code>CAPS ALWAYS OFF</code> statement</a></dt>
  <dd>Manages CAPS LOCK behaviour - pressing Caps Lock key has no effect</dd>
  
  <dt><a href="../reference/caps" title="Caps Lock stores and statements"><code>&amp;ShiftFreesCaps</code> store, <code>SHIFT FREES CAPS</code> statement</a></dt>
  <dd>Manages CAPS LOCK behaviour - pressing Shift key turns off Caps Lock</dd>

  <dt><a href="../reference/copyright" title="&amp;Copyright store and COPYRIGHT statement"><code>&amp;Copyright</code> store and <code>COPYRIGHT</code> statement</a></dt>
  <dd>A copyright message for the keyboard</dd>

  <dt><a href="../reference/ethnologuecode" title="&amp;EthnologueCode store"><code>&amp;EthnologueCode</code> store</a></dt>
  <dd>The ISO 639-3 (formerly SIL Ethnologue) code for the language (Deprecated)</dd>

  <dt><a href="../reference/hotkey" title="&amp;Hotkey store and HOTKEY statement"><code>&amp;Hotkey</code> store and <code>HOTKEY</code> statement</a></dt>
  <dd>Sets a default activation hotkey for the keyboard</dd>

  <dt><a href="../reference/includecodes" title="&amp;includecodes store"><code>&amp;includecodes</code> store</a></dt>
  <dd>Reference an external file for named character constants</dd>

  <dt><a href="../reference/keyboardversion" title="&amp;keyboardversion store"><code>&amp;keyboardversion</code> store</a></dt>
  <dd>Specifies the version of the keyboard</dd>

  <dt><a href="../reference/kmw_embedcss" title="&amp;kmw_embedcss store"><code>&amp;kmw_embecss</code> store</a></dt>
  <dd>Specifies an additional library of CSS code to be embedded in a web or touch keyboard</dd>

  <dt><a href="../reference/kmw_embedjs" title="&amp;kmw_embedjs store"><code>&amp;kmw_embedjs</code> store</a></dt>
  <dd>Specifies an additional library of Javascript code to be embedded in a web or touch keyboard</dd>

  <dt><a href="../reference/kmw_helpfile" title="&amp;kmw_helpfile store"><code>&amp;kmw_helpfile</code> store</a></dt>
  <dd>Specifies the embedded help html file for web keyboards</dd>

  <dt><a href="../reference/kmw_helptext" title="&amp; store"><code>&amp;kmw_helptext</code> store</a></dt>
  <dd>Specifies the embedded help text for web keyboards</dd>

  <dt><a href="../reference/kmw_rtl" title="&amp;kmw_rtl store"><code>&amp;kmw_rtl</code> store</a></dt>
  <dd>Specifies the directionality of text controls for web keyboards</dd>

  <dt><a href="../reference/language" title="&amp;Language store, LANGUAGE statement"><code>&amp;Language</code> store, <code>LANGUAGE</code> statement</a></dt>
  <dd>Specifies the system language to install or associate with the keyboard (Deprecated)</dd>

  <dt><a href="../reference/layer" title="&amp;layer store"><code>&amp;layer</code> store</a></dt>
  <dd>Tests or sets the current touch keyboard layer visible on the on screen keyboard</dd>

  <dt><a href="../reference/layout" title="LAYOUT statement"><code>LAYOUT</code> statement</a></dt>
  <dd>Windows system layout for the keyboard (Deprecated)</dd>

  <dt><a href="../reference/layoutfile" title="&amp;layoutfile store"><code>&amp;layoutfile</code> store</a></dt>
  <dd>Specifies the JSON format touch keyboard layout filename</dd>

  <dt><a href="../reference/message" title="&amp;Message store and MESSAGE statement"><code>&amp;Message</code> store and <code>MESSAGE</code> statement</a></dt>
  <dd>A message that appears when the keyboard is installed</dd>

  <dt><a href="../reference/mnemoniclayout" title="&amp;mnemoniclayout store"><code>&amp;mnemoniclayout</code> system store</a></dt>
  <dd>Sets a keyboard to be mnemonic or positional</dd>

  <dt><a href="../reference/name" title="&amp;Name store and NAME statement"><code>&amp;Name</code> store and <code>NAME</code> statement</a></dt>
  <dd>The name of the keyboard</dd>

  <dt><a href="../reference/oldcharposmatching" title="&amp;OldCharPosMatching store"><code>&amp;OldCharPosMatching</code> store</a></dt>
  <dd>Turns on the Keyman 5.0 and earlier character position matching (not implemented)</dd>

  <dt><a href="../reference/platform" title="&amp;platform store"><code>&amp;platform</code> store</a></dt>
  <dd>Can be tested with <code>if</code> to determine current platform keyboard is operating on</dd>

  <dt><a href="../reference/targets" title="&amp;targets store"><code>&amp;targets</code> store</a></dt>
  <dd>Specifies the platforms which the compiler will generate outputs for</dd>

  <dt><a href="../reference/version" title="&amp;Version store and VERSION statement"><code>&amp;Version</code> store and <code>VERSION</code> statement</a></dt>
  <dd>The Keyman keyboard version</dd>

  <dt><a href="../reference/visualkeyboard" title="&amp; store"><code>&amp;VisualKeyboard</code> store</a></dt>
  <dd>Specifies the .kvk visual keyboard file associated with the keyboard</dd>

  <dt><a href="../reference/windowslanguages" title="&amp;windowslanguages store"><code>&amp;windowslanguages</code> store</a></dt>
  <dd>Specifies a set of Windows language codes to which the keyboard can be associated (Deprecated)</dd>
</dl>
