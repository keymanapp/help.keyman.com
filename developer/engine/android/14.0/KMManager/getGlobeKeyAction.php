<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'getGlobeKeyAction';
    $param1 = 'kbType';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>KeyboardType %s</var>)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.getGlobeKeyAction()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method returns the action type of the 'Globe' key.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
<dd>The keyboard type. <code>KEYBOARD_TYPE_INAPP</code> or <code>KEYBOARD_TYPE_SYSTEM</code>.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns the action type of the 'Globe' key as one of <code>GLOBE_KEY_ACTION_SHOW_MENU</code>,
  <code>GLOBE_KEY_ACTION_SWITCH_TO_NEXT_KEYBOARD</code>, <code>GLOBE_KEY_ACTION_ADVANCE_TO_NEXT_SYSTEM_KEYBOARD</code>,  or
  <code>GLOBE_KEY_ACTION_DO_NOTHING</code>.</dd></p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to get the action type of the 'Globe' key.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    GlobeKeyAction action = KMManager.getGlobeKeyAction(KeyboardType.KEYBOARD_TYPE_SYSTEM);
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="setGlobeKeyAction.php" title="Title."><code>setGlobeKeyAction()</code></a></li>
</ul>
