<?php
require_once('includes/template.php');

head([
  'title' => "KMLMI Command Line Compiler"
]);
?>

<h1>Keyman Lexical Model model_info Command Line Compiler</h1>

<p>kmlmi merges Keyman lexical model .model_info files. It is intended for use within the
  <a href="https://github.com/keymanapp/lexical-models">keymanapp/lexical-models</a> repository.</p>

<p>The following parameters are available:</p>

<h2>Compiler mode</h2>
<pre><code class='language-none'>Usage: kmlmi &lt;infile&gt; -o, --outFile &lt;filename&gt;
    [-m, --model &lt;model_id&gt;] -s, --source &lt;sourceFilename&gt; [--kpsFilename &lt;kpsFilename&gt;]
    [--kmpFilename &lt;kmpFilename&gt;] [--jsFilename &lt;jsFilename&gt;]
</code></pre>

<h3>General compiler parameters</h3>

<dl>
  <dt><code>infile</code></dt>
  <dd>A .model_info source file. Required in compiler mode.</dd>

  <dt><code>-o, --outFile &lt;filename&gt;</code></dt>
  <dd>Where to save the resultant file.</dd>

  <dt><code>-m, --model &lt;model_id&gt;</code><dt>
  <dd>model id. Defaults to basename of input file sans .model_info extension.</dd>

  <dt><code>-s, --source &lt;sourceFilename&gt;</code></dt>
  <dd>Path to .model.ts source of lexical model, relative to lexical-models repo root.</dd>

  <dt><code>--kpsFilename &lt;kpsFilename&gt;</code></dt>
  <dd>Path to .model.kps file. Defaults to source/&lt;model_id&gt;.model.kps</dd>

  <dt><code>--kmpFilename &lt;kmpFilename&gt;</code></dt>
  <dd>Path to .model.kmp file. Defaults to build/&lt;model_id&gt;.model.kmp.</dd>

  <dt><code>--jsFilename &lt;jsFilename&gt;</code></dt>
  <dd>Path to .model.js file. Defaults to build/&lt;model_id&gt;.model.js.</dd>
</dl>
