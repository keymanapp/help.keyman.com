<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: stateMatch"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KSM">stateMatch (KSM)</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>State-key matching:  Returns <code>true</code> if the event matches the rule's state-key requirements.</p>

<?php
syntax("keyman.interface.stateMatch(e, shiftCode);", "KeymanWeb.KSM(e, shiftCode); // Shorthand");
params("e", "Object", "A keystroke-related event object to match.",
  "state", "number", "The state-key bitflags the event should match.");
returns("boolean", "<code>true</code> if the keystroke matches the desired states, otherwise <code>false</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>As of KeymanWeb 10.0, KeymanWeb now supports keyboard rules conditioned upon 'state keys' like Caps Lock <a
  href="/developer/language/guide/virtual-keys#toc-caps-lock">if specified
    by keyboard developers</a>.  The <code>stateMatch</code> function examines the bit-flags to determine the state keys being tested and compares
  the keyboard event against them as appropriate.  As such, it is designed to be a condition check alongside
  <a href="keyMatch"><code>keyman.interface.keyMatch()</code></a> and <a href="contextMatch"><code>keyman.interface.contextMatch()</code></a>.</p>
<p>
  For comparison with <a href="/developer/language/guide/virtual-keys#toc-caps-lock">Developer 'rules'</a> from keyboard source code, in the rule
</p>
<?=codebox(<<<END
+ [CAPS K_A]  > 'BIG A'
+ [NCAPS K_A] > 'small a'
END
, 'language-keyman');
?>
<p>a keyboard would check which rule the triggering keystroke (<code>"a"</code>) matches by using</p>
<?=codebox('keyman.interface.stateMatch(e, 0x100)');?>
<p>from within a raised keystroke event with object <code>e</code>, which checks that the keystroke represented by <code>e</code>
  has an activated Caps Lock state as represented by the code 0x0100.  The NCAPS rule would instead compare against 0x0200.</p>
<p>As <code>keyman.interface.stateMatch()</code> receives an event object as one of its parameters, it does not need a direct link to the
element receiving input.</p>

<h2>See also</h2>

<p><a href="keyMatch"><code>keyman.interface.keyMatch()</code></a></p>