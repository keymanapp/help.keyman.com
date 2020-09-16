<?php
  require_once('includes/template.php');

  head([
    'title' => "KMX files"
  ]);
?>

<h1>KMX files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Keyman Desktop</span>, <span class="application">Keyman for macOS</span>,
    and <span class="application">Keyman for Linux</span>.</dd>

  <dt>Description:</dt>
  <dd>A .KMX file is a compiled keyboard file.</dd>

  <dt>Details:</dt>
  <dd>A .KMX file is compiled in <span class="application">Keyman Developer</span> from the Keyman source file
    (<a href='kmn'>.KMN</a>) and icon for the keyboard (.ICO/.BMP). Note that .KMX files are not used for
    <span class="application">Keyman for Android</span> and <span class="application">Keyman for iPhone and iPad</span>.</dd>

  <dt>Distributed with keyboard:</dt>
  <dd>This is the keyboard file. It must be distributed with your package to allow people to type using the
    keyboard you have developed.</dd>
</dl>
