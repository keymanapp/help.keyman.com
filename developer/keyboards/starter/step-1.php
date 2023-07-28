<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Step 1: Get the Source',
        'css' => ['template.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="get-source">Step 1: Get the Source</h1>

<?php
    include('../_shared/create-github-account.php');
?>

<?php
    include('../_shared/fork-keyboards-repo.php');
?>

<?php
    include('../_shared/create-parent-folder.php');
?>

<h2>Clone the Keyboards-Starter repository</h2>
<p>
    Once you have installed Git, do a shallow clone of the <i>keyboards-starter</i> repository onto your computer.
    This <i>keyboards-starter</i> repository doesn't contain keyboards, but includes the tools you'll need in order to
    upload a keyboard layout to us.
</p>

<p>
    From a command prompt, run the following steps:
</p>
<pre class="language-bash">
<code>cd /c/projects
git clone --depth 1 https://github.com/keymanapp/keyboards-starter.git
</code></pre>

<p>
    When the clone is complete, your copy of the <i>keyboards-starter</i> repository will be on your computer at
</p>
<pre class="language-none">
c:\projects\keyboards-starter
</pre>

<h2 id="keep-local-up-to-date">Keep your local Keyboards-Starter files in sync</h2>

<p>
    Before starting work on a keyboard, you should keep your local <i>keyboards-starter</i> files in sync with our
    <a href="https://github.com/keymanapp/keyboards-starter">keyboards-starter</a> repository. This keeps the
    command line keyboard compiler up to date. Get the latest changes from the master repository with these following
    commands:
</p>

<p>
    <strong>Note: </strong> Stash or save any working files before changing branches.
</p>

<pre class="language-bash">
<code>cd /c/projects/keyboards-starter
git checkout master
git pull
</code></pre>

<p>
    Now let's check that we have the Keyman development tools for building a keyboard.
</p>

<p>
    <a href="step-2" title="Step 2: Development Tools and Building a Keyboard">Step 2: Development Tools and
    Building a Keyboard</a>
</p>
