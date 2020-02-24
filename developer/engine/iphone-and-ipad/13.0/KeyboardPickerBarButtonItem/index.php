<?php
    require_once('includes/template.php');
    $class = 'KeyboardPickerBarButtonItem';
    $param1 = 'presentingVC';
    $methodSyntax = sprintf('%s(%s: UIViewController)', $class, $param1);
    head(['title' => "$class class"]);
    
    // See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array for sample
?>
<h1>KeyboardPickerBarButtonItem class</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Returns a UIBarButtonItem that will display the keyboard picker when tapped</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?= $param1 ?></code></dt>
    <dd>View controller to handle the keyboard picker modes.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Opens a view for the user to switch keyboards or download new keyboards.</p>
<p>Since the keyboard picker is modal, a UIViewController must be supplied to display it.
    The button has default images for normal and landscape orientation, and can overridden with other images or a title.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $class.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $class . '()' ?></code>:</p>
<pre class="language-swift"><code>let kbBarButton = KeyboardPickerBarButtonItem(presentingVC: self)
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
    <li><a href="../KeyboardPickerButton/"><code>KeyboardPickerButton()</code></a></li>
</ul>
