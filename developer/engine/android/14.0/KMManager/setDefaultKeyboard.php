<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'setDefaultKeyboard';
    $param1 = 'kbd';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Keyboard %s</var>)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.setDefaultKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method sets the default fallback keyboard which will
  be used if the app never adds a keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
  <dt><code><?php echo $param1 ?></code></dt>
  <dd>The keyboard information. If <code>null</code>, the default fallback keyboard reverts to keyboard info from the
    <code>sil_euro_latin</code> keyboard package.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to set the default fallback keyboard. This is for apps that could start with an empty keyboards list
  when the user attempts to use the <code>KEYBOARD_TYPE_INAPP</code> or <code>KEYBOARD_TYPE_SYSTEM</code> keyboard.</p>

<p>If <code>null</code> keyboard is passed, the default fallback keyboard reverts to keyboard info from the
  <code>sil_euro_latin</code> keyboard package.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>KMManager.setDefaultKeyboard(
    new Keyboard(
        "fv_all",           // default package ID
        "sil_euro_latin",   // default keyboard ID
        "EuroLatin (SIL)",  // default keyboard name
        "en",               // default language ID
        "English",          // default language name
        "1.9.1",            // keyboard version
        null,               // optional path to welcome.htm
        "",                 // optional URL to kmp file
        false,              // new keyboard
        KMManager.KMDefault_KeyboardFont,
        KMManager.KMDefault_KeyboardFont)
);
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="getDefaultKeyboard.php" title="Title."><code>getDefaultKeyboard()</code></a></li>
</ul>
