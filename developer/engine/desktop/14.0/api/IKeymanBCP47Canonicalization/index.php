<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanBCP47Canonicalization Interface"
  ]);
?>

<h1>IKeymanBCP47Canonicalization Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanBCP47Canonicalization</code> interface adds functions for canonicalizing BCP 47 tags.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanBCP47Canonicalization', '../'); ?>

<h2>Methods</h2>

<dl>
  <dt><a href='GetCanonicalTag'><code>GetCanonicalTag()</code></a></dt>
  <dd>Finds a canonical tag according to data from SIL langtags.json.</dd>
</dl>

<h2>History</h2>

<p>Added in Keyman Engine for Windows 14.0.</p>
