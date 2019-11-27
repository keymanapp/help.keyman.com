<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Step 1: Setup - One Time Only',
        'css' => ['template.css','index.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="get-source">Step 1: Setup - One Time Only</h1>

<?php
    include('../_shared/create-github-account.php');
?>

<?php
include('../_shared/fork-lexical-models-repo.php');
?>

<?php
    include('../_shared/create-parent-folder.php');
?>

<h2>Clone your fork of the lexical-models repository</h2>

<p>
    Once you have installed Git, clone a local copy of the <b>lexical-models</b> repository onto your computer.
    Continuing from a command prompt, run the following steps:
</p>

<pre class="language-bash">
<code>cd /d c:\projects\
git clone https://github.com/&lt;your-github-name&gt;/lexical-models.git
</code></pre>

<p>
  When the clone is complete, your copy of the <b>lexical-models</b> repository will be on your computer at
</p>

<pre class="language-none">
c:\projects\lexical-models
</pre>

<h2 id="keep-fork-up-to-date">Adding the remote to the upstream lexical models repository</h2>

<p>
    From a command prompt, run the following:
</p>

<pre class="language-bash">
<code>cd /d c:\projects\lexical-models\
git remote add upstream https://github.com/keymanapp/lexical-models.git
</code></pre>

<h2 id="installing-node">Installing Node.js</h2>

<p>
  Download and install <a href="https://nodejs.org/en/download/">Node.js</a> which will be needed to compile the lexical model.
</p>

<p>
    Now let's check Step 2 for all the things to do before starting work on a lexical model.
</p>

<p>
    <a href="step-2.php" title="Step 2: Before Starting Work on a Lexical Model">Step 2: Before Starting Work on a Lexical Model</a>
</p>
