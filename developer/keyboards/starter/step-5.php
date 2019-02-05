<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Step 5: Submitting a GitHub Pull Request',
        'css' => ['template.css','index.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="starter-submitting">Step 5: Submitting a GitHub Pull Request</h1>

<h2 id="verify-build">Verify keyboard builds before submission</h2>
<p>
    Following the file layout documented in <a href="step-3.php">Organizing Keyboard Files</a>, your keyboard layout
    should be in a folder similar to
</p>

<pre class="language-none">
c:\projects\keyboards-starter\sample1\release\s\sample1
</pre>

<p>
    From the <strong>Git Bash</strong> shell, use the <code><strong>build.sh</strong></code> bash script
    at the root of the <i>keyboards-starter</i> repo to compile the keyboard in the project.
</p>

<pre class="language-bash">
<code>cd /c/projects/keyboards-starter
./build.sh sample1
</code></pre>

<p>
    Verify the keyboard and keyboard package successfully built in
</p>

<pre class="language-none">
c:\projects\keyboards-starter\sample1\release\s\sample1\build\
</pre>

<h2 id="remove-build">Delete entire build\ folder</h2>

<p>
    Because the build server will automically rebuild the keyboard, we do not want to submit the <code>build\</code>
    folder to GitHub. From Explorer, delete the entire folder at
</p>

<pre class="language-none">
c:\projects\keyboards-starter\sample1\release\s\sample1\<strong>build\</strong>
</pre>

<h2 id="upload">Uploading Keyboard Files to GitHub</h2>

<p>
    In your web browser while logged into GitHub, open your fork of the <i>keyboards</i> repository at
</p>

<pre class="language-none">
https://github.com/&lt;your-github-name&gt;/keyboards
</pre>

<p>
    <img src="<?php echo cdn("img/developer/keyboards/clone-fork.png"); ?>" />
</p>

<p>
    Click <span class="guibutton">Upload files</span> that's left of the green Clone button.
</p>

<p>
    In Explorer, locate the
</p>
<pre class="language-none">
c:\project\keyboards-starter\sample1\release
</pre>
<p>
    folder and drag the entire <i>release</i> folder into the drop target in the upload page in your web browser.
    Don't drag individual files, because this will lose the folder structure.
</p>

<p>
    <img src="<?php echo cdn("img/developer/keyboards/drag-files.png"); ?>" />
</p>

<h3>Remove the following files</h3>
<p>
    Once GitHub has created a list of files to upload in your web browser, remove any of the following files:
</p>
<ul>
    <li><code><strong>.kpj.user</strong></code> - Developer settings not needed for the keyboard</li>
    <li>Any <code><strong>sample1/build/</strong></code> files - These will automatically be rebuilt</li>
</ul>

<h3>Check the list of files</h3>
<p>
    The set of keyboard files to upload will look something like:
    <img src="<?php echo cdn("img/developer/keyboards/upload-sample1-files.png"); ?>" />
</p>

<h2 id="committing">Commiting the Changes</h2>
<p>
    In the <strong>Commit changes</strong> section, enter a summary (e.g. Initial version of sample1 keyboard)
    and a detailed description of any comments that you wish.
</p>

<p>
    Select "Create a new branch for this commit" and enter the keyboard name for the branch name.
</p>

<p>
    <img src="<?php echo cdn("img/developer/keyboards/create-branch.png"); ?>" />
</p>

<p>
    Click "Propose changes" and wait for GitHub to do its magic "processing your files".
</p>

<h2 id="create-pr">Creating the Pull Request</h2>
<p>
    GitHub will create an "Open a pull request" page. Click the "compare across forks" link.
    <img src="<?php echo cdn("img/developer/keyboards/compare-across-forks.png"); ?>" />
</p>

<p>
    For the "base fork", select <b>keymanapp/keyboards</b>. In the PR summary, add your keyboard name.
    When everything's ready, click the green <span class="guibutton">Create pull request</span> button.
</p>

<p>
    <img src="<?php echo cdn("img/developer/keyboards/base-fork-pr.png"); ?>" />
</p>

<p>
    Congratulations! Some of our teammates will follow-up with you and communicate any revisions that need to be made
    for your keyboard to be added to the repository.
</p>
