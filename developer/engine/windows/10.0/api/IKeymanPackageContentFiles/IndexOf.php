<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageContentFiles::IndexOf Method"
  ]);
?>

<h1>IKeymanPackageContentFiles::IndexOf Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageContentFiles::IndexOf</code> method returns the zero-based index of the file in the collection that has a 
filename matching the <code>Filename</code> parameter.</p>

<p>If no file matches, then the method returns <code>-1</code>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>long IndexOf(string Filename)</code></pre>
