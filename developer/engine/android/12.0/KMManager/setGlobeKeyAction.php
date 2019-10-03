<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'setGlobeKeyAction';
    $param1 = 'kbType';
    $param2 = 'action';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>KeyboardType %s</var>, <var>int %s</var>)', $class, $method, $param1, $param2);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.setGlobeKeyAction()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method sets an action type for the 'Globe' key.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
<dd>The keyboard type. <code>KEYBOARD_TYPE_INAPP</code> or <code>KEYBOARD_TYPE_SYSTEM</code>.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>The action type. <code>GLOBE_KEY_ACTION_SHOW_MENU</code>, <code>GLOBE_KEY_ACTION_SWITCH_TO_NEXT_KEYBOARD</code> or <code>GLOBE_KEY_ACTION_DO_NOTHING</code>.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to set an action type for the 'Globe' key. By default, the action type is set to <code>GLOBE_KEY_ACTION_SHOW_MENU</code> which displays the keyboard picker menu.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    // Tapping 'Globe' key will switch to the next keyboard
    KMManager.setGlobeKeyAction(KeyboardType.KEYBOARD_TYPE_SYSTEM, GlobeKeyAction.GLOBE_KEY_ACTION_SWITCH_TO_NEXT_KEYBOARD);
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="getGlobeKeyAction.php" title="Title."><code>getGlobeKeyAction()</code></a></li>
</ul>
