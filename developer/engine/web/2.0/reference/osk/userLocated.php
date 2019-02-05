<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: userLocated"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="userLocated">userLocated</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Determine whether or not the OSK has been moved from its default position by the user.</p>

<?php
syntax("$kmw.osk.userLocated();");
params();
returns("boolean", "<code>true</code> if location is specified by the user, else <code>false</code>.");
?>
