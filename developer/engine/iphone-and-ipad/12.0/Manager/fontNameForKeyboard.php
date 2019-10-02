<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'fontNameForKeyboard';
    $param1 = 'fullID';
    $methodSyntax1 = sprintf('%s.%s(%s: FullKeyboardID)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.fontNameForKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $method.'()' ?></strong></code> method returns the font name for the given keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?= $param1 ?></code></dt>
    <dd>Full ID of the keyboard.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns <code>String</code> of the font name, <code>nil</code> if the keyboard doesn't have a font.</p>

<h2 id="Description" name="Description">Description</h2>
<p>This syntax can be used for getting the font name of a keyboard.</p>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example 1: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>let fontName: String?
if let id = Manager.shared.currentKeyboardID {
  fontName = Manager.shared.fontNameForKeyboard(withFullID: id)
} else {
  fontName = nil
}
</code></pre>
