<?php
require_once('includes/template.php');
$class = 'TextField';
$method = 'setKeymanDelegate';
$param1 = 'keymanDelegate';
$methodSyntax = sprintf('<var>%s</var>.%s(<var>%s</var>: TextFieldDelegate)', $class, $method, $param1);
head(['title' => $class.'.'.$method.'()']);
?>

<h1>TextField.setKeymanDelegate()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method sets the delegate.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?= $param1 ?></code></dt>
    <dd>Keyman Delegate.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Use this TextFieldDelegate instead of the normal UITextFieldDelegate.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>textField1 = TextField()
setTextFieldStyle(textField1)
textField1.setKeymanDelegate(self)
</code></pre>

