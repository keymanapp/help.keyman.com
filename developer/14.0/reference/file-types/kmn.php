<?php
  require_once('includes/template.php');

  head([
    'title' => "KMN files"
  ]);
?>

<h1>KMN files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Keyman Developer</span>.</dd>

  <dt>Description:</dt>
  <dd>A .KMN file is a keyboard source file. This holds all the code used by a Keyman Desktop keyboard, in plain
    text.</dd>

  <dt>Details:</dt>
  <dd>Compiles into a Keyman keyboard (<a href='kmx'>.KMX</a>) file.</dd>

  <dt>Distributed with keyboard:</dt>
  <dd>This is a keyboard development file and should only be distributed with your package if you want to make
    the keyboard source code available.</dd>
    
  <dt>Reference:</dt>
  <dd><a href='/developer/language/'>Keyman keyboard language</a></dd>
</dl>
