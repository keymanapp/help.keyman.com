<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');

  head([
    'title' => "IKeyman Interface"
  ]);
?>

<h1>IKeyman Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeyman</code> interface is the top-level interface for the Keyman Engine for Windows API. The <code>IKeyman</code> interface can be instantiated 
with the <code>CoKeyman</code> coclass; it will also be returned from a call to <code>CreateObject("kmcomapi.Keyman")</code>.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeyman', '../'); ?>

<h2>Properties</h2>
  
<dl>
  <dt><a href='AutoApply'><code>AutoApply</code></a></dt>
  <dd>Determines whether settings changes are applied to Keyman Engine automatically as they are made.</dd>

  <dt><a href='Control'><code>Control</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanControl'><code>IKeymanControl</code></a> interface that provides methods for controlling the Keyman process and user interface.</dd>
  
  <dt><a href='Errors'><code>Errors</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanErrors'><code>IKeymanErrors</code></a> interface that lists errors that the API incurred when undertaking various processes.</dd>
  
  <dt><a href='Hotkeys'><code>Hotkeys</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanHotkeys'><code>IKeymanHotkeys</code></a> interface that lists all of the configured interface hotkeys.</dd>

  <dt><a href='Keyboards'><code>Keyboards</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanKeyboardsInstalled'><code>IKeymanKeyboardsInstalled</code></a> interface that lists all of the currently installed Keyman keyboards.</dd>

  <dt><a href='Languages'><code>Languages</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanLanguages'><code>IKeymanLanguages</code></a> interface that lists all of the currently avilable Windows languages and input methods.</dd>
  
  <dt><a href='Options'><code>Options</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanOptions'><code>IKeymanOptions</code></a> interface that lists all of the configuration settings and values for Keyman Engine.</dd>

  <dt><a href='Packages'><code>Packages</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanPackagesInstalled'><code>IKeymanPackagesInstalled</code></a> interface that lists all of the currently installed Keyman packages.</dd>

  <dt><a href='SystemInfo'><code>SystemInfo</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanSystemInfo'><code>IKeymanSystemInfo</code></a> interface that describes the current system configuration.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='Apply'><code>Apply()</code></a></dt>
  <dd>Apply all settings changes to Keyman Engine.</dd>
  
  <dt><a href='Refresh'><code>Refresh()</code></a></dt>
  <dd>Refresh the snapshot of keyboards and settings which is captured when the object is instantiated.</dd>
</dl>

<h2>Examples</h2>

<h3>VBScript</h3>

<p>This example can be saved with a .vbs extension to run through Windows Scripting. This is similar to the uninstall script that
Keyman Desktop generates for packages which have a Start Menu Uninstall entry.</p>

<pre class="language-basic"><code>dim kmcom, package
Set kmcom = CreateObject("keymanapi.Keyman")
n = kmcom.Packages.IndexOf("SamplePackage")
if n &gt;= 0 then
  Set package = kmcom.Packages(n)
  if msgbox("Uninstall package "+package.Description+"?", vbOKCancel, "Keyman Desktop") = vbOK then
    package.Uninstall(True)
  end if
else
  msgbox "The package SamplePackage could not be found."
end if</code></pre>
