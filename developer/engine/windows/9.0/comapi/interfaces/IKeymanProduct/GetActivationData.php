<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProduct::GetActivationData"
  ]);
?>

<h1><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct"
      title="IKeymanProduct Interface">IKeymanProduct</a>::GetActivationData</h1>

    <p>This function is often used at startup time to retrive information about the status of a product - whether the product has been
    activated or not, and whether the trial period has expired.</p>

    <h6><a name="id567508" id="id567508"></a>Declaration</h6>
    <pre class="programlisting">
Sub GetActivationData(ActivatedState As Long, TrialDayCount As Long, DaysUsed As Long)
</pre>

    <h6><a name="id567523" id="id567523"></a>Parameters</h6>

    <table id="id567514">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>ActivatedState</td>

        <td>Long</td>

        <td>Returns 1 if the product has been activated or 0 if the product is in trial mode</td>
      </tr>

      <tr>
        <td>2</td>

        <td>TrialDayCount</td>

        <td>Long</td>

        <td>Returns the number of days that the product can be trialed for</td>
      </tr>

      <tr>
        <td>3</td>

        <td>DaysUsed</td>

        <td>Long</td>

        <td>Returns the number of days that the product has already been trialed for</td>
      </tr>
    </table>

    <h6><a name="id567535" id="id567535"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
