<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProducts::ItemsByProductID"
  ]);
?>

<h1><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProducts"
      title="IKeymanProducts Interface">IKeymanProducts</a>::ItemsByProductID</h1>

    <p>Use ItemsByProductID to retrieve a IKeymanProduct interface for the product without having to iterate through the collection. If no
    product is found with a matching ProductID, a KMN_E_Collection_InvalidIndex exception will be raised.</p>

    <h6><a name="id569266" id="id569266"></a>Declaration</h6>
    <pre class="programlisting">
Property Get ItemsByProductID(Index As Long) As IKeymanProduct
</pre>

    <h6><a name="id569269" id="id569269"></a>Parameters</h6>

    <table id="id569260">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>Index</td>

        <td>Long</td>

        <td>ProductID (also known as OnlineProductID) of product to retrieve</td>
      </tr>
    </table>

    <h6><a name="id567063" id="id567063"></a>Return Value</h6><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct" title=
    "IKeymanProduct Interface">IKeymanProduct</a>

    <h6><a name="id567042" id="id567042"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
