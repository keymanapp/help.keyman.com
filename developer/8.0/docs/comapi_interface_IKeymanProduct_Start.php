<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProduct::Start"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanProduct::Start</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanProduct_Running.php">Prev</a> </td><th width="60%" align="center">IKeymanProduct Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanProduct_Stop.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanProduct_Start"><a class="link" href="comapi_interface_IKeymanProduct.php" title="IKeymanProduct Interface">IKeymanProduct</a>::Start</h5></div></div></div><p>
            Start the Keyman Engine for the product.  This is the function that the product startup application will call, usually during
            a splash screen.  There is no requirement for the product startup application to remain in memory after calling this function.
            To start keyboard mapping with your product, you can use something like the following code (example in VBScript):
          </p><h6><a name="id620575"></a>Declaration</h6><pre class="programlisting">Sub Start</pre><h6><a name="id620581"></a>Parameters</h6><table id="id620583"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr></table><h6><a name="id620595"></a>Example Code</h6><pre class="programlisting">
  'Start keyboard mapping
  dim Keyman, KeymanProduct
  set Keyman = CreateObject("kmcomapi.TavultesoftKeyman")
  set KeymanProduct = Keyman.Products.ItemsByProductID(KeymanProductID)
  KeymanProduct.Start()
</pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanProduct_Running.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanProduct.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanProduct_Stop.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanProduct::Running </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanProduct::Stop</td></tr></table></div>
