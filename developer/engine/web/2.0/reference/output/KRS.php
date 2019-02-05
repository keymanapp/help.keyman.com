<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: KRS"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KRS">KRS</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Registers the keyboard stub or returns true if already registered.</p>

<?php
syntax("KeymanWeb.KRS(Pstub);");
params("Pstub", "Object", "A keyboard stub object representing the keyboard's basic lookup parameters.");
returns("optional number", "<code>1</code> if the keyboard is preregistered, otherwise <code>null</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>Note that this only registers the stub with KeymanWeb, allowing it to later request the keyboard from the server or
  filesystem upon demand in order to complete the linking process.
</p>
<p>The <code>KeymanWeb.KRS</code> function is typically called on the user's behalf by the <a href="../core/addKeyboards">
    <code><?="$kmw.addKeyboards()"?></code></a> function.</p>