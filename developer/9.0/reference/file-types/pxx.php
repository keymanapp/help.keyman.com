<?php
  require_once('includes/template.php');

  head([
    'title' => "PXX files"
  ]);
?>

<h1>PXX files</h1>

<dl>
  <dt>Used by:</dt>
  <dd>custom Keyman Engine products.</dd>

  <dt>Description:</dt>
  <dd>A .PXX file is an encrypted Keyman customisation file.</dd>

  <dt>Details:</dt>
  <dd>.PXX files are compiled from a <a href='kct'>.KCT</a> in <span class="application">Keyman Developer</span> when creating an installer for a
    custom Keyman Engine product. They are locked to that product and cannot be used with <span class="application">Keyman Desktop</span>
    or any other custom products.</dd>

  <dt>Distributed with keyboard:</dt>
  <dd>.PXX files are included in the custom product installer (.MSI) by default and should not be distributed separately.</dd>
</dl>
