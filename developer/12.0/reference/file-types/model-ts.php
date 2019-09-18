<?php
  require_once('includes/template.php');

  head([
    'title' => "MODEL.TS files"
  ]);
?>

<h1>MODEL.TS files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Keyman Developer</span>.</dd>

  <dt>Description:</dt>
  <dd>A .MODEL.TS file is a lexical model definition source file. This holds all the code used by a Keyman lexical model, in plain text.</dd>

  <dt>Details:</dt>
  <dd><span class="application">Keyman Developer</span> compiles this Keyman lexical model source file which can also
    reference a (<a href="tsv">.TSV</a>) wordlist</a> to make a lexical model (<a href='model-js'>.MODEL.JS</a>) file.</dd>
</dl>
