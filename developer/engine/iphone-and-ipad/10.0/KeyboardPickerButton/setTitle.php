<?php
require_once('includes/template.php');
$class = 'KeyboardPickerButton';
$method = 'setTitle';
$param1 = 'title';
$param2 = 'state';
$methodSyntax = sprintf('%s.%s(%s: String, %s: UIControlState)', $class, $method, $param1, $param2);
head(['title' => $class.'.'.$method.'()']);
?>

<h1>KeyboardPickerButton.setTitle()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method sets the title of the keyboard picker button.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?= $param1 ?></code></dt>
    <dd>Title for the button.</dd>
</dl>
<dl>
    <dt><code><?= $param2 ?></code></dt>
    <dd>State of the button</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Clear images if the developer sets a title.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>let kbButton = KeyboardPickerButton(presentingVC: self)
kbButton.setTitle(item.title, for: .normal)
</code></pre>

