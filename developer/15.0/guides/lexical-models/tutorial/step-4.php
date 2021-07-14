<?php
require_once('includes/template.php');

head([
  'title' => "Step 4: Compile the lexical model",
  'css' => ['template.css', 'prism.css', 'kmguides.css', 'dev-lexical-models.css']
]);
?>

<h1>Step 4: Compile the lexical model</h1>

<p>
  Before use the lexical model, we must compile it. In this step, the <code>.tsv</code> wordlist and
  <a href="../advanced/model-definition-file.php">the model definition file</a> get <dfn>compiled</dfn>
  into a single <code>.model.js</code> file. This file is the one that Keyman
  uses internally to generate suggestions.
  Later on, we will bundle the <code>.model.js</code> file into a
  lexical model package so that Keyman apps can install the lexical model.
  </p>

<h2>Models tab</h2>
<p>In Keyman Developer project view, select the "Models" tab.</p>

<figure>
  <img src="<?= cdn('img/developer/120/ui/frmModelsCompile.png') ?>" alt="The “Project - Models” tab in Keyman Developer" />
</figure>

<p>Click on the <span class="guibutton">Build models</span> button to compile the lexical model.
  The Message window will display the results of the compilation. If you have no typing errors, the lexical model should compile successfully.
  If successful, this will create a <code>.model.js</code> file in a build subdirectory of the lexical model project directory.</p>


<h2> Next steps </h2>

<p> This concludes the lexical model tutorial. Here's what's next: </p>

<ul>
  <li>
    Now that the model is built, we are ready to
    <a href="../distribute/packages.php">distribute our lexical model</a>.
  </li>
  <li> (<em>For advanced users</em>)
    We can do some
    <a href="../advanced/">advanced customization</a> by modifying the
    <a href="../advanced/model-definition-file.php">model definition file</a>.
    Advanced customizations require a some comfort with modifying code!
  </li>
</ul>
