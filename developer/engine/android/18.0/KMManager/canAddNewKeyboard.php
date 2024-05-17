<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'canAddNewKeyboard';
    $methodSyntax = sprintf('<var>%s</var>.%s()', $class, $method);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.canAddNewKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method returns whether adding a new keyboard is enabled.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns <code>true</code> if adding a new keyboard is enabled, <code>false</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to check if additional keyboards can be added.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    Keyboard kbInfo = ...; // Keyboard information
    if (KMManager.canAddNewKeyboard()) {
        KMManager.addKeyboard(this, kbInfo);
    }
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
  <li><a href="canRemoveKeyboard"><code>canRemoveKeyboard</code></a></li>
  <li><a href="setCanAddNewKeyboard"><code>setCanAddNewKeyboard</code></a></li>
</ul>
