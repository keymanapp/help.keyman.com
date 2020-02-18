<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: deadkeyOutput"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KDO">deadkeyOutput (KDO)</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Deadkey output:  Associates the <a href="/developer/language/reference/deadkey"><code class="language-keyman">deadkey</code></a> state
  <code>dk</code> with the element at the current caret position, after overwriting <code>nd</code> characters.</p>

<?php
syntax("keyman.interface.deadkeyOutput(nd, Pelem, dk);", "KeymanWeb.KDO(nd, Pelem, dk); // Shorthand");
params("nd", "number", "The number of characters to overwrite (delete).  May be set to <code>-1</code> or <code>0</code> to prevent overwrites.",
  "Pelem", "Element", "The element receiving output.",
  "dk", "number", "The deadkey id.");
returns();
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

<p>The Developer compiler then generates a unique id for the deadkey state - say, <code>0</code>, and upon detecting
input of the <code>'`'</code> character with the <a href="deadkeyMatch"><code>keyman.interface.deadkeyMatch()</code></a> function,
compiles the deadkey generation to</p>
<?=codebox("keyman.interface.deadkeyOutput(0, Pelem, 0);")?>
<h2>See also</h2>
<p><a href="deadkeyMatch"><code>keyman.interface.deadkeyMatch()</code></a></p>
<p><a href="https://en.wikipedia.org/wiki/Dead_key">Wikipedia article on deadkeys</a></p>