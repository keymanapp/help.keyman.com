<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanHotkeys::Items"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanHotkeys::Items</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanHotkeys_Delete.php">Prev</a> </td><th width="60%" align="center">IKeymanHotkeys Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_enumerations.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanHotkeys_Items"><a class="link" href="comapi_interface_IKeymanHotkeys.php" title="IKeymanHotkeys Interface">IKeymanHotkeys</a>::Items</h5></div></div></div><p>
            Retrieves a hotkey by index.
          </p><h6><a name="id638325"></a>Declaration</h6><pre class="programlisting">Property Get Items(Index As Long) As IKeymanHotkey</pre><h6><a name="id638331"></a>Parameters</h6><table id="id638334"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr><tr><td>1</td><td>Index</td><td>Long</td><td>
                1-based index of the hotkey to retrieve.
              </td></tr></table><h6><a name="id638356"></a>Return Value</h6><a class="link" href="comapi_interface_IKeymanHotkey.php" title="IKeymanHotkey Interface">IKeymanHotkey</a><h6><a name="id638362"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanHotkeys_Delete.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanHotkeys.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_enumerations.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanHotkeys::Delete </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Enumerations</td></tr></table></div>
