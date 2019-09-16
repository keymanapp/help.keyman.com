<?php
  require_once('includes/template.php');
  require_once('includes/__docheader.php');

  head([
    'title' => "Function: alignInputs"
  ]);
?>

<h1 class="title" id="core_alignInputs">alignInputs</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Adjusts touch-mode element overlays, realigning them over their base elements.</p>

<?php
syntax("keyman.alignInputs(elements);");
params("elements", "array optional", <<<END
A list of elements with touch overlays to be repositioned on the page.  When not provided, all such elements will be realigned.
END
);
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>To prevent a system-level keyboard from displaying on mobile devices, KeymanWeb
  uses "touch-alias" overlay elements over webpage inputs to intercept typing requests and
  instead display its own keyboard for use.  KeymanWeb does its best to keep the overlays on
  top of their original elements, calling this function as needed.
</p>
<p>
  As there have been occasional bugs related to these overlays, this function exposes the ability for
  a web designer to manually trigger realignment to facilitate more intuitive behavior for end users
  in case a workaround is ever needed for a bug in the future.
</p>

<h2 id=""Example" name="Example">Example</h2>

<?=codebox(<<<END
keyman.alignInputs();
END
);?>