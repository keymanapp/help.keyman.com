<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'getVersion';
    $methodSyntax = sprintf('<var>%s</var>.%s()', $class, $method);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.getVersion()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method returns the version number of Keyman Engine.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns Keyman Engine version number as <code>String</code>.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to get the version number of Keyman Engine.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    String version = KMManager.getVersion();
</code></pre>
