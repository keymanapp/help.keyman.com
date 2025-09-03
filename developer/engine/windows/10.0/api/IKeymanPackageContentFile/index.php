<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanPackageContentFile Interface"
  ]);
?>

<h1>IKeymanPackageContentFile Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageContentFile</code> interface describes a file within a package.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanPackageContentFile', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Description'><code>Description</code></a> <span class='readonly'>read only</span></dt>
  <dd>An optional description of the file from the package metadata.</dd>
</dl>

<dl>
  <dt><a href='Filename'><code>Filename</code></a> <span class='readonly'>read only</span></dt>
  <dd>The filename of the file, without path.</dd>
</dl>

<dl>
  <dt><a href='FullFilename'><code>FullFilename</code></a> <span class='readonly'>read only</span></dt>
  <dd>The filename of the file, including path. This may point to a temporary path.</dd>
</dl>

<dl>
  <dt><a href='Stream'><code>Stream</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <code>IStream</code> reference to the file content.</dd>
</dl>
