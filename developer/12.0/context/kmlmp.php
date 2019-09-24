<?php
require_once('includes/template.php');

head([
  'title' => "kmlmp Command Line Compiler"
]);
?>

<h1>Keyman Lexical Model Package Command Line Compiler</h1>

<p>kmlmp is the command line lexical model package compiler included in Keyman Developer. It is located in <code>%ProgramFiles(x86)%\Keyman\Keyman Developer</code>
  and also available via npm.</p>

<p>The following parameters are available:</p>

<h2>Compiler mode</h2>
<pre><code class='language-none'>Usage: kmlmp &lt;infile&gt; [-V, --version] [-o, --outFile &lt;filename&gt;] [-h, --help]
</code></pre>

<h3>General compiler parameters</h3>

<dl>
  <dt><code>infile</code></dt>
  <dd>A .kps file (lexical model package source). Required in compiler mode.</dd>

  <dt><code>-V, --version</code></dt>
  <dd>Output the version number.</dd>

  <dt><code>-o &lt;filename&gt;</code><dt>
  <dd>Where to save the resultant file.</dd>

  <dt><code>-h, --help</code></dt>
  <dd>Output usage information.</dd>
</dl>
