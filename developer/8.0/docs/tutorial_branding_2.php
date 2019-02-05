<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 2: Choosing a user interface model"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 2: Choosing a user interface model</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_branding_1.php">Prev</a> </td><th width="60%" align="center">Branding Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_branding_3.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="tutorial_branding_2">Step 2: Choosing a user interface model</h3></div></div></div><p>In the Branding Editor, click the <span class="guibutton">Details</span> tab.</p><p>
    A Keyman Engine-based product can:
    </p><div class="itemizedlist"><ul type="disc"><li><p>
          Use the Keyman Desktop user interface, customised to whatever degree you wish, or
        </p></li><li><p>
          Use its own application that controls Keyman Engine through the <a class="link" href="comapi.php" title="Tavultesoft Keyman Engine COM API">Keyman COM API</a>.
        </p></li></ul></div><p>
  </p><h4><a name="id618463"></a>Keyman Desktop User Interface</h4><p>
    Use the Keyman Desktop user interface when you don't need additional functionality that is not in Keyman Desktop.
  </p><p>
    Virtually all of the Keyman Desktop user interface is rendered in HTML. We use a technology
    called XML+XSLT to do a contextual rendering of the user interface.  Commands can be sent
    to Keyman Engine by accessing a link to "keyman:cmd?param/=value/". A reference on each of the screens in
    Keyman Desktop Configuration is available <a class="link" href="reference_branding.php" title="Reference - Branding Toolkit for Keyman Developer Professional">here</a>.
  </p><p>
    The Keyman Desktop user interface is also localizable. The file locale.xml contains all the
    text in the user interface, and it is recommended that you continue to use this file for all your customised strings.
  </p><p>
    You will find the <a class="link" href="">Localization of Keyman Desktop</a> topic helpful for understanding
    how to localize your product.
  </p><h4><a name="id618491"></a>Your own User Interface</h4><p>
    Developing your own user interface is not difficult, but it is outside the scope of this tutorial.  A simple example
    is included in the Samples folder for Keyman Developer.  You will notice that when you select to use your own User
    Interface in the Branding Editor, the Strings and Config UI tabs become disabled, as they are no longer relevant.
    However, the Icons and Tray Menu tabs are relevant as long as you use keyman.exe as the product controller, which
    is recommended.
  </p><p>
    Creating your own product controller is certainly possible, but the major disadvantage is that you lose access to
    the On Screen Keyboard.
  </p><p>
    <a class="xref" href="tutorial_branding_3.php" title="Step 3: Editing icons for the product">Step 3: Editing icons for the product</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_branding_1.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_branding_3.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 1: Choosing a licensing model </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 3: Editing icons for the product</td></tr></table></div>
