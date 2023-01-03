<?php
require_once('includes/template.php');

head([
    'title' => "Function: resetContext"
]);

require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_resetContext">resetContext</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Revert OSK to default layer and clear any deadkeys and modifiers.</p>

<?php
syntax("keyman.resetContext();");
params();
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>...
</p>