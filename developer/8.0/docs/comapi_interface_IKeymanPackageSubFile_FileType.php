<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageSubFile::FileType"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanPackageSubFile::FileType</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackageSubFile_Filename.php">Prev</a> </td><th width="60%" align="center">IKeymanPackageSubFile Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanPackageSubFiles.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanPackageSubFile_FileType"><a class="link" href="comapi_interface_IKeymanPackageSubFile.php" title="IKeymanPackageSubFile Interface">IKeymanPackageSubFile</a>::FileType</h5></div></div></div><p>
            Returns the type of the file: 
              ftKeymanSource = $00000000;
              ftPackageSource = $00000001;
              ftKeymanFile = $00000002;
              ftPackageFile = $00000003;
              ftPackageInstallerFile = $00000004;
              ftFont = $00000005;
              ftReadme = $00000006;
              ftTextFile = $00000007;
              ftKeymanWizard = $00000008;
              ftOther = $00000009;
              ftBitmap = $0000000A;
              ftVisualKeyboard = $0000000B;
              ftAddinFile = $0000000C;
              ftCustomisation = $0000000D;
          </p><h6><a name="id609343"></a>Declaration</h6><pre class="programlisting">Property Get FileType As tagKeymanFileType</pre><h6><a name="id609349"></a>Parameters</h6><table id="id609351"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr></table><h6><a name="id609363"></a>Return Value</h6><a class="link" href="comapi_enumeration_tagKeymanFileType.php" title="tagKeymanFileType Enumeration">tagKeymanFileType</a><h6><a name="id609369"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackageSubFile_Filename.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanPackageSubFile.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanPackageSubFiles.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanPackageSubFile::Filename </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanPackageSubFiles Interface</td></tr></table></div>
