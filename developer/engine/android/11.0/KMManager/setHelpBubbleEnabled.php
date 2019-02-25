<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'setHelpBubbleEnabled';
    $param1 = 'newValue';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>boolean %s</var>)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.setHelpBubbleEnabled()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> enables or disables the help bubble.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>Set <code>true</code> to enable the help bubble, <code>false</code> to disable.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to enable or disable the help bubble which displays "Tap here to change keyboard" over the 'Globe' key if the user has never used it yet. By default it is enabled. This method only works for the in-app keyboard since the system-wide keyboard never displays a help bubble.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    KMManager.setHelpBubbleEnabled(false);
    // Help bubble is now disabled
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="isHelpBubbleEnabled.php">isHelpBubbleEnabled()</code></a></li>
</ul>
