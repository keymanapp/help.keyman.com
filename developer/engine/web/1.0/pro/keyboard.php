<?php
  $pagetitle = 'Keyboard Design';
  $pagename = $pagetitle;
  require_once('header.php');
  
  echo <<<END

<p>Most of the standard Keyman functionality is available within KeymanWeb.  The following lists additional
information that you can pass to the compiler and some recommendations.</p>

<h2>Additional Stores</h2>

<ul>
<li><b>VisualKeyboard:</b> Use a store with this name to reference the .kvk file to embed into the KeymanWeb keyboard.</li>
<li><b>Help:</b> Simple help text can be included below the visual keyboard through this store.</li>
<li><b>HelpFile:</b> (mutually exclusive with Help) Reference a .html fragment to embed below the visual keyboard,
where more than one or two lines of text is required.</li>
</ul>

<h2>Recommendations</h2>

<ul>
<li>Only Unicode keyboards are supported.</li>
<li>Avoid using virtual keys where possible, as some platforms do not support all virtual keys.  In particular, Opera does
not support ALT.</li>
<li>Only Internet Explorer can distinguish between left and right Ctrl/Alt, so this functionality is not currently
supported in KeymanWeb.</li>
<li>Do include a visual keyboard and help information - this makes the keyboard vastly more useable.</li>
<li>Save your keyboard file with a lowercase filename - this makes cross-platform references less problematic.</li>
<li>Virtual key output is not supported.</li>
<li>If you are creating a single keyboard for both Keyman Desktop and KeymanWeb, use the 
  <a href='http://$site_tavultesoft/keymandev/documentation/70/reference__struct_silkey.html'>\$keymanonly and \$keymanweb</a>
  compile targets to manage implementation differences between the two platforms.</li>
</ul>

<h2>Compiling for KeymanWeb</h2>

<p>
Keyman Developer allows you to compile your keyboards for KeymanWeb.  This functionality is available as part
of the <a href='http://$site_tavultesoft/keymandev/packs.php'>KeymanWeb Pack for Keyman Developer</a>.
</p>

<p>Once you have activated the KeymanWeb Pack, you will be able to access the KeymanWeb tab in your keyboard
source file.  This tab lets you configure KeymanWeb-specific parameters and test the keyboard in a built-in
browser test window.</p>

<h2>Additional Documentation</h2>

<p>Further documentation for KeymanWeb is available in the <a href='http://$site_tavultesoft/keymandev/documentation/70/reference_kmw_index.html'>Keyman Developer KeymanWeb Pack help reference</a>.</p>

END;

  require_once('footer.php');
?>