<?php
  require_once('includes/template.php');

  head([
    'title' => "KMP files"
  ]);
?>

<h1>KMP files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Keyman Desktop</span> and custom Keyman Engine products.</dd>

  <dt>Description:</dt>
  <dd>A .KMP file is a Keyman Package file.</dd>

  <dt>Details:</dt>
  <dd>A .KMP file is compiled from a Keyman Package source file (<a href='kps'>.KPS</a>) using the Package Editor in <span class=
    "application">Keyman Developer</span>. Normal contents of a Keyman Package are one or more keyboards with fonts, documentation, and On
    Screen Keyboard (<a href='kvk'>.KVK</a>) files. Keyman Developer will also include a <a href='metadata'>metadata</a>
    file in the package.</dd>

  <dt>Distributed with keyboard:</dt>
  <dd>A Keyman Package file (.KMP) can include keyboard files (<a href='kmx'>.KMX</a>/.JS), fonts, documentation, and On Screen
    Keyboard (<a href='kvk'>.KVK</a>) files. Do not include source files (<a href='kmn'>.KMN</a>/.KVKS) in the Package.
    The Keyman Package is normally distributed instead of the plain keyboard file (<a href='kmx'>.KMX</a>) in order to
    include the extra files.</dd>
</dl>
