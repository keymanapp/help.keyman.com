<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: deadkeyMatch"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KDM">deadkeyMatch (KDM) (Deprecated)</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>(Deprecated)Deadkey matching:  Seeks to match the <a href="/developer/language/reference/deadkey"><code class="language-keyman">deadkey</code></a>
  state <code>dk</code> at the relative caret position <code>n</code>.</p>

<?php
syntax("keyman.interface.deadkeyMatch(n, Pelem, dk);", "KeymanWeb.KDM(n, Pelem, dk); // Shorthand");
params("n", "number", "The position to match, relative to the caret's present position.",
  "Pelem", "Element", "The HTML element receiving input.",
  "dk", "number", "The deadkey id.");
returns("boolean", "<code>true</code> if the specified deadkey exists at the specified input location, otherwise <code>false</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>Deadkeys are useful for tracking hidden state information used to modify future keystrokes.  For example, rather than using
</p>

<?=codebox(<<<END
"`" + "a" = "à"
END
  , "language-keyman");
?>
<p>to combine two visible characters, certain applications may desire to keep the <code>"`"</code> character hidden with a rule
  such as </p>
<?=codebox(<<<END
+ '`' > dk(backquote)

...

dk(backquote) + "a" > "à"
END
  , "language-keyman");
?>

<p>The Developer compiler then generates a unique id for the deadkey state - say, <code>0</code>, and in order to detect
  the deadkey associated with the <code>'`'</code> character, compiles the <code class="language-keyman">dk(backquote)</code>
  check to</p>
<?=codebox("keyman.interface.deadkeyMatch(0, Pelem, 0)")?>
<p>which detects the existing deadkey (the second zero above) at the caret's present position (the first zero above).</p>
<p>For versions 10.0 and later, please consider use of <a href="fullContextMatch"><code>fullContextMatch()</code></a> instead.</p>
<h2>See also</h2>
<p><a href="deadkeyOutput"><code>keyman.interface.deadkeyOutput()</code></a></p>
<p><a href="https://en.wikipedia.org/wiki/Dead_key">Wikipedia article on deadkeys</a></p>