<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'setKeyboard';
    $param1 = 'fullID';
    $param2 = 'kb';
    $methodSyntax1 = sprintf('%s.%s(%s: FullKeyboardID)', $class, $method, $param1);
    $methodSyntax2 = sprintf('%s.%s(%s: InstallableKeyboard)', $class, $method, $param2);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.setKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method sets the current keyboard to be used, querying the user's list of keyboards.</p>

<h2 id="Syntax1" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax1 ?></code></pre>

<h3 id="Parameters1" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>ID of the keyboard.</dd>
</dl>

<h3 id="Returns1" name="Returns">Returns</h3>
<p>Returns <code>true</code> if the keyboard was set successfully, <code>false</code> otherwise.</p>

<h2 id="Description1" name="Description">Description</h2>
<p>This syntax can be used for setting a keyboard which is available on the Keyman server. Make sure language list is displayed (see <a href="showLanguageList.php"><code>showLanguageList()</code></a>) at least once before using this syntax, otherwise it may fail to set the keyboard properly. Do not use this syntax to set a custom keyboard.</p>

<h2 id="Examples1">Examples</h2>

<h3 id="Example1-1" name="Example:_Using_method">Example 1: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>    // Setting a Keyman keyboard
    Manager.setKeyboard("sil_euro_latin");
</code></pre>

<br><hr>

<h2 id="Syntax2" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax2 ?></code></pre>

<h3 id="Parameters2" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?php echo $param2 ?></code></dt>
    <dd>Information for the keyboard to set.</dd>
</dl>

<h3 id="Returns2" name="Returns">Returns</h3>
<p>Returns <code>true</code> if the keyboard was set successfully, <code>false</code> otherwise.</p>

<h2 id="Description2" name="Description">Description</h2>
<p>This syntax can be used for setting a keyboard which is available on the Keyman server. Make sure language list is displayed (see <a href="showLanguageList.php"><code>showLanguageList()</code></a>) at least once before using this syntax, otherwise it may fail to set the keyboard properly. Do not use this syntax to set a custom keyboard.</p>

<h2 id="Examples2">Examples</h2>

<h3 id="Example2-1" name="Example:_Using_method">Example 1: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>for keyboard in keyboards {
  Manager.shared.addKeyboard(keyboard)
  Manager.shared.setKeyboard(keyboard)
}
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="addKeyboard.php"><code>addKeyboard()</code></a></li>
 <li><a href="switchToNextKeyboard.php"><code>switchToNextKeyboard()</code></a></li>
</ul>
