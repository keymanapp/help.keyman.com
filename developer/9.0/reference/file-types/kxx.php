<?php
  require_once('includes/template.php');

  head([
    'title' => "KXX files"
  ]);
?>

<h1>KXX files</h1>

<dl>
  <dt>Used by:</dt>
  <dd>custom Keyman Engine products.</dd>

  <dt>Description:</dt>
  <dd>A .KXX file is an encrypted keyboard for use with a particular custom Keyman Engine product.</dd>

  <dt>Details:</dt>
  <dd>.KXX files are created in <span class="application">Keyman Developer</span> when creating an installer for a custom Keyman
    Engine product. They are locked to that product and cannot be used with <span class="application">Keyman Desktop</span> or any other
    custom products.</dd>

  <dt>Distributed with keyboard:</dt>
  <dd>.KXX files should be distributed with the custom product only.</dd>
</dl>
