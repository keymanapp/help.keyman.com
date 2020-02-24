<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Step 4: Organizing the Keyboard Files',
        'css' => ['template.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="organizing">Step 4: Organizing the Keyboard Files</h1>

<h2>Use one keyboard per folder</h2>

<h3>Create a Git branch</h3>

<p>
    When working with several keyboards at the same time, separate each keyboard on different Git branches.
    We recommend naming each branch with its keyboard name. From the Git Bash command prompt, we create and checkout a
    Git branch named after the sample keyboard <b>sample1</b>. The desktop and touch layout keyboards for <b>sample1</b>
    can be in the same folder on the same Git branch.
    (If we were also working on a second keyboard named <b>mysample2</b>, that would go on a Git branch named <b>mysample2</b>).
</p>


<pre class="language-bash">
<code>cd /c/projects/keyboards
git checkout -b sample1 master
</code></pre>

<h3>Related Keyboards in a Package</h3>

<p>
    If you have a set of related keyboards, these can be deployed together
    in a single keyboard package and included on the same Git branch. However, in
    the keyboards repository, each keyboard is configured in its own folder, and the combined package can be included as
    a separate target in the <code><strong>release/packages</strong></code> top-level folder.
</p>

<p>
    For example, if you have two keyboards for an <code><strong>xyz</strong></code> language where one uses a Latin script
    and another Arabic script, they could be in a package folder <code><strong>xyz</strong></code>:
</p>

<pre class="code language-none">
c:\projects\keyboards\release\xyz\xyz_arabic\
c:\projects\keyboards\release\xyz\xyz_latin\
</pre>

<h3>A Single Keyboard Folder (No Package)</h3>

<p>
    In your <b>keyboards</b> folder on your hard drive, use Explorer to make a folder for the keyboard you're creating:
</p>

<pre class="language-none">
c:\projects\keyboards\release\s\<strong>sample1\</strong>
</pre>

<p>
    Your keyboard needs to be in the "release" folder according to the first letter of the keyboard name because this
    matches the layout of the full keyboards repo.
</p>

<p>
    Now that we've created a folder for our keyboard, we will create our keyboard source files.
</p>

<?php
    include('../_shared/organize-include-exclude.php');
?>

<p>
    Once you're done creating and testing your keyboard, you're ready to share the keyboard with us.
</p>

<p>
    <a href="step-5.php" title="Step 5: Submitting a GitHub Pull Request">Step 5: Submitting a GitHub Pull Request</a>
</p>
