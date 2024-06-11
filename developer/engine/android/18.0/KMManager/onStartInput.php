<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'onStartInput';
    $param1 = 'attribute';
    $param2 = 'restarting';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>EditorInfo %s</var>, <var>boolean %s</var>)', $class, $method, $param1, $param2);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.onStartInput()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method performs necessary actions in an InputMethodService's <code>onStartInput()</code>.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>Description of the type of text being edited.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>Set to true if we are restarting input on the same text field as before.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>To be called from an InputMethodService's <code>onStartInput()</code> method.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>@Override
public void onStartInput(EditorInfo attribute, boolean restarting) {
    // ...
    super.onStartInput(attribute, restarting);
    KMManager.onStartInput(attribute, restarting);
    // ...
}
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="createInputView"><code>createInputView()</code></a></li>
 <li><a href="onConfigurationChanged"><code>onConfigurationChanged()</code></a></li>
 <li><a href="onDestroy"><code>onDestroy()</code></a></li>
</ul>
