<?php
    require_once('includes/template.php');
    $class = 'ResourceFileManager';
    $method = 'prepareKMPInstall';
    $param1 = 'from';
    $title = $class.'.shared.'.$method.'()';
    $methodSyntax1 = sprintf('%s.shared.%s(%s: URL) throws -> KeymanPackage', $class, $method, $param1);
    head(['title' => $title]);
?>

<h1>.prepareKMPInstall()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $method.'()' ?></strong></code> method imports and parses package files,
making their contents easily accessible for installation.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?= $param1 ?></code></dt>
    <dd>URL to the KMP package.</dd>
</dl>
<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns either a <code>KeyboardKeymanPackage</code> or a <code>LexicalModelKeymanPackage</code>,
depending on which type of resource the .kmp package represents.</p>

<h3 id="Throws" name="Throws">Throws</h3>
<p>May fail if the file specified by the URL does not exist, is not a KMP, or if the KMP is malformed or corrupted.</p>

<h2 id="Description" name="Description">Description</h2>
<p>This syntax can be used for installing resources from a KMP package.</p>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code> to install a keyboard</h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>let packageURL = Bundle.main.url(forResource: "sil_euro_latin", withExtension: "kmp")!
let keyboardID = FullKeyboardID("sil_euro_latin", "fr") // Marks the keyboard for use with French.
do {
  if let keyboardPackage = try ResourceFileManager.shared.prepareKMPInstall(packageURL) as? KeyboardKeymanPackage {
    try ResourceFileManager.shared.install(resourceWithID: keyboardID, from: keyboardPackage)
  } else {
    // Report the error
  }
} catch {
  // Report the error
}
</code></pre>
<p>Note:  the package and keyboard must explicitly support your selected language code.</p>

<h2 id="History" name="History">History</h2>
Added in Keyman Engine for iPhone and iPad 14.0.

<h2 id="See_also" name="See_also">See also</h2>

<dl>
<dt><code>KeyboardKeymanPackage</code></dt>
<dd>A loaded package file containing one or more keyboards.</dd>
<dt><code>LexicalModelKeymanPackage</code></dt>
<dd>A loaded package file containing a lexical model.</dd>
<dt><a href="install"><code>ResourceFileManager.shared.install(resourceWithID:,from:)</code></a></dt>
<dd>This method is used to install specific resources from package files opened by <code>prepareKMPInstall()</code>.</dd>
</dl>
