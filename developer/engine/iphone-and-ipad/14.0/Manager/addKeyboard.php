<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'addKeyboard';
    $param1 = 'keyboard';
    $methodSyntax = sprintf('%s.%s(%s: InstallableKeyboard)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.addKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method adds a keyboard into the keyboards list.</p>

<p><strong>Deprecated</strong> in favor of <a href="../ResourceFileManager/install.php">ResourceFileManager.shared.install()</a>, which
automatically includes the functionality of this method.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The keyboard.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to include a keyboard in the keyboards list so that it can be selected from the keyboards menu. If the keyboard with same keyboard ID and language ID exists, it updates the existing keyboard info.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>// Add a custom keyboard
let kb = InstallableKeyboard(id: "tamil99m",
                             name: "Tamil 99M",
                             languageID: "ta",
                             languageName: "Tamil",
                             version: "1.1",
                             isRTL: false,
                             font: Font(filename: "aava1.ttf"),
                             oskFont: nil,
                             isCustom: true)
Manager.shared.addKeyboard(Defaults.keyboard)
Manager.shared.addKeyboard(kb)
</code></pre>

<h2 id="History" name="History">History</h2>
Deprecated in Keyman Engine for iPhone and iPad 14.0.

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="removeKeyboard.php"><code>removeKeyboard()</code></a></li>
</ul>
