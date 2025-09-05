<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanControl Interface"
  ]);
?>

<h1>IKeymanControl Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanControl</code> interface controls the operation of Keyman Engine and provides
methods to trigger Keyman Engine's user interface.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanControl', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='ActiveLanguage'><code>ActiveLanguage</code></a></dt>
  <dd>Returns or sets the currently active keyboard + language.</dd>
</dl>

<dl>
  <dt><a href='LastActiveWindow'><code>LastActiveWindow</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the last active window handle, excluding Keyman windows such as the On Screen Keyboard.</dd>
</dl>

<dl>
  <dt><a href='LastFocusWindow'><code>LastFocusWindow</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the last focus window handle, irrespective of process.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='IsConfigurationOpen'><code>IsConfigurationOpen()</code></a></dt>
  <dd>Returns <code>True</code> if Keyman Configuration is currently running.</dd>
</dl>

<dl>
  <dt><a href='IsKeymanRunning'><code>IsKeymanRunning()</code></a></dt>
  <dd>Returns <code>True</code> if Keyman Engine is currently running.</dd>
</dl>

<dl>
  <dt><a href='IsOnlineUpdateCheckOpen'><code>IsOnlineUpdateCheckOpen()</code></a></dt>
  <dd>Returns <code>True</code> if the Keyman Desktop online update check tool is currently running.</dd>
</dl>

<dl>
  <dt><a href='IsTextEditorOpen'><code>IsTextEditorOpen()</code></a></dt>
  <dd>Returns <code>True</code> if the Keyman Desktop text editor is currently running.</dd>
</dl>

<dl>
  <dt><a href='IsVisualKeyboardOpen'><code>IsVisualKeyboardOpen()</code></a></dt>
  <dd>Returns <code>True</code> if the on screen keyboard is running.</dd>
</dl>

<dl>
  <dt><a href='OpenConfiguration'><code>OpenConfiguration()</code></a></dt>
  <dd>Starts Keyman Configuration.</dd>
</dl>

<dl>
  <dt><a href='OpenDiagnostics'><code>OpenDiagnostics()</code></a></dt>
  <dd>Opens the Keyman diagnostics tool.</dd>
</dl>

<dl>
  <dt><a href='OpenHelp'><code>OpenHelp()</code></a></dt>
  <dd>Opens Keyman Desktop help at the specific topic.</dd>
</dl>

<dl>
  <dt><a href='OpenTextEditor'><code>OpenTextEditor()</code></a></dt>
  <dd>Opens Keyman Desktop text editor.</dd>
</dl>

<dl>
  <dt><a href='OpenUpdateCheck'><code>OpenUpdateCheck()</code></a></dt>
  <dd>Opens Keyman Desktop online update check tool.</dd>
</dl>

<dl>
  <dt><a href='ShowKeyboardWelcome'><code>ShowKeyboardWelcome()</code></a></dt>
  <dd>Loads the welcome.htm file in a window for the selected keyboard.</dd>
</dl>

<dl>
  <dt><a href='StartKeyman'><code>StartKeyman()</code></a></dt>
  <dd>Starts Keyman Engine, if it isn't already running.</dd>
</dl>

<dl>
  <dt><a href='StartVisualKeyboard'><code>StartVisualKeyboard()</code></a></dt>
  <dd>Starts the on screen keyboard, if it isn't already visible.</dd>
</dl>

<dl>
  <dt><a href='StopKeyman'><code>StopKeyman()</code></a></dt>
  <dd>Stops Keyman Engine.</dd>
</dl>

<dl>
  <dt><a href='StopVisualKeyboard'><code>StopVisualKeyboard()</code></a></dt>
  <dd>Stops the on screen keyboard.</dd>
</dl>

