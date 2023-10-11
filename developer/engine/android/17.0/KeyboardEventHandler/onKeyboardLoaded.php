<?php
    require_once('includes/template.php');
    $class = '';
    $event = 'onKeyboardLoaded';
    $param1 = 'keyboardType';
    $eventSyntax = sprintf('public void %s(<var>KeyboardType %s</var>)', $event, $param1);
    head(['title' => $event.'()']);
?>

<h1>onKeyboardLoaded()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $event.'()' ?></strong></code> event is called when the keyboard has been loaded for the first time.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $eventSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
<dd>The keyboard type that has been loaded. <code>KEYBOARD_TYPE_INAPP</code> or <code>KEYBOARD_TYPE_SYSTEM</code>.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Implement this method to handle keyboard loaded event.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $event.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $event.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    @Override
    public void onKeyboardLoaded(KeyboardType keyboardType) {
        // handle keyboard loaded event here
    }
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="onKeyboardChanged" title="Title."><code>onKeyboardChanged()</code></a></li>
 <li><a href="onKeyboardDismissed" title="Title."><code>onKeyboardDismissed()</code></a></li>
 <li><a href="onKeyboardShown" title="Title."><code>onKeyboardShown()</code></a></li>
</ul>
