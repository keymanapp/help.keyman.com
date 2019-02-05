<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 1: Choose the distribution licence and branding"
  ]);
?>

<h1>Step 1: Choose the distribution licence and branding</h1>

<p>The Distribution Editor will open on the <span class="guibutton">Licence</span> page. On this page, select the .kct Branding Source
File that your distribution will use for its branding and licencing.</p>

<aside>
<h3 class="title">Note</h3>
<p>It is recommended that a .kct file should only be associated with a single .msi file.</p>
</aside>

<p>A .kct file should only be associated with a single installer. If you have a need to package up variations of keyboards with your
.msi installer, you should use the Package Installer functionality and not include any keyboards in your base .msi installer.</p>

<p>After selecting the .kct file, some information will be displayed on the licence page about the status of the file. If the .kct has
been modified since the last time a distribution was built, a status line indicating that the 'Branding file is available but will
be encrypted during next build" is displayed; if the branding file has not been modified, it will display 'Branding file is
ready'.</p>

<p>The ProductID assigned to the branding file by the tavultesoft.com server is also shown here. If no ProductID has been assigned,
then one will be assigned during the Distribution build, by the tavultesoft.com server. After the build, the .kct file will be updated
to include the ProductID that it has been assigned.</p>

<p><a href="step-2" title="Step 2: Select files for distribution">Step 2: Select files for distribution</a></p>
