<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 3: Creating a package and adding files"
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

      <p>In this tutorial, you could call the package <code class="language-none">qfrench.kps</code>.</p>
    </aside>

    <p>A package source file will have the extension .kps, and will be compiled in a file with extension .kmp.</p>

    <p>After you click OK, the Package Editor will open with the Files tab visible.</p>
  </li>

  <li>
    <p>In the Files tab, click <span class="guibutton">Add</span> to add all the files we discussed in the previous step to the
    package. You can add multiple files at once, and from multiple folders. When the package is compiled, all the files will be
    placed in the same folder within the package.</p>

    <p>You could stop here. This would be a completely valid package, but it would not be as good as it could be. So let's
    continue on to the next step, and fill in some descriptions of the package.</p>
  </li>
</ul>

<p><a href="step-4.php" title="Step 4: Filling in package details">Step 4: Filling in package details</a></p>
