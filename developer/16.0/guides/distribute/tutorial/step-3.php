<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 3: Creating a package and adding files",
    'css' => ['template.css','kmguides.css']
  ]);
?>

<h1>Step 3: Creating a package and adding files</h1>

<p>We are finally ready to open up the Package Editor and create the new package.</p>

<ul type="disc">
  <li>
    <p>In the Project Window in Keyman Developer, click the <span class="guibutton">Packages</span> tab, and click <span class="guibutton">New Package...</span>. Enter the path
    and filename of the package you are creating.</p>

    <aside>
      <h3 class="title">Tip</h3>

      <p>This tutorial makes a package named <code class="language-none">khmer_angkor.kps</code>, but you could call yours
        <code class="language-none">qfrench.kps</code>.</p>
    </aside>

    <p>A package source file will have the extension .kps, and will be compiled in a file with extension .kmp.</p>

    <p>After you click OK, the Package Editor will open with the Files tab visible.</p>

    <p><img src="<?php echo cdn("img/developer/100/tutorial_distribute_keyboard_3_files.png"); ?>" /></p>
  </li>

  <li>
    <p>In the Files tab, click <span class="guibutton">Add</span> to add all the files we discussed in the previous step to the
    package. You can add multiple files at once, and from multiple folders. When the package is compiled, all the files will be
    placed in the same folder within the package.</p>
  </li>
  <li>
    <p>If your package includes .js touch layout keyboards, you can associate fonts and languages in the Keyboards tab.
       A valid <a href="../../../reference/bcp-47">BCP 47 language tag</a> must be set or the keyboard will not
       install on your mobile device.</p>

    <p><img src="<?php echo cdn("img/developer/100/tutorial_distribute_keyboard_3.png"); ?>" /></p>

    <p>You could stop here. This would be a completely valid package, but it would not be as good as it could be. So let's
    continue on to the next step, and fill in some descriptions of the package.</p>
  </li>
</ul>

<p><a href="step-4.php" title="Step 4: Filling in package details">Step 4: Filling in package details</a></p>
