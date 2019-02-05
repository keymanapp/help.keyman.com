<?php
  require_once('includes/template.php');

  head([
    'title' => "KMX files"
  ]);
?>

<h1>KMX files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Keyman Desktop</span>.</dd>

  <dt>Description:</dt>
  <dd>A .KMX file is a compiled keyboard file.</dd>

  <dt>Details:</dt>
  <dd>A .KMX file is compiled in <span class="application">Keyman Developer</span> from the Keyman source file
    (<a href='kmn'>.KMN</a>) and icon for the keyboard (.ICO/.BMP). Note that .KMX files will only work in 
    <span class="application">Keyman Desktop</span> – custom Keyman Engine products must use <a href='kxx'>.KXX</a> files.</dd>

  <dt>Distributed with keyboard:</dt>
  <dd>This is the keyboard file. It must be distributed with your package to allow people to type using the
    keyboard you have developed.</dd>
</dl>
