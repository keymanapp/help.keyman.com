<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Preliminary Step: Is Your Keyboard Ready?',
        'css' => ['template.css','index.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="get-source">Preliminary Step: Is Your Keyboard Ready?</h1>

<h2>Folder and File Structure and Naming</h2>

<p>
    The files for each keyboard are organized in a specific fashion to make it possible for the keyboards to be built automatically.
    If you are using Keyman Developer (version 11 or later), you can select "New Project" from the "Project" menu, then "Basic"
    and Keyman Developer will help you create folder and file names that meet the following requirements.
</p>
<?php
    include('../_shared/organize-ascii-characters.php');
?>

<?php
    include('../_shared/organize-folder-structure.php');
?>

<h2 id="template-files">Copy Template Files</h2>
<p>
    If you used "Project", "New Project", "Basic" as mentioned above, Keyman Developer will have created files in your keyboard project folder
    similar to those mentioned in the next paragraph, so you can skip that step because you won't need to copy them.
</p>
<p>
    The <b>keyboards</b> repo contains a set of <code>.md</code> and <code>.keyboard_info</code> files you can
    copy and fill with details relevant to your keyboard. They're available at the
    <code><strong>release/template/</strong></code> folder.
    Remember to rename <code>template.keyboard_info</code> with your keyboard name.
    The <code>.md</code> files use
    <a href="https://daringfireball.net/projects/markdown/" target='_blank'>Markdown</a>, an easy-to-read plain
    text format that can be converted to HTML.
</p>

<?php
    include('../_shared/contributing-keyboards.php');
?>

<?php
    include('../_shared/designing-keyboard.php');
?>

<?php
include('../_shared/set-output-path.php');
?>

<?php
    include('../_shared/license.php');
?>

<p>
    In Step 1 we'll get set up for making a submission to the Keyman keyboards repository.
</p>

<p>
    <a href="step-1.php" title="Step 1: Setup - One Time Only">Step 1: Setup - One Time Only</a>
</p>
