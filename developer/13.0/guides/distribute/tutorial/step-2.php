<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 2: Creating Additional Files for the Package"
  ]);
?>

<h1>Step 2: Creating Additional Files for the Package</h1>

<p>You should create some additional files for a package. Below are a list of the typical files that you would create for a
package.</p>

<dl>
  <dt>readme.htm</dt>
  <dd>
    <p>A short description of the package, its use restrictions, and what it includes. Try to keep the readme under 10 lines long.
    The readme is displayed in the package install dialog and should be an html file for optimal formatting.</p>

    <aside>
      <h3>Tip</h3>

      <p>As the package has not been installed at this stage, you should avoid using fonts that may only be available in the package.
      You may find that it is necessary to create an image of the text if you want the readme to be in a language not common to
      Windows.</p>
    </aside>

    <p>Create the HTML file in any HTML editor.</p>

    <aside>
      <h3>Tip</h3>

      <p>If using Microsoft Word, choose HTML (clean) when saving to create a smaller file.</p>
    </aside>

    <p>Note, if your HTML editor puts images into a subfolder, you will need to edit the HTML source so that all files are in the
    same folder -- the package builder will not maintain subfolders. You can easily edit the HTML source in Keyman Developer.</p>

    <p>Also, if your welcome or readme files use embedded external images, stylesheets, javascript or other files, you will need to
    add these files to your package as well.</p>
  </dd>

  <dt>welcome.htm</dt>

  <dd>
    <p>When including an introductory help file in your package, you must name the file welcome.htm. This file will be detected
    during install and displayed (in a window roughly two thirds of the user's screen width) after the package install completes
    successfully. Make sure that you design your HTML file so that it can be resized to fit the user's screen - avoid extra wide
    tables or wide fixed width elements.</p>

    <p>At this stage of the installation, fonts in the package have been installed, so you can include text that uses those
    fonts.</p>

    <p>Welcome.htm will also be accessible after installation from Keyman Configuration under the Package Options menu, and from the
    Keyboard Help item and On Screen Keyboard toolbar button.</p>

    <p>The intention of welcome.htm is to provide instructions on getting started with your keyboards.</p>

    <aside>
      <h3>Tip</h3>

      <p>Useful information to include in welcome.htm is:</p>

      <ul type="disc">
        <li>key sequences - especially for characters that may not be immediately obvious.</li>
        <li>names of fonts in the package.</li>
        <li>names of keyboards in the package.</li>
        <li>links to additional help on your website or more extensive documentation files in the package.</li>
        <li>a link to an official distribution site for your package (even if it is the Keyman website) - so that users know
          where to find the latest version of your package.</li>
      </ul>
    </aside>

    <p>You should avoid including instructions for the use of Keyman Desktop itself - although a basic "click the Keyman icon
    and choose Quick French" would be helpful.</p>

    <aside>
      <h3>Tip</h3>

      <p>If you want links to your website to open in the user's preferred browser, preface the href link with <code class='language-none'>link:</code>,
      e.g. <code class='language-none'>&lt;a href="link:http://keyman.com/">website&lt;/a></code></p>

      <p>The <code class='language-none'>link:</code> sceheme will open the referred file in the default application - that is, a web browser for
      URLs and links, Notepad for .txt files, Adobe Reader for PDFs. You can use <code class='language-none'>link:</code> to open any of the files in
      the package, e.g. <code class='language-none'>link:docs.pdf</code> will open the file docs.pdf in Adobe Reader or the default PDF reader on the
      system.</p>
    </aside>

    <p>To save you the effort of writing a welcome and readme file for the Quick French example, we have placed some in the
    Samples/QFrench folder.</p>

    <p>If you create documents in other formats, for example PDF or printable documentation, you should link to that in the
    welcome.htm.</p>

    <aside>
      <h3>Tip</h3>

      <p>You can include multiple "welcome.htm" files for different languages by appending a hyphen and the BCP 47
      language code to the filename, for example welcome-fr.htm for French.</p>
    </aside>
  </dd>

  <dt>Fonts</dt>

  <dd>
    <p>A font is the single most important item to include with a keyboard – if the characters of the language you are supporting are
    not in fonts included with Windows. Installing fonts in Windows is tedious, so make sure that your users don't have to locate
    and install fonts themselves!</p>

    <p>.TTF, .OTF, and .TTC fonts will be installed by the package installer, and uninstalled when the package is uninstalled. A list
    of the fonts installed is displayed in the Install Package dialog.</p>
  </dd>

  <dt>Keyboards</dt>

  <dd>
    <p>Add the .kmx compiled Keyman Desktop keyboards to the package. You can add multiple keyboards to the package, but be judicious.</p>

    <aside>
      <h3>Tip</h3>

      <p>Don't forget to add the On Screen keyboard .KVK file associated with your keyboard to the package. KVK files are not
      compiled into the .KMX file -- although the .ICO/.BMP is.</p>
    </aside>

    <p>Add the .js compiled Keyman touch layout keyboards to the package.</p>

  </dd>

  <dt>Documentation</dt>

  <dd>
    <p>The two preferred documentation formats are HTML and PDF. You should avoid .DOC, .RTF, and other formats -- .DOC files in
    particular are not recommended due to the possibility of macro viruses.</p>

    <p>Remember that HTML files can be displayed on any computer without additional software. PDF files require Adobe Reader or a
    compatible PDF viewer application. You may choose to include both and HTML documentation - PDF documents often print better than
    HTML documents, but HTML documentation is more accessible and translates better to on-screen or web use.</p>

    <aside>
      <h3>Tip</h3>

      <p>If you use HTML, don't forget to also add all the included files such as images and stylesheets!</p>
    </aside>
  </dd>

  <dt>Splash Image</dt>

  <dd>
    The splash image is a 140x250 pixel image that is displayed when the package is installed, at the left of the Package Install
    dialog. Including a splash image makes your package look more professional and polished, so a splash image is recommended!
  </dd>

  <dt>User Interface Translation Files</dt>

  <dd>
    You can include user interface translation files in your package – these will be automatically available once you install the
    package. The user interface files are called <strong>locale-xxx.xml</strong>, where xxx is the BCP 47 code for the language. The
    basic English <strong>locale.xml</strong> file is available in <strong>[Program Files (x86)]\Keyman\Keyman Desktop 13.0\xml</strong>.
    Information on the locale.xml file format is available <a class="link" href="/products/desktop/13.0/docs/advanced_locale_edit">here</a>.
  </dd>
</dl>

<p><a href="step-3.php" title="Step 3: Creating a package and adding files">Step 3: Creating a package and adding files</a></p>
