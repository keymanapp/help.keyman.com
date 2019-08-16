<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 4: Create a unique model ID"
  ]);
?>

<h1>Step 4: Create a unique model ID</h1>

<p>Now that we have our TSV file, called <strong>wordlist.tsv</strong>, let’s create the associated packaging folder and data.</p>

<p>Our model needs a <strong>unique ID</strong>. For publicly sharing models online in the <a href="https://github.com/keymanapp/lexical-model">lexical-models repository</a>, the unique ID must be a string in the format:</p>

<p><em>author</em>.<em>bcp47</em>.<em>uniq</em></p>

<h3>Author</h3>

<p><em>author</em> is an identifier for the maintainer of the model. This identifier is a string of one or more ASCII lowercase letters, digits, and the underscore (<code>_</code>), and it must begin with a lowercase ASCII letter. Some organizations have an author identifier already, like <code>sil</code> for SIL International, <code>nrc</code> for the National Research Council Canada, and <code>fv</code> for FirstVoices.</p>

<h3>BCP 47</h3>

<p><em>bcp47</em> is the <a href="https://tools.ietf.org/html/bcp47">BCP 47</a> tag of the language, script, and region you are modelling. If you need to uses dashes in your language’s BCP 47 tag, replace them with underscores; likewise, replace uppercase letters with lowercase letters.</p>

<p>Typically, this will just be the <a href="https://iso639-3.sil.org/code_tables/639/data">ISO 639-3</a> code of your language, and nothing else. In the case of SENĆOŦEN, <a href="https://iso639-3.sil.org/code/str">its ISO 639-3 code is <code>str</code></a>.</p>

<p>In some cases, you will have to specify the script (writing system), and the region. For example, if I’m creating a model for Plains Cree (ISO 639-3: <code>crk</code>) it can be written both in the Latin script (<a href="https://en.wikipedia.org/wiki/ISO_15924">ISO 15924</a>: <code>Latn</code>) and in Unified Canadian Aboriginal Syllabics (<a href="https://en.wikipedia.org/wiki/ISO_15924">ISO 15924</a>: <code>Cans</code>). Say my model is only designed for syllabics. The correct BCP 47 tag is:</p>

<pre><code>crk-Cans</code></pre>

<p>However, to create a valid lexical model ID, we need to replace the dash with an underscores, and convert all uppercase letters to lowercase. Thus, our <code>bcp47</code> is:</p>

<pre><code>crk_cans</code></pre>

<h3 id="uniq">Uniq</h3>

<p><em>uniq</em> is an arbitrary tag that uniquely identifies your specific model. This identifier can be anything, as long as it hasn’t already been used before for this specific author or organization. As with <code>author</code> identifier is one or more ASCII lowercase letters, digits, and the underscore (<code>_</code>), and it must start with a lowercase ASCII letter.</p>

<h3 id="example-1">Example</h3>

<p>My author is called <code>example</code>, and the BCP 47 for my language is <code>str</code>. I’ll give my model the unique tag of <code>tutorial</code>. Thus my unique model is:</p>

<pre><code>example.str.tutorial</code></pre>

<p>Now that we have… TODO</p>

<p><a href="step-5.php" title="TODO">TODO</a></p>
