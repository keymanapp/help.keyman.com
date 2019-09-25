<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'removeKeyboard';
    $param1 = 'fullID';
    $param2 = 'index';
    $methodSyntax1 = sprintf('%s.%s(%s: FullKeyboardID)', $class, $method, $param1);
    $methodSyntax2 = sprintf('%s.%s(%s: Int)', $class, $method, $param2);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.removeKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method removes a keyboard from the keyboard list by a
    specified keyboard ID or position.</p>

<h2 id="Syntax1" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax1 ?></code></pre>

<h3 id="Parameters1" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The full keyboard ID.</dd>
</dl>

<h3 id="Returns1" name="Returns">Returns</h3>
<p>Returns <code>true</code> if the keyboard exists and was removed, <code>false</code> otherwise.</p>

<h2 id="Description1" name="Description">Description</h2>
<p>Use this method to remove a keyboard from the list in the keyboard picker. If the keyboard doesn't exist, it will be ignored and the method will return <code>false</code> without altering the keyboards list.</p>

<h2 id="Examples1">Examples</h2>

<h3 id="Example1-1” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>Manager.removeKeyboard('tamil99');
</code></pre>

<br><hr>

<h2 id="Syntax2" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax2 ?></code></pre>

<h3 id="Parameters2" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?php echo $param2 ?></code></dt>
    <dd>Index of keyboard to remove from the keyboards list.</dd>
</dl>

<h3 id="Returns2" name="Returns">Returns</h3>
<p>Returns <code>true</code> if the keyboard exists and was removed, <code>false</code> otherwise.</p>

<h2 id="Description2" name="Description">Description</h2>
<p>Use this method to remove the keyboard at index from the keyboards list. If the keyboard doesn't exist, it will be ignored and the method will return <code>false</code> without altering the keyboards list.</p>

<h2 id="Examples2">Examples</h2>

<h3 id="Example2-1” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>if Manager.shared.removeKeyboard(at: indexPath.row) {
  loadUserKeyboards()
}
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="addKeyboard.php"><code>addKeyboard()</code></a></li>
</ul>
