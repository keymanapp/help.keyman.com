<?php
    require_once('includes/template.php');
    $class = '';
    $event = 'onKeyboardDismissed';
    $eventSyntax = sprintf('public void %s()', $event);
    head(['title' => $event.'()']);
?>

<h1>onKeyboardDismissed()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $event.'()' ?></strong></code> event is called when the keyboard has been dismissed.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $eventSyntax ?></code></pre>

<h2 id="Description" name="Description">Description</h2>
<p>Implement this method to handle keyboard dismissed event.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $event.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $event.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    @Override
    public void onKeyboardDismissed() {
        // handle keyboard dismissed event here
    }
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="onKeyboardChanged.php" title="Title."><code>onKeyboardChanged()</code></a></li>
 <li><a href="onKeyboardLoaded.php" title="Title."><code>onKeyboardLoaded()</code></a></li>
 <li><a href="onKeyboardShown.php" title="Title."><code>onKeyboardShown()</code></a></li>
</ul>
