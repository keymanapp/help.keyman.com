<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'getKeyboardsList';
    $param1 = 'context';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Context %s</var>)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.getKeyboardsList()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method returns the keyboards list.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The context.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns keyboards list as <code>List&lt;Keyboard&gt;</code> if it exists, <code>null</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to get details of all keyboard's in keyboards menu.</p>

<br><hr>

<h2 id="Syntax" name="Syntax">Syntax (Deprecated)</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
  <dt><code><?php echo $param1 ?></code></dt>
  <dd>The context.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>(Deprecated) Returns keyboards list as <code>ArrayList&lt;HashMap&lt;String key, String value&gt;&gt;</code> if it exists, <code>null</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to get details of all keyboard's in keyboards menu.</p>

<br><hr>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    List&lt;Keyboard&gt; keyboardsList = KMManager.getKeyboardsList(this);
    if ((keyboardsList != null) && keyboardsList.size() < 2) {
        // Add another Keyboard
        Keyboard kbd = new Keyboard(...);
        KMManager.addKeyboard(kbd);
    }
</code></pre>

<h2 id="History" name="History">History</h2>

<p>Added syntax for returning list of Keyboard type in Keyman Engine for Android 14.0.</p>
<p>Deprecated syntax for returning the list of HashMap&lt;String key, String value&gt; in Keyman Engine for Android 14.0</p>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="getCurrentKeyboardIndex.php"><code>getCurrentKeyboardIndex()</code></a></li>
 <li><a href="getCurrentKeyboardInfo.php"><code>getCurrentKeyboardInfo()</code></a></li>
 <li><a href="getKeyboardIndex.php"><code>getKeyboardIndex()</code></a></li>
 <li><a href="getKeyboardInfo.php"><code>getKeyboardInfo()</code></a></li>
 <li><a href="keyboardExists.php"><code>keyboardExists()</code></a></li>
</ul>
