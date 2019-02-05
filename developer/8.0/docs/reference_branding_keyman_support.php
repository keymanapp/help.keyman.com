<?php
  require_once('includes/template.php');

  head([
    'title' => "keyman_support.xsl: Keyman Desktop Configuration window - Support tab"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">keyman_support.xsl: Keyman Desktop Configuration window - Support tab</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding_keyman_options.php">Prev</a> </td><th width="60%" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_manualactivate.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_branding_keyman_support">keyman_support.xsl: Keyman Desktop Configuration window - Support tab</h3></div></div></div><p>
    This tab shows support information for the product.
  </p><h4><a name="id683819"></a>XML Parameters</h4><pre class="programlisting">
&lt;support&gt;
  &lt;productid&gt;(product ID)&lt;/productid&gt;
  &lt;productname&gt;(product name)&lt;/productname&gt;
  &lt;version&gt;(product version)&lt;/version&gt;
  &lt;engineversion&gt;(engine version)&lt;/engineversion&gt;
  &lt;engineinstallpath&gt;(engine install path)&lt;/engineinstallpath&gt;
  &lt;activationstate&gt;
    &lt;activated /&gt; | &lt;trialdaycount&gt;(days available in trial)&lt;/trialdaycount&gt;&lt;daysused&gt;(days used in trial)&lt;/daysused&gt;
  &lt;/activationstate&gt;
&lt;/support&gt;
  </pre><h4><a name="id683827"></a>Targets</h4><table id="id683830"><tr>
      <th>Target</th>
      <th>Parameters</th>
      <th>Description</th>
    </tr><tr>
      <td>keyman:support_diagnostics</td>
      <td></td>
      <td>Opens Tavultesoft Diagnostics tool</td>
    </tr><tr>
      <td>keyman:support_online</td>
      <td></td>
      <td>Opens Tavultesoft Online Support website</td>
    </tr><tr>
      <td>keyman:support_updatecheck</td>
      <td></td>
      <td>Checks for updates for the product online</td>
    </tr><tr>
      <td>keyman:support_proxyconfig</td>
      <td></td>
      <td>Opens the Proxy Configuration dialog box</td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding_keyman_options.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_manualactivate.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">keyman_options.xsl: Keyman Desktop Configuration window - Options tab </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> manualactivate.xsl: Manual Activation dialog</td></tr></table></div>
