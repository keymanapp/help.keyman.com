<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'removeKeyboardDownloadEventListener';
    $param1 = 'listener';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>OnKeyboardDownloadEventListener %s</var>)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.removeKeyboardDownloadEventListener()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method removes the specified listener from the list of keyboard download event listeners.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The listener to be removed.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to remove the listener to stop receiving keyboard download event notifications. The listener must be removed once you finished with it.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>	@Override
    protected void onPause() {
        super.onPause();
        // ...
        KMManager.removeKeyboardDownloadEventListener(this);
        // ...
    }
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="addKeyboardDownloadEventListener.php" title="Title."><code>addKeyboardDownloadEventListener()</code></a></li>
</ul>
