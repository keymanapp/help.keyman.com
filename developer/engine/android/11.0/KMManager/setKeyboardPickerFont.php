<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'setKeyboardPickerFont';
    $param1 = 'typeface';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Typeface %s</var>)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.setKeyboardPickerFont()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> sets the font for the keyboard picker menu.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The font</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to set a font for the keyboard picker menu.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    KMManager.setKeyboardPickerFont(Typeface.createFromAsset(getAssets(), "fonts/custom_font.ttf"));
</code></pre>
