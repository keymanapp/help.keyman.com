<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'method';
    $param1 = 'param1';
    $param2 = 'param2';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Param %s</var>, <var>Param %s</var>)', $class, $method, $param1, $param2);
    head(['title' => $class.'.'.$method.'()']);
?>

<!--
<h1>KMManager.sample_template()</h1>
-->

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method does . . .</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>Param details.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>Param details.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Details of return value if any</p>

<h2 id="Description" name="Description">Description</h2>
<p>Description.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>//Code here
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href=""><code>...</code></a></li>
</ul>
