<?php
  require_once('includes/template.php');

  head([
    'title' => "KPS files"
  ]);
?>

<h1>KPS files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Keyman Developer</span>.</dd>

  <dt>Description:</dt>
  <dd>A .KPS file is a Keyman package source file.</dd>

  <dt>Details:</dt>
  <dd>A .KPS file is created using the Package Editor in <span class="application">Keyman Developer</span>. It specifies what
    files are to be included in the package. It is compiled into a Keyman Package file (<a href='kmp'>.KMP</a>).</dd>

  <dt>Distributed with keyboard:</dt>
  <dd>No. This is a development file and should not be distributed.</dd>
</dl>

<h2>File format</h2>

<p>The optional <code class='language-markup'>&lt;Strings></code> section of the file can be included to customise the text in the bootstrap installer. The default
  strings are found in the file:
  <a href="https://github.com/keymanapp/keyman/blob/stable-14.0/windows/src/desktop/setup/locale/en/strings.xml">strings.xml</a>
  and can be localized at <a href="https://translate.keyman.com">translate.keyman.com</a></p>

