<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProduct::Activate"
  ]);
?>

<h1><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct" title=
      "IKeymanProduct Interface">IKeymanProduct</a>::Activate</h1>

    <p>Attempt to activate the product using the activation blob provided. If activation fails, a reason will be given in an exception.</p>

    <h6><a name="id567304" id="id567304"></a>Declaration</h6>
    <pre class="programlisting">
Sub Activate(ActivationResponseBlob As String)
</pre>

    <h6><a name="id567308" id="id567308"></a>Parameters</h6>

    <table id="id567325">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>ActivationResponseBlob</td>

        <td>String</td>

        <td>A text string as returned from the Tavultesoft Activation Server</td>
      </tr>
    </table>

    <h6><a name="id567334" id="id567334"></a>Example Code</h6>
    <pre class="programlisting">
            

function ActivateProduct(const licno: WideString): Boolean;
var
  s: string;
  arb: WideString;
begin
  Result := False;

  { Validate the licence number }

  try
    FActiveProduct.GetActivationRequestCode(licno, arb);
  except
    on E:EOleException do
    begin
      WideShowMessage(MsgFromIdFormat(SKActivation_InvalidLicenceNumber, [E.Message]));
      Exit;
    end;
  end;

  { Connect to tavultesoft.com and get the response blob }

  try
    with THTTPUploader.Create(nil) do
    try
      Fields.Add(&#39;LicenceNumber&#39;, licno);
      Fields.Add(&#39;ActivationRequestBlob&#39;, arb);
      Proxy.Server := GetProxySettings.Server;
      Proxy.Port := GetProxySettings.Port;

      Request.Agent := &#39;Tavultesoft Keyman/&#39;+GetVersionString;
      Request.Protocol := Upload_Protocol;
      Request.HostName := Upload_Server;
      Request.UrlPath := UploadPath_Activation; // &#39;/prog/70/activation.php&#39;;
      Upload;
      s := Trim(Response.MessageBodyAsString);
    finally
      Free;
    end;
  except
    on E:Exception do
    begin
      WideShowMessage(MsgFromIdFormat(SKActivation_ErrorConnectingToTavultesoft, [E.Message]));
      Exit;
    end;
  end;

  { Check that no trappable errors occurred }

  if Copy(s, 1, 7) = &#39;&lt;error&gt;&#39; then
  begin
    Delete(s,1,7);
    if Pos(&#39;&lt;/error&gt;&#39;, s) &gt; 0 then Delete(s, Pos(&#39;&lt;/error&gt;&#39;, s), Length(s));
    WideShowMessage(MsgFromIdFormat(SKActivation_ErrorActivating, [s]));
    Exit;
  end;

  { Pass the response blob to kmcomapi for validation and product activation }

  try
    FActiveProduct.Activate(s);
  except
    on E:EOleException do
    begin
      WideShowMessage(MsgFromIdFormat(SKActivation_ErrorActivating, [E.Message]));
      Exit;
    end;
  end;

  WideShowMessage(MsgFromId(SKActivation_Success));
  Result := True;
end;
          
          
</pre>
