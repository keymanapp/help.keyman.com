<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 2: Select files for distribution"
  ]);
?>

<h1>Step 2: Select files for distribution</h1>


<p>In the Distribution Editor, select the <span class="guibutton">Files</span> tab.</p>

<p>In the <span class="guibutton">Files</span> tab, you need to choose all the files that will be installed. Typically, you will put
fonts, keyboards and documentation into a .kmp package, and include the package here, rather than including the files separately.
However, if you want to include a shortcut to the documentation, you will need to include the documentation files directly here instead
of putting them into the package.</p>

<p>You will also see the .kct that you selected in the previous step in the list of files here.</p>

<p>If you are using your own user interface, that is, instead of customising the Keyman Desktop user interface, you should add the
relevant files and applications here. Note that the Distribution editor does not support subfolders (apart from the locale folder - see
the next step for details) - all files will be placed in one folder when installed. If your application requires subfolders, you could
use the Distribution Editor to create a WiX file as a starting point for your installer, and then customise the WiX file yourself.</p>

<aside>
  <h3 class="title">Tip</h3>

  <p>Do not try and add files from the Keyman Engine or from Keyman Desktop here. They will be automatically included as required
  during the build process.</p>
</aside>

<p>At this time, you should also choose the addins that you wish to include in your product.</p>

<p><a href="step-3" title="Step 3: Fill in details about the distribution">Step 3: Fill in details about the distribution</a></p>
 