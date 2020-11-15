<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanLanguages Interface"
  ]);
?>

<h1>IKeymanLanguages Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanLanguages</code> interface lists all the Windows input methods currently loaded on the system. As Keyman keyboards are
installed as Windows input methods, this interface will list Keyman input methods as well as Windows system-supplied input methods and 
other third party input methods that present as Windows input methods.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanLanguages', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Items'><code>Items[Index]</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanLanguage'><code>IKeymanLanguage</code></a> reference for the windows language identified by <code>Index</code>.</dd>
</dl>
