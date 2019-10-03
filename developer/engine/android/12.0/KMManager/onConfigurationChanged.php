<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'onConfigurationChanged';
    $param1 = 'newConfig';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Configuration %s</var>)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.onConfigurationChanged()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method performs necessary actions in an InputMethodService's <code>onConfigurationChanged()</code>.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The new device configuration.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>To be called from an InputMethodService's <code>onConfigurationChanged()</code> method.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>@Override
public void onConfigurationChanged(Configuration newConfig) {
    super.onConfigurationChanged(newConfig);
    KMManager.onConfigurationChanged(newConfig);
    // ...
}
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="createInputView.php"><code>createInputView()</code></a></li>
 <li><a href="onStartInput.php"><code>onStartInput()</code></a></li>
 <li><a href="onDestroy.php"><code>onDestroy()</code></a></li>
</ul>
