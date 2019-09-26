<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 3: Checking a package and adding files",
    'css' => ['template.css','index.css','kmguides.css']
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

<p>Keyman Developer already included a few files in your package. In the Files tab, click <span class="guibutton">Add
  </span> to add all the additional files we discussed in the previous step to the
  package. You can add multiple files at once, and from multiple folders. When the package is compiled, all the files will be
  placed in the same folder within the package.</p>

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

  <dt>Package Version</dt>
  <dd>
    <p>Update the package version (intial version can default to 1.0).
      A version number for the package is important - it helps your users know that they are using the most recent update of
      your package. The version format you should use is <code class='language-none'>1.0</code>. When making a major change to your lexical model
      package, increment the first part and set the second part to, e.g. <code class='language-none'>2.0</code>; when making a bug fix or a minor update,
      increment the second part, e.g. <code class='language-none'>1.1</code>.</p>

     <p>Version numbers should be in the form <code class='language-none'>major.minor[.subversion]</code>. Subversion is optional but is helpful for small bug fix
      releases. Each of the sections of the version should be an integer. Keyman does integer comparisons on the version
      numbers, so, for example, version <code class='language-none'>2.01</code> is regarded as older than version <code class='language-none'>2.2</code>. Alphabetic
      or date formats should be avoided as the installer for the keyboard cannot determine which version is older reliably.</p>
  </dd>
</dl>

    <p>You could stop here. This would be a completely valid package, but it would not be as good as it could be. So let's
    continue on to the next step, and fill in some descriptions of the package.</p>


<p><a href="step-4.php" title="Step 4: Filling in package details">Step 4: Filling in package details</a></p>
