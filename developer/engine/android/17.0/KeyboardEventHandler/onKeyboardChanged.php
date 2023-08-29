<?php
    require_once('includes/template.php');
    $class = '';
    $event = 'onKeyboardChanged';
    $param1 = 'newKeyboard';
    $eventSyntax = sprintf('public void %s(<var>String %s</var>)', $event, $param1);
    head(['title' => $event.'()']);
?>

<h1>onKeyboardChanged()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $event.'()' ?></strong></code> event is called when another keyboard has been set.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $eventSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
<dd>New keyboard identifier as languageID_keyboardID (e.g. eng_us).</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Implement this method to handle keyboard changed event.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $event.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $event.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    @Override
    public void onKeyboardChanged(String newKeyboard) {
        // handle keyboard changed event here
    }
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="onKeyboardDismissed" title="Title."><code>onKeyboardDismissed()</code></a></li>
 <li><a href="onKeyboardLoaded" title="Title."><code>onKeyboardLoaded()</code></a></li>
 <li><a href="onKeyboardShown" title="Title."><code>onKeyboardShown()</code></a></li>
</ul>
