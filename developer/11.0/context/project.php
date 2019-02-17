<?php
  require_once('includes/template.php');

  head([
    'title' => "Project Window"
  ]);
?>

<h1>Project Window</h1>

<p>The Project allows you to manage all the files that you are working on in Keyman Developer, and guides you on the steps to creating
a keyboard solution. Changes to the project are automatically saved.</p>

<p>You can open the Project window by pressing <kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>P</kbd>, or selecting <span class="guimenu">View</span>, <span class=
"guimenuitem">Project</span>.</p>

<h2>Welcome</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmProject_Welcome.png') ?>" alt="Project window - Welcome tab" /></p>

<p>This tab lists all the files that you have recently worked on.</p>

<h2>Keyboards</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmProject_Keyboards.png') ?>" alt="Project window - Keyboards tab" /></p>

<p>This tab lists all the keyboard source files in your project.</p>

<h2>Packaging</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmProject_Packaging.png') ?>" alt="Project window - Packaging tab" /></p>

<p>This tab lists all the package source files in your project.</p>

<h2>Distribution</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/110/ui/frmProject_Distribution.png') ?>" alt="Project window - Distribution tab" /></p>

<p>This tab lists all other files in your project, such as the <a href='/developer/keyboards/'>.keyboard_info file used for uploading to the Keyboards repository</a>.</p>
