<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 5: Compile your distribution</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_distribution_4.php">Prev</a> </td><th width="60%" align="center">Distribution Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_crm.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="tutorial_distribution_5"></a>Step 5: Compile your distribution</h3></div></div></div><p>
    In the Distribution Editor, click the <span class="guibutton">Compile</span> tab.
  </p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>
      You must be connected to the Internet to compile your product.  The compile connects to the tavultesoft.com
      server to encrypt an dprotect your keyboards and product.
    </p></div><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>WiX requires the .NET framework 1.1 to compile your product.</p></div><p>
    If this is the first time that you are compiling a distribution with the branding source file, a new Product entry
    will be created on the Tavultesoft server
    (<a class="ulink" href="https://secure.tavultesoft.com/account/home/online/" target="_blank">https://secure.tavultesoft.com/account/home/online/</a>).
  </p><p>
    When compiling a product that utilises a global or freeware licence, you will be required to purchase a distribution
    licence for the keyboards in the installer before compilation will complete.  Please contact Tavultesoft Sales for assistance on this
    step.
  </p><p>
    Click <span class="guibutton">Compile</span>.  You may be prompted to login to the tavultesoft.com server.  After a few seconds,
    you should have a .msi file that will install your product!
  </p><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>
      Regarding copying installer source files: the source file includes globally unique identifiers (GUIDs) that are specific
      to that installer.  If you copy the source, ensure you delete the GUIDs from the XML source (see the <span class="guibutton">Source</span> tab)
      before compiling the new file.  The GUIDs will be regenerated when you save the file.
    </p></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_distribution_4.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_distribution.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_crm.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 4: Create shortcuts </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> CRM Tutorial</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
