<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'dismissKeyboardPicker';
    $param1 = 'viewController';
    $methodSyntax1 = sprintf('%s.%s(%s: UIViewController)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.dismissKeyboardPicker()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $method.'()' ?></strong></code> method hides the keyboard picker.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?= $param1 ?></code></dt>
    <dd>View controller.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>This dismisses the language list.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method ?></code>:</p>
<pre class="language-swift"><code>if !_isDoneButtonEnabled {
  Manager.shared.dismissKeyboardPicker(self)
}
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
    <li><a href="showKeyboardPicker"><code>showKeyboardPicker()</code></a></li>
</ul>

