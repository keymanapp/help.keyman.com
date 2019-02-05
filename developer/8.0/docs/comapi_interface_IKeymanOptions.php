<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanOptions Interface"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanOptions Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanLanguage_LocaleName.php">Prev</a> </td><th width="60%" align="center">Interfaces</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanOptions_Apply.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="comapi_interface_IKeymanOptions">IKeymanOptions Interface</h4></div></div></div><div class="toc"><dl><dt><span class="section"><a href="comapi_interface_IKeymanOptions_Apply.php">IKeymanOptions::Apply</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanOptions_Items.php">IKeymanOptions::Items</a></span></dt></dl></div><p>
        interface IKeymanOptions : 
        <a class="link" href="comapi_interface_IKeymanCollection.php" title="IKeymanCollection Interface">IKeymanCollection</a> : 
        <a class="link" href="comapi_interface_IKeymanObject.php" title="IKeymanObject Interface">IKeymanObject</a> : 
        IDispatch</p><p>
        A collection of all the options available for configuration in Keyman Engine.
      </p><h5><a name="id601634"></a>Interface Methods</h5><table id="id601636"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanOptions_Apply.php" title="IKeymanOptions::Apply">Apply</a></td><td>Method</td><td>Sub Apply</td></tr></table><h5><a name="id601657"></a>Interface Properties</h5><table id="id601659"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanOptions_Items.php" title="IKeymanOptions::Items">Items</a></td><td>Property Get</td><td>Property Get Items(Index) As IKeymanOption</td></tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanLanguage_LocaleName.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interfaces.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanOptions_Apply.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanLanguage::LocaleName </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanOptions::Apply</td></tr></table></div>
