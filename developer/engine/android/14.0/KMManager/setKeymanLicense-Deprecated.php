<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'setKeymanLicense';
    $param1 = 'license';
    $param2 = 'key';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>String %s</var>, <var>String %s</var>)', $class, $method, $param1, $param2);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.setKeymanLicense() (Deprecated)</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>(Deprecated) The <code><strong><?php echo $method.'()' ?></strong></code> method sets the developer license/key pair to unlock Keyman Engine.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>Your developer license for Keyman Engine for Android.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>Your developer key for Keyman Engine for Android.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>You must use this method to set the developer license/key pair before initializing the KMManager. You will receive the license/key pair when you purchase Keyman Engine for Android.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    KMManager.setLicense(“YourLicense”,”YourKey”);
    // Initialize KMManager here after setting the license
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
<li><a href="initialize.php"><code>KMManager.initialize()</code></a></li>
</ul>
