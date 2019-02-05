<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'onDestroy';
    $methodSyntax = sprintf('<var>%s</var>.%s()', $class, $method);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.onDestroy()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method performs necessary actions in an InputMethodService's <code>onDestroy()</code>.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h2 id="Description" name="Description">Description</h2>
<p>To be called from an InputMethodService's <code>onDestroy()</code> method.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>@Override
public void onDestroy() {
    // ...
    KMManager.onDestroy();
    super.onDestroy();
}
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="createInputView.php"><code>createInputView()</code></a></li>
 <li><a href="onStartInput.php"><code>onStartInput()</code></a></li>
 <li><a href="onConfigurationChanged.php"><code>onConfigurationChanged()</code></a></li>
</ul>
