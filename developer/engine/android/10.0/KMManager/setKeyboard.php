<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'setKeyboard';
    $param1 = 'keyboardID';
    $param2 = 'languageID';
    $param3 = 'keyboardName';
    $param4 = 'languageName';
    $param5 = 'kFont';
    $param6 = 'kOskFont';
    $param11 = 'context';
    $param22 = 'position';
    $methodSyntax1 = sprintf('<var>%s</var>.%s(<var>String %s</var>, <var>String %s</var>)', $class, $method, $param1, $param2);
    $methodSyntax2 = sprintf('<var>%s</var>.%s(<var>String %s</var>, <var>String %s</var>, <var>String %s</var>, <var>String %s</var>, <var>String %s</var>, <var>String %s</var>)', $class, $method, $param1, $param2, $param3, $param4, $param5, $param6);
    $methodSyntax3 = sprintf('<var>%s</var>.%s(<var>Context %s</var>, <var>int %s</var>)', $class, $method, $param11, $param22);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.setKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method sets the keyboard to be used.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax1 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>ID of the keyboard.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>ID of the associated language.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns <code>true</code> if the keyboard was set successfully, <code>false</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>This syntax can be used for setting a keyboard which is available on the Keyman server. Make sure language list is displayed (see <a href="showLanguageList.php"><code>showLanguageList()</code></a>) at least once before using this syntax, otherwise it may fail to set the keyboard properly. Do not use this syntax to set a custom keyboard.</p>

<br><hr>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax2 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
<dt><code><?php echo $param1 ?></code></dt>
<dd>ID of the keyboard.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>ID of the associated language.</dd>
<dt><code><?php echo $param3 ?></code></dt>
<dd>Name of the keyboard.</dd>
<dt><code><?php echo $param4 ?></code></dt>
<dd>Name of the associated language.</dd>
<dt><code><?php echo $param5 ?></code></dt>
<dd>Filename or description of the font to type with the keyboard. Can be <code>null</code> or empty string.</dd>
<dt><code><?php echo $param6 ?></code></dt>
<dd>Filename or description of the font displayed on the keyboard. Can be <code>null</code> or empty string.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns <code>true</code> if the keyboard was set successfully, <code>false</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>This syntax can be used to set a keyboard which is either downloaded or included in the <code>assets/languages/</code> folder.</p>

<br><hr>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax3 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
<dt><code><?php echo $param11 ?></code></dt>
<dd>The context.</dd>
<dt><code><?php echo $param22 ?></code></dt>
<dd>0-based position of the keyboard in the keyboards list.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns <code>true</code> if the keyboard was set successfully, <code>false</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this syntax to set a keyboard which has already been added into the keyboards list.</p>

<br><hr>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example 1: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    // Setting a Keyman keyboard
    KMManager.setKeyboard("EuroLatin2", "en");
</code></pre>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example 2: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    // Setting a custom keyboard which exists in assets/languages/
    KMManager.setKeyboard("tamil99m", "ta", "Tamil 99M", "Tamil", "aava1.ttf", "aava1.ttf");
</code></pre>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example 3: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    // Setting a custom keyboard which exists in keyboards list
    int kbIndex = KMManager.getKeyboardIndex(this, "tamil99m", "ta");
    KMManager.setKeyboard(this, kbIndex);
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="addKeyboard.php"><code>addKeyboard()</code></a></li>
 <li><a href="switchToNextKeyboard.php"><code>switchToNextKeyboard()</code></a></li>
</ul>
