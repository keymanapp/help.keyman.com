<?php
  require_once('includes/template.php');

  head([
    'title' => "MODEL.JS files"
  ]);
?>

<h1>MODEL.JS files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Keyman for Android</span> and <span class="application">Keyman for iPhone and iPad</span>.</dd>

  <dt>Description:</dt>
  <dd>A .MODEL.JS file is a compiled lexical model file.</dd>

  <dt>Details:</dt>
  <dd>A .MODEL.JS file is compiled in <span class="application">Keyman Developer</span> from the Keyman lexical model
    source (<a href='model-ts'>.MODEL.TS</a>) file and (<a href="tsv">.TSV</a>) wordlist. Note that .MODEL.JS files are only currently supported in
  <span class="application">Keyman for Android</span> and <span  class="application">Keyman for iPhone and iPad</span>.</dd>

  <dt>Distributed with lexical model:</dt>
  <dd>This is the lexical model file. It must be distributed as a part of your package to allow people to use the lexical model
    you have developed.</dd>
</dl>
