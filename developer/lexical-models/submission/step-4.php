<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Step 4: Organizing the Lexical Model Files',
        'css' => ['template.css','index.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="organizing">Step 4: Organizing the Lexical Model Files</h1>

<h2>Use one lexical model per folder</h2>

<h3>Create a Git branch</h3>

<p>
    When working with several lexical models at the same time, separate each lexical model on different Git branches.
    We recommend naming each branch with the lexical model name. From the Git Bash command prompt, we create and checkout a
    Git branch named after the English MTNT <b>nrc.en.mtnt</b>.
</p>


<pre class="language-bash">
<code>cd /c/projects/lexical-models
git checkout -b nrc.en.mtnt master
</code></pre>

<h3>One Lexical Model in a Package</h3>

<p>
    Unlike keyboard packages which can contain several keyboards, only include one lexical model per lexical model package.
</p>

<h3>A Single Lexical Model Folder</h3>

<p>
    In your <b>lexical-models</b> folder on your hard drive, use Keyman Developer to create the project folder for your lexical model.
  In this example, the folder will be
</p>

<pre class="language-none">
c:\projects\lexical-models\release\nrc\<strong>nrc.en.mtnt\</strong>
</pre>

<p>
    Your lexical model needs to be in the "release" folder according to the author/group name because this
    matches the layout of the full lexical-models repo.
</p>

<p>
    Now that we've created a folder for our lexical model, we will create our lexical model source files.
</p>

<?php
    include('../_shared/organize-include-exclude.php');
?>

<p>
    Once you're done creating and testing your lexical model, you're ready to share the model with us.
</p>

<p>
    <a href="step-5.php" title="Step 5: Submitting a GitHub Pull Request">Step 5: Submitting a GitHub Pull Request</a>
</p>
