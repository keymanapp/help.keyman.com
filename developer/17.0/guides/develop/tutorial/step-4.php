<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 4: The Keyboard Body"
  ]);
?>

<h1>Step 4: The Keyboard Body</h1>

<p>The body of the keyboard is the most important part: it determines the behaviour of the keyboard. The body consists of groups, which
in turn contain one or more rules which define the responses of the keyboard to certain keystrokes.</p>

<h2>Groups</h2>

<p>There are two types of groups: groups that process the keys pressed and the context, and groups that process the context only. For
simple keyboards, the latter type of group will not be required. A group begins with a <a href="/developer/language/reference/group"
title="group statement"><code class="language-keyman">group</code> statement</a>, and ends either at the start of another group, or at the end of the keyboard file.</p>

<p>We will only use one group in the Quick French keyboard, called <code class="language-keyman">Main</code>. We mark the start of it with the <code class="language-keyman">group</code> statement
below. Add this line to the keyboard.</p>

<pre><code class="language-keyman">group(Main) using keys
</code></pre>

<p>The <code class="language-keyman">using keys</code> clause tells Keyman that this group will process keystrokes.</p>

<h2>Basic Rules</h2>

<p>A rule tells Keyman the output to produce for a certain input. A rule consists of three parts: the <strong>context</strong>, the
<strong>key</strong>, and the <strong>output</strong>.</p>

<p>The <strong>context</strong> specifies the conditions under which a rule will act. If what is shown in the document to the left of the
cursor matches the context of a rule, the rule will be processed.</p>

<p>The <strong>key</strong> specifies which keystroke the rule will act upon.</p>

<p>The <strong>output</strong> determines the characters that are produced by a rule. The output replaces the matched context in the document.</p>

<h2>Simple rules</h2>

<p>The simplest rules in Keyman consist of just a key and output, as below. (The examples in this section are just for illustration,
and do not form part of the Quick French keyboard).</p>

<pre><code class="language-keyman">+ "a" > "ä"
</code></pre>

<p>In this rule, the key is <code class="language-keyman">"a"</code>, and the output is <code class="language-keyman">"ä"</code>. A simple rule begins with a plus sign, followed by the key,
a greater-than symbol (suggesting "becomes"), and finally the output. As you might guess, this rule will change a lowercase
<kbd>a</kbd> key typed by the user into <samp>ä</samp>.</p>

<p>The key and output can be written as a character in single or double quotes (as above), or as its Unicode character code, or using a
named constant. The rule above could have also been written any of the following ways, among others:</p>

<pre><code class="language-keyman">+ 'a' > 'ä'

+ U+0061 > U+00E4

store(ADIERESIS) 'ä'
+ 'a' > $ADIERESIS
</code></pre>

<p>You can also write the key in one form and the context in another.</p>

<h2>Rules with longer output</h2>

<p>The output of a rule is not limited to a single character. You could, for example, write a rule such as the following:</p>

<pre><code class="language-keyman">+ "f" > "ph"
</code></pre>

<p>This would change any <kbd>f</kbd> keys typed into <samp>ph</samp>. If the output of a rule consists of more than one character, you can write
the characters in different ways if necessary, with a space separating each part. You can specify multiple characters in quotes, but if
you use the Unicode codes to write the characters, you must separate each with a space:</p>

<pre><code class="language-keyman">+ "f" > U+0070 U+0068

+ "f" > U+0070 "h"
</code></pre>

<p>These rules are functionally identical to the one further above.</p>

<ul>
  <li><a href="step-5">Continue with Step 5: Rules with Context</a></li>
  <li><a href="step-3">Back to Step 3: The Keyboard Header</a></li>
</ul>
