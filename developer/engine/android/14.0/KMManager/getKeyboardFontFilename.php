<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'getKeyboardFontFilename';
    $methodSyntax = sprintf('<var>%s</var>.%s()', $class, $method);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.getKeyboardFontFilename() (Deprecated)</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>(Deprecated) The <code><strong><?php echo $method.'()' ?></strong></code> method returns the selected keyboard's font filename.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns the selected keyboard's font filename as <code>String</code> if it has any, empty string otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to get the font filename of the selected keyboard.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code> String fontFilename = KMManager.getKeyboardFontFilename();
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="getKeyboardFontTypeface.php"><code>getKeyboardFontTypeface()</code></a></li>
 <li><a href="getFontTypeface.php"><code>getFontTypeface()</code></a></li>
</ul>
