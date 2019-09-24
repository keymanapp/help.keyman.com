<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 2: Creating Additional Files for the Package"
  ]);
?>

<h1>Step 2: Creating Additional Files for the Package</h1>

<p>You should create some additional files to include in the package. If you used Keyman Developer to create your lexical model project,
  it will have created some of these files for you. You will still need to edit them for the package.</p>

<dl>
  <dt>readme.htm</dt>
  <dd>
    <p>A short description of the package, its use restrictions, and what it includes. Try to keep the readme under 10 lines long.
    The readme should be an html file for optimal formatting.</p>

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
    <p>When including an introductory help file in your package, you must name the file welcome.htm. This file will be
    displayed before the lexical model is installed. Make sure that you design your HTML file so that it can be viewed
    on a mobile device - avoid extra wide tables or wide fixed width elements.</p>

    <p>After package installation, the welcome.htm will also be accessible from the lexical model info pages.</p>

    <p>The intention of welcome.htm is to provide instructions on getting started with your lexical model.</p>

    <aside>
      <h3>Tip</h3>

      <p>Useful information to include in welcome.htm is:</p>

      <ul type="disc">
        <li>names of languages associated with the lexical model.</li>
        <li>name of the lexical model in the package.</li>
        <li>links to additional help on your website or more extensive documentation files in the package.</li>
        <li>a link to an official distribution site for your package (even if it is the Keyman website) - so that users know
          where to find the latest version of your package.</li>
      </ul>
    </aside>

    <aside>
      <h3>Tip</h3>

      <p>If you want links to your website to open in the user's preferred browser, preface the href link with <code class='language-none'>link:</code>,
      e.g. <code class='language-none'>&lt;a href="link:http://keyman.com/">website&lt;/a></code></p>

      <p>The <code class='language-none'>link:</code> sceheme will open the referred file in the default application - that is, a web browser for 
      URLs and links, Notepad for .txt files, Adobe Reader for PDFs. You can use <code class='language-none'>link:</code> to open any of the files in 
      the package, e.g. <code class='language-none'>link:docs.pdf</code> will open the file docs.pdf in Adobe Reader or the default PDF reader on the
      system.</p>
    </aside>

    <p>If you create documents in other formats, for example PDF or printable documentation, you should link to that in the
    welcome.htm.</p>

    <!-- TODO: Is this still valid?
    <aside>
      <h3>Tip</h3>

      <p>You can include multiple "welcome.htm" files for different languages by appending a hyphen and the BCP 47
      language code to the filename, for example welcome-fr.htm for French.</p>
    </aside>
    -->
  </dd>

  <dt>Lexical Model</dt>

  <dd>
    <p>Add <strong>one</strong> .model.js compiled Keyman lexical model to the package. While keyboards can be distributed in
      packages, do not include them in a lexical model package.</p>
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
</dl>

<p><a href="step-3.php" title="Step 3: Creating a package and adding files">Step 3: Creating a package and adding files</a></p>
