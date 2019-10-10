<?php
require_once('includes/template.php');

head([
  'title' => "Step 4: Compile the lexical model",
  'css' => ['template.css', 'index.css', 'prism.css', 'kmguides.css', 'dev-lexical-models.css']
]);
?>

<h1>Step 4: Compile the lexical model</h1>

<p>
  Before we can test the lexical model, we must compile it. In this step, the <code>.tsv</code> wordlist and
  <a href="../advanced/model-definition-file.php">the model definition file</a> get <dfn>compiled</dfn>
  into a single <code>.model.js</code> file. This file is the one that Keyman
  uses internally to generate suggestions.
  Later on, we will bundle the <code>.model.js</code> file into a
  lexical model package so that Keyman apps can install the lexical model.
  </p>

<h2>Models tab</h2>
<p>In Keyman Developer project view, select the "Models" tab.</p>

<figure>
<?php /*
  <img> within <figure> with a <figcaption> do not require alt="" attribute
  See: https://www.w3.org/TR/2014/REC-html5-20141028/embedded-content-0.html#figcaption-as-alt-condition
*/ ?>
  <img src="<?= cdn('img/developer/120/ui/frmModelsCompile.png') ?>" alt="The “Project - Models” tab in Keyman Developer" />
</figure>

<p>Click on the <span class="guibutton">Build models</span> button to compile the lexical model.
  The Message window will display the results of the compilation. If you have no typing errors, the lexical model should compile successfully.
  If successful, this will create a <code>.model.js</code> file in a build subdirectory of the lexical model project directory.</p>

<p>Now that the model is built, we are ready to test our lexical model.</p>
