<?php
  require_once('includes/template.php');

  head([
    'title' => "KMP files"
  ]);
?>

<h1>KMP files</h1>

<dl>
  <dt>Used by:</dt>
  <dd>All Keyman and custom Keyman Engine products can use keyboard packages.</dd>
  <dd>Keyman for Android and Keyman for iPhone and iPad can use lexical model packages.</dd>

  <dt>Description:</dt>
  <dd>A .KMP file is a Keyman Package file for distributing keyboards or lexical models.</dd>

  <dt>Details:</dt>
  <dd>A .KMP file is compiled from a Keyman Package source file (<a href='kps'>.KPS</a>) using the Package Editor in <span class=
    "application">Keyman Developer</span>. Normal contents of a Keyman keyboard Package are one or more keyboards with fonts, documentation, and On
    Screen Keyboard (<a href='kvk'>.KVK</a>) files. Keyman Developer will also include a <a href='metadata'>metadata</a>
    file in the package. Lexical model packages contain one lexical model instead of keyboards.</dd>

  <dt>Distributed with keyboard:</dt>
  <dd>A Keyman keyboard Package file (.KMP) can include keyboard files (<a href='kmx'>.KMX</a>/.JS), fonts, documentation, and On Screen
    Keyboard (<a href='kvk'>.KVK</a>) files. Do not include source files (<a href='kmn'>.KMN</a>/.KVKS) in the Package.
    The Keyman Package is normally distributed instead of the plain keyboard file (<a href='kmx'>.KMX</a>) in order to
    include the extra files.</dd>

  <dt>Distributed with lexical model:</dt>
  <dd>A Keyman lexical model Package file (.KMP) includes one lexical model file (<a href='model-js'>.MODEL.JS)</a>,
    and documentation files. Do not include lexical model source files (<a href='model-ts'>.MODEL.TS</a> or
    <a href='tsv'>.TSV</a>) in the Package.</dd>
</dl>
