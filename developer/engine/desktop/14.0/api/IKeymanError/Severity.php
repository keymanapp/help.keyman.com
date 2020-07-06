<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanError::Severity Property"
  ]);
?>

<h1>IKeymanError::Severity Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanError::Severity</code> property returns the severity level of
the error.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly KeymanErrorSeverity Severity</code></pre>

<h2>Severity Levels</h2>

<table class='display'>
  <thead>
    <tr><th>Value</th><th>Name</th></tr>
  </thead>
  <tbody>
    <tr><td>0</td><td>kesFatal</td></tr>
    <tr><td>1</td><td>kesError</td></tr>
    <tr><td>2</td><td>kesWarning</td></tr>
    <tr><td>3</td><td>kesHint</td></tr>
  </tbody>
</table>
