<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'updateSelectionRange';
    $param1 = 'kbType';
    $param2 = 'selStart';
    $param3 = 'selEnd';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>KeyboardType %s</var>, <var>int %s</var>, <var>int %s</var>)', $class, $method, $param1, $param2, $param3);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.updateSelectionRange()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method updates the selection range of the current context.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>Keyboard type requesting the selection range update. <code>KEYBOARD_TYPE_INAPP</code> or <code>KEYBOARD_TYPE_SYSTEM</code>.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>The new selection start location.</dd>
<dt><code><?php echo $param3 ?></code></dt>
<dd>The new selection end location.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns <code>true</code> if the selection range was updated successfully, <code>false</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to update the selection range of the current context. It must be called in response to InputMethodService's onUpdateSelection method and whenever InputMethodService's onStartInput method has been called. Normally you do not need to call this method for in-app keyboards.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    @Override
    public void onUpdateSelection(int oldSelStart, int oldSelEnd, int newSelStart, int newSelEnd, int candidatesStart, int candidatesEnd) {
        super.onUpdateSelection(oldSelStart, oldSelEnd, newSelStart, newSelEnd, candidatesStart, candidatesEnd);
        KMManager.updateSelectionRange(KMManager.KeyboardType.KEYBOARD_TYPE_SYSTEM, newSelStart, newSelEnd);
    }
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="updateText.php" title="Title."><code>updateText()</code></a></li>
</ul>
