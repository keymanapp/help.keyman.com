<?php
  require_once('includes/template.php');

  head([
    'title' => "splash.xsl: Splash dialog"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">splash.xsl: Splash dialog</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding_proxyconfiguration.php">Prev</a> </td><th width="60%" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_welcome.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_branding_splash">splash.xsl: Splash dialog</h3></div></div></div><h4><a name="id684250"></a>XML Parameters</h4><pre class="programlisting">
[&lt;Evaluation /&gt;]
&lt;EvaluationText&gt;("You are on day 1 of 30")&lt;/EvaluationText&gt;
&lt;Version&gt;(Version 1.2.3.4)&lt;/Version&gt;
  </pre><h4><a name="id684257"></a>Targets</h4><table id="id684261"><tr>
      <th>Target</th>
      <th>Parameters</th>
      <th>Description</th>
    </tr><tr>
      <td>keyman:buy</td>
      <td></td>
      <td>Opens the Tavultesoft Online Store website</td>
    </tr><tr>
      <td>keyman:activate</td>
      <td></td>
      <td>Opens the Product Activation dialog</td>
    </tr><tr>
      <td>keyman:evaluate</td>
      <td></td>
      <td>If the evaluation period has not expired, starts the product in Evaluation mode</td>
    </tr><tr>
      <td>keyman:exit</td>
      <td></td>
      <td>Cancels the splash dialog and exits the product</td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding_proxyconfiguration.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_welcome.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">proxyconfiguration.xsl: Proxy Configuration dialog </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> welcome.xsl: Welcome dialog</td></tr></table></div>
