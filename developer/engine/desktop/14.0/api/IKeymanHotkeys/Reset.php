<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanHotkeys::Reset() Method"
  ]);
?>

<h1>IKeymanHotkeys::Reset() Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanHotkeys::Reset()</code> method resets the value of all hotkeys in the collection to empty. <a href='Apply'><code>Apply</code></a> must be called
for the changes to take effect.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Reset(void)</code></pre>
