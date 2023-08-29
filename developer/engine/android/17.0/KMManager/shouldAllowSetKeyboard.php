<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'shouldAllowSetKeyboard';
    $methodSyntax = sprintf('<var>%s</var>.%s()', $class, $method);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.shouldAllowSetKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method returns whether Keyman Engine allows setting a keyboard other than the default keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns <code>true</code> if Keyman Engine allows setting a keyboard, <code>false</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to check if Keyman Engine allows setting a keyboard other than the default keyboard.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    if (KMManager.shouldAllowSetKeyboard()) {
        // setting a keyboard is allowed
    }
    else {
        // setting a keyboard is not allowed
    }
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="setShouldAllowSetKeyboard"><code>setShouldAllowSetKeyboard</code></a></li>
</ul>
