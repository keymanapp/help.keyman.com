<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProducts::Install"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanProducts::Install</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanProducts.php">Prev</a> </td><th width="60%" align="center">IKeymanProducts Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanProducts_Items.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanProducts_Install"><a class="link" href="comapi_interface_IKeymanProducts.php" title="IKeymanProducts Interface">IKeymanProducts</a>::Install</h5></div></div></div><p>
            Most products will be installed through an .msi installer using the distribution wizard that is included with Keyman
            Developer.  However, if building a custom installation, this function should be used to install and initialize the
            product for use in Keyman Engine.
          </p><h6><a name="id667384"></a>Declaration</h6><pre class="programlisting">Sub Install(ParentWindow As Long, Filename As String, InstallDir As String, AllUsers As Boolean, Force As Boolean)</pre><h6><a name="id667390"></a>Parameters</h6><table id="id667393"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr><tr><td>1</td><td>ParentWindow</td><td>Long</td><td>
                HWND of window in case any dialogs need to be displayed during the installation process.  Pass NULL if no parent 
                window is available (e.g. in console application).
              </td></tr><tr><td>2</td><td>Filename</td><td>String</td><td>Full pathname of the product .pxx file to install</td></tr><tr><td>3</td><td>InstallDir</td><td>String</td><td>
                Installation directory for product.  Usually this folder will contain the .pxx file referenced above,
                plus the applications referenced in the .pxx file.  For example, with Keyman Desktop Professional, the folder contains
                kmshell.exe as well as desktoppro.pxx.  The files are not copied out of this folder but are referenced in
                place.
              </td></tr><tr><td>4</td><td>AllUsers</td><td>Boolean</td><td>This value must be TRUE for Keyman Engine 7.0</td></tr><tr><td>5</td><td>Force</td><td>Boolean</td><td>This value is not used in Keyman Engine 7.0 and should be set to FALSE</td></tr></table><h6><a name="id667459"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanProducts.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanProducts.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanProducts_Items.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanProducts Interface </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanProducts::Items</td></tr></table></div>
