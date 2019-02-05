<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanErrors::RebootRequired"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanErrors::RebootRequired</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanErrors_Items.php">Prev</a> </td><th width="60%" align="center">IKeymanErrors Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanErrors_SetReboot.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanErrors_RebootRequired"><a class="link" href="comapi_interface_IKeymanErrors.php" title="IKeymanErrors Interface">IKeymanErrors</a>::RebootRequired</h5></div></div></div><p>
            Set to True if a reboot is required after an installation or uninstallation process is completed.  You should
            check this value (through TavultesoftKeyman.Errors.RebootRequired) after calling any install or uninstall function.
          </p><h6><a name="id620959"></a>Declaration</h6><pre class="programlisting">Property Get RebootRequired As Boolean</pre><h6><a name="id620965"></a>Parameters</h6><table id="id620967"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr></table><h6><a name="id620979"></a>Return Value</h6>Boolean<h6><a name="id620983"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanErrors_Items.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanErrors.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanErrors_SetReboot.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanErrors::Items </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanErrors::SetReboot</td></tr></table></div>
