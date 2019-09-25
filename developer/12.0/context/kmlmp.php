<?php
require_once('includes/template.php');

head([
  'title' => "kmlmp - Command Line Lexical Model Package Compiler"
]);
?>

<h1>kmlmp - Command Line Lexical Model Package Compiler</h1>

<p>kmlmp is the command line lexical model package compiler included in Keyman Developer. It is and also available via npm.</p>

<h2>Installation via npm</h2>

<p>First, install <a href="https://nodejs.org/">nodejs</a>. Then, install with the following:</p>

<pre><code class="language-bash">npm i @keymanapp/developer-lexical-model-compiler</code></pre>

<h2>Compiler mode</h2>

<p>The following parameters are available:</p>

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
