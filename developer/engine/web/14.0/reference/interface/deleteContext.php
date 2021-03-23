<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: deleteContext"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KDC">deleteContext (KDC)</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Context deletion - removes the specified number of deadkeys and characters from before the caret.</p>

<?php
syntax("keyman.interface.deleteContext(dn, Pelem);", "KeymanWeb.KDC(n, Pelem); // Shorthand");
params("dn", "number", "The number of entries (deadkeys, characters) to be deleted from the current context.",
  "Pelem", "Element", "The element being operated upon.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>This is a core element of keyboard input management within KeymanWeb introduced with version 10.
    It is utilized to manage the deletion of context in a deadkey-aware manner, in parallel to
    <a href="fullContextMatch"><code>keyman.interface.fullContextMatch</code></a>.  For comparison with
    <a href="/developer/language/guide/rules">Developer 'rules'</a> from keyboard source code...</p>
<?=codebox(<<<END
store(pair_1) 'uU'
store(pair_2) 'lL'

c Lots of keyboard rules...

'nul' dk(nothing) + '.' > nul
END
  ,  "language-keyman");
?>
<p>would have a rule output as follows:</p>
<?=codebox(<<<END
// Context is length four (three characters + one deadkey), so we delete all four.
keyman.interface.deleteContext(4, element);
END
);
?>

<h2>See also</h2>

<p><a href="fullContextMatch"><code>keyman.interface.fullContextMatch()</code></a></p>
