<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 4: Filling in package details"
  ]);
?>

<h1>Step 4: Filling in package details</h1>

<p>Click on the Details tab in the Package Editor. You should fill in as many details as you can on this page.</p>

<p><img src="<?php echo cdn("img/developer/100/tutorial_distribute_keyboard_details.png"); ?>" /></p>

<dl>
  <dt>Package Name</dt>

  <dd>
    <p>The Package Name will be displayed in the package install dialog, and within Keyman Desktop Configuration, wherever the
    package is referred to.</p>
  </dd>

  <dt>Readme File</dt>

  <dd>
    <p>Select the readme file from the list of files you added in the previous step. Remember that it should be a HTML file for
    optimum clarity.</p>
  </dd>

  <dt>Version</dt>

  <dd>
    <p>A version number for the package is important - it helps the your users know that they are using the most recent update of
    your package. The version format you should use is <code class='language-none'>1.0</code>. When making a major change to your package or keyboards in your
    package, increment the first part and set the second part to, e.g. <code class='language-none'>2.0</code>; when making a bug fix or a minor update,
    increment the second part, e.g. <code class='language-none'>1.1</code>.</p>

    <p>Version numbers should be in the form <code class='language-none'>major.minor[.subversion]</code>. Subversion is optional but is helpful for small bug fix
    releases. Each of the sections of the version should be an integer. Keyman Desktop does integer comparisons on the version
    numbers, so, for example, version <code class='language-none'>2.01</code> is regarded as older than version <code class='language-none'>2.2</code>. Alphabetic 
    or date formats should be avoided as the installer for the keyboard cannot determine which version is older reliably.</p>
  </dd>

  <dt>Copyright</dt>

  <dd>
    <p>Enter copyright details for your package and keyboards. Keep this reasonably short or it won't be clear for end users.</p>
  </dd>

  <dt>Author</dt>

  <dd>
    <p>Enter your name or the name of your company.</p>
  </dd>

  <dt>Email</dt>

  <dd>
    <p>Enter a contact email address where package users can contact you. If you don't want to be contacted via email, leave this
    field empty</p>
  </dd>

  <dt>Website</dt>

  <dd>
    <p>Enter the name of the website where you will have information about this keyboard. If you want to host it on keyman.com,
    you could enter https://keyman.com/</p>
  </dd>

  <dt>Image file</dt>

  <dd>Select the splash image file that you created in Step 2 from the list of files in your package.</dd>
</dl>

<p><a href="step-5.php" title="Step 5: Shortcuts">Step 5: Shortcuts</a></p>
