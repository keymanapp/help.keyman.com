<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'getKeyboardState';
    $param1 = 'context';
    $param2 = 'keyboardID';
    $param3 = 'languageID';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Context %s</var>, <var>String %s</var>, <var>String %s</var>)', $class, $method, $param1, $param2, $param3);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1><?php echo $class.'.'.$method.'()' ?></h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method returns the specified keyboard's state.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The context.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>ID of the keyboard.</dd>
<dt><code><?php echo $param3 ?></code></dt>
<dd>ID of the associated language.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns the state of the specified keyboard as one of <code>KEYBOARD_STATE_UNDEFINED</code>, <code>KEYBOARD_STATE_NEEDS_DOWNLOAD</code>, <code>KEYBOARD_STATE_NEEDS_UPDATE</code> or <code>KEYBOARD_STATE_UP_TO_DATE</code>.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to get the state of the specified keyboard. It returns <code>KEYBOARD_STATE_UNDEFINED</code> if keyboardID or languageID is not specified (<code>null</code> or empty string). It returns <code>KEYBOARD_STATE_NEEDS_DOWNLOAD</code> if the specified keyboard does not exist in <code>assets/languages/</code> folder. In all other cases it returns either <code>KEYBOARD_STATE_UP_TO_DATE</code> or <code>KEYBOARD_STATE_NEEDS_UPDATE</code>. Note: Only keyboards provided by Keyman may return <code>KEYBOARD_STATE_NEEDS_UPDATE</code>. If you have a custom keyboard, you need to implement your own method to check whether or not it needs update. <code>KEYBOARD_STATE_UP_TO_DATE</code> does not necessarily mean that the keyboard is in fact up to date, you need to make sure language list has recently been displayed (see <a href="showLanguageList.php"><code>showLanguageList()</code></a>) without failure to access Keyman server to be certain.

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    KeyboardState keyboardState = KMManager.getKeyboardState(this, "tamil99m", "tam");
    switch (keyboardState) {
        case KEYBOARD_STATE_NEEDS_DOWNLOAD:
            // We need to download this keyboard or manually add it into assets/languages/ folder.
            break;
        case KEYBOARD_STATE_UP_TO_DATE:
        case KEYBOARD_STATE_NEEDS_UPDATE:
            // We can safely use this keyboard since it exists in assets/languages/ folder.
            break;
        default:
            // Undefined state
    }
</code></pre>
