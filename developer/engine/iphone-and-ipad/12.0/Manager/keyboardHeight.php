<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'keyboardHeight';
    $methodSyntax1 = sprintf('%s.%s', $class, $method);
    head(['title' => $class.'.'.$method]);
?>

<h1>Manager.KeyboardHeight</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method ?></strong></code> method returns the keyboard height,
    based on whether the keyboard is a system keyboard and the device orientation.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax1 ?></code></pre>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns the keyboard height (CGFloat)</p>

<h2 id="Description" name="Description">Description</h2>
<p>This syntax can be used for getting the keyboard height.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example 1: Using <code><?php echo $method ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method ?></code>:</p>
<pre class="language-swift"><code>let kbWidth = keyboardWidth
let kbHeight = keyboardHeight
keymanWeb.frame = CGRect(x: 0.0, y: 0.0, width: kbWidth, height: kbHeight + 1000)
</code></pre>

<br><hr>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="addKeyboard.php"><code>addKeyboard()</code></a></li>
 <li><a href="switchToNextKeyboard.php"><code>switchToNextKeyboard()</code></a></li>
</ul>
