

<?php
  require_once('includes/template.php');

  head([
    'title' => "Word breaker"
  ]);
?>

<h1 class="title"> Word breaker </h1>

<p> The <code>trie</code> family of lexical models needs to know what a word
is in running text. In language using the Latin script—like, English, French,
and SENĆOŦEN—finding words is easy. Words are separated by spaces or
punctuation. The actual rules for where to find words can get quite tricky to
describe, but Keyman implements the <a href="https://unicode.org/reports/tr29/#Word_Boundaries">
Unicode Standard Annex #29 §4.1 Default Word Boundary Specification </a>
which works well for most languages.
</p>

<p> However, in languages written in other scripts—especially East Asian
scripts like Chinese, Japanese, Khmer, Lao, and Thai—there are is no obvious
break in between words. For these languages, there must be special rules for
determining when words start and stop. This is what a <dfn>word breaker
function</dfn> is responsible for. It is a little bit of code that looks at some
text to determine where the words are. </p>

<p><strong>TODO: write this page</strong></p>

<hr>

<p> <a href="./">Return to “Advanced Lexical Model Topics”</a> </p>
