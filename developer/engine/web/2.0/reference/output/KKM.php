<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: KKM"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KKM">KKM</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Keystroke matching:  Returns <code>true</code> if the event matches the rule's shift mask and key code.</p>

<?php
syntax("KeymanWeb.KKM(e, shiftCode, keyCode);");
params("e", "Object", "A keystroke-related event object to match.",
  "shiftCode", "number", "The shift-state code the event object should match.",
  "keyCode", "number", "The key code the event object should match.");
returns("boolean", "<code>true</code> if the keystroke matches the desired values, otherwise <code>false</code>.");
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
<p>a keyboard would check that the triggering keystroke (<code>"'"</code>) matches by using</p>
<?=codebox('KeymanWeb.KKM(e, 0, 39)', "language-keyman");?>
<p>from within a raised keystroke event with object <code>e</code>, which checks that the keystroke represented by <code>e</code>
  is unshifted and matches the underlying keycode value for <code>"'"</code>, which is <code>39</code> in ASCII and Unicode.</p>
<p>As <code>KeymanWeb.KKM()</code> receives an event object as one of its parameters, it does not need a direct link to the
element receiving input.</p>

<h2>See also</h2>

<p><a href="KCM"><code>KeymanWeb.KCM()</code></a></p>