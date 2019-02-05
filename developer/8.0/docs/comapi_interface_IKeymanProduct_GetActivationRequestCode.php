<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProduct::GetActivationRequestCode"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanProduct::GetActivationRequestCode</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanProduct_GetActivationData.php">Prev</a> </td><th width="60%" align="center">IKeymanProduct Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanProduct_Hotkeys.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanProduct_GetActivationRequestCode"><a class="link" href="comapi_interface_IKeymanProduct.php" title="IKeymanProduct Interface">IKeymanProduct</a>::GetActivationRequestCode</h5></div></div></div><p>
            When passed a valid licence number, this function will return a text string that must be passed to the Tavultesoft
            Activation Server, in order to get an ActivationResponseBlob that can be passed to the Activate function.  See the
            Activate function for an example.
          </p><h6><a name="id668085"></a>Declaration</h6><pre class="programlisting">Sub GetActivationRequestCode(LicenceNumber As String, ActivationRequestBlob As String)</pre><h6><a name="id668091"></a>Parameters</h6><table id="id668093"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr><tr><td>1</td><td>LicenceNumber</td><td>String</td><td>The licence number the user has received after purchasing the product</td></tr><tr><td>2</td><td>ActivationRequestBlob</td><td>String</td><td>
                The returned blob that must be sent to the Tavultesoft Activation Server in order to activate the product on
                the current computer.
              </td></tr></table><h6><a name="id668127"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanProduct_GetActivationData.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanProduct.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanProduct_Hotkeys.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanProduct::GetActivationData </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanProduct::Hotkeys</td></tr></table></div>
