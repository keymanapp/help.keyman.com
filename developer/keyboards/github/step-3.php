<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Step 3: Organizing the Keyboard Files',
        'css' => ['template.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="organizing">Step 3: Organizing the Keyboard Files</h1>

<h2>Use one keyboard per folder</h2>

<p>
As was mentioned earlier (<a href="step-0.php">Preliminary Step: Is Your Keyboard Ready?</a>),
the GitHub repository requires a specific structure for the keyboard files.
Each keyboard needs to be in its own folder. That folder must have the same name as the .kpj file in that folder.
</p>

<p>
Normally, when it is time to submit the keyboard on GitHub, you will drag the folder ("sample1" in the example)
to the "release/s" folder on GitHub, so that the result is "release/s/sample1".
Or if you want to use the "experimental" section of the repository, you'll aim for the "experimental/s" folder.
But suppose your keyboard folder starts with a letter that doesn't appear?
(Yours might be the first keyboard folder name starting with "z"!)
In that case, you might need to create a folder "s" (sticking with our example) which contains the "sample1" folder.
Then you can drag the "s" folder to the "release" (or "experimental") folder on GitHub, to get the "release/s/sample1" result.
</p>

<p>
    Now let's check our keyboard source files.
</p>

<?php
    include('../_shared/organize-include-exclude.php');
?>

<p>
    Once you're done creating and testing your keyboard, you're ready to share the keyboard with us.
</p>

<p>
    <a href="step-4.php" title="Step 4: Submitting a GitHub Pull Request">Step 4: Submitting a GitHub Pull Request</a>
</p>
