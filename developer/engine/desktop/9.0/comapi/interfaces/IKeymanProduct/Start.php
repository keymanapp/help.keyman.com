<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProduct::Start"
  ]);
?>

<h1><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct" title=
      "IKeymanProduct Interface">IKeymanProduct</a>::Start</h1>

    <p>Start the Keyman Engine for the product. This is the function that the product startup application will call, usually during a
    splash screen. There is no requirement for the product startup application to remain in memory after calling this function. To start
    keyboard mapping with your product, you can use something like the following code (example in VBScript):</p>

    <h6><a name="id570574" id="id570574"></a>Declaration</h6>
    <pre class="programlisting">
Sub Start
</pre>

    <h6><a name="id570544" id="id570544"></a>Parameters</h6>

    <table id="id570586">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>
    </table>

    <h6><a name="id570613" id="id570613"></a>Example Code</h6>
    <pre class="programlisting">
  &#39;Start keyboard mapping
  dim Keyman, KeymanProduct
  set Keyman = CreateObject(&quot;kmcomapi.TavultesoftKeyman&quot;)
  set KeymanProduct = Keyman.Products.ItemsByProductID(KeymanProductID)
  KeymanProduct.Start()
</pre>
