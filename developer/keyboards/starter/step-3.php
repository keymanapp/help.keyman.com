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

<?php
    include('../_shared/organize-ascii-characters.php');
?>

<h2>Use one keyboard per folder</h2>

<p>
    In your <i>keyboards-starter</i> folder on your hard drive, make folders for each keyboard you create. In addition
    to our first sample keyboard name <b>sample1</b>, I'll list an additional sample keyboard <b>mysample2</b>
    to illustrate how additional keyboards would be made. Using Explorer, we create the folder structures:
</p>

<pre class="language-none">
c:\projects\keyboards-starter\<strong>sample1\release</strong>
c:\projects\keyboards-starter\<strong>mysample2\release</strong>
</pre>

<p>
    Each of your keyboards needs a "release" folder which matches the layout of the full keyboards repo.
    When the time comes to submit a keyboard, we create a Pull Request where we upload the entire "release" folder
    (1 per pull request), where it will get merged according to the first letter in the keyboard base name.
    Continuing with our sample keyboard names, we create the additional subfolders:
</p>

<pre class="language-none">
c:\projects\keyboards-starter\sample1\release\<strong>s\sample1</strong>
c:\projects\keyboards-starter\mysample2\release\<strong>m\mysample2</strong>
</pre>

<p>
    Down in these folders, we will create our keyboard source files.
</p>

<?php
    include('../_shared/organize-folder-structure.php');
?>

<h2 id="template-files">Copy Template Files</h2>
<p>
    The <i>keyboards-starter</i> repo contains a set of <code>.md</code> and <code>.keyboard_info</code> files you can
    copy and fill with details relevant to your keyboard. They're available at the
    <code><strong>template/release/t/template/</strong></code> folder.
    Remember to rename <code>template.keyboard_info</code> with your keyboard name.
    The <code>.md</code> files use
    <a href="https://daringfireball.net/projects/markdown/" target='_blank'>Markdown</a>, an easy-to-read plain
    text format that can be converted to HTML.
</p>

<?php
    include('../_shared/organize-include-exclude.php');
?>

<p>
    Now that you know how to organize the keyboard files, let's learn some principles for contributing keyboards.
</p>

<p>
    <a href="step-4" title="Step 4: Principles for Contributing Keyboards">Step 4: Principles for Contributing Keyboards</a>
</p>
