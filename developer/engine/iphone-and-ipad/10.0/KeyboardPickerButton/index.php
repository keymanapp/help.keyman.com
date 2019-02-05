<?php
    require_once('includes/template.php');
    $class = 'KeyboardPickerButton';
    $method = 'methodName'; // stub
    $methodSyntax = sprintf('%s.%s()', $class, $method);
    head([
        'title' => $class
    ]);

    // See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array for sample
?>
<h1>KeyboardPickerButton class</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <strong><?= $class ?></strong> class provides a button that triggers the language picker menu</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h2 id="Description" name="Description">Description</h2>
<p>Opens a view for the user to switch keyboards or download new keyboards.</p>

<h2 id="Methods" name="Methods">Methods</h2>

<dl>
    <dt><code><a href='setTitle.php'>setTitle()</a></code></dt>
    <dd>clear images if the developer sets a title</dd>
</dl>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $class.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $class . '()' ?></code>:</p>
<pre class="language-swift"><code>let kbButton = KeyboardPickerButton(presentingVC: self)
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
    <li><a href="../KeyboardPickerBarButtonItem/"><code>KeyboardPickerBarButtonItem()</code></a></li>
</ul>
