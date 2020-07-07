<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardFile::Languages Property"
  ]);
?>

<h1>IKeymanKeyboardFile::Languages Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardFile::Languages</code> property returns an 
<a href='../IKeymanKeyboardLanguagesFile'><code>IKeymanKeyboardLanguagesFile</code></a> reference which lists the BCP 47 
languages that are suggested for use with the keyboard, as extracted from the package metadata.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanKeyboardLanguagesFile* Languages</code></pre>
