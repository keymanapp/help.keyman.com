<?php
require_once('includes/template.php');
$class = 'Manager';
$method = 'preloadFiles';
$param1 = 'forKeyboardID';
$param2 = 'urls';
$param3 = 'shouldOverwrite';
$methodSyntax1 = sprintf('%s.%s(%s: keyboardID, %s: [URL], %s: Bool)', $class, $method, $param1, $param2, $param3);
head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.preloadFiles()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method preloads the JS and font files required for a keyboard</p>

<h2 id="Syntax1" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax1 ?></code></pre>

<h3 id="Parameters1" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?php echo $param1 ?></code></dt>
    <dd>The full keyboard ID.</dd>
</dl>
<dl>
    <dt><code><?php echo $param2 ?></code></dt>
    <dd>Array of URLs to the files</dd>
</dl>
<dl>
    <dt><code><?php echo $param3 ?></code></dt>
    <dd><code>true</code> to overwrite exisiting files, <code>false</code> otherwise.</dd>
</dl>

<h2 id="Description1" name="Description">Description</h2>
<p>Use this method to tell Keyman where the required keyboard files are.</p>

<h2 id="Examples1">Examples</h2>

<h3 id="Example1-1” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>let kb = InstallableKeyboard(id: "tamil99m",
     name: "Tamil 99M",
     languageID: "ta",
     languageName: "Tamil",
     version: "1.1",
     isRTL: false,
     font: Font(filename: "aava1.ttf"),
     oskFont: nil,
     isCustom: true)
let urls = [
  Bundle.main.url(forResource: "tamil99m-1.1", withExtension: "js")!,
  Bundle.main.url(forResource: "aava1", withExtension: "ttf")!
]
do {
  try Manager.shared.preloadFiles(forKeyboardID: kb.id, at: urls, shouldOverwrite: true)
} catch {
  print("Error preloading: \(error)")
}
</code></pre>
