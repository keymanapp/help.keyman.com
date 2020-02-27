
<?php
  require_once('includes/template.php');

  head([
    'title' => "Punctuation"
  ]);
?>

<h1 class="title"> Punctuation </h1>

<p> The lexical models use two different kinds of punctuation: </p>

<ul>
  <li> Quotation marks around the “keep” suggestion. </li>
  <li> What kind of space to insert after words, if any. </li>
</ul>

<p> Both of these can be customized by adding the punctuation to
  <a href="./model-definition-file.php">model definition file</a>. Here is a
  full example of a model definition file using default punctuation:</p>

<pre><code class="lang-typescript">const source: LexicalModelSource = {
  format: 'trie-1.0',
  sources: ['wordlist.tsv'],
  // CUSTOMIZE THIS:
  punctuation: {
    quotesForKeepSuggestion: {
      open: "“", close: "”"
    },
    insertAfterWord: " ",
  },
  // other customizations go here:
};

export default source;</code></pre>


<h2> Customizing <code>quotesForKeepSuggestion</code> </h2>

<p> These are the quotation marks that surrond the “keep” suggestion when it's
  displayed in the suggestion bar. By defaut, the quotations used are “smart”
  quotation marks used in English typography. Namely, the <strong>open quote</strong> is
  <code>“</code> U+201C LEFT DOUBLE QUOTATION MARK, and the <strong>close quote</strong> is
  <code>”</code> U+201D RIGHT DOUBLE QUOTATION MARK. </p>

<p> Let's customize this to use <code>«</code> and <code>»</code> for the open
and close quote, respectively. To do this, change the part labeled
<code>quotesForKeepSuggestion</code>: </p>

<pre><code class="lang-typescript">punctuation: {
  quotesForKeepSuggestion: {
    open: "«", close: "»"
  },
},</code></pre>


<h2> Customizing <code>insertAfterWord</code> </h2>

<p> Many languages insert a space after a word. Some languages, a like Thai or
Khmer, do not use spaces. To suppress the space, you may set <code>insertAfterWord</code>
to the empty string: </p>

<pre><code class="lang-typescript">punctuation: {
  insertAfterWord: "",
},</code></pre>

<p> You can even use an alternate spacing character, if required by your language: </p>

<pre><code class="lang-typescript">punctuation: {
  insertAfterWord: "\u200B", // U+200B ZERO WIDTH SPACE
},</code></pre>


<h2> See also </h2>

<p> <a href="https://github.com/keymanapp/keyman/blob/4211b468949860b8fb4a4707710472ab9e33c581/common/lexical-model-types/index.d.ts#L328-L371">
  The TypeScript definition of <code>LexicalModelPunctuation</code>
</a></p>

<hr>

<p> <a href="./">Return to “Advanced Lexical Model Topics”</a> </p>
