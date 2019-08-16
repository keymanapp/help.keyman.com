<?php
  require_once('includes/template.php');

  head([
    'title' => "What is a lexical model?",
    'css' => ['template.css', 'index.css', 'prism.css', 'dev-lexical-models.css']
  ]);
?>

<h1 class="title">What is a lexical model?</h1>

<figure class="aside">
  <img src="<?= cdn('img/developer/120/lm/whatis-on-my-w.png')?>"
       alt="Smartphone keyboard displaying suggestions for the English phrase ”on my w-”" />
  <figcaption>Predictive text for English</figcaption>
</figure>

<p>Many mobile phone keyboards enjoy <strong>predictive text</strong> for their languages.</p>

<p>Predictive text is the feature on your keyboard that displays a series of
  <dfn>predictions</dfn>, typically above your keyboard, that try to guess the
  word or words that you are typing next. For example, if I start typing the
  English phrase “On my w”, your keyboard’s predictive text feature will infer
  using its knowledge of the English language that the word you are typing is
  most likely “way”, followed by other, less likely suggestions, such as
  “whole”, or “website”.</p>

<p>The same feature the provides predictive text can also provide
  <dfn>corrections</dfn> to what you are typing. For example, if I start typing
  “thr” on my English keyboard, my keyboard will suggest that I meant to type
  “the” instead. This <strong>autocorrect</strong> feature is powered by your
  keyboard’s knowledge of the current language.</p>

<p>The way your keyboard knows how to suggest <strong>predictions</strong> and
  <strong>corrections</strong> for your language is through its
  <strong>lexical model</strong>.</p>

<figure>
  <img src="<?= cdn('img/developer/120/lm/overview.svg')?>"
       alt="diagram of the context ”on my w” used as input to the lexical
            model; the results of the lexical model are a list of suggestions." />
  <figcaption>How the lexical model is involved in generating suggestions.</figcaption>
</figure>

<h2>Why should I create a lexical model for my language?</h2>

<h3>Words are difficult to type</h3>

<figure class="aside">
  <img src="<?= cdn('img/developer/120/lm/whatis-naiv.png')?>"
       alt="Typing “n-a-i-v” on a smartphone. The keyboard suggests “naïve” for this input." />
  <figcaption>Typing “naiv” on a smartphone with predictive text.</figcaption>
</figure>

<p>Some words have many accents, diacritics, or similar-looking forms. This is
not very common in the English language, however, this is quite common in
other languages.
Predictive text can recognize forms without the correct diacritics, or
recognize forms that are simpler to type than the orthographically correct
version. This allows the typist to type words quickly, with minimum effort.
For example, in English, I want to type “naïve”, however, my keyboard does not
have the <kbd class="ios">ï</kbd> key present on its main layout. Sure, if I
use a keyboard that I can press-and-hold the <kbd class="ios">i</kbd> key, it
may pop-up additional characters, and I can probably find <kbd
class="ios">ï</kbd> nestled there among the other options.  However, I have to
go out of my way to type the correct variant, whereas the incorrect variant
will be perfectly understood. In most cases, I choose the option that is more
economical to type–“naive”—rather than the “correct” option.</p>

<p>However, a <strong>lexical model</strong> that understands the English
language will see the word “naive” does not exist, but a similarly typed
variant “naïve” does exist. Therefore, when I type “naive”, the lexical model
will suggest “naïve”, and I can select it and have the correctly spelled
version without having to long-press and select the correct “ï”. Even better
than that, I can choose the suggestion right after typing “naiv”, as there are
relatively view English words that start with the prefix of “naiv-”</p>


<h3>Words are long</h3>

<figure class="aside">
  <img src="<?= cdn('img/developer/120/lm/whatis-antidi.png')?>"
       alt="The top suggestion shows “antidisestablishmentarianism”" />
  <figcaption>Typing “antidi” on an English keyboard</figcaption>
</figure>

<p>Sometimes, the words are very long, but can be typed in far few keystrokes
if predictive text is used. For example, if in English, I want to write the
word “antidisestablishmentarianism” (a 28-letter word), a lexical model for
English can predict it from the prefix “antidi” and save about 21
keystrokes!</p>


<h3>People make mistakes</h3>

<figure class="aside">
  <img src="<?= cdn('img/developer/120/lm/whatis-correct-thr.png')?>"
       alt="The first suggestion is to write the word “the” instead." />
  <figcaption>Typing “thr” on an English keyboard.</figcaption>
</figure>

<p>When typing quickly on a small phone screen, mistakes are inevitable. Say I
try to write the word “the” on my phone. I press <kbd class="ios">t</kbd>,
then <kbd class="ios">h</kbd>, but as I try to type <kbd class="ios">e</kbd>,
I press a few millimeters to the right of the intended key and press <kbd
class="ios">r</kbd> instead. With a lexical model, the predictive text feature
understands that in English, “thr” is not a complete word, in-and-of-itself;
however, a word that is typed quite similarly, “the”, is a very common word.
Therefore, the lexical model provides enough information to assume that the
user intended to type “the” instead of “thr”. Thus, one of its
<strong>suggestions</strong> is the <strong>correction</strong> of “the” in
place of “thr”.</p>

<p>However, the predictive text feature is not overly presumptuous; what if
the typist really did want to type “thr”? As a result, “thr” is suggested as a
<dfn>keep suggestion</dfn>. When the typist selects the “keep” suggestion,
whatever they had originally typed is kept, even if the lexical
model suggests what it thinks is a far more likely correction.</p>


<h2>What do I need to make my own lexical model?</h2>

<p>To make a language model, you need some information about your language. At
bare minimum, you need a list of words in your language. Keyman Developer
supports importing a word list as a spreadsheet of words in your language that
you wish to use for predictions and corrections. This will create a <dfn>word
list lexical model</dfn>.</p>

<p>If you have such a list of words, you can continue to the
<a href="../tutorial">tutorial</a> to create a word list lexical model for your
language!</p>

<p>However, to make a more accurate lexical model, you will need an idea of
how to rank suggestions relative to each other. For this, you may extend the
simple word list with <strong>counts</strong>. Each word has a count of how
often it has been seen in a representative collection of texts in your
language. For example, I could download discussions from English language
Reddit discussions, and how often Reddit users have typed “rule” versus how
many times they have typed “rupturewort” to understand how to rank these two
words given the context of “ru”.</p>

<p>You can extend your spreadsheet with counts (placed in the second column)
to make a more accurate—and thus more useful—lexical model.</p>

<p>Those comfortable with coding in JavaScript/TypeScript can code their
complete custom lexical models by <a
href="../../develop/lexical-model-api">implementing the
<code>WorkerInternalModel</code> API</a>.</p>

<p><a href="../tutorial">Next: Developing a lexical model from a word list</a></p>
