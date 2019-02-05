<?php
  require_once('includes/template.php');

  head([
    'title' => "Tavultesoft Keyman Engine COM API"
  ]);
?>

<h1>Tavultesoft Keyman Engine COM API</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="coclasses">CoClasses</a></span></dt>

        <dt><span class="section"><a href="interfaces">Interfaces</a></span></dt>

        <dt><span class="section"><a href="enumerations">Enumerations</a></span></dt>
      </dl>
    </div>

    <p>All aspects of Keyman Engine 7.0 can be controlled through the Keyman COM API. The COM API is very easy to use. A Visual Basic
    Scripting example of how to access the COM API is shown below. This example uninstalls a package, and is actually the uninstall script
    for packages in Keyman Desktop 7.0, when an uninstall shortcut is included in a package:</p>

    <h3><a name="id568006" id="id568006"></a>Example Code</h3>
    <pre class="programlisting">
dim kmcom, package
Set kmcom = CreateObject(&quot;kmcomapi.TavultesoftKeyman&quot;)
n = kmcom.Packages.IndexOf(&quot;SamplePackage&quot;)
if n &gt; 0 then
  Set package = kmcom.Packages(n)
  if msgbox(&quot;Uninstall package &quot;+package.Description+&quot;?&quot;, vbOKCancel, &quot;Keyman Desktop&quot;) = vbOK then
    package.Uninstall(True)
  end if
else
  msgbox &quot;The package SamplePackage could not be found.&quot;
end if
  
</pre>
