<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanHotkey Interface"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanHotkey Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_ITavultesoftKeyman_SystemInfo.php">Prev</a> </td><th width="60%" align="center">Interfaces</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanHotkey_Target.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="comapi_interface_IKeymanHotkey">IKeymanHotkey Interface</h4></div></div></div><div class="toc"><dl><dt><span class="section"><a href="comapi_interface_IKeymanHotkey_Target.php">IKeymanHotkey::Target</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanHotkey_Value.php">IKeymanHotkey::Value</a></span></dt></dl></div><p>
        interface IKeymanHotkey : 
        <a class="link" href="comapi_interface_IKeymanObject.php" title="IKeymanObject Interface">IKeymanObject</a> : 
        IDispatch</p><p>
        An interface to a hotkey for a Keyman product.
      </p><h5><a name="id626436"></a>Interface Properties</h5><table id="id626438"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanHotkey_Target.php" title="IKeymanHotkey::Target">Target</a></td><td>Property Get/Let</td><td>Property Get/Let Target As Long</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanHotkey_Value.php" title="IKeymanHotkey::Value">Value</a></td><td>Property Get/Let</td><td>Property Get/Let Value As Long</td></tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_ITavultesoftKeyman_SystemInfo.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interfaces.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanHotkey_Target.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">ITavultesoftKeyman::SystemInfo </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanHotkey::Target</td></tr></table></div>
