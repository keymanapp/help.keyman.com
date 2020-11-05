<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: removeKeyboards"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_removeKeyboards">removeKeyboards</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Removes keyboards (by ID) from KeymanWeb.</p>

<?php

syntax("keyman.removeKeyboards(id[, id2, ...])");

params("id", "string", "keyboard name string");

returns("boolean", "<code>true</code> if all keyboards were successfully removed, otherwise <code>false</code>.");

?>


<h2 id="Description" name="Description">Description</h2>

<p>
Allows a web page designer to dynamically remove keyboards from KeymanWeb by their ID(s).
</p>
<p>If the value <code>false</code> is returned, it is most likely that at least one specified keyboard was not actively
  loaded in KeymanWeb at the time of the call.
</p>