<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProduct::OpenProduct"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanProduct::OpenProduct</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanProduct_OpenHelp.php">Prev</a> </td><th width="60%" align="center">IKeymanProduct Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanProduct_ProductID.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanProduct_OpenProduct"><a class="link" href="comapi_interface_IKeymanProduct.php" title="IKeymanProduct Interface">IKeymanProduct</a>::OpenProduct</h5></div></div></div><p>
            Starts the product in a new process.  It is the responsibility of the product startup application to ensure that
            multiple copies of the product are not startd.  This is the function that outside applications should call to
            start the product, to ensure that the correct user interface is displayed to the end user.
          </p><h6><a name="id620415"></a>Declaration</h6><pre class="programlisting">Sub OpenProduct</pre><h6><a name="id620421"></a>Parameters</h6><table id="id620424"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr></table><h6><a name="id620436"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanProduct_OpenHelp.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanProduct.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanProduct_ProductID.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanProduct::OpenHelp </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanProduct::ProductID</td></tr></table></div>
