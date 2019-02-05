<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 6: Compiling, testing and distributing a Package"
  ]);
?>

<h1>Step 6: Compiling, testing and distributing a Package</h1>

<p>In the Package Editor, click on the <span class="guibutton">Compile</span> tab.</p>

<p>Click <span class="guibutton">Compile Package</span> to compile the package into a .kmp file. Compiling takes all the files listed
for the package, compresses them (using a .ZIP-compatible format) and adds the package information, all into a single file. If any
files are not available, an error will be listed in the Messages window.</p>

<p>After compiling, you can test the package installation in Keyman Desktop, by clicking <span class="guibutton">Install
Package</span>. You should test that all the keyboards and fonts install successfully, that the Readme and Welcome files are displayed
during the install, and that the documentation is accessible to the end user. Make sure that the On Screen Keyboard installs with your
keyboards, and that the shortcuts are correctly listed and working in the Start Menu.</p>

<aside>
  <h3>Advice</h3>
  
  <p>The distribution model for Keyman keyboards is changing. We now recommend distributing source for keyboards through the
  <a href='/developer/keyboards/'>Keyman Cloud Keyboard Repository</a>. The instructions here remain, but the binary distribution 
  model is deprecated.</p>
</aside>

<h2>Distributing a package on the Keyman website</h2>

<p>Once you have tested the package to your satisfaction, it is time to distribute it. We recommend uploading your package to the
Keyman website &emdash; this makes it easy to download and install through the Keyman Configuration interface. To upload a package to
keyman.com:</p>

<ol type="1">
  <li>
    Click <span class="guibutton">Upload to Tavultesoft</span> in the <span class="guibutton">Compile</span> tab. A window will
    appear, listing the keyboards that you have already uploaded to Tavultesoft; if you have already uploaded your keyboard, then
    select that from the list. Otherwise, select (Upload new keyboard) to create a new upload. Click <span class=
    "guibutton">Upload</span> to start the upload process. This may take a minute or two, depending on the size of the package.
  </li>

  <li>
    After the upload completes, your web browser will be opened to an Edit Keyboard page. Fill in the details on this page, and
    click Update Keyboard. You can also add links to your own website, or upload additional documentation for the keyboard.
  </li>

  <li>
    When you have finished all this, click <span class="guibutton">Publish Keyboard</span> at the bottom of the page, to have the
    keyboard published on the Tavultesoft website, at http://www.tavultesoft.com/keyman/downloads/keyboards/. Each keyboard uploaded
    is checked by Tavultesoft before it is listed, so it may take a few days for the keyboard to appear on the downloads page. If
    Tavultesoft find any issues with the keyboard, you will be contacted with details. Feel free to write to Tavultesoft Support at 
    any time for assistance in the upload process.
  </li>
</ol>

<p>The <a href='http://tavultesoft.com/keymandev/quality/'>Keyboard Quality White Paper</a> details the requirements for a keyboard 
package to be accepted for hosting on the Tavultesoft website.</p>

<aside>
  <h3>Note</h3>

  <p>Packages listed on the Tavultesoft website must be hosted there as well. Older packages that are listed on the Tavultesoft website, 
  but where the file is hosted elsewhere, do not receive any icon ratings (see <a href="step-1.php" title="Step 1: What do we include?">Step 1</a> for details).</p>
</aside>

<p>Additional advantages to hosting on the Tavultesoft website include access to a forum for your keyboard on the Tavultesoft website &emdash; here, Tavultesoft 
staff and the Keyman community can also provide assistance to your end users. It is also a stable download site that does not require you to 
maintain the keyboard.</p>

<h2>Distributing a package on your own website</h2>

<p>If you distribute a package on your own site, we have the following recommendations:</p>

<ol>
  <li>Ensure the MIME type on the web server or folder for .KMX and .KMP files is set up to application/octet-stream. Without
    this, .KMP files may be recognised as .ZIP files -- this is not helpful to the end user as it will be opened in the wrong
    application. If you can't make this change, consider hosting the keyboard package on the Tavultesoft website to make things
    easier for your end user.</li>

  <li>Avoid putting the .KMP file in an archive (e.g. .ZIP) or self-expanding archive (.EXE) - this makes it harder for end users
    to install. A .KMP file is already compressed (it is actually just a ZIP archive file!) and you won't save much space by
    recompressing it.</li>

  <li>Include a link to the Keyman download page: http://keyman.com/desktop/</li>
</ul>
