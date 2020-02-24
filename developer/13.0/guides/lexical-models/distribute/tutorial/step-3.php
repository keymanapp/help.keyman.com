<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 3: Checking a package and adding files",
    'css' => ['template.css','kmguides.css']
  ]);
?>

<h1>Step 3: Checking a package and adding files</h1>

<p>We are finally ready to open up the Package Editor and check the package contents.
  In the Project Window in Keyman Developer, click the <span class="guibutton">Packaging</span> tab.</p>

    <aside>
      <h3 class="title">Tip</h3>

      <p>This tutorial makes a package named <code class="language-none">nrc.str.sencoten.model.kps</code>, but you should
        substitute the name with your own model.</p>
    </aside>

<p>A lexical model package source file will have the extension .model.kps, and will be compiled in a file with extension .kmp.</p>

<h2>Files</h2>

<p>In the Package Editor, click on the <span class="guibutton">Files</span> tab.</p>

<p><img src="<?php echo cdn("img/developer/120/lm/tutorial_distribute_model_3_files.png"); ?>"
  alt="Lexical Model Package Files" /></p>

<p>Keyman Developer already included your lexical model, welcome.htm, and readme.htm  files in your package.
  In the Files tab, click <span class="guibutton">Add</span> to add all the additional files we discussed in the previous step to the
  package. For example, if your welcome or readme files use embedded files, include them in your package.
  You can add multiple files at once, and from multiple folders. When the package is compiled, all the files will be
  placed in the same folder within the package.</p>

<p>While keyboards can also be distributed in packages, do not include them in a lexical model package.</p>

<h2>Lexical Models</h2>
<p>In the Package Editor, click on the <span class="guibutton">Lexical Models</span> tab.</p>

<p><img src="<?php echo cdn("img/developer/120/lm/tutorial_distribute_model_3.png"); ?>"
        alt="Lexical Model Info"/></p>

<dl>
  <dt>Language Tag</dt>
  <dd>
    <p>A valid BCP 47 language tag must be set or the lexical model will not install on your mobile device. Update the list of languages you want to associate with your
      lexical model.</p>
  </dd>

</dl>

    <p>You could stop here. This would be a completely valid package, but it would not be as good as it could be. So let's
    continue on to the next step, and fill in some descriptions of the package.</p>

<p><a href="step-4.php" title="Step 4: Filling in package details">Step 4: Filling in package details</a></p>
