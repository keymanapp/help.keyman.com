<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Step 5: Submitting a GitHub Pull Request',
        'css' => ['template.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="advanced-submitting">Step 5: Submitting a GitHub Pull Request</h1>

<h2 id="verify-build">Verify lexical model builds before submission</h2>
<p>
    Following the file layout documented in <a href="step-0.php">Organizing Lexical Model Files</a>, your lexical model
    should be in a folder similar to
</p>

<pre class="language-none">
c:\projects\lexical-models\release\nrc\nrc.en.mtnt\
</pre>

<p>
    From the <strong>Git Bash</strong> shell, use the <code><strong>build.sh</strong></code> bash script
    at the root of the <b>lexical-models</b> repo to compile the lexical-model in the project. Your path to the lexical model
    will be relative to the <code><strong>build.sh</strong></code> script.
</p>

<pre class="language-bash">
<code>cd /c/projects/lexical-models
./build.sh release/nrc/nrc.en.mtnt
</code></pre>

<p>
    Verify the lexical model and lexical model package successfully built in
</p>

<pre class="language-none">
c:\projects\lexical-models\release\nrc\nrc.en.mtnt\build\
</pre>

<h2 id="commit-changes">Commit Your Changes</h2>
<p>
    Use <code class="language-none">git status</code> to see a summary of your working files. Move any extraneous files that aren't associated with your current
    lexical model out of the <code>lexical-models</code> folder so they won't be associated with your commit.
</p>

<pre class="language-bash">
<code>git status
</code>
</pre>
<p>
    From the Git Bash command prompt, add all your lexical model files to a commit and push the branch to your fork.
    Replace <code><strong>nrc.en.mtnt</strong></code> in the following lines with the git branch name that matches your lexical model name.
</p>

<pre class="language-bash">
<code>cd /c/projects/lexical-models
git add .
git commit -m "Add initial version of nrc.en.mtnt"
git push -u origin nrc.en.mtnt
</code></pre>

<h2 id="create-pr">Create the Pull Request</h2>

<p>
    In your web browser while logged into GitHub, open your fork of the <b>lexical-models</b> repository at
</p>

<pre class="language-none">
https://github.com/&lt;your-github-name&gt;/lexical-models/compare
</pre>

<p>
    The "base fork" should default to <b>keymanapp/lexical-models</b> and the "base" branch set to <b>master</b>.
</p>

<p>
    The "head fork" should default to your fork. Set the "compare" branch to one associated with your lexical-model.
</p>

<p>
    When everything's ready, click the green <span class="guibutton">Create pull request</span> button.
</p>

<p>
    <img src="<?php echo cdn("img/developer/lexical-models/comparing-changes.png"); ?>" />
</p>

<p>
    Congratulations! Some of our teammates will follow-up with you and communicate any revisions that need to be made
    for your lexical model to be added to the repository.
</p>

<p>
    After your branch has been merged into the <b>lexical-models</b> repository, you won't need the branch and can safely
    delete it. Don't forget to also keep your fork in sync.
</p>
