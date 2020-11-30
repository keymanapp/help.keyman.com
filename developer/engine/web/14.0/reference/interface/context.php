<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: context"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KC">context (KC) (Deprecated)</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>(Deprecated) Gets <a href="/developer/language/reference/context"><code class="language-keyman">context</code></a> for an ongoing
  keyboard operation relative to the caret's present position.</p>

<?php
syntax("keyman.interface.context(n, ln, Pelem);", "KeymanWeb.KC(n, ln, Pelem); // Shorthand");
params("n", "number", "Relative position of the caret for the context retrieval operation.",
  "ln", "number", "Number of characters of text context to retrieve.",
  "Pelem", "Element", "The element being operated upon.");
returns("string", "The requested <a href='/developer/language/reference/context'><code>context</code></a> text.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>For an example from <a href="/developer/language/guide/rules">Developer 'rules'</a>, a keyboard might implement the
  following rule
</p>
<?=codebox(<<<END
"abc" + "d" > context(2) "D"
END
,  "language-keyman");
?>
<p>by first checking that the initial context (<code>"abc"</code>) matches and then using the following to
fulfill the rule:</p>
<?=codebox(<<<END
keyman.interface.output(3, Pelem, keyman.interface.context(2, 1, Pelem));
keyman.interface.output(0, Pelem, "D");
END
);
?>
<p>This operates by first replacing the original context <code>"abc"</code> with the requested subset of
  <code class="language-keyman">context(2)</code>, then outputting the character (<code>"D"</code>) corresponding
  to the new keystroke.</p>

<h2>See also</h2>

<p><a href="contextMatch"><code>keyman.interface.contextMatch()</code></a>, <a href="output"><code>keyman.interface.output()</code></a></p>