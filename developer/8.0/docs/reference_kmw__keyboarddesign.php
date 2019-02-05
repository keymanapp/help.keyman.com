<?php
  require_once('includes/template.php');

  head([
    'title' => "Keyboard Design"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Keyboard Design</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw_KeyboardInfo.php">Prev</a> </td><th width="60%" align="center">KeymanWeb 1.0</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw__css.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_kmw__keyboarddesign">Keyboard Design</h3></div></div></div><p>
    Most of the standard Keyman functionality is available within KeymanWeb.  The following lists additional
    information that you can pass to the compiler and some recommendations.
  </p><h4><a name="id633913"></a>Additional System Stores</h4><div class="itemizedlist"><ul type="disc"><li><p><code class="code">&amp;VisualKeyboard:</code> Use a store with this name to
      reference the .kvk file to embed into the KeymanWeb keyboard.</p></li><li><p><code class="code">&amp;KMW_Help:</code> Simple help text can be included below
      the visual keyboard through this store.</p></li><li><p><code class="code">&amp;KMW_HelpFile:</code> (mutually exclusive with Help)
      Reference a .html fragment to embed below the visual keyboard,
      where more than one or two lines of text is required.</p></li><li><p><code class="code">&amp;KMW_RTL:</code> Flags the keyboard as right-to-left.  This
      tells KeymanWeb to switch the active control's text direction to right-to-left when
      the keyboard is activated.</p></li><li><p><code class="code">&amp;KMW_EmbedJS:</code> Embed a source JavaScript file (relative to the current folder)
      into the compiled KeymanWeb keyboard.  This can be useful for customising the On Screen Keyboard and
      extending keyboard functionality.</p></li></ul></div><h4><a name="id634255"></a>Recommendatations</h4><div class="itemizedlist"><ul type="disc"><li><p>Only Unicode keyboards are supported.</p></li><li><p>Avoid using virtual keys where possible, as some platforms do not support
      all virtual keys.  In particular, Opera does not support ALT.</p></li><li><p>Only Internet Explorer can distinguish between left and right Ctrl/Alt,
      so this functionality is not currently supported in KeymanWeb.</p></li><li><p>Do include a visual keyboard and help information - this makes the keyboard vastly more useable.</p></li><li><p>Save your keyboard file with a lowercase filename - this makes cross-platform references less problematic.</p></li><li><p>Virtual key output is not supported.</p></li></ul></div><h4><a name="id666023"></a>Compiling for KeymanWeb</h4><p>
    Keyman Developer 7.0 allows you to compile your keyboards for KeymanWeb.  This functionality is only available to licenced
    users of Keyman Developer Professional with the KeymanWeb Pack.
  </p><p>
    Users who have activated the KeymanWeb pack will have access to a KeymanWeb tab in the Keyboard Editor within Keyman Developer.
    This tab allows you to specify additional options for KeymanWeb, compile to KeymanWeb, and test your keyboard within a
    KeymanWeb test window.
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw_KeyboardInfo.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw__css.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Class: KeyboardInfo </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> CSS classes for Visual Keyboard</td></tr></table></div>
