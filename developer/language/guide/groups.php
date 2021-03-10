<?php
  require_once('includes/template.php');

  head([
    'title' => "Using Groups"
  ]);
?>

<h1 class="title" id="reference__struct_groups">Using Groups</h1>

<p>Groups provide a facility for grouping related rules, similar to functions in other programming languages. When used effectively,
groups can reduce the size and complexity of your keyboards significantly.</p>

<p>Groups can match on context only, or on context and keystroke. The context-only groups can be very useful for pre- and
post-processing rules, such as reordering stacked diacritics.</p>

<p>Only the first rule in the group that matches will be fired. There are two special rules, <code>match</code> and <code>nomatch</code> that
will then fire if a rule is either matched or not matched, respectively. The criteria for not matching is a little more nuanced, however, as a keystroke
is deemed to have not matched only if it would have generated a character anyway, so <span class='key'>F1</span> would not fire the <code>nomatch</code>
rule, unlike a character key.</p>

<p>Rules in a group have a special order. They are ordered first by length of context, with longest context first, and then by line order in the 
file. This slightly non-intuitive ordering makes it much simpler to group rules according to their function, rather than necessarily by their
priority.</p>

<p>The examples below show the two types of groups.</p>

<pre><code>group(mygroup)                   c context only
  'a' > 'b'

group(mygroup) using keys        c context and keystroke
  'a' + 'a' > 'c'
</code></pre>

<h2><code>using keys</code> clause</h2>

<p>To tell Keyman that the group should include key processing, you should include the <code>using keys</code> section of the statement; if that is
left out, the group checks the context only. The keystroke will remain the same during processing; you can have many groups that each use <code>using keys</code>, 
and the keystroke will be the same for all of them. The key section of a rule (including the <code>+</code> sign) is not valid for context processing groups.</p>

<h2><code>use</code> statement</h2>

<p>The <a href="../reference/use" title="use() statement"><code>use()</code></a> statement allows you move into another group when a rule
is matched. All output from the current group preceding the <code class="code">use()</code> statement is processed into the context
before the subsequent group is entered (although it is not sent to the application until processing finishes for the current
keystroke). For example:</p>

<pre><code>c This example prohibits two vowels in a row
store(vowel) 'aeiouAEIOU'
 
begin Unicode > use(precheck)
 
group(precheck)
any(vowel) > context use(precedingVowel)                                                           
nomatch > use(main)    c Preceding character is not a vowel. Do normal processing.
 
group(precedingVowel) using keys
+ any(vowel) > beep
nomatch > use(main)    c This key is not a vowel. Do normal processing.
 
group(main) using keys
c Main processing goes here
</code></pre>

<p>Some important things to note from this example:</p>

<p>The first rule (<code>any(vowel) > context use(precedingVowel)</code>) uses the <a href="../reference/context" title=
"context statement"><code>context</code></a> statement to copy the matched context to the output, so that Keyman can move it back into the context for
use with the <code><var>precedingVowel</var></code> group. If you do not do this, the context will be dropped before <code><var>precedingVowel</var></code> is
used, and the character will be deleted from the screen.</p>

<h2>Empty final group</h2>

<p>If the final group processed is a context and keystroke group (<code>using keys</code>), and there is no <code>nomatch</code> rule, and the
keystroke is not matched in the group, the keystroke will be output to the screen, regardless of whether or not it was matched in
earlier groups.</p>

<p>This can be used for example if you want to process a change at the end of a word which might be the last word in a line or in a text field, where the 
  user presses <kbd>Enter</kbd> or <kbd>Tab</kbd>:</p>

<pre><code>
group(main) using keys

+ 's' > 'σ'
'σ + [K_ENTER] > 'ς' use(final)

group(final) using keys
c Empty final group causes keystroke to be emitted
</code></pre>

<h2>Statements and rules used with groups</h2>

<p>The following statements and special rules are used with groups:</p>

<dl>
  <dt><a href='../reference/begin'><code>begin</code> statement</a></dt>
  <dd>Defines the starting group for the keyboard layout</dd>

  <dt><a href='../reference/group'><code>group()</code> statement</a></dt>
  <dd>Starts a new group of rules</dd>

  <dt><a href='../reference/match'><code>match</code> rule</a></dt>
  <dd>A system rule that is fired when another rule in the group is matched</dd>

  <dt><a href='../reference/nomatch'><code>nomatch</code> rule</a></dt>
  <dd>A system rule that is fired when no rule is matched</dd>

  <dt><a href='../reference/return'><code>return</code> statement</a></dt>
  <dd>Stops processing of the current keystroke</dd>

  <dt><a href='../reference/use'><code>use()</code> statement</a></dt>
  <dd>Starts processing in another group</dd>
</dl>
