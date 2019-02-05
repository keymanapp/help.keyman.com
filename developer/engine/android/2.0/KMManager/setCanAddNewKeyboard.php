<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'setCanAddNewKeyboard';
    $param1 = 'newValue';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>boolean %s</var>)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1><?php echo $class.'.'.$method.'()' ?></h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method sets whether adding a new keyboard is allowed in the keyboard picker menu.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>If <code>false</code>, adding a new keyboard is disabled.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to enable or disable '+' (add new keyboard) button in the keyboard picker menu.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    // Disable add new keyboard button.
    KMManager.setCanAddNewKeyboard(false);
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="canAddNewKeyboard.php"><code>canAddNewKeyboard</code></a></li>
</ul>
