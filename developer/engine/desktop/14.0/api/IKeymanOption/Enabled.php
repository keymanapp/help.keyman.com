<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanOption::Enabled Property"
  ]);
?>

<h1>IKeymanOption::Enabled Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanOption::Enabled</code> property returns <code>True</code>
if the option value can be changed. Some options are unavailable to be changed
at certain times, for example if the user does not have sufficient permissions,
or on certain operating system configurations.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly bool Enabled</code></pre>

