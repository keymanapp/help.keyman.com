<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: fullContextMatch"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KFCM">fullContextMatch (KFCM)</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Context matching:  Returns <code>true</code> if the current context matches the specified rule context specification.</p>

<?php
syntax("keyman.interface.fullContextMatch(n, Pelem, rule);", "KeymanWeb.KFCM(n, Pelem, rule); // Shorthand");
params("n", "number", "Relative position of the caret for the context match attempt.",
  "Pelem", "Element", "The element being operated upon.",
  "rule", "Array(ContextEntry)", "The rule context specification to be matched.");
returns("boolean", "<code>true</code> if the context matches the rule specification <code>rule</code>, otherwise <code>false</code>.");
?>

<h2>Rule specification</h2>

<p>Each <code>ContextEntry</code> in the <code>rule</code> array must be one of the following six types:</p>
<ul>
    <li>A plain string with one character</li>
    <li>
        A <code>DeadkeyEntry</code> object with the following members: <p><?php
        obj_spec(false,
            "t", "'d'", "Indicates to expect a <a href='/developer/language/reference/deadkey'><code>deadkey</code></a> entry.",
            "d", "number", "The integer ID of the deadkey to match.");
        ?>
    </li>
    <li>
        An <code>AnyEntry</code> object with the following members: <p><?php
      obj_spec(false,
            "t", "'a'", "Indicates the use of an <a href='/developer/language/reference/any'><code>any</code></a> statement.",
            "a", "string", "The store string to be searched for a context match",
            "n", "optional boolean", "<code>true</code> signals to negate the match, as with a " .
                "<a href='/developer/language/reference/notany'><code>notany</code></a> statement.");
      ?>
    </li>
    <li>
        An <code>IndexEntry</code> object with the following members: <p><?php
        obj_spec(false,
            "t", "'i'", "Indicates the use of an <a href='/developer/language/reference/index'><code>index</code></a> statement.",
            "i", "string", "the store string to be indexed for output corresponding to a previous <code>any</code>",
            "o", "number", "the index of the corresponding <code>any</code> in the rule's context, starting from 1.");
        ?>
    </li>
    <li>
        A <code>ContextEx</code> object with the following members: <p><?php
        obj_spec(false,
          "t", "'c'", "Indicates the use of a <a href='/developer/language/reference/context'><code>context</code></a> statement.",
          "c", "number", "The position in context to be matched by the current context location");
        ?>
    </li>
    <li>
        A <code>NulEntry</code> object with the following member: <p><?php
        obj_spec(false,
          "t", "'n'", "Indicates the use of a context-based <a href='/developer/language/reference/nul'><code>nul</code></a> rule.");
        ?>
    </li>
</ul>
<p>The rule will be interpreted left to right, starting at the specified relative position to the caret.</p>

<h2 id="Description" name="Description">Description</h2>

<p>This is a core element of keyboard input management within KeymanWeb introduced with version 10.0, typically called automatically during keystroke
    processing events.  For comparison with <a href="/developer/language/guide/rules">Developer 'rules'</a> from keyboard source code...
<?=codebox(<<<END
store(pair_1) 'aA'
store(pair_2) 'bB'

c Lots of keyboard rules...

dk(money) 'c' any(pair_1) index(pair_2, 3) + '.' > 'taxi'
END
,  "language-keyman");
?>
<p>would have Javascript roughly as follows:</p>
<?=codebox(<<<END
// In the keyboard store definitions:
this.s_pair_1 = 'aA';            // store(pair_1) 'aA'
this.s_pair_2 = 'bB';            // store(pair_2) 'bB'

// For the deadkey:
this.d_money = 0;                // dk(money)'s internal id

// Within the keyboard rule-matching function:
var matched = keyman.interface.fullContextMatch(4, element, {
  {t:'d', d:this.d_money},       // dk(money)
  'c',                           // 'c'
  {t:'a', a:this.s_pair_1},      // 'any(pair_1)'
  {t:'i', i:this.s_pair_2, o:3}  // 'index(pair_2, 3)'
});
END
);
?>
<h2>See also</h2>

<p><a href="/developer/language/reference">The Keyman Keyboard Language Reference</a>, <a href="contextMatch"><code>keyman.interface.contextMatch()</code></a>, <a href="deleteContext"><code>keyman.interface.deleteContext()</code></a></p>
