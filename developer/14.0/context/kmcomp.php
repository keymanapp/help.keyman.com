<?php
  require_once('includes/template.php');

  head([
    'title' => "KMComp Command Line Compiler"
  ]);
?>

<h1>KMComp Command Line Compiler</h1>

<p>KMComp is the command line compiler included in Keyman Developer. It is located in <code>%ProgramFiles(x86)%\Keyman\Keyman Developer</code>.</p>

<p>The following parameters are available:</p>

<h2>Compiler mode</h2>
<pre><code class='language-none'>Usage: kmcomp [-s[s]] [-nologo] [-c] [-d] [-w] [-v[s|d]] [-source-path path] [-schema-path path]
              [-m] infile [-m infile] [-t target] [outfile.kmx|outfile.js [error.log]]
              [-add-help-link path] [-color|-no-color]
              [-extract-keyboard-info field[,field...]]
</code></pre>

<h3>General compiler parameters</h3>

<dl>
  <dt><code>infile</code></dt>
  <dd>A .kmn file (Keyboard Source), .kps file (Package Source), or .kpj (project). Required in compiler mode. If
      a .kpj is specified, the .kpj will determine output paths and all files referenced in the project will be
      built (see <code>-t</code>). For validation mode, can be a .keyboard_info file.</dd>
  
  <dt><code>outfile.kmx</code></dt>
  <dd>Generate an output file for Windows/macOS; can only be specified for a .kmn <code>infile</code>. Optional; if omitted, 
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
  <dd>Don't print the compiler description</dd>
  
  <dt><code>-c</code></dt>
  <dd>Clean target(s) instead of building (only for .kpj)</dd>
  
  <dt><code>-d</code></dt>
  <dd>Include debug information</dd>
  
  <dt><code>-w</code></dt>
  <dd>Treat warnings as errors</dd>
  
  <dt><code>-t target</code></dt>
  <dd>Build only the <code>target</code> file from the project (only for .kpj)</dd>

  <dt><code>-addhelplink path</code></dt>
  <dd>path to help file on https://help.keyman.com/keyboard</dd>

  <dt><code>-color</code></dt>
  <dd>If specified, forces color log mesages on.</dd>

  <dt><code>-no-color</code></dt>
  <dd>If specified, forces color log messages off. If neither specified, uses console mode to determine whether color
    should be used</dd>
</dl>

<h3>JSON .keyboard_info compile targets</h3>

<dl>
  <dt><code>-v[s]</code></dt>
  <dd>Validate infile against source schema</dd>
  
  <dt><code>-vd</code></dt>
  <dd>Validate infile against distribution schema</dd>
          
  <dt><code>-m</code></dt>
  <dd>Merge information from infile (can be .kmp and .js) into .keyboard_info output file</dd>
  
  <dt><code>-m-validate-id</code></dt>
  <dd>Validate the id against the .js, .kmx and .kmp filenames when merging</dd>
  
  <dt><code>-extract-keyboard-info</code></dt>
  <dd>Print json data .keyboard_info for build script integration.</dd>
  
  <dt><code>-source-path</code></dt>
  <dd>Specify path to add to the sourcePath field in the .keyboard_info output file</dd>
  
  <dt><code>-schema-path</code></dt>
  <dd>Specify path to the keyboard_info json schema definitions. If not specified, then 
  defaults to same folder as kmcomp.exe</dd>
</dl>
