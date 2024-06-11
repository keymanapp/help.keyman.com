<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'getCurrentKeyboardInfo';
    $param1 = 'context';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Context %s</var>)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.getCurrentKeyboardInfo()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method returns keyboard information of the current keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The context.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns the current keyboard information of <code>Keyboard</code> type.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to get details of the currently selected keyboard. Details include package ID, keyboard ID, language ID, keyboard name, language name and fonts.</p>

<br><hr>

<h2 id="Syntax" name="Syntax">Syntax (Deprecated)</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
  <dt><code><?php echo $param1 ?></code></dt>
  <dd>The context.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>(Deprecated) Returns an information dictionary of the current keyboard with keys and values defined as <code>HashMap&lt;String key, String value&gt;</code>.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to get details of the currently selected keyboard. Details include keyboard ID, language ID, keyboard name, language name and fonts.</p>

<br><hr>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    Keyboard keyboardInfo = KMManager.getCurrentKeyboardInfo(this);
    if (keyboardInfo != null) {
        String packageID = keyboardInfo.getPackageID();
        String keyboardId = keyboardInfo.getKeyboardID();
        String keyboardName = keyboardInfo.getKeyboardName();
        String languageId = keyboardInfo.getLanguageID();
        String languageName = keyboardInfo.getLanguageName();
        String version = keyboardInfo.getVersion();
        String font = keyboardInfo.getFont();
        String oskFont = keyboardInfo.getOSKFont();
        //
    }
</code></pre>

<h2 id="History" name="History">History</h2>
<p>Added syntax for returning Keyboard type in Keyman Engine for Android 14.0.</p>
<p>Deprecated syntax for returning HashMap&lt;String key, String value&gt; in Keyman Engine for Android 14.0</p>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="getCurrentKeyboardIndex"><code>getCurrentKeyboardIndex()</code></a></li>
 <li><a href="getKeyboardIndex"><code>getKeyboardIndex()</code></a></li>
 <li><a href="getKeyboardInfo"><code>getKeyboardInfo()</code></a></li>
 <li><a href="getKeyboardsList"><code>getKeyboardsList()</code></a></li>
 <li><a href="keyboardExists"><code>keyboardExists()</code></a></li>
</ul>
