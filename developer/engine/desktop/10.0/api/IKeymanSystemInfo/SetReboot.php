<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanSystemInfo::SetReboot Method"
  ]);
?>

<h1>IKeymanSystemInfo::SetReboot Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanSystemInfo::SetReboot</code> method sets the reboot flag <a href='RebootRequired'><code>RebootRequired</code></a>. 
This is typically used by Keyman Engine API internally but can also be set by a client process for their own
reference.</p>

<p><b>WARNING:</b> In Keyman 14.0 and later, <code>SetReboot</code> has no effect and does not set the reboot flag.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void SetReboot(void)</code></pre>
