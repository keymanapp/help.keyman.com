<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageFile::ReadMe"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanPackageFile::ReadMe</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackageFile_Install.php">Prev</a> </td><th width="60%" align="center">IKeymanPackageFile Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanPackageFile_SubFiles.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanPackageFile_ReadMe"><a class="link" href="comapi_interface_IKeymanPackageFile.php" title="IKeymanPackageFile Interface">IKeymanPackageFile</a>::ReadMe</h5></div></div></div><p>
            Returns the full path of the readme file from the package, if one exists.  This will be a temporary file, and will be deleted
            when the object instance is destroyed.
          </p><h6><a name="id602661"></a>Declaration</h6><pre class="programlisting">Property Get ReadMe As String</pre><h6><a name="id602667"></a>Parameters</h6><table id="id602669"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr></table><h6><a name="id602681"></a>Return Value</h6>String<h6><a name="id602685"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackageFile_Install.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanPackageFile.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanPackageFile_SubFiles.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanPackageFile::Install </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanPackageFile::SubFiles</td></tr></table></div>
