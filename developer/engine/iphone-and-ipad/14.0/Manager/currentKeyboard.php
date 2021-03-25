<?php
require_once('includes/template.php');
$class = 'Manager';
$method = 'currentKeyboard';
$methodSyntax = sprintf('%s.%s', $class, $method);
head(['title' => $class.'.'.$method]);
?>

<h1>Manager.currentKeyboard</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method ?></strong></code> method returns info for the current keyboard, if its set.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns the keyboard information <code>InstallableKeyboard</code>.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to get the current keyboard information.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method ?></code>:</p>
<pre class="language-swift"><code>    let keyboardInfo = Manager.shared.currentKeyboard
    let currentKeyboardId = keyboardInfo?.id ?? Defaults.keyboard.id
</code></pre>
