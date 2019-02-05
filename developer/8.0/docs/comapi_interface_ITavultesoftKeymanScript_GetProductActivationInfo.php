<?php
  require_once('includes/template.php');

  head([
    'title' => "ITavultesoftKeymanScript::GetProductActivationInfo"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">ITavultesoftKeymanScript::GetProductActivationInfo</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_ITavultesoftKeymanScript.php">Prev</a> </td><th width="60%" align="center">ITavultesoftKeymanScript Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_ITavultesoftKeymanScript_GetProductActivationRequest.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_ITavultesoftKeymanScript_GetProductActivationInfo"><a class="link" href="comapi_interface_ITavultesoftKeymanScript.php" title="ITavultesoftKeymanScript Interface">ITavultesoftKeymanScript</a>::GetProductActivationInfo</h5></div></div></div><p>
            Returns information about the activation status of a product.  The ProductID can be retrieved from the Products collection.
          </p><h6><a name="id600430"></a>Declaration</h6><pre class="programlisting">Function GetProductActivationInfo(ByVal ProductID as Long, ByVal InfoType As Long) As Long</pre><h6><a name="id600436"></a>Parameters</h6><table id="id600438"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr><tr><td>1</td><td>ProductID</td><td>Long</td><td>
                The ID of the product to retrieve product activation info for.
              </td></tr><tr><td>2</td><td>InfoType</td><td>Long</td><td>
                The type of information to retrieve:
                  1: Activation status - returns 1 for activated, 0 for not activated
                  2: Returns the total number of days in the product trial
                  3: Returns the number of days already used in the product trial
              </td></tr></table><h6><a name="id600472"></a>Return Value</h6>Long<h6><a name="id600475"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_ITavultesoftKeymanScript.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_ITavultesoftKeymanScript.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_ITavultesoftKeymanScript_GetProductActivationRequest.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">ITavultesoftKeymanScript Interface </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> ITavultesoftKeymanScript::GetProductActivationRequest</td></tr></table></div>
