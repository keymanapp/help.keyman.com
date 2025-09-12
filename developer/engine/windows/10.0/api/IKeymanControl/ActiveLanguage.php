<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanControl::ActiveLanguage Property"
  ]);
?>

<h1>IKeymanControl::ActiveLanguage Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanControl::ActiveLanguage</code> property sets or returns the last 
active <a href='../IKeymanLanguage'><code>IKeymanLanguage</code></a> for the current thread.</p>

<p>This is a convenience wrapper for the Windows <code>ITfInputProcessorProfileMgr::ActivateProfile</code> method.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>IKeymanLanguage* ActiveLanguage</code></pre>

