<?php
  require_once('includes/template.php');

  head([
    'title' => "onlineupdate.xsl: Online Update dialog"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">onlineupdate.xsl: Online Update dialog</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding_manualactivate.php">Prev</a> </td><th width="60%" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_proxyconfiguration.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_branding_onlineupdate">onlineupdate.xsl: Online Update dialog</h3></div></div></div><p>
    This dialog box is displayed when there is an online update available for the product.
  </p><h4><a name="id684062"></a>XML Parameters</h4><pre class="programlisting">
&lt;NewVersion&gt;(new version number)&lt;/NewVersion&gt;
&lt;CurrentVersion&gt;(current version number)&lt;/CurrentVersion&gt;
&lt;PatchSize&gt;(patch size in KB)&lt;/PatchSize&gt;
&lt;PatchURL&gt;(url of patch)&lt;/PatchURL&gt;
&lt;DownloadURL&gt;(download url for full upgrade if patch not available)&lt;/DownloadURL&gt;
&lt;NewVersionText&gt;(text for upgrade)&lt;/NewVersionText&gt;
&lt;PatchText&gt;(patch message)&lt;/PatchText&gt;
  </pre><h4><a name="id684069"></a>Targets</h4><table id="id684073"><tr>
      <th>Target</th>
      <th>Parameters</th>
      <th>Description</th>
    </tr><tr>
      <td>keyman:keyboard_install</td>
      <td></td>
      <td>
        Opens the Browse for Keyboard dialog, and then the Install Keyboard dialog.
      </td>
    </tr><tr>
      <td>keyman:openwebsite</td>
      <td></td>
      <td>Opens the URL provided by the DownloadURL parameter</td>
    </tr><tr>
      <td>keyman:visitwebsitenow</td>
      <td></td>
      <td>Opens the URL provided by the DownloadURL parameter and closes the dialog</td>
    </tr><tr>
      <td>keyman:visitwebsitelater</td>
      <td></td>
      <td>Cancels the dialog</td>
    </tr><tr>
      <td>keyman:installnow</td>
      <td></td>
      <td>Closes the dialog and downloads the patch for installation</td>
    </tr><tr>
      <td>keyman:installlater</td>
      <td></td>
      <td>Cancels the dialog</td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding_manualactivate.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_proxyconfiguration.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">manualactivate.xsl: Manual Activation dialog </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> proxyconfiguration.xsl: Proxy Configuration dialog</td></tr></table></div>
