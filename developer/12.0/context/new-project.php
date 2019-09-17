<?php
  require_once('includes/template.php');

  head([
    'title' => "New Project Dialog"
  ]);
?>

<h1>New Project Dialog</h1>

<p class='context-main-image'><img src="<?= cdn('img/developer/120/ui/frmNewProject.png') ?>" alt="New Project dialog" /></p>

<p>Creates a new keyboard or lexical model project, optionally from a template or by importing from another source.</p>

<h2>Basic</h2>

<p>Creates a keyboard project that matches the folder structure used in the Keyman <a href='https://github.com/keymanapp/keyboards'>keyboards repository</a> and
includes all <a href='/developer/keyboards/'>basic files</a> needed for a keyboard project. Clicking OK will open the <a href='new-project-parameters'>New Project
Parameters dialog</a>.</p>

<h2>Blank</h2>

<p>Creates a new empty keyboard project.</p>

<h2>Wordlist Lexical Model</h2>

<p>Creates a lexical model project that matches the folder structure used in the Keyman <a href='https://github.com/keymanapp/lexical-models'>lexical models repository</a> and
includes all basic files needed for a lexical model project. Clicking OK will open the <a href='new-lm-project-parameters'>New Project
Parameters dialog</a>.</p>

<h2>Blank Lexical Model</h2>

<p>Creates a new empty lexical model project.</p>

<h2>Import Windows Keyboard</h2>

<p>Creates a keyboard project that matches the folder structure used in the Keyman <a href='https://github.com/keymanapp/keyboards'>keyboards repository</a> and
includes all <a href='/developer/keyboards/'>basic files</a> needed for a keyboard project, then converts and imports the Windows keyboard that you select into 
the project. Clicking OK will open the <a href='new-project-parameters'>New Project Parameters dialog</a>.</p>

<p>The <b>Basic</b> and <b>Import Windows Keyboard</b> modes can also be driven by command line with <a href='kmconvert'>KMConvert</a>.
