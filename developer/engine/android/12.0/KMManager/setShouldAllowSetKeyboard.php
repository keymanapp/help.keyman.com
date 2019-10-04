<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'setShouldAllowSetKeyboard';
    $param1 = 'value';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>boolean %s</var>)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.setShouldAllowSetKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method sets whether Keyman Engine allows setting a keyboard other than the default keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>If <code>false</code>, Keyman Engine will not allow setting a keyboard.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to enable or disable setting a keyboard other than the default keyboard. If set to <code>false</code> Keyman Engine will immediately load the default keyboard, and ignore calls to setKeyboard method. It is particularly useful if used with Google Play Licensing service in order to put the Keyman on-screen keyboard in a locked state if the paid app is unlicensed.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    // Put Keyman on-screen keyboard in locked state if the app is unlicensed.
    KMManager.setShouldAllowSetKeyboard(false);
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="shouldAllowSetKeyboard.php"><code>shouldAllowSetKeyboard</code></a></li>
</ul>
