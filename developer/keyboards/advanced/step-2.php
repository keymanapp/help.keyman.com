<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Step 2: Before Starting Work on a Keyboard',
        'css' => ['template.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="get-source">Step 2: Before Starting Work on a Keyboard</h1>


<h2 id="keep-fork-up-to-date">Keep your fork of the Keyboards repository in sync</h2>

<p>
    Before starting any work on a keyboard, you should keep your <b>keyboards</b> fork in sync with our
    <a href="https://github.com/keymanapp/keyboards">keyboards</a> repository.  This helps
    identify any potential merge conflicts that would occur with your keyboard. This also keeps the
    command line keyboard compiler up to date.
</p>

<p>
    <strong>Note:</strong> Make sure to stash or commit any current work before creating/checking out a new branch for
    working on a another keyboard. This way each keyboard will be in a unique folder on a unique Git branch.
    You will create the Git branch later in Step 4.
</p>

<pre class="language-bash">
<code>git stash</code>
</pre>
<br/>

<p>
   Get the latest changes from the master repository and push them to your fork with these following commands:
</p>

<pre class="language-bash">
<code>cd /c/projects/keyboards
git checkout master
git fetch upstream
git merge upstream/master
git push origin master
</code></pre>

<p>
    Learn more about <a href="https://help.github.com/articles/fork-a-repo/" target="_blank">managing your fork</a> and
    <a href="https://help.github.com/articles/syncing-a-fork/" target="_blank">keeping your fork in sync</a>.
</p>

<p>
    Now let's check that we have the Keyman development tools for building a keyboard.
</p>

<p>
    <a href="step-3.php" title="Step 3: Development Tools and Building a Keyboard">Step 3: Development Tools and
    Building a Keyboard</a>
</p>
