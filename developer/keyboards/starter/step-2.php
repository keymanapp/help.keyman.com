<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Step 2: Development Tools and Building',
        'css' => ['template.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="development-tools">Step 2: Development Tools and Building a Keyboard</h1>

<?php
    include('../_shared/development-tools.php');
?>

<h2>Building keyboards from the command line</h2>

<p>
    At the root of the <i>keyboards-starter</i> repo is a <code><strong>build.sh</strong></code> bash script you can use
    to compile the keyboards and packages in the project.
</p>

<?php
    include('../_shared/development-build-sh.php');
?>

<p>
    In this guide, we'll primarily use the sample keyboard name <b>sample1</b>. From the Git Bash command prompt,
    we build our <b>sample1</b> keyboard.
</p>

<p>
    <strong>Note:</strong> Commands in Git Bash follow Unix-style file paths.
</p>

<pre class="language-bash">
<code>cd /c/projects/keyboards-starter
./build.sh sample1
</code></pre>

<p>
    <a href="step-3" title="Step 3: Organizing the Keyboard Files">Step 3: Organizing the Keyboard Files</a>
</p>
