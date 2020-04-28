<?php
  require_once('includes/template.php');
  
  // Required
  head([
    'title' =>'Guide: Working with the Keyman Cloud Lexical Models Repository'
  ]);
?>

<h1>Working with the Keyman Cloud Lexical Models Repository</h1>

<h2>Introduction</h2>

<p>
  The Keyman Cloud repository is the master source for all lexical models distributed within the Keyman mobile apps.
  The use of these dictionaries started with Keyman 12.
</p>

<h2>The Keyman Lexical Models Repository</h2>
<p>
  Keyman can automatically download lexical models that are shared through our open source lexical model repository on github.com:
</p>

<p style="text-align: left; padding-left: 30px;"><a href="https://github.com/keymanapp/lexical-models" target="_blank">
    <strong>https://github.com/keymanapp/lexical-models</strong></a></p>

<p>
  From these source files, we build the lexical models that can be downloaded from the Keyman mobile apps.
</p>
<p>
  These lexical models are open source. This means that you can download the dictionaries yourself and improve them,
  and we hope you will contribute your own lexical models to this repository for all to use.
</p>

<h3>Why You Should Contribute</h3>
<ul>
  <li>Accessibility:</li>
  <p>
    Configuring your lexical model in the lexical-models repository helps ensure that users can find and download
    your lexical model from their Keyman mobile apps.
    The source files for your lexical model will remain in the GitHub repository mentioned above so you'll
    be able to find the source for future updates.
  </p>

  <li>Version Control:</li>
  <p>
    Configuring your lexical model source in GitHub helps lexical model maintainers track the history of changes in your dictionary.
  </p>

  <li>Automatic Lexical Model Updates</li>
  <p>
    The catalog of Keyman lexical models is automatically rebuilt when updates to the lexical-models repo are made, and
    your lexical-model users will receive notifications in their Keyman mobile apps when newer lexical model versions
    become available.
  </p>
</ul>

<h2>How the Repository is Organized</h2>

<p>
  The "release" section of the repository (contained in the "release" folder) contains lexical models that have
  complete source files and documentation. These are made available to the Keyman mobile apps.
</p>
<p>
    The "example" section of the repository (in the "sample" folder) contains shorter lexical models (sub 1000 entries) that are intended for demonstration purposes.
  They may be bundled with KMSample apps as a guide on adding and associating a lexical model with a keyboard.
</p>
<p>
  Within each section of the folders, models are further grouped by the template <i>author</i> / <i>author.bcp47.uniq</i>.
  For example, the folder structure may be:<br>
  <b>release/nrc/nrc.en.mtnt/</b><br><br>
  The components must be lower case and are:
</p>
<ul>
  <li><b>author</b>: a shortened string/abbreviation of the author or group, such as <i>nrc</i> or <i>sil</i></li>
  <li><b>bcp47</b>: the canonical BCP 47 language tag for the model. For example <i>str</i> for SENĆOŦEN</li>
  <li><b>uniq</b>:  an optional unique identifier that can be provided when a language has multiple models from a single author.
    For example, <i>example.en.custom</i> vs <i>example.en.wordlist</i>. We do recommend always using a unique string even if there are no
    current plans to produce more than one for a language.</li>
</ul>

<h2>Get Involved</h2>

<ul class='menu'>
    <p>
      For users who are <a href="/developer/current-version/guides/lexical-models/">creating</a> and submitting a lexical model,
      learn how to get set up with the lexical models repository on GitHub and the Keyman tools.
    </p>
    <li><a href="submission">Lexical Model Submission Guide</a></li>
</ul>
