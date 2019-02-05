<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 5: Shortcuts"
  ]);
?>

<h1>Step 5: Shortcuts</h1>

<p>Click on the Shortcuts tab in the Package Editor.</p>

<p>While it may be a good idea to include Start Menu shortcuts for your package, on recent versions of Windows these are not very visible
to end users. This means that you should ensure that all instructions are available through the <strong>welcome.htm</strong> file as well.
The Start Menu shortcuts were designed originally for Windows-based keyboard packages and work slightly differently in Mac OS X.</p>

<p>You should consider adding the following items to the Start Menu:</p>

<ul type="disc">
  <li>Documentation shortcuts</li>
  <li>Welcome.htm shortcut</li>
</ul>
    
<aside>
  <h3>Note</h3>
  
  <p>While Keyman Develoepr 8.0 and earlier versions of the documentation advised including an uninstall shortcut to the package, this is no longer recommended.
  Users should uninstall your package from Keyman Configuration. Adding an uninstall shortcut to the package adds confusion to the 
  Start Menu search on Windows, and is not compatible with Mac OS X keyboards.</p>
</aside>

<p>Click <span class="guibutton">New</span> to add a new shortcut to the package. Enter a description for the shortcut, and select the
program or file to start from the Program list. Four predefined program entries (Start Product), (Product Configuration), (Product
Help) and (About Product) will be translated into the appropriate shortcuts to start Keyman Desktop tasks as described.</p>

<aside>
  <h3>Note</h3>

  <p>In Keyman 6 and earlier, the predefined targets $KEYMAN\keyman.exe and $KEYMAN\kmshell.exe were available. These are
  translated to (Start Product) and (Product Configuration), respectively, in Keyman Desktop 7.0 and later versions.</p>
</aside>

<aside>
  <h3>Tip</h3>
  
  <p>Packages are not listed in the Control Panel Add/Remove Programs applet with Keyman Desktop 7.0 and later versions. Packages 
  can be uninstalled through the Start Menu shortcut or from Keyman Desktop Configuration.</p>
</aside>

<p><a href="step-6.php" title="Step 6: Compiling, testing and distributing a Package">Step 6: Compiling, testing and distributing a Package</a></p>
