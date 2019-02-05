<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Step 6: Submitting a GitHub Pull Request',
        'css' => ['template.css','index.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="advanced-submitting">Step 6: Submitting a GitHub Pull Request</h1>

<h2 id="verify-build">Verify keyboard builds before submission</h2>
<p>
    Following the file layout documented in <a href="step-4.php">Organizing Keyboard Files</a>, your keyboard layout
    should be in a folder similar to
</p>

<pre class="language-none">
c:\projects\keyboards\release\s\sample1\
</pre>

<p>
    From the <strong>Git Bash</strong> shell, use the <code><strong>build.sh</strong></code> bash script
    at the root of the <i>keyboards</i> repo to compile the keyboard in the project. Your path to the keyboard
    will be relative to the <code><strong>build.sh</strong></code> script.
</p>

<pre class="language-bash">
<code>cd /c/projects/keyboards
./build.sh release/s/sample1
</code></pre>

<p>
    Verify the keyboard and keyboard package successfully built in
</p>

<pre class="language-none">
c:\projects\keyboards\release\s\sample1\build\
</pre>

<h2 id="commit-changes">Commit Your Changes</h2>
<p>
    Use <code class="language-none">git status</code> to see a summary of your working files. Move any extraneous files that aren't associated with your current
    keyboard out of the <code>keyboards</code> folder so they won't be associated with your commit.
</p>

<pre class="language-bash">
<code>git status
</code>
</pre>
<p>
    From the Git Bash command prompt, add all your keyboard files to a commit and push the branch to your fork.
    Instead of <code><strong>sample1</strong></code>, use the git branch name that matches the keyboard name you used in Step 4.
</p>

<pre class="language-bash">
<code>cd /c/projects/keyboards
git add .
git commit -m "Add initial version of sample1"
git push -u origin sample1
</code></pre>

<h2 id="create-pr">Create the Pull Request</h2>

<p>
    In your web browser while logged into GitHub, open your fork of the <i>keyboards</i> repository at
</p>

<pre class="language-none">
https://github.com/&lt;your-github-name&gt;/keyboards/compare
</pre>

<p>
    The "base fork" should default to <b>keymanapp/keyboards</b> and the "base" branch set to <b>master</b>.
</p>

<p>
    The "head fork" should default to your fork. Set the "compare" branch to one associated with your keyboard.
</p>

<p>
    When everything's ready, click the green <span class="guibutton">Create pull request</span> button.
</p>

<p>
    <img src="<?php echo cdn("img/developer/keyboards/comparing-changes.png"); ?>" />
</p>

<p>
    Congratulations! Some of our teammates will follow-up with you and communicate any revisions that need to be made
    for your keyboard to be added to the repository.
</p>

<p>
    After your branch has been merged into the <i>keyboards</i> repository, you won't need the branch and can safely
    delete it. Don't forget to also keep your fork in sync.
</p>
