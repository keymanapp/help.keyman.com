<?php
    require_once('includes/template.php');

    // Required
    // 
?>

<h1 id="get-source">Preliminary Step: Is Your Lexical Model Ready?</h1>

<h2>Folder and File Structure and Naming</h2>

<p>
    The files for each lexical model are organized in a specific fashion to make it possible for the lexical models to be built automatically.
    In Keyman Developer (version 12 or later), you can select "New Project" from the "Project" menu, then "Wordlist Lexical Model"
    and Keyman Developer will help you create folder and file names that meet the following requirements.
</p>
<?php
    include('../_shared/organize-ascii-characters.php');
?>

<?php
    include('../_shared/organize-folder-structure.php');
?>

<?php
    include('../_shared/contributing-lexical-models.php');
?>

<?php
include('../_shared/set-output-path.php');
?>

<?php
    include('../_shared/license.php');
?>

<p>
    In Step 1 we'll get set up for making a submission to the Keyman lexical-models repository.
</p>

<p>
    <a href="step-1.php" title="Step 1: Setup - One Time Only">Step 1: Setup - One Time Only</a>
</p>
