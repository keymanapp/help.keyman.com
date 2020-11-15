<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanKeyboardLanguagesFile Interface"
  ]);
?>

<h1>IKeymanKeyboardLanguagesFile Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguagesFile</code> interface lists the languages associated with a keyboard file in Keyman Engine for Windows API.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanKeyboardLanguagesFile', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Items'><code>Items[Index]</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanKeyboardLanguage'><code>IKeymanKeyboardLanguage</code></a> reference for the language identified by <code>Index</code>.</dd>
</dl>
