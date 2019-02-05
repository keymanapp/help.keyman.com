<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'switchToNextKeyboard';
    $methodSyntax = sprintf('%s.%s()', $class, $method);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.switchToNextKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method switches to the next keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns the index of the newly selected keyboard. If there's no keyboard to switch to, returns <code>nil</code>.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to switch to next keyboard in the keyboards list. If the next keyboard does not exists, then it loads the first keyboard in the keyboards list.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>Manager.shared.switchToNextKeyboard()
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="setKeyboard.php"><code>setKeyboard()</code></a></li>
</ul>
