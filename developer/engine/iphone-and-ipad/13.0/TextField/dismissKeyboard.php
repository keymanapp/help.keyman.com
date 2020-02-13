<?php
require_once('includes/template.php');
$class = 'TextField';
$method = 'dismissKeyboard';
$methodSyntax = sprintf('<var>%s</var>.%s()', $class, $method);
head(['title' => $class.'.'.$method.'()']);
?>

<h1>TextField.dismissKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method dismisses the keyboard if this textfield is the first responder.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h2 id="Description" name="Description">Description</h2>
<p>Use this instead of <var>[resignFirstResponder]</var> as it also resigns the Keyman keyboard's responders.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>TextField.dismissKeyboard()
</code></pre>

