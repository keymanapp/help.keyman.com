<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'parseKMP';
    $param1 = 'folder';
    $param2 = 'type';
    $methodSyntax1 = sprintf('%s.%s(%s: URL, %s: LanguageResourceType = .keyboard)', $class, $method, $param1, $param2);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.parseKMP()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $method.'()' ?></strong></code> method installs resources for languages
  via ad-hoc distribution found at the <code>folder</code> URL.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?= $param1 ?></code></dt>
    <dd>URL to the KMP package.</dd>
    <dt><code><?= $param2 ?></code></dt>
    <dd>The type of language resource stored in the package.  May be one of the following:
      <code>.keyboard</code>, <code>.lexicalModel</code></dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>This syntax can be used for installing resources from a KMP package.</p>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example 1: Using <code><?php echo $method.'()' ?></code> to install a keyboard</h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>let adhocKbdDir = _adhocDirectory {
  self.window?.rootViewController?.dismiss(animated: true, completion: {
  do {
    try Manager.shared.parseKMP(adhocKbdDir) // assumes .keyboard by default
      self.showSimpleAlert(title: "Success", message: "All keyboards installed successfully.")
    } catch {
      self.showKMPError(error as! KMPError)
  }
}
</code></pre>

<h3 id="Example:_Using_method2" name="Example:_Using_method">Example 2: Using <code><?php echo $method.'()' ?></code> to install a dictionary</code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>let adhocDictDir = _adhocDirectory {
  self.window?.rootViewController?.dismiss(animated: true, completion: {
  do {
    try Manager.shared.parseKMP(adhocKbdDir, type: .lexicalModel)
      self.showSimpleAlert(title: "Success", message: "Dictionary installed successfully.")
    } catch {
      self.showKMPError(error as! KMPError)
  }
}
</code></pre>