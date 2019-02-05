<?php
  require_once('includes/template.php');

  head([
    'title' => "manualactivate.xsl: Manual Activation dialog"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">manualactivate.xsl: Manual Activation dialog</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding_keyman_support.php">Prev</a> </td><th width="60%" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_onlineupdate.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_branding_manualactivate">manualactivate.xsl: Manual Activation dialog</h3></div></div></div><p>
    The manual activation dialog is opened when the user does not have Internet access, and provides activation options offline.
  </p><h4><a name="id683915"></a>XML Parameters</h4><h4><a name="id683919"></a>Targets</h4><table id="id683923"><tr>
      <th>Target</th>
      <th>Parameters</th>
      <th>Description</th>
    </tr><tr>
      <td>keyman:savetoclipboard</td>
      <td></td>
      <td>
        Copies the activation request blob to the clipboard
      </td>
    </tr><tr>
      <td>keyman:savetodisk</td>
      <td></td>
      <td>Saves the activation request blob and the Tavultesoft Activation Utility to a removable disk</td>
    </tr><tr>
      <td>keyman:savetofile</td>
      <td></td>
      <td>Saves the activation request blob to a file</td>
    </tr><tr>
      <td>keyman:loadfromclipboard</td>
      <td></td>
      <td>Loads the activation response blob from the clipboard and attempts to activate. If successful, closes the dialog</td>
    </tr><tr>
      <td>keyman:loadfromdisk</td>
      <td></td>
      <td>
        Loads the activation response blob from a removable disk and attempts to activate. If successful, closes the dialog and deletes
        the activation response blob and Tavultesoft Activation Utility from the removable disk
      </td>
    </tr><tr>
      <td>keyman:loadfromfile</td>
      <td></td>
      <td>Loads the activation response blob from a file and attempts to activate. If successful, closes the dialog</td>
    </tr><tr>
      <td>keyman:cancel</td>
      <td></td>
      <td>Cancels the dialog</td>
    </tr><tr>
      <td>keyman:help_send</td>
      <td></td>
      <td>Opens the help topic identified by context_manualactivate</td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding_keyman_support.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_onlineupdate.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">keyman_support.xsl: Keyman Desktop Configuration window - Support tab </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> onlineupdate.xsl: Online Update dialog</td></tr></table></div>
