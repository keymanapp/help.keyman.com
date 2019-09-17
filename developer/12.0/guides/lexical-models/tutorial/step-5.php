<?php
require_once('includes/template.php');

head([
  'title' => "Step 5: Compile the lexical model",
  'css' => ['template.css','index.css','kmguides.css']
]);
?>

<h1>Step 5: Compile the lexical model</h1>

<h2>Models tab</h2>
<p>In Keyman Developer project view, select the "Models" tab.</p>

<p class='context-main-image'><img src="<?= cdn('img/developer/120/ui/frmModelsCompile.png') ?>" alt="Compile Model" /></p>
<br/>

<p>Click on the <span class="guibutton">Build models</span> button to compile the lexical model.
  If successful, this will create a <code>.model.js</code> file in a build subdirectory of the lexical model project directory.</p>

<p>Now that the model is built, we are ready to test our lexical model.</p>

<p>
  Step 6: Testing the lexical model
</p>