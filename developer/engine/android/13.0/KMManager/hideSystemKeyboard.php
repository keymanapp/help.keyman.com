<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'hideSystemKeyboard';
    $methodSyntax = sprintf('<var>%s</var>.%s()', $class, $method);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.hideSystemKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method hides the system OSK.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to hide the system OSK. A common usage is to prevent your app from displaying both in-app OSK and the system OSK.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>
protected void onResume() {
  super.onResume();
  KMManager.onResume();
  KMManager.hideSystemKeyboard();
  // ...
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="onResume.php"><code>onResume()</code></a></li>
</ul>
