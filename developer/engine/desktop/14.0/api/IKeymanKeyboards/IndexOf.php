<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboards::IndexOf Method"
  ]);
?>

<h1>IKeymanKeyboards::IndexOf Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboards::IndexOf</code> method returns the zero-based index of the keyboard in the array that has an ID
matching the <code>ID</code> parameter. The ID is formed from the base name of the keyboard, i.e. excluding path and extension, and is 
case insensitive.</p>

<p>If no keyboard matches, then the method returns <code>-1</code>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>long IndexOf(string ID)</code></pre>
