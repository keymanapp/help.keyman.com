<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProduct::Stop"
  ]);
?>

<h1><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct" title=
      "IKeymanProduct Interface">IKeymanProduct</a>::Stop</h1>

    <p>Shuts down the product if it is currently running. Most commonly this will be called from the controller user interface rather than
    from an external product, but there may be situations in which it makes sense to call this function.</p>

    <h6><a name="id570593" id="id570593"></a>Declaration</h6>
    <pre class="programlisting">
Sub Stop
</pre>

    <h6><a name="id570596" id="id570596"></a>Parameters</h6>

    <table id="id570619">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>
    </table>

    <h6><a name="id570647" id="id570647"></a>Example Code</h6>
    <pre class="programlisting">
  &#39; Stop keyboard mapping
  dim Keyman, KeymanProduct
  set Keyman = CreateObject(&quot;kmcomapi.TavultesoftKeyman&quot;)
  set KeymanProduct = Keyman.Products.ItemsByProductID(KeymanProductID)
  KeymanProduct.Stop()
</pre>
