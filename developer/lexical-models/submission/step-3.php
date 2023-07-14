<?php
    require_once('includes/template.php');

    // Required
    // 
?>

<h1 id="development-tools">Step 3: Development Tools and Building a Lexical Model</h1>

<?php
    include('../_shared/development-tools.php');
?>

<h2>Building lexical models from the command line</h2>

<p>
    At the root of the <b>lexical-models</b> repo is a <code><strong>build.sh</strong></code> bash script you can use
    to compile the lexical model and package in the project.
</p>

<?php
    include('../_shared/development-build-sh.php');
?>

<p>
    In this guide, we'll primarily use the English MTNT lexical model located in
</p>

<pre class="language-none">
c:\projects\lexical-models\nrc\nrc.en.mtnt
</pre>

<p>
    From the Git Bash command prompt, we build our lexical model.
</p>

<p>
    <strong>Note:</strong> Commands in Git Bash follow Unix-style file paths.
</p>

<pre class="language-bash">
<code>cd /c/projects/lexical-models
./build.sh release/nrc/nrc.en.mtnt
</code></pre>

<p>
    <a href="step-4.php" title="Step 4: Organizing the Lexical Model Files">Step 4: Organizing the Lexical Model Files</a>
</p>
