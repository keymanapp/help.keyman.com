<?php
  require_once('includes/template.php');

  head([
    'title' => "proxyconfiguration.xsl: Proxy Configuration dialog"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">proxyconfiguration.xsl: Proxy Configuration dialog</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding_onlineupdate.php">Prev</a> </td><th width="60%" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_splash.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_branding_proxyconfiguration">proxyconfiguration.xsl: Proxy Configuration dialog</h3></div></div></div><h4><a name="id684182"></a>XML Parameters</h4><pre class="programlisting">
&lt;Proxy&gt;
  &lt;Server&gt;(proxy server name)&lt;/Server&gt;
  &lt;Port&gt;(proxy server port)&lt;/Port&gt;
&lt;/Proxy&gt;
  </pre><h4><a name="id684189"></a>Targets</h4><table id="id684193"><tr>
      <th>Target</th>
      <th>Parameters</th>
      <th>Description</th>
    </tr><tr>
      <td>keyman:footer_ok</td>
      <td>server: Server name from dialog; port: Port value from dialog</td>
      <td>Saves proxy settings and closes the dialog</td>
    </tr><tr>
      <td>keyman:footer_cancel</td>
      <td></td>
      <td>Cancels the dialog</td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding_onlineupdate.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_splash.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">onlineupdate.xsl: Online Update dialog </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> splash.xsl: Splash dialog</td></tr></table></div>
