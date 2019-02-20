<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'getFontTypeface';
    $param1 = 'context';
    $param2 = 'fontFilename';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Context %s</var>, <var>String %s</var>)', $class, $method, $param1, $param2);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.getFontTypeface()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method creates a new typeface from the specified font filename.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The context.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>The filename of the font.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns the new typeface created from font file with specified filename if it exists, <code>null</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to create a new typeface from the font file with specified filename if it exists in <code>assets/fonts/</code> folder.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    KMTextView textView = (KMTextView) findViewById(R.id.kmTextView);
    Typeface fontTypeface = KMManager.getFontTypeface(this, "aava1.ttf");
    textView.setTypeface(fontTypeface);
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="getKeyboardTextFontTypeface.php"><code>getKeyboardTextFontTypeface()</code></a></li>
 <li><a href="getKeyboardOskFontTypeface.php"><code>getKeyboardOskFontTypeface()</code></a></li>
 <li><a href="getKeyboardTextFontFilename.php"><code>getKeyboardTextFontFilename()</code></a></li>
 <li><a href="getKeyboardOskFontFilename.php"><code>getKeyboardOskFontFilename()</code></a></li>
</ul>
