<?php
require_once('includes/template.php');

head([
  'title' => "Step 5: Compile the lexical model",
  'css' => ['template.css', 'index.css', 'prism.css', 'kmguides.css']
]);
?>

<h1>Step 5: Compile the lexical model</h1>

<p>
  Before we can test the lexical model, we must compile it. In this step, the <code>.tsv</code> wordlist and <code>.model.ts</code> model definition get compiled
  into a single <code>.model.js</code> file. Later on, we will bundle the <code>.model.js</code> file into a
  lexical model package so that Keyman apps can install the lexical model.
  </p>

<h2>Models tab</h2>
<p>In Keyman Developer project view, select the "Models" tab.</p>

<p class='context-main-image'><img src="<?= cdn('img/developer/120/ui/frmModelsCompile.png') ?>" alt="Compile Model" /></p>

<p>Click on the <span class="guibutton">Build models</span> button <!-- TODO: or press <kbd>F7</kbd> --> to compile the lexical model.
  The Message window will display the results of the compilation; if you have no typing errors, the lexical model should compile successfully.
  If successful, this will create a <code>.model.js</code> file in a build subdirectory of the lexical model project directory.</p>

<p>Now that the model is built, we are ready to test our lexical model.</p>

