<?php
  require_once('includes/template.php');

  head([
    'title' => "keyman-touch-layout files"
  ]);
?>

<h1>keyman-touch-layout files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Keyman Developer</span>.</dd>

  <dt>Description:</dt>
  <dd>A .keyman-touch-layout file is a JSON format file that describes a keyboard layout for touch devices.</dd>

  <dt>Details:</dt>
  <dd>Referenced by a Keyman keyboard (<a href='kmn'>.KMN</a>) and compiles into the target keyboard .js file.</dd>

  <dt>Distributed with keyboard:</dt>
  <dd>This is a keyboard development file and should not be distributed with your package.</dd>
    
  <dt>Reference:</dt>
  <dd><a href='/developer/language/'>Keyman keyboard language</a></dd>
</dl>
