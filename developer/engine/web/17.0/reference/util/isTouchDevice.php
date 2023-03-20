<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: isTouchDevice"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="isTouchDevice">isTouchDevice</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Allow external callers (such as UIs) to detect if the active device is considered touch sensitive by KeymanWeb.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<?php
syntax("keyman.util.isTouchDevice();");
params();
returns("boolean", "<code>true</code> if KMW is targetting touch-sensitivity for the device, otherwise <code>false</code>.");
?>
<pre><code>isTouchDevice ...
</code></pre>

<p>Note that in current versions of KeymanWeb this function will return <code>false</code> for touchscreen laptops;
  current touch support is specialized for mobile phones and tablets.
</p>