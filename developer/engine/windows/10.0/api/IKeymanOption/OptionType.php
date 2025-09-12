<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanOption::OptionType Property"
  ]);
?>

<h1>IKeymanOption::OptionType Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanOption::OptionType</code> property returns the data type
for the <a href='Value'><code>Value</code></a> and <a href='DefaultValue'><code>DefaultValue</code></a>
properties.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly KeymanOptionType OptionType</code></pre>

<h2>Option Data Types</h2>

<table class='display'>
  <thead>
    <tr><th>Value</th><th>Name</th><tr>
  </thead>
  <tbody>
    <tr>
      <td>0</td>
      <td>kotUnknown</td>
    </tr>
    <tr>
      <td>1</td>
      <td>kotBool</td>
    </tr>
    <tr>
      <td>2</td>
      <td>kotLong</td>
    </tr>
    <tr>
      <td>3</td>
      <td>kotString</td>
    </tr>
  </tbody>
</table>
