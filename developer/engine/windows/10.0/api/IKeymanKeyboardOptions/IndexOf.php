<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardOptions::IndexOf Method"
  ]);
?>

<h1>IKeymanKeyboardOptions::IndexOf Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardOptions::IndexOf</code> method returns the zero-based index of the option in the array that has a name
matching the <code>Name</code> parameter.</p>

<p>If no option matches, then the method returns <code>-1</code>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>long IndexOf(string Name)</code></pre>
