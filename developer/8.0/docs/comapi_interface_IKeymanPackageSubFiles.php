<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageSubFiles Interface"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanPackageSubFiles Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackageSubFile_FileType.php">Prev</a> </td><th width="60%" align="center">Interfaces</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanPackageSubFiles_Items.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="comapi_interface_IKeymanPackageSubFiles">IKeymanPackageSubFiles Interface</h4></div></div></div><div class="toc"><dl><dt><span class="section"><a href="comapi_interface_IKeymanPackageSubFiles_Items.php">IKeymanPackageSubFiles::Items</a></span></dt></dl></div><p>
        interface IKeymanPackageSubFiles : 
        <a class="link" href="comapi_interface_IKeymanCollection.php" title="IKeymanCollection Interface">IKeymanCollection</a> : 
        <a class="link" href="comapi_interface_IKeymanObject.php" title="IKeymanObject Interface">IKeymanObject</a> : 
        IDispatch</p><p>
        A collection of all the files in a package
      </p><h5><a name="id609395"></a>Interface Properties</h5><table id="id609398"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanPackageSubFiles_Items.php" title="IKeymanPackageSubFiles::Items">Items</a></td><td>Property Get</td><td>Property Get Items(Index) As IKeymanPackageSubFile</td></tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackageSubFile_FileType.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interfaces.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanPackageSubFiles_Items.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanPackageSubFile::FileType </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanPackageSubFiles::Items</td></tr></table></div>
