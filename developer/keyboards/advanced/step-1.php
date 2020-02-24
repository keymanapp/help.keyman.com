<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Step 1: Setup - One Time Only',
        'css' => ['template.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="get-source">Step 1: Setup - One Time Only</h1>

<?php
    include('../_shared/create-github-account.php');
?>

<?php
    include('../_shared/fork-keyboards-repo.php');
?>

<?php
    include('../_shared/create-parent-folder.php');
?>

<h2>Clone your fork of the Keyboards repository</h2>

<p>
    Once you have installed Git, clone a local copy of the <b>keyboards</b> repository onto your computer.
    Continuing from a command prompt, run the following steps:
</p>

<pre class="language-bash">
<code>cd /c/projects
git clone https://github.com/&lt;your-github-name&gt;/keyboards.git
</code></pre>

<p>
    <strong>Note:</strong> This repository is quite large, so make sure your network can handle the download and you
    allow sufficient time. When the clone is complete, your copy of the <b>keyboards</b> repository will be on your computer at
</p>

<pre class="language-none">
c:\projects\keyboards
</pre>

<h2 id="keep-fork-up-to-date">Adding the remote to the upstream Keyboards repository</h2>

<p>
    From a command prompt, run the following:
</p>

<pre class="language-bash">
<code>cd /c/projects/keyboards
git remote add upstream https://github.com/keymanapp/keyboards.git
</code></pre>

<p>
    Now let's check Step 2 for all the things to do before starting work on a keyboard.
</p>

<p>
    <a href="step-2.php" title="Step 2: Before Starting Work on a Keyboard">Step 2: Before Starting Work on a Keyboard</a>
</p>
