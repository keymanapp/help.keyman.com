<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 2: Creating a lexical model project",
    'css' => ['template.css', 'index.css', 'prism.css', 'kmguides.css', 'dev-lexical-models.css']

  ]);
?>

<h1>Step 2: Creating a lexical model project</h1>

<h2>Create the new project</h2>

<p>Start Keyman Developer. On the “Welcome” screen, click on
<span class="guibutton">New Project...</span>. The “New Project” dialog will
appear. Select “Wordlist Lexical Model” and press
<span class="guibutton">OK</span>.</p>

<figure>
  <img src="<?= cdn('img/developer/120/ui/frmNewLMProject.png') ?>"
       alt="“New Project” dialog" />
  <figcaption>The “New Project” dialog, with “Wordlist Lexical Model” selected.</figcaption>
</figure>



<h2>Provide required information</h2>


<figure class="aside">
  <img src="<?= cdn('img/developer/120/ui/frmNewLMProjectParameters.png') ?>" alt="New LM Project Parameters" />
  <figcaption>
   The New Lexical Model dialog box.
  </figcaption>
</figure>

<p> The “New Wordlist Lexical Model Project” dialog will appear. </p>

<p> To make sharing your lexical model easier, a project needs the following information: </p>

<dl>
  <dt>Author Name</dt>
  <dd>This is either your <strong>full name</strong> or the
  <strong>organization</strong> you're creating a model for. In this example, I
  am creating a lexical model on behalf of my organization, the National
  Research Council Canada, so I write that as the author name.</dd>

  <dt>Model Name</dt>
  <dd>We recommend the name of the <strong>language</strong>,
      <strong>dialect</strong>, or <strong>community</strong> that this model is
      intended for. The name must be written in all the Latin letters or Arabic numerals.
      In this example, we're creating a language model for SENĆOŦEN, so we use the model name <code>Sencoten</code>.</dd>
  </dd>
</dl>

<h2> Provide auxiliary information </h2>

<p> The following information is required, but most users will use
<strong>default values</strong>. </p>

<dl>
  <dt>Copyright</dt>
  <dd>Who owns the rights to this model and its data? Typically, you can use
      the automatically generated default value: <em>&copy; <?= gmdate("Y") ?> <strong>Your Full Name or
       Your Organization</strong></em>. </dd>
  <dt>Version</dt>
  <dd>If this is the first time you've created a lexical model for you
      language, you should leave the version as <strong>1.0</strong>. Otherwise,
      your version number must conform to the following rules: A version string made of
      <code>major revision number</code>.<code>minor revision number</code>.
  </dd>
</dl>

<h2> Determine your language's BCP 47 language tag </h2>

<p> Keyman needs to know how to link your model to the appropriate keyboard
layout, so that they can both start together. To do this, Keyman utilizes
<strong> BCP 47 </strong> language tags. </p>

<p> To add a language tag, click the <span class="guibutton">Add</span> button
to bring up the “Select BCP 47 Tag” dialog box.  </p>

<figure class="aside">
  <img src="<?= cdn('img/developer/120/ui/frmNewLMProjectSelectLanguage.png') ?>" alt="Select BCP 47 Tag dialog" />
  <figcaption>
    The “Select BCP 47 Tag” dialog box for SENĆOŦEN.
  </figcaption>
</figure>

<h3> The language subtag </h3>

<p>The only required option is the <dfn>Language subtag</dfn>, which is an
an <a href="https://en.wikipedia.org/wiki/ISO_639-1">ISO 639-1</a> or
<a href="https://en.wikipedia.org/wiki/ISO_639-3">ISO 639-3</a> code.</p>

<p>ISO 639-1 tags are a two-letter code. ISO 639-3 tags are a three-letter
code.  First, try to find your language on the list of two-letter ISO 639-1
codes. <a href="https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">This
Wikipedia page</a> lists all of the two-letter codes.</p>

<p>If you can't find a two-letter code, you'll need to find the closes three-letter code.
You can use <a href="https://glottolog.org/glottolog/language">Glottolog</a>
to search for your language, and it will give you an appropriate code. In this
example, I searched Glottolog for
“<a href="https://glottolog.org/resource/languoid/id/saan1246">Saanich</a>”
(name of the First Nations that speak SENĆOŦEN) and found <code>str</code> as
the code for all Straits Salish languages. </p>

<p>The next two fields are <strong>optional</strong>, however allow you to be more specific
about your language.</p>

<h3> The Script tag </h3>
<p> The <dfn>Script tag</dfn> allows you to specify the writing system used in
your language model. If your language only uses one writing system, <strong>leave this
blank</strong>.</p>

<p> Otherwise, in cases where a language can be written in many different
writing systems, you can use this field to choose the <a
  href="https://en.wikipedia.org/wiki/ISO_15924">ISO 15924</a> script tag that your lexical model produces.

<p>For example, Plains Cree can either be written in
<em>standard Roman orthography</em>, a <strong>Latin</strong> derived script,
or it can be written in <em>syllabics</em>, which is part of the
<strong>Canadian Aboriginal syllabics </strong> family of writing systems. If
I wrote a model that produced syllabics, I would choose <code>Cans</code>, as
that is the <strong>ISO 15924</strong> tag for Canadian Aboriginal
syllabics.</p>

<!-- TODO: Region tag -->

<p> Once you are finished adding the primary language, click <span
class="guibutton">OK</span> to return to the <strong>New Lexical Model Project dialog</strong>.


<h2> The model ID </h2>

<p> Keyman will create a <dfn>model ID</dfn> which is how Keyman sorts
and organizes different lexical models. If you followed the above steps, the
model ID will have been created for you.</p>

<p> If you're satisfied with the automatically generated model ID, you can
<a href="#finished">skip to the next step</a>. </p>

<p>In this example, my model ID is
<code>nrc.str.sencoten</code>, derived from my organization name, the name of
the primary language, and my model name.</p>


<p>These identifiers will be combined to make the <code class="language-none">Model ID</code> = <code>Author ID</code>.
  <code class="language-none">Primary Language</code>.<code class="language-none">Unique Name</code></p>

<hr>
<a id="finished"></a>

<p> Once we have created the project, we can begin to prepare the data! </p>

<p><a href="step-3.php" title="Step 3: Get some language data">Step 3: Get some language data</a></p>
