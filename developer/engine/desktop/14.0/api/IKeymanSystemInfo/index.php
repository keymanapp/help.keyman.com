<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanSystemInfo Interface"
  ]);
?>

<h1>IKeymanSystemInfo Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanSystemInfo</code> interface provides information about Keyman Engine and the environment.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanSystemInfo', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='EngineInstallPath'><code>EngineInstallPath</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the fully qualified path where Keyman Engine is installed.</dd>
</dl>

<dl>
  <dt><a href='EngineVersion'><code>EngineVersion</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the version of Keyman Engine currently installed.</dd>
</dl>

<dl>
  <dt><a href='IsAdministrator'><code>IsAdministrator</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns <code>True</code> if Keyman Engine has sufficient privileges to install keyboards and perform tasks with elevated privileges.</dd>
</dl>

<dl>
  <dt><a href='RebootRequired'><code>RebootRequired</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns <code>True</code> if a previous action performed through the Keyman Engine API cannot be completed until the system is restarted.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='SetReboot'><code>SetReboot()</code></a></dt>
  <dd>Sets the reboot flag. This is typically used by Keyman Engine API internally but can also be set by a client process for their own
  reference.</dd>
</dl>
