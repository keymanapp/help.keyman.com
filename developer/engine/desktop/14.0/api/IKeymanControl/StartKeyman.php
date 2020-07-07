<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanControl::StartKeyman() Method"
  ]);
?>

<h1>IKeymanControl::StartKeyman() Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanControl::StartKeyman()</code> method starts Keyman Engine (keyman.exe).
It is better to call this method than to launch keyman.exe directly, as this method handles paths and
parameter changes across versions of Keyman Engine.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void StartKeyman(void)</code></pre>
