<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: contextMatch"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KCM">contextMatch (KCM) (Deprecated)</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>(Deprecated) Context matching:  Returns <code>true</code> if <code>context(n,ln,elem) == val</code>.</p>

<?php
syntax("keyman.interface.contextMatch(n, Pelem, val, ln);", "KeymanWeb.KCM(n, Pelem, val, ln); // Shorthand");
params("n", "number", "Relative position of the caret for the context match attempt.",
  "Pelem", "Element", "The element being operated upon.",
  "val", "string", "The desired text value for context to match.",
  "ln", "number", "Number of characters of text context to match.");
returns("boolean", "<code>true</code> if the context matches the specified value <code>val</code>, otherwise <code>false</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This is a core element of keyboard input management within KeymanWeb in versions prior to 10.0, typically called automatically during keystroke
  processing events.  For comparison with <a href="/developer/language/guide/rules">Developer 'rules'</a> from keyboard source code, in the rule
</p>
<?=codebox(<<<END
"a" + "'" > "á"
END
, "language-keyman");
?>
<p>a keyboard would check that the initial context (<code>"a"</code>) matches by using</p>
<?=codebox("keyman.interface.contextMatch(1, Pelem, \"a\", 1)");?>
<p>which checks, starting at the first character to the left of the caret, a single character to see if it matches the value "a".</p>
<p>For versions 10.0 and later, please consider use of <a href="fullContextMatch"><code>fullContextMatch()</code></a> instead.</p>

<h2>See also</h2>

<p><a href="fullContextMatch"><code>fullContextMatch()</code></a>, <a href="context"><code>keyman.interface.context()</code></a>,
    <a href="output"><code>keyman.interface.output()</code></a>, <a href="keyMatch"><code>keyman.interface.keyMatch()</code></a></p>
