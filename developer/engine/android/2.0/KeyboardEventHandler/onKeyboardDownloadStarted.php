<?php
    require_once('includes/template.php');
    $class = '';
    $event = 'onKeyboardDownloadStarted';
    $param1 = 'keyboardInfo';
    $eventSyntax = sprintf('public void %s(<var>HashMap&ltString key, String value&gt %s</var>)', $event, $param1);
    head(['title' => $event.'()']);
?>

<h1><?php echo $event.'()' ?></h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $event.'()' ?></strong></code> event is called when a keyboard download has started.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $eventSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
<dd>The information dictionary of the keyboard with keys and values defined as <code>HashMap&ltString key, String value&gt</code></code>.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Implement this method to handle keyboard download started event.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $event.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $event.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    @Override
    public void onKeyboardDownloadStarted(HashMap&ltString key, String value&gt keyboardInfo) {
        // handle keyboard download started event here
    }
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="onKeyboardDownloadFinished.php" title="Title."><code>onKeyboardDownloadFinished()</code></a></li>
</ul>
