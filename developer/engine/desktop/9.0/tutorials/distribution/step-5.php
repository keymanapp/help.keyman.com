<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 5: Compile your distribution"
  ]);
?>

<h1>Step 5: Compile your distribution</h1>

<p>In the Distribution Editor, click the <span class="guibutton">Compile</span> tab.</p>

<aside>
  <h3 class="title">Tip</h3>

  <p>You must be connected to the Internet to compile your product. The compile connects to the tavultesoft.com server to encrypt an
  dprotect your keyboards and product.</p>
</aside>

<aside>
  <h3 class="title">Tip</h3>

  <p>WiX requires the .NET framework 1.1 to compile your product.</p>
</aside>

<p>If this is the first time that you are compiling a distribution with the branding source file, a new Product entry will be created
on the Tavultesoft server (<a class="ulink" href="https://secure.tavultesoft.com/account/home/online/" target=
"_blank">https://secure.tavultesoft.com/account/home/online/</a>).</p>

<p>When compiling a product that utilises a global or freeware licence, you will be required to purchase a distribution licence for the
keyboards in the installer before compilation will complete. Please contact Tavultesoft Sales for assistance on this step.</p>

<p>Click <span class="guibutton">Compile</span>. You may be prompted to login to the tavultesoft.com server. After a few seconds, you
should have a .msi file that will install your product!</p>

<aside>
  <h3 class="title">Note</h3>

  <p>Regarding copying installer source files: the source file includes globally unique identifiers (GUIDs) that are specific to that
  installer. If you copy the source, ensure you delete the GUIDs from the XML source (see the <span class="guibutton">Source</span>
  tab) before compiling the new file. The GUIDs will be regenerated when you save the file.</p>
</aside>
