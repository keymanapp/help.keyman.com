<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 4: Filling in package details",
    'css' => ['template.css','index.css','kmguides.css']
  ]);
?>

<h1>Step 4: Filling in package details</h1>

<p>In the Package Editor, click on the <span class="guibutton">Details</span> tab. You should fill in as many details as you can on this page.</p>

<p><img src="<?php echo cdn("img/developer/120/lm/tutorial_distribute_model_details.png"); ?>" /></p>

<dl>
  <dt>Package Name</dt>

  <dd>
    <p>The Package Name will be displayed in the package install dialog and wherever the
    package is referred to.</p>
  </dd>

  <dt>Model Version</dt>
  <dd>
    <p>Update the version (intial version can default to 1.0).
      A version number for the model and package is important - it helps your users know that they are using the most
      recent update of your package. The version format you should use is <code class='language-none'>1.0</code>.</p>

    <p>When making a major change to your lexical model package, increment the first part and set the second part to
      <code class='language-none'>0</code>, e.g. from
      <code class='language-none'>1.0</code> to <code class='language-none'>2.0</code>.</p>

    <p>When making a bug fix or a minor update, increment the second part, e.g. from
      <code class='language-none'>1.0</code> to <code class='language-none'>1.1</code>.</p>

    <p>Version numbers should be in the form <code class='language-none'>major.minor[.subversion]</code>. Subversion is optional but is helpful for small bug fix
      releases. Each of the sections of the version should be an integer. Keyman does integer comparisons on the version
      numbers, so, for example, version <code class='language-none'>2.01</code> is regarded as older than version <code class='language-none'>2.2</code>. Alphabetic
      or date formats should be avoided as the installer for the model cannot determine which version is older reliably.</p>
  </dd>

  <dt>Copyright</dt>

  <dd>
    <p>Enter copyright details for your lexical model package. Keep this reasonably short or it won't be clear for end users.</p>
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
    <p>Enter the name of the website where you will have information about this lexical model.</p>
  </dd>

</dl>

<p><a href="step-5.php" title="Step 5: Compiling, testing and distributing a Package">Step 5: Compiling, testing and distributing a Package</a></p>
