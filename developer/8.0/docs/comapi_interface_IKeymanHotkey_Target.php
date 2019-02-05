<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanHotkey::Target"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanHotkey::Target</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanHotkey.php">Prev</a> </td><th width="60%" align="center">IKeymanHotkey Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanHotkey_Value.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanHotkey_Target"><a class="link" href="comapi_interface_IKeymanHotkey.php" title="IKeymanHotkey Interface">IKeymanHotkey</a>::Target</h5></div></div></div><p>
            The product-specific target value for the shortcut.  Keyman Engine defines:
              khKeymanOff = 0;
              khKeyboardMenu = 1;
              khVisualKeyboard = 2;
              khKeymanConfiguration = 3;
          </p><h6><a name="id626482"></a>Declaration</h6><pre class="programlisting">Property Get/Let Target As Long</pre><h6><a name="id626488"></a>Parameters</h6><table id="id626490"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr></table><h6><a name="id626502"></a>Return Value</h6>Long<h6><a name="id626506"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanHotkey.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanHotkey.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanHotkey_Value.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanHotkey Interface </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanHotkey::Value</td></tr></table></div>
