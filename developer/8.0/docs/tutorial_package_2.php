<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 2: Creating Additional Files for the Package"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 2: Creating Additional Files for the Package</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_package_1.php">Prev</a> </td><th width="60%" align="center">Package Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_package_3.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="tutorial_package_2">Step 2: Creating Additional Files for the Package</h3></div></div></div><p>
    You should create some additional files for a package.  Below are a list of the typical files
    that you would create for a package.
  </p><div class="orderedlist"><ol type="1"><li><p>readme.htm</p><p>
        A short description of the package, its use restrictions, and what it includes. Try to
        keep the readme under 10 lines long. The readme is displayed in the package install dialog
        and should be an html file for optimal formatting.
      </p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>
        As the package has not been installed at this stage, you should avoid using fonts
        that may only be available in the package. You may find that it is necessary to create an
        image of the text if you want the readme to be in a language not common to Windows.
        </p></div><p>
        Create the HTML file in any HTML editor.
      </p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>
        If using Microsoft Word, choose HTML (clean) when saving to create a smaller file.
        </p></div><p>
        Note, if your HTML editor puts images into a subfolder, you will need to edit the HTML
        source so that all files are in the same folder -- the package builder will not maintain
        subfolders. You can easily edit the HTML source in Keyman Developer.
      </p><p>
        Also, if your welcome or readme files use embedded external images, stylesheets,
        javascript or other files, you will need to add these files to your package as well.
      </p></li><li><p>welcome.htm</p><p>
        When including an introductory help file in your package, you must name the file welcome.htm.
        This file will be detected during install and displayed (in a window roughly two thirds of
        the user's screen width) after the package install completes successfully.  Make sure that
        you design your HTML file so that it can be resized to fit the user's screen - avoid extra wide
        tables or wide fixed width elements.
      </p><p>
        At this stage of the installation, fonts in the package have been installed, so you can
        include text that uses those fonts.
      </p><p>
        Welcome.htm will also be accessible after installation from Keyman Configuration under the
        Package Options menu, and from the Keyboard Help item and On Screen Keyboard toolbar button.
      </p><p>
        The intention of welcome.htm is to provide instructions on getting started with your keyboards.
      </p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>
        Useful information to include in welcome.htm is:</p><div class="itemizedlist"><ul type="disc"><li><p>
          key sequences - especially for characters that may not be immediately obvious.
          </p></li><li><p>
          names of fonts in the package.
          </p></li><li><p>
          names of keyboards in the package.
          </p></li><li><p>
          links to additional help on your website or more extensive documentation files in the package.
          </p></li><li><p>
          a link to an official distribution site for your package (even if it is the Tavultesoft website) - so that
          users know where to find the latest version of your package.
          </p></li></ul></div></div><p>
        You should avoid including instructions for the use of Keyman Desktop itself - although a basic
        "click the Keyman icon and choose Quick French" would be helpful.
      </p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>
        If you want links to your website to open in the user's preferred browser, preface the
        href link with "link:", e.g. "&lt;a href="link:http://www.tavultesoft.com/"&gt;website&lt;/a&gt;"
      </p><p>
        The "link:" will open the referred file in the default application - that is, a web browser
        for URLs and links, Notepad for .txt files, Adobe Reader for PDFs. You can use "link:" to open
        any of the files in the package, e.g. "link:docs.pdf" will open the file docs.pdf in Adobe Reader.
      </p></div><p>
        To save you the effort of writing a welcome and readme file for the Quick French example, we
        have placed some in the Samples/QFrench folder!
      </p><p>
        If you create documents in other formats, for example PDF or printable documentation, you
        should link to that in the welcome.htm.
      </p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>
          You can include multiple "welcome.htm" files for different languages by appending a hyphen and 
          the ISO 639-3 language code to the filename, for example welcome-fra.htm for French.  This requires
          build 7.0.239.0 or later.
        </p></div></li><li><p>Fonts</p><p>A font is the single most important item to include with a keyboard - if the characters of the
      language you are supporting are not in fonts included with Windows.  Installing fonts in Windows is
      tedious, so make sure that your users don't have to locate and install fonts themselves!</p><p>
        .TTF, .OTF, and .TTC fonts will be installed by the package installer, and uninstalled when the
        package is uninstalled. A list of the fonts installed is displayed in the Install Package dialog.
      </p></li><li><p>Keyboards
      </p><p>
        Add the .kmx compiled keyboard to the package. You can add multiple keyboards to the package.
      </p><p>
        Keyman Desktop Light will only allow the user to install two keyboards in a package. Which
        ones get installed must be chosen by the user when they install the package.
      </p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>
        Don't forget to add the On Screen keyboard .KVK file associated with your keyboard to the
        package. KVK files are not compiled into the .KMX file -- although the .ICO/.BMP is.
      </p></div></li><li><p>Documentation</p><p>
        The two preferred documentation formats are HTML and PDF. You should avoid .DOC, .RTF, and other
        formats -- .DOC files in particular are not recommended due to the possibility of macro viruses.
      </p><p>
        Remember that HTML files can be displayed on any computer without additional software. PDF files
        require Adobe Reader or a compatible PDF viewer application.  You may choose to include both and 
        HTML documentation - PDF documents often print better than HTML documents.
      </p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>
        If you use HTML, don't forget to also add all the included files such as images and stylesheets!
      </p></div></li><li><p>Splash Image</p><p>
        The splash image is a 140x250 pixel image that is displayed when the package is installed, at the
        left of the Package Install dialog.  Including a splash image makes your package look more professional
        and polished, so a splash image is recommended!
      </p></li><li><p>User Interface Translation Files (7.0.239.0 or later)</p><p>
        You can include user interface translation files in your package - these will be automatically
        available once you install the package.  The user interface files are called locale-xxx.xml, where
        xxx is the ISO639-3 code for the language.  The basic English locale.xml file is available in
        [Program Files]\Tavultesoft\Keyman Developer 7.0\Redist\UI.  Information on the locale.xml file
        format is available <a class="link" href="">here</a>.
      </p></li></ol></div><p>
    <a class="xref" href="tutorial_package_3.php" title="Step 3: Creating a package and adding files">Step 3: Creating a package and adding files</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_package_1.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_package.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_package_3.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 1: What do we include? </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 3: Creating a package and adding files</td></tr></table></div>
