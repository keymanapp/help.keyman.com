<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'isHelpBubbleEnabled';
    $methodSyntax = sprintf('<var>%s</var>.%s()', $class, $method);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.isHelpBubbleEnabled() (Deprecated)</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method returns whether the help bubble is enabled.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns <code>true</code> if the help bubble is enabled, <code>false</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to check if the help bubble is enabled. This method only works for the in-app keyboard since the system-wide keyboard never displays a help bubble.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    boolean isHelpBubbleEnabled = KMManager.isHelpBubbleEnabled();
</code></pre>

<h2 id="History" name="History">History</h2>
<p>Deprecated syntax in Keyman Engine for Android 16.0</p>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="setHelpBubbleEnabled"><code>setHelpBubbleEnabled()</code></a>  (Deprecated)</li>
</ul>
