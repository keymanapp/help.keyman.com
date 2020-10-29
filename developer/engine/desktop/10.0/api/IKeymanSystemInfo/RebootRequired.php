<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanSystemInfo::RebootRequired Property"
  ]);
?>

<h1>IKeymanSystemInfo::RebootRequired Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanSystemInfo::RebootRequired</code> property returns <code>True</code> if a previous action 
performed through the Keyman Engine API cannot be completed until the system is restarted. Typically this can
arise if a file is locked by another process at install time, and is most likely to occur with font installation
and removal.</p>

<p><b>Note:</b> In Keyman 14.0 and later, <code>RebootRequired</code> always returns <code>False</code>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly bool RebootRequired</code></pre>
