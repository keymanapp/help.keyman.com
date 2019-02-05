<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Step 5: Principles for Contributing Keyboards',
        'css' => ['template.css','index.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="principles">Step 5: Principles for Contributing Keyboards</h1>

<?php
    include('../_shared/contributing-keyboards.php');
?>

<?php
    include('../_shared/designing-keyboard.php');
?>

<?php
include('../_shared/set-output-path.php');
?>

<?php
    include('../_shared/license.php');
?>

<p>
    <a href="step-6.php" title="Step 6: Submitting a GitHub Pull Request">
    Step 6: Submitting a GitHub Pull Request</a>
</p>
