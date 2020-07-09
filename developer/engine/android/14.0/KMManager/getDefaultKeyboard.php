<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'getDefaultKeyboard';
    $methodSyntax = sprintf('<var>%s</var>.%s()', $class, $method);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.getDefaultKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method returns the default fallback keyboard which will
  be used if the app never adds a keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns the Keyboard information of the default fallback keyboard. If
  <a href='setDefaultKeyboard.php'>setDefaultKeyboard()</a> is never called, this method returns keyboard info for the
  <code>sil_euro_latin</code> keyboard package.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to get the default fallback keyboard. This is for apps that could start with an empty keyboards list
  when the user attempts to use the <code>KEYBOARD_TYPE_INAPP</code> or <code>KEYBOARD_TYPE_SYSTEM</code> keyboard.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    Keyboard kbd = KMManager.getDefaultKeyboard();
    KMManager.setKeyboard(kbd);
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="setDefaultKeyboard.php" title="Title."><code>setDefaultKeyboard()</code></a></li>
</ul>
