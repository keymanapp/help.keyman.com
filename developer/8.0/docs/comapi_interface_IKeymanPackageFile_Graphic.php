<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageFile::Graphic"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanPackageFile::Graphic</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackageFile.php">Prev</a> </td><th width="60%" align="center">IKeymanPackageFile Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanPackageFile_Install.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanPackageFile_Graphic"><a class="link" href="comapi_interface_IKeymanPackageFile.php" title="IKeymanPackageFile Interface">IKeymanPackageFile</a>::Graphic</h5></div></div></div><p>
            Returns the graphic associated with the package, if one exists.  The graphic is intended to be used during an installation process,
            and is always 140 x 250 pixels.
          </p><h6><a name="id602551"></a>Declaration</h6><pre class="programlisting">Property Get Graphic As stdole.IPicture</pre><h6><a name="id602557"></a>Parameters</h6><table id="id602559"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr></table><h6><a name="id602571"></a>Return Value</h6>stdole.IPicture<h6><a name="id602575"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackageFile.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanPackageFile.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanPackageFile_Install.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanPackageFile Interface </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanPackageFile::Install</td></tr></table></div>
