<?php
  require_once('includes/template.php');

  head([
    'title' => "KCT files"
  ]);
?>

<h1>KCT files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Keyman Developer</span>.</dd>

  <dt>Description:</dt>
  <dd>A .KCT file is a Keyman customisation source file.</dd>

  <dt>Details:</dt>
  <dd>.KCT files are created using the Branding Editor in <span class="application">Keyman Developer.</span>. They contain all
  the details for a custom product's user interface and its interaction with the Keyman Engine. A .KCT file must be selected when
  creating a custom product installer with the Distribution Editor. When building the custom product installer, the .KCT file is compiled
  into a <a href='pxx'>.PXX</a> file.</dd>

  <dt>Distributed with keyboard:</dt>
  <dd>No. This is a development file and should not be distributed.</dd>
</dl>
