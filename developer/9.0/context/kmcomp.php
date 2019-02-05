<?php
  require_once('includes/template.php');

  head([
    'title' => "KMComp Command-line Compiler"
  ]);
?>

<h1>KMComp Command-line Compiler</h1>

<p>KMComp is the command-line compiler included in Keyman Developer. It is located in <code>%ProgramFiles(x86)%\Tavultesoft\Keyman Developer 9.0</code>.</p>

<p>The following parameters are available:</p>

<h2>Compiler mode</h2>
<pre><code>kmcomp [-s[s]] [-nologo] [-c] [-d] [-w] [-e [installer.msi [-u]]] 
       [-l username password] [-p RuntimeSourcePath] infile [-t target] 
       [outfile.kmx|outfile.js [error.log]]
</code></pre>

<h3>General compiler parameters</h3>

<dl>
  <dt><code>infile</code></dt>
  <dd>A .kmn file (Keyboard Source), .kps file (Package Source), or .kpj (project). Required in compiler mode. If
      a .kpj is specified, the .kpj will determine output paths and all files referenced in the project will be
      built (see <code>-t</code>).</dd>
  
  <dt><code>outfile.kmx</code></dt>
  <dd>Generate an output file for Windows/Mac OS X; can only be specified for a .kmn <code>infile</code>. Optional; if omitted, 
      generates an output file with the same base name as the input file.</dd>
  
  <dt><code>outfile.js</code></dt>
  <dd>Generate an output file for KeymanWeb/touch devices; can only be specified for a .kmn <code>infile</code>. Optional; if
      omitted for a .kmn input, no JavaScript keyboard will be built.</dd>

  <dt><code>error.log</code></dt>
  <dd>Write output to a text file specified by error.log instead of stdout.</dd>

  <dt><code>-s</code></dt>
  <dd>Mostly silent; don't print information-level messages</dd>
  
  <dt><code>-ss</code></dt>
  <dd>Fully silent; don't print anything except fatal internal errors</dd>
  
  <dt><code>-nologo</code></dt>
  <dd>Don't print the compiler description and registration</dd>
  
  <dt><code>-c</code></dt>
  <dd>Clean target(s) instead of building (only for .kpj)</dd>
  
  <dt><code>-d</code></dt>
  <dd>Include debug information</dd>
  
  <dt><code>-w</code></dt>
  <dd>Treat warnings as errors</dd>
  
  <dt><code>-t target</code></dt>
  <dd>Build only the <code>target</code> file from the project (only for .kpj)</dd>
</dl>

<h3>Branding Pack parameters</h3>

<dl>
  <dt><code>-l username password</code></dt>
  <dd>Login and password override for compiling product installers</dd>
  
  <dt><code>-p RuntimeSourcePath</code></dt>
  <dd>Set Keyman runtime source path to RuntimeSourcePath</dd>

  <dt><code>-e [installer.msi]</code></dt>
  <dd>Create a .exe installer for a package as well, using installer.msi if specified</dd>
  
  <dt><code>-u</code></dt>
  <dd>update .kps to refer to latest version of installer.msi</dd>
</dl>      

<h2>Encryption mode</h2>

<p>Encryption mode is used with the Branding Pack to prepare files for distribution.</p>

<pre><code>kmcomp -x filetoencrypt [product.pxx]
</code></pre>

<h3>Encryption parameters</h3>

<dl>
  <dt><code>filetoencrypt</code></dt>
  <dd>Name of the .kmx or .kct file to encrypt. If .kmx, then <code>product.pxx</code> must also be specified.</dd>

  <dt><code>product.pxx</code></dt>
  <dd>Name of product to encrypt a .kmx file for.</dd>
</dl>
