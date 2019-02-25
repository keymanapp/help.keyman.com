<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'getKeyboardInfo';
    $param1 = 'context';
    $param2 = 'index';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Context %s</var>, <var>int %s</var>)', $class, $method, $param1, $param2);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.getKeyboardInfo()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method returns information dictionary of the specified keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The context.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>0-based position of the keyboard in keyboards list.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns an information dictionary of the specified keyboard with keys and values defined as <code>HashMap&lt;String key, String value&gt;</code>.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to get details of the keyboard at given position in keyboards list. Details include keyboard ID, language ID, keyboard name, language name and fonts.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    HashMap&lt;String, String&gt; keyboardInfo = KMManager.getKeyboardInfo(this, 1);
    if (keyboardInfo != null) {
        String keyboardId = keyboardInfo.get(KMManager.KMKey_KeyboardID);
        String languageId = keyboardInfo.get(KMManager.KMKey_LanguageID);
        String keyboardName = keyboardInfo.get(KMManager.KMKey_KeyboardName);
        String languageName = keyboardInfo.get(KMManager.KMKey_LanguageName);
        String font = keyboardInfo.get(KMManager.KMKey_Font);
        String oskFont = keyboardInfo.get(KMManager.KMKey_OskFont);
        //
    }
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="getCurrentKeyboardIndex.php"><code>getCurrentKeyboardIndex()</code></a></li>
 <li><a href="getCurrentKeyboardInfo.php"><code>getCurrentKeyboardInfo()</code></a></li>
 <li><a href="getKeyboardIndex.php"><code>getKeyboardIndex()</code></a></li>
 <li><a href="getKeyboardsList.php"><code>getKeyboardsList()</code></a></li>
 <li><a href="keyboardExists.php"><code>keyboardExists()</code></a></li>
</ul>
