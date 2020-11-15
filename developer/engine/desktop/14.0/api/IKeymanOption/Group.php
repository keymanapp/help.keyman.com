<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanOption::Group Property"
  ]);
?>

<h1>IKeymanOption::Group Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanOption::Group</code> property returns the identifier
of the group to which the option belongs. The friendly name for the
identifier will be found in the locale translation file.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly string Group</code></pre>

