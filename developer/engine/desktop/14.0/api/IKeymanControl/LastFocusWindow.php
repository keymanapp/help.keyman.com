<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanControl::LastFocusWindow Property"
  ]);
?>

<h1>IKeymanControl::LastFocusWindow Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanControl::LastFocusWindow</code> property returns the last 
focused window handle, irrespective of process, excluding Keyman windows such 
as the On Screen Keyboard.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly long LastFocusWindow</code></pre>

