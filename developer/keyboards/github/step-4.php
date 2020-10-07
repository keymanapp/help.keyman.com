<?php
    require_once('includes/template.php');

    // Required
    head([
        'title' =>'Step 5: Submitting a GitHub Pull Request',
        'css' => ['template.css', 'prism.css', 'kmguides.css'],
        'showMenu' => true
    ]);
?>

<h1 id="github-submitting">Step 5: Submitting a GitHub Pull Request</h1>

<h2 id="verify-build">Verify keyboard builds before submission</h2>
<p>
    Following the file layout documented in <a href="step-0.php">Organizing Keyboard Files</a>,
    your keyboard folder layout should be similar to:
</p>

<pre class="language-none">
c:\projects\sample1\
</pre>

<p>
    or:
</p>

<pre class="language-none">
c:\projects\s\sample1\
</pre>

<p>
    Or, using the defaults of newer versions of Keyman Developer, something similar to:
</p>
<pre class="language-none">
C:\Users\Gwendolyn\Documents\Keyman Developer\Projects\s\sample1\
</pre>

<p>
    Before making your submission on GitHub, you'll need to use Keyman Developer to compile and test the keyboard and the package.
    Once you're satisfied that everything works, delete the "build" folder and its contents.
    (This may seem odd, but only the source files are submitted to the Keyman keyboards repository. 
    All the keyboards on the keyman.com site will be built from the source files.)
    You should also delete the .kpj.user file.
    (For our example we would delete the "s/sample1/sample1.kpj.user" file, but leave the "s/sample1/sample1.kpj" project file.)
</p>

<h2 id="create-pr">Create the Pull Request</h2>

<p>
    Now it is time to actually submit your keyboard files.
    In the GitHub jargon, you will be putting the files in a specific place (a "branch") and
    then requesting the Keyman team to "pull" those changes into keyboards repository.
    You will need to have Explorer opened showing your keyboard folder.
    Then in your web browser, while logged into GitHub, open your fork of the <b>keyboards</b> repository at:
</p>

<pre class="language-none">
https://github.com/&lt;your-github-name&gt;/keyboards
</pre>

<p class="hint">
    <b>Note:</b> The GitHub interface changes from time to time. The following images may vary from what you see on your screen.
</p>

<p>
    Click on the "Branch: master" button and type in the name of the branch you want to create.
    We suggest that you use the name of the keyboard as the name of your branch, but that's not required.
    After typing the name of the branch, click on "Create branch" or just type the Enter key.
</p>

<p>
    <img src="<?php echo cdn("img/developer/keyboards/github-create-branch.png"); ?>" />
</p>

<p>
    Now you need to navigate to the right location. This is the trickiest part of this procedure.
    You'll start by double-clicking on the "release" folder
    (or the "experimental" folder if you're using that option).
    Then you need to double-click on the folder name with the letter
    that corresponds to the first letter of your keyboard folder name.
    Since the "sample1" keyboard folder name starts with "s", we double-click on the "s" folder.
</p>

<p>
    Now we can click-and-drag the "sample1" folder from the Explorer window and drop that dragged folder 
    on the browser window that is displaying the existing keyboards that start with "s".
    This will copy the "sample1" folder and all its contents to the branch you created in your fork of the keyboards repository.
</p>

<p>
    Note: sometimes (especially if you're using the "experimental" folder)
    there is no existing letter folder corresponding to the first letter of your keyboard name.
    In that case, your keyboard folder needs to be under a letter folder 
    and you need to drag that folder to the browser window that is displaying the list of letter folders.
    In the example, you would click-and-drag the "s" folder (which contains the "sample1" folder)
    to the browser window displaying the list of letter folders.
</p>

<p>
    Below the list of files that were copied there is a place to "commit" your changes.
    Replace the default commit message with the name of your keyboard in square brackets
    followed by a short comment.
    Then click on the green "Commit changes" button.
</p>

<p>
    <img src="<?php echo cdn("img/developer/keyboards/github-commit-message.png"); ?>" />
</p>

<p>
    Now GitHub shows you the branch (to which you've just added files) and offers you several options.
    The one you want is the "Pull request" link.
</p>

<p>
    <img src="<?php echo cdn("img/developer/keyboards/github-pull-request-start.png"); ?>" />
</p>

<p>
    The "pull request" is ready to be submitted. 
    You can add a comment if you like.
    It's helpful if you select the "Allow edits by maintainers" checkbox.
    This allows reviewers to make minor corrections without needing to ask you to do them.
    When you're ready, click on the "Create pull request" button.
    GitHub will assign a number to your pull request.
</p>

<p>
    <img src="<?php echo cdn("img/developer/keyboards/github-pull-request-final.png"); ?>" />
</p>

<p>
    Congratulations! Some of our teammates will follow-up with you and communicate 
    any revisions that need to be made for your keyboard to be added to the repository.
    These requests will show up under the pull request number that GitHub assigned.
</p>

<p>
    Once your pull request is ready, the changes in your branch will be merged.
    After your branch has been merged into the <b>keyboards</b> repository,
    you won't need the branch and can safely delete it.
    If you won't be creating another keyboard (or if it will be a while before you do),
    you can delete your fork of the keyboards repository as well.
</p>
