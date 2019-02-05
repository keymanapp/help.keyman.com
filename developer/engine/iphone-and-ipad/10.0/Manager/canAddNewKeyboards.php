<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'canAddNewKeyboards';
    $methodSyntax = sprintf('%s.%s', $class, $method);
    head([
        'title' => $class.'.'.$method,
    ]);
?>

<h1>Manager.canAddNewKeyboards</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method ?></strong></code> method returns whether adding a new keyboard is enabled in the keyboard picker menu.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns <code>true</code> if adding a new keyboard is enabled, <code>false</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to check if '+' (add new keyboard) button is enabled in the keyboard picker menu.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method ?></code>:</p>
<pre class="language-swift"><code>    if Manager.canAddNewKeyboard {
        // add new keyboard button is enabled
    }
</code></pre>
