<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackagsInstalled::IndexOf Method"
  ]);
?>

<h1>IKeymanPackagsInstalled::IndexOf Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackagsInstalled::IndexOf</code> method returns the zero-based index of the package in the collection that has an
ID matching the <code>ID</code> parameter.</p>

<p>If no package  matches, then the method returns <code>-1</code>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>long IndexOf(string ID)</code></pre>
