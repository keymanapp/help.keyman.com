<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'showKeyboard';
    $methodSyntax1 = sprintf('%s.%s()', $class, $method);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.showKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method shows the in-app OSK.</p>

<h2 id="Syntax1" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax1 ?></code></pre>

<h2 id="Description1" name="Description">Description</h2>
<p>Use this method to restore the in-app OSK after it has been hidden with <code>hideKeyboard</code>.
    One common case is to restore the OSK after dismissal of an app's popup notifications or windows.</p>

<h2 id="Examples1">Examples</h2>

<h3 id="Example1-1" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>
    in the Keyman for iPhone and iPad app's "Getting Started" view so that the keyboard doesn't hide the lower options on certain devices</p>
<pre class="language-swift"><code>Manager.shared.showKeyboard()
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="hideKeyboard.php"><code>hideKeyboard()</code></a></li>
</ul>
