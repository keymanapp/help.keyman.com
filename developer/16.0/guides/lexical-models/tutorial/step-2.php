<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 2: Creating a lexical model project",
    'css' => ['template.css', 'prism.css', 'kmguides.css', 'dev-lexical-models.css']

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
</dl>

<h3> Provide auxiliary information </h3>

<p> The following information is also required, but most users will use
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
layout, so that they can both work together. To do this, Keyman utilizes
<a href="../../../reference/bcp-47">BCP 47</a> language tags. </p>

<p> To add a language tag, click the <span class="guibutton">Add</span> button
to bring up the “Select BCP 47 Tag” dialog box.  </p>

<figure class="aside">
  <img src="<?= cdn('img/developer/120/ui/frmNewLMProjectSelectLanguage.png') ?>" alt="Select BCP 47 Tag dialog" />
  <figcaption>
    The “Select BCP 47 Tag” dialog box for SENĆOŦEN.
  </figcaption>
</figure>

<p> Enter the BCP 47 language tag that you have selected.
<a href="../../../reference/bcp-47">Learn more about BCP 47
  language tags
</a></p>

<p> Once you are finished adding the primary language, click <span
class="guibutton">OK</span> to return to the <strong>New Lexical Model Project dialog</strong>.


<h2> The Model ID </h2>

<p> Keyman will create a <dfn>model ID</dfn> which is how Keyman sorts
and organizes different lexical models. If you choose to share your model
publicly, the model ID is vital for both people and Keyman to identify and
use your lexical model!</p>

<p> Keyman automatically generates a model ID for you, given all the
 information already filled out. If you're satisfied with the generated model
ID, you can <a href="#finished">skip to the next step</a>. </p>

<p>In this example, my generated model ID is
<code>national_research_council_canada.str.sencoten</code>,
derived from my organization name, the name of the primary language, and my
model name. However, I find the “author ID” part of the generated model ID
excessively long. I changed the author ID to <code>nrc</code>, and the model ID
automatically changes to the much more manageable <code>nrc.str.sencoten</code>.
</p>


<h2 id="finished">Double-check the information</h2>

<p> Verify that all of the information is correct. Once all of the required
information has been filled in and verified, click <span class="gui">OK</span>
to create the project.</p>

<p> Once we have created the project, we can begin to prepare the data! </p>

<p><a href="step-3.php" title="Step 3: Get some language data">Step 3: Get some language data</a></p>
