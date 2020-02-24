<?php
  require_once('includes/template.php'); 
  
  // Required
  head([
    'title' =>'Keyboard metadata API 1.0 Specification',
    'css' => ['template.css','prism.css'],
    'showMenu' => true
  ]);
?>
<h2>Keyboard metadata API 1.0 Specification</h2>

<p>Documents the <a href='https://api.keyman.com/keyboard'>api.keyman.com/keyboard/<i>keyboard_id</i></a> endpoint.</p>

<h3>Parameters</h3>

<dl>
  <dt>keyboard_id</dt>
  <dd>The identifier of the keyboard to return</dd>
</dl>

<h3>Results</h3>

<p>A valid response will return a <a href='../../keyboard_info'><code>keyboard_info</code></a> object.</p>

<h3>Version History</h3>

<dl>
  <dt>1.0, 2018-01-01</dt>
  <dd>Initial version</dd>
</dl>
