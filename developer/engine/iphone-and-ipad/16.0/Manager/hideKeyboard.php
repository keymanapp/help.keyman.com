<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'hideKeyboard';
    $methodSyntax1 = sprintf('%s.%s()', $class, $method);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.hideKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $method.'()' ?></strong></code> method hides the in-app OSK.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h2 id="Description" name="Description">Description</h2>
<p>A common usage is to hide the in-app OSK so that it does not obscure part of an app's dismissible popup notifications or windows.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method ?></code>:</p>
<pre class="language-swift"><code>Manager.shared.hideKeyboard()
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
    <li><a href="showKeyboard"><code>showKeyboard()</code></a></li>
</ul>

