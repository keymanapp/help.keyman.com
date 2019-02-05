<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Tavultesoft Keyman Engine COM API</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding_welcome.php">Prev</a> </td><th width="60%" align="center">Chapter 4. Reference</th><td width="20%" align="right"> <a accesskey="n" href="comapi_coclasses.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="comapi"></a>Tavultesoft Keyman Engine COM API</h2></div></div></div><div class="toc"><dl><dt><span class="section"><a href="comapi_coclasses.php">CoClasses</a></span></dt><dt><span class="section"><a href="comapi_interfaces.php">Interfaces</a></span></dt><dt><span class="section"><a href="comapi_enumerations.php">Enumerations</a></span></dt></dl></div><p>
    All aspects of Keyman Engine 7.0 can be controlled through the Keyman COM API.  The COM API is
    very easy to use.  A Visual Basic Scripting example of how to access the COM API is shown below.  
    This example uninstalls a package, and is actually the uninstall script for packages in 
    Keyman Desktop 7.0, when an uninstall shortcut is included in a package:
  </p><h3><a name="id755761"></a>Example Code</h3><pre class="programlisting">
dim kmcom, package
Set kmcom = CreateObject("kmcomapi.TavultesoftKeyman")
n = kmcom.Packages.IndexOf("SamplePackage")
if n &gt; 0 then
  Set package = kmcom.Packages(n)
  if msgbox("Uninstall package "+package.Description+"?", vbOKCancel, "Keyman Desktop") = vbOK then
    package.Uninstall(True)
  end if
else
  msgbox "The package SamplePackage could not be found."
end if
  </pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding_welcome.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_coclasses.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">welcome.xsl: Welcome dialog </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> CoClasses</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
