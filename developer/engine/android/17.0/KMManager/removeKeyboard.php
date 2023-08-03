<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'removeKeyboard';
    $param1 = 'context';
    $param2 = 'position';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Context %s</var>, <var>int %s</var>)', $class, $method, $param1, $param2);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.removeKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method removes the keyboard at specified position from the keyboards list.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The context.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>0-based position of the keyboard in the keyboards list.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns <code>true</code> if the keyboard was removed successfully, <code>false</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to remove a keyboard from the keyboards list. If the position is invalid, it will be ignored and the method will return <code>false</code> without altering the keyboards list.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    // Remove the second keyboard in the list
    KMManager.removeKeyboard(this, 1);
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="addKeyboard"><code>addKeyboard()</code></a></li>
</ul>
