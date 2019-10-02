<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'parseKMP';
    $param1 = 'folder';
    $methodSyntax1 = sprintf('%s.%s(%s: URL)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.parseKMP()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $method.'()' ?></strong></code> method installs a keyboard via ad-hoc distribution at the <code>folder</code> URL.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?= $param1 ?></code></dt>
    <dd>URL to the KMP keyboard package.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>This syntax can be used for installing a KMP keyboard package.</p>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example 1: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>let adhocDir = _adhocDirectory {
  self.window?.rootViewController?.dismiss(animated: true, completion: {
  do {
    try Manager.shared.parseKMP(adhocDir)
      self.showSimpleAlert(title: "Success", message: "All keyboards installed successfully.")
    } catch {
      self.showKMPError(error as! KMPError)
  }
}
</code></pre>