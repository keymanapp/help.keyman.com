<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanControl::OpenConfiguration() Method"
  ]);
?>

<h1>IKeymanControl::OpenConfiguration() Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanControl::OpenConfiguration()</code> method starts Keyman Configuration (kmshell.exe).
It is better to call this method than to launch kmshell.exe directly as this method handles paths and
parameter changes across versions of Keyman Engine.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void OpenConfiguration(void)</code></pre>
