<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: KCM"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KCM">KCM</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Context matching:  Returns <code>true</code> if <code>KC(n,ln,elem) == val</code>.</p>

<?php
syntax("KeymanWeb.KCM(n, Pelem, val, ln);");
params("n", "number", "Relative position of the caret for the context match attempt.",
  "Pelem", "Element", "The element being operated upon.",
  "val", "string", "The desired text value for context to match.",
  "ln", "number", "Number of characters of text context to match.");
returns("boolean", "<code>true</code> if the context matches the specified value <code>val</code>, otherwise <code>false</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This is a core element of keyboard input management within KeymanWeb, typically called automatically during keystroke
  processing events.  For comparison with <a href="/developer/language/guide/rules">Developer 'rules'</a> from keyboard source code, in the rule
</p>
<?=codebox(<<<END
"a" + "'" > "á"
END
);
?>
<p>a keyboard would check that the initial context (<code>"a"</code>) matches by using</p>
<?=codebox('KeymanWeb.KCM(1, Pelem, "a", 1)', "language-keyman");?>
<p>which checks, starting at the first character to the left of the caret, a single character to see if it matches the value "a".</p>

<h2>See also</h2>

<p><a href="KC"><code>KeymanWeb.KC()</code></a>, <a href="KO"><code>KeymanWeb.KO()</code></a>, <a href="KKM"><code>KeymanWeb.KKM()</code></a></p>
