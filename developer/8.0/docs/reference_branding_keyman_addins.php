<?php
  require_once('includes/template.php');

  head([
    'title' => "keyman_addins.xsl: Keyman Desktop Configuration window - Addins tab"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">keyman_addins.xsl: Keyman Desktop Configuration window - Addins tab</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding_keyman.php">Prev</a> </td><th width="60%" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_keyman_footer.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_branding_keyman_addins">keyman_addins.xsl: Keyman Desktop Configuration window - Addins tab</h3></div></div></div><p>
    This tab shows the addins installed for Keyman Engine.
  </p><h4><a name="id669932"></a>XML Parameters</h4><p>
    The addins are listed as children of KeymanAddinsInstalled:
  </p><pre class="programlisting">
&lt;KeymanAddinInstalled&gt;
  &lt;index&gt;##&lt;/index&gt;
  &lt;name&gt;(Short name of addin)&lt;/name&gt;
  &lt;description&gt;(Descriptive name of addin)&lt;/description&gt;
  &lt;filename&gt;(Full path and filename of addin)&lt;/filename&gt;
  [&lt;allusers /&gt;]
&lt;/KeymanAddinInstalled&gt;
  </pre><h4><a name="id669943"></a>Targets</h4><table id="id669947"><tr>
      <th>Target</th>
      <th>Parameters</th>
      <th>Description</th>
    </tr><tr>
      <td>keyman:addin_configure</td>
      <td>index: Index of the addin</td>
      <td>Opens the addin configuration dialog for the addin (note: as of Keyman 7.0.230.0, no addins had configuration requirements)</td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding_keyman.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_keyman_footer.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">keyman.xsl: Keyman Desktop Configuration Window </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> keyman_footer.xsl: Keyman Desktop Configuration window - Footer</td></tr></table></div>
