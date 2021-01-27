<?php
  require_once('includes/template.php');
  
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']
  ]);
?>
<body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Manually Activating Keyman Desktop</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="context_activate.php">Prev</a> </td><th width="60%" align="center">Chapter 5. Context Help</th><td width="20%" align="right"> <a accesskey="n" href="context_tsactivate.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="context_manualactivate">Manually Activating Keyman Desktop</h2></div></div></div><p>
    If your computer has limited or no internet access, you can manually activate Keyman Desktop, after <a class="link" href="main_purchasing_keyman.php" title="Purchasing Keyman Desktop">purchasing a licence</a>.</p><div class="orderedlist"><ol type="1"><li>Open Keyman Desktop and select Enter Licence Code, either from the Keyman Splash Screen or the Keyman Configuration menu.</li><li><p>Enter your licence and click the Manual Activation hyperlink. 
  </p><span class="inlinemediaobject"><img src="images%5Ccontext_activate_05.png"></span><p>The following window will be displayed:</p><span class="inlinemediaobject"><img src="images%5Ccontext_activate_06.png"></span></li><li><p>Choose between the three options for saving your activation request:</p><div class="informaltable"><table border="0"><colgroup><col><col></colgroup><tbody><tr><td>
                <p>To Clipboard</p>
              </td><td>
                <p>This option is useful when your computer has enough internet access to send email. When this option is selected, your activation request data is sent to your Windows clipboard. You will need to paste it into an email before you can send it (see step 2). Note: the activation request data will only remain in your clipboard until another item is copied over it.</p>
              </td></tr><tr><td>
                <p>To Removable Disk</p>
              </td><td>
                <p>This option is useful when your computer has no internet access and you have a removable disk. Your activation response data will be saved to your removable disk. It can then be transferred to a computer with internet access.</p>
                <p>When this option is selected, you may be prompted to choose your removable disk from a list of drives. A .KER (Keyman Activation Request) file will be saved to your removable disk along with the <span class="application">Keyman Activation Utility</span>. The Keyman Activation Utility can process the .KER file through the Tavultesoft servers from a computer with internet access.
          </p>
              </td></tr><tr><td>
                <p>To File</p>
              </td><td>
                <p>This option is useful when your computer has no internet access but is part of a network where some computers do have internet access. You can save your activation response data to your local or network drive. It can then be retrieved from a networked computer with internet access.</p>
                <p>When this option is selected, the Save Activation Response to Disk dialog box is displayed. Select a location, enter a file name and click <span class="guibutton">Save</span>. A .KER (Keyman Activation Request) file will be saved in the selected location.
          </p>
              </td></tr></tbody></table></div></li><li><p>Transmit your activation request to Tavultesoft. This will depend on how your activation request has been saved. 
        </p><div class="itemizedlist"><ul type="disc"><li>If your activation request has been saved to the clipboard or to a file: From a computer with email access, send an email to <code class="email">&lt;<a class="email" href="mailto:support@tavultesoft.com">support@tavultesoft.com</a>&gt;</code>. The activation request data MUST be in the body of the email or attached as a .KER file. 
      </li><li>If your activation request has been saved to a removable disk: From a computer with internet access, run the <a class="link" href="context_tsactivate.php" title="Using Tavultesoft Online Activation Utility"><span class="application">Keyman Activation
        Utility</span></a> (tsactivate.exe) located on your removable disk. This program will process your activation request through the Tavultesoft servers. It will then generate a .KES response file for you to transfer back to your original computer (see step 3).
      </li></ul></div></li><li><p>After your activation request is processed by Tavultesoft, you will receive an activation response. Choose between the options below for loading your activation response from your original computer. Once you have loaded your activation response, your licence of Keyman Desktop will be activated. </p><div class="informaltable"><table border="0"><colgroup><col><col></colgroup><tbody><tr><td><p>From Clipboard</p></td><td><p>
            If you have received an activation response via email, you can activate <span class="application">Keyman Desktop</span> by copying the activation response data to the Windows clipboard and then loading it from the clipboard to the Manual Activation window. </p></td></tr><tr><td><p>From Removable Disk</p></td><td><p>
            If you used the Removable Disk method in step 1 and used the <span class="application">Keyman Activation Utility</span>
            to process the activation request, you can load the activation response directly from the removable
            disk using this method. When this option is selected a list of drives is displayed.
            Select the removable disk drive and click <span class="guibutton">OK</span>.
          </p></td></tr><tr><td><p>From File</p></td><td><p>
            If you have received an activation response as a .KES (Keyman Activation Response) file, you can
            activate <span class="application">Keyman Desktop</span> using this method. Browse to the .KES file you have
            received, select it and click <span class="guibutton">Open</span>.
          </p></td></tr></tbody></table></div></li></ol></div><h3><a name="id761078"></a>Related Topics</h3><div class="itemizedlist"><ul type="disc"><li><p>
        <a class="xref" href="context_activate.php" title="Activating Keyman Desktop">
    Activating Keyman Desktop
  </a>
      </p></li><li><p>
        <a class="xref" href="context_tsactivate.php" title="Using Tavultesoft Online Activation Utility">Using Tavultesoft Online Activation Utility</a>
      </p></li><li><p>
        <a class="xref" href="main_purchasing_keyman.php" title="Purchasing Keyman Desktop">Purchasing Keyman Desktop</a>
      </p></li><li><p>
        <a class="xref" href="context_splash.php" title="Splash Screen">Splash Screen</a>
      </p></li><li><p>
        <a class="xref" href="guide_install.php" title="Installing Keyman Desktop">Installing Keyman Desktop</a>
      </p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="context_activate.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="context.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="context_tsactivate.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">
    Activating Keyman Desktop
   </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Using Tavultesoft Online Activation Utility</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
