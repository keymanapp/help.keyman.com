<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanSystemInfo::IsAdministrator Property"
  ]);
?>

<h1>IKeymanSystemInfo::IsAdministrator Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanSystemInfo::IsAdministrator</code> property returns <code>True</code> if Keyman Engine has 
sufficient privileges to install keyboards and perform tasks with elevated privileges.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly bool IsAdministrator</code></pre>
