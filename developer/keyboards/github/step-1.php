<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Step 1: Setup - One Time Only',
        'css' => ['template.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="github-fork">Step 1: Setup - One Time Only</h1>

<h2>Create a GitHub account</h2>
<p>
    The Keyman repositories are stored on GitHub. If you don't already have one, you will need to
    <a href="https://github.com/join">create</a> a GitHub account using your web browser.
</p>

<?php
    include('../_shared/fork-keyboards-repo.php');
?>

<?php
    include('../_shared/create-parent-folder.php');
?>
<p>
    Newer versions of Keyman Developer default to using "Documents\\Keyman Developer".
</p>

<p>
    Now let's check that we have the Keyman development tools for building a keyboard.
</p>

<p>
    <a href="step-2.php" title="Step 2: Development Tools and Building a Keyboard">Step 2: Development Tools and Building a Keyboard</a>
</p>
