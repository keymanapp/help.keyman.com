<?php
  require_once('includes/template.php');

  head([
    'title' => "Distribution Tutorial"
  ]);
?>

<h1>Keyman Engine for Desktop Distribution Tutorial</h1>

<dl>
  <dt><a href="step-1">Step 1: Choose the distribution licence and branding</a></dt>
  <dt><a href="step-2">Step 2: Select files for distribution</a></dt>
  <dt><a href="step-3">Step 3: Fill in details about the distribution</a></dt>
  <dt><a href="step-4">Step 4: Create shortcuts</a></dt>
  <dt><a href="step-5">Step 5: Compile your distribution</a></dt>
</dl>

<p>The distribution editor provides tools to create an installer for your product, using industry-standard Windows Installer (.msi)
technology. The installer embeds your keyboards, your product customisation and the Keyman Engine for a simple installation experience,
and supports upgrades, patches and even complex deployment requirements for large organisations.</p>

<p>When you are creating a shareware-licensed product, the distribution editor also adds copy protection to your keyboards and product
file during the compilation process.</p>

<aside>
  <h2>Note</h2>

  <p>You must purchase a licence for the Branding Pack before you can use the Branding Editor or the Distribution Editor in Keyman
  Developer.</p>
</aside>

<p>The distribution editor creates a <a href="/developer/9.0/reference/tools/wix" title="Windows Installer XML (WiX)">WiX source
file</a> that you can extend and compile yourself using the WiX tools. Although the Distribution Editor hides much of the detail of
creating an MSI installer, an understanding of both WiX and MSI will be useful.</p>

<ul type="disc">
  <li>Learn more about WiX at: <a href="http://wixtoolset.org/" target="_blank">wixtoolset.org</a>. In
  particular, the tutorial is very helpful in gaining an understanding of the principles behind WiX and Windows Installer.
  </li>

  <li>Learn more about Windows Installer at: <a href="https://msdn.microsoft.com/en-us/library/cc185688.aspx" target=
  "_blank">msdn.microsoft.com</a> and <a href="https://en.wikipedia.org/wiki/Windows_Installer" target=
  "_blank">Wikipedia</a>.
  </li>
</ul>

<p>Let's get started. Open the Project window in Keyman Developer, select the Distribution tab, and click <span class=
"guibutton">New Distribution</span>. Enter a filename, for example, qfrench.kpp, and click <span class="guibutton">OK</span>.</p>

<p><a href="step-1" title="Step 1: Choose the distribution licence and branding">Step 1: Choose the
distribution licence and branding</a></p>
