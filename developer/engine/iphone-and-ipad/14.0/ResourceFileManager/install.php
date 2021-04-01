<?php
    require_once('includes/template.php');
    $class = 'ResourceFileManager';
    $method = 'install';
    $param1 = 'resourceWithID';
    $param2 = 'from';
    $title = $class.'.shared.'.$method.'()';
    $methodSyntax1 = sprintf('%s.shared.%s(%s: URL, %s: KeymanPackage) throws', $class, $method, $param1, $param2);
    head(['title' => $title]);
?>

<h1>.install()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $method.'()' ?></strong></code> method is used to install resources from opened package files.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
  <dt><code><?= $param1 ?></code></dt>
  <dd>Either a <a href="../LanguageResource/LanguageResourceFullID.php"><code>FullKeyboardID</code></a>
  or a <a href="../LanguageResource/LanguageResourceFullID.php"><code>FullLexicalModelID</code></a>
  corresponding to the resource to be installed from the package.</dd>
  <dt><code><?= $param2 ?></code></dt>
  <dd>The opened package file</dd>
</dl>

<h3 id="Throws" name="Throws">Throws</h3>
<p>May fail if the package does not contain or support the designated resource and language pairing specified
by the resource's ID.</p>

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

<h2 id="History" name="History">History</h2>
Added in Keyman Engine for iPhone and iPad 14.0.

<h2 id="See_also" name="See_also">See also</h2>

<dl>
  <dt><a href="../LanguageResource/LanguageResourceFullID.php"><code>LanguageResourceFullID</code></a></dt>
  <dd>A loaded package file containing one or more keyboards.</dd>
  <dt><code>KeyboardKeymanPackage</code></dt>
  <dd>A loaded package file containing one or more keyboards.</dd>
  <dt><code>LexicalModelKeymanPackage</code></dt>
  <dd>A loaded package file containing a lexical model.</dd>
  <dt><a href="prepareKMPInstall.php"><code>ResourceFileManager.shared.prepareKMPInstall(from:)</code></a></dt>
  <dd>This method is used to open packages for use by <code>install()</code>.</dd>
</dl>
