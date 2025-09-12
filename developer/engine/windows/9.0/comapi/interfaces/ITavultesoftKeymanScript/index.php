<?php
  require_once('includes/template.php');

  head([
    'title' => "ITavultesoftKeymanScript Interface"
  ]);
?>

<h1>ITavultesoftKeymanScript Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeymanScript/GetProductActivationInfo">ITavultesoftKeymanScript::GetProductActivationInfo</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeymanScript/GetProductActivationRequest">ITavultesoftKeymanScript::GetProductActivationRequest</a></span></dt>
      </dl>
    </div>

    <p>interface ITavultesoftKeymanScript : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman" title=
    "ITavultesoftKeyman Interface">ITavultesoftKeyman</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Expanded interface for ITavultesoftKeyman for script engines. This interface provides access to product activation information which
    is not available due to restrictions in scripting COM objects.</p>

    <h5><a name="id574010" id="id574010"></a>Interface Methods</h5>

    <table id="id574005">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeymanScript/GetProductActivationInfo" title=
          "ITavultesoftKeymanScript::GetProductActivationInfo">GetProductActivationInfo</a>
        </td>

        <td>Method</td>

        <td>Function GetProductActivationInfo(ByVal ProductID as Long, ByVal InfoType As Long) As Long</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeymanScript/GetProductActivationRequest" title=
          "ITavultesoftKeymanScript::GetProductActivationRequest">GetProductActivationRequest</a>
        </td>

        <td>Method</td>

        <td>Function GetProductActivationRequest(ByVal ProductID as Long, ByVal LicenceCode As String) As String</td>
      </tr>
    </table>
