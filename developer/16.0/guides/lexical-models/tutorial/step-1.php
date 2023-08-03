<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 1: Prerequisites for building a lexical model"
  ]);
?>

<h1>Step 1: Prerequisites for building a lexical model</h1>

<p> To prepare a lexical model based on a word list, we will need a few things: </p>

<ul>
  <li>Install <a href="https://keyman.com/developer">Keyman Developer</a> 12.0 or greater (Windows only)</li>
  <li>A list of words in your language, stored in an spreadsheet, in dictionary-making software or, other means. </li>
</ul>

<aside>
  <h3>Note</h3>
  <p>Currently, lexical models work better with languages that use regular spaces as word boundaries. For complex
    scripts such as Khmer, Thai, Lao, etc, a pre-processing is required before getting it to work, i.e. word segmentation
    has to be determined and/or configured. See the advanced topic on making a custom
    <a href='../advanced/word-breaker'>word breaker</a>.</p>

  <p>This will be addressed in a future <a href='https://github.com/keymanapp/keyman/issues/5025'>feature</a>.</p>
</aside>

<p> Now to create a lexical model project!</p>

<p><a href="step-2" title="Step 2: Creating a lexical model project">Step 2: Creating a lexical model project</a></p>
