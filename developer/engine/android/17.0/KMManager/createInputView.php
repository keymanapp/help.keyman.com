<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'createInputView';
    $param1 = 'inputMethodService';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>InputMethodService %s</var>)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.createInputView()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> creates the input view to be used in InputMethodService.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The InputMethodService.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns the input view created.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to create the input view in response to an InputMethodService's <code>onCreateInputView()</code> method.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>private static View inputView = null;

@Override
public View onCreateInputView() {
    // create the inputView only once
    if (inputView == null)
        inputView = KMManager.createInputView(this);

    // we must remove the inputView from its previous parent before returning it
    ViewGroup parent = (ViewGroup) inputView.getParent();
    if (parent != null)
        parent.removeView(inputView);

    return inputView;
}
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="onStartInput"><code>onStartInput()</code></a></li>
 <li><a href="onConfigurationChanged"><code>onConfigurationChanged()</code></a></li>
 <li><a href="onDestroy"><code>onDestroy()</code></a></li>
</ul>
