<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 4: Filling in package details"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 4: Filling in package details</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_package_3.php">Prev</a> </td><th width="60%" align="center">Package Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_package_5.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="tutorial_package_4">Step 4: Filling in package details</h3></div></div></div><p>
    Click on the Details tab in the Package Editor.  You should fill in as many details as you can on this page.
  </p><div class="itemizedlist"><ul type="disc"><li><p>Package Name</p><p>
        The Package Name will be displayed in the package install dialog, and within Keyman Desktop Configuration, wherever the
        package is referred to.
      </p></li><li><p>Readme File</p><p>
        Select the readme file from the list of files you added in the previous step.  Remember that it should be a HTML file
        for optimum clarity.
      </p></li><li><p>Version</p><p>
        A version number for the package is important - it helps the your users know that they are using the most recent update
        of your package.  The version format you should use is '1.0'.  When making a major change to your package or
        keyboards in your package, increment the first part and set the second part to, e.g. '2.0'; 
        when making a bug fix or a minor update, increment the second part, e.g. '1.1'.
      </p><p>
            Version numbers should be in the form major.minor[.subversion].  Subversion is optional but 
            is helpful for small bug fix releases.  Each of the sections of the version should be an integer.
            Keyman Desktop does integer comparisons on the version numbers, so, for example, version 2.01 is 
            regarded as older than version 2.2.  Alphabetic or date formats should be avoided as the installer
            for the keyboard cannot determine which version is older reliably.
      </p></li><li><p>Copyright</p><p>
        Enter copyright details for your package and keyboards.  Keep this reasonably short or it won't be clear for end users.
      </p></li><li><p>Author</p><p>
        Enter your name or the name of your company.
      </p></li><li><p>Email</p><p>
        Enter a contact email address where package users can contact you.  If you don't want to be contacted via email, leave
        this field empty
      </p></li><li><p>Website</p><p>
        Enter the name of the website where you will have information about this keyboard.  If you want to host it on tavultesoft.com,
        you could enter http://www.tavultesoft.com/keyman/downloads/keyboards/
      </p></li><li><p>Image file (Professional Edition only)</p><p>
        Select the splash image file that you created in Step 2 from the list of files in your package.
      </p></li></ul></div><p>
    <a class="xref" href="tutorial_package_5.php" title="Step 5: Shortcuts">Step 5: Shortcuts</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_package_3.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_package.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_package_5.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 3: Creating a package and adding files </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 5: Shortcuts</td></tr></table></div>
