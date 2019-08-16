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
  word or words that you are typing next. For example, if start typing the
  English phrase “On my w”, your keyboard’s predictive text feature will infer
  using its knowledge of the English language that the word you are typing is
  most likely “way”, followed by other, less likely suggestions, such as
  “whole”, or “website”.</p>

<p>The same feature the provides predictive text can also provide
  <dfn>corrections</dfn> to what you are typing. For example, if I start typing
  “teh” on my English keyboard, my keyboard will suggesting that I meant to type
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
       alt="Typing “naiv” on a smartphone. The keyboard suggests “naïve” for this input." />
  <figcaption>Typing “naiv” on a smartphone with predictive text.</figcaption>
</figure>

<p>Some words have many accents, diacritics, or similar forms. This allows the
typist to type things quickly, with minimum effort. For example, in English, I
want to type “naïve”, however, my keyboard does not have the <kbd>ï</kbd> key
present on its main layour. Sure, if I use a keyboard that I can
press-and-hold the <kbd>i</kbd> key, it may pop-up additional characters, and
I can probably find <kbd>ï</kbd> nestled there among the other options.
However, I have to go out of my way to type the correct variant, whereas the
incorrect variant will be perfectly understood. In most cases, I choose the
option that is more economical to type–“naive”—rather than the “correct”
option.</p>

<p>However, a <strong>lexical model</strong> that understands the English
language will see the word “naive” does not exist, but a similarly typed
variant “naïve” does exist. Therefore, when I type “naive”, the lexical model
will suggest “naïve”, and I can select it and have the correctly spelled
version without having to long-press and select the correct “ï”. Even better
than that, I can chose the suggestion right after typing “naiv”, as there are
relatively view English words that start with the prefix of “naiv-”</p>


<h3>Words are long</h3>


<h3>People make mistakes</h3>
