<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'addKeyboard';
    $param1 = 'context';
    $param2 = 'keyboardInfo';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Context %s</var>, <var>HashMap&lt;String, String&gt; %s</var>)', $class, $method, $param1, $param2);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.addKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method adds a keyboard into the keyboards list.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The context.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>A dictionary of keyboard information with keys and values defined as <code>HashMap&lt;String key, String value&gt;</code>.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns <code>true</code> if the keyboard was added successfully, <code>false</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to include a keyboard in the keyboards list so that it can be selected from the keyboards menu. If the keyboard with same keyboard ID and language ID exists, it updates the existing keyboard info.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    // Add a custom keyboard
    HashMap&lt;String, String&gt; kbInfo = new HashMap&lt;String, String&gt;();
    kbInfo.put(KMManager.KMKey_KeyboardID, "tamil99m");
    kbInfo.put(KMManager.KMKey_LanguageID, "ta");
    kbInfo.put(KMManager.KMKey_KeyboardName, "Tamil 99M");
    kbInfo.put(KMManager.KMKey_LanguageName, "Tamil");
    kbInfo.put(KMManager.KMKey_KeyboardVersion, "1.1");
    kbInfo.put(KMManager.KMKey_Font, "aava1.ttf");
    KMManager.addKeyboard(this, kbInfo);
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="removeKeyboard.php"><code>removeKeyboard()</code></a></li>
</ul>
