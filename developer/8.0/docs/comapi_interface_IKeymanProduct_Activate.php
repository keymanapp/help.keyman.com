<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProduct::Activate"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanProduct::Activate</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanProduct.php">Prev</a> </td><th width="60%" align="center">IKeymanProduct Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanProduct_AllUsers.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanProduct_Activate"><a class="link" href="comapi_interface_IKeymanProduct.php" title="IKeymanProduct Interface">IKeymanProduct</a>::Activate</h5></div></div></div><p>
            Attempt to activate the product using the activation blob provided.  If activation fails, a reason will be given in an
            exception.
          </p><h6><a name="id667841"></a>Declaration</h6><pre class="programlisting">Sub Activate(ActivationResponseBlob As String)</pre><h6><a name="id667847"></a>Parameters</h6><table id="id667850"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr><tr><td>1</td><td>ActivationResponseBlob</td><td>String</td><td>A text string as returned from the Tavultesoft Activation Server</td></tr></table><h6><a name="id667873"></a>Example Code</h6><pre class="programlisting">
            

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
      Fields.Add('LicenceNumber', licno);
      Fields.Add('ActivationRequestBlob', arb);
      Proxy.Server := GetProxySettings.Server;
      Proxy.Port := GetProxySettings.Port;

      Request.Agent := 'Tavultesoft Keyman/'+GetVersionString;
      Request.Protocol := Upload_Protocol;
      Request.HostName := Upload_Server;
      Request.UrlPath := UploadPath_Activation; // '/prog/70/activation.php';
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

  if Copy(s, 1, 7) = '&lt;error&gt;' then
  begin
    Delete(s,1,7);
    if Pos('&lt;/error&gt;', s) &gt; 0 then Delete(s, Pos('&lt;/error&gt;', s), Length(s));
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
          
          </pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanProduct.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanProduct.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanProduct_AllUsers.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanProduct Interface </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanProduct::AllUsers</td></tr></table></div>
