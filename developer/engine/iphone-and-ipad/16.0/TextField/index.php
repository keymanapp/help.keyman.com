<?php
    require_once('includes/template.php');
    $class = 'TextField';
    $method = 'methodName'; // stub
    $methodSyntax = sprintf('<var>%s</var>.<var>%s</var>()', $class, $method);
    head([
        'title' => $class
    ]);

    // See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array for sample
?>
<h1>TextField class</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <?= $class ?> class provides a UITextField to use with Keyman Engine</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h2 id="Description" name="Description">Description</h2>
<p>The viewController should be set to main view controller to enable keyboard picker</p>

<h2 id="Methods" name="Methods">Methods</h2>

<dl>
    <dt><code><a href='dismissKeyboard'>dismissKeyboard()</a></code></dt>
    <dd>dismisses the keyboard if this textview is the first responder</dd>
</dl>

<dl>
    <dt><code>inputView</code></dt>
    <dd>gets or sets the input view</dd>
</dl>

<dl>
    <dt><code><a href='setKeymanDelegate'>setKeymanDelegate()</a></code></dt>
    <dd>sets the TextFieldDelegate instead of the normal UITextFieldDelegate</dd>
</dl>

<dl>
    <dt><code>text</code></dt>
    <dd>gets or sets the text string</dd>
</dl>
