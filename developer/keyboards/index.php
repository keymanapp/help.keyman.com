<?php
    require_once('includes/template.php');
  
    // Required
    head([
        'title' =>'Guide: Working with the Keyman Cloud Keyboard Repository'
    ]);
?>

<h1>Working with the Keyman Cloud Keyboard Repository</h1>

<h2>Introduction</h2>

<p>
    The Keyman Cloud repository is the master source for all keyboard layouts distributed within the Keyman app.
    These keyboards have been contributed by many authors since the mid 1990's.
</p>

<h2>The Keyman Keyboard Repository</h2>
<p>
    We now have a single location for open source keyboards on github.com
</p>

<p style="text-align: left; padding-left: 30px;"><a href="https://github.com/keymanapp/keyboards" target="_blank"><strong>https://github.com/keymanapp/keyboards</strong></a></p>

<p>
    From these source files, we build the keyboards that can be downloaded from <a href="https://keyman.com" target="_blank"><strong>https://keyman.com</strong></a>.
</p>
<p>
    A large proportion of the keyboards on the site, including nearly all the keyboards that we have developed,
    are open source keyboards. This means that you can download the layouts yourself and improve them,
    and we hope you will contribute your own keyboards to this repository for all to use.
</p>

<h3>Why You Should Contribute</h3>
<ul>
    <li>Accessibility:</li>
    <p>
    Many previous keyboards were stored on websites that no longer exist. Configuring your keyboard in the
    keyboards repository helps ensure that users can download your keyboard from
    <a href="https://keyman.com/developer/keymanweb/keyboards.php" target="_blank">keyman.com</a> and find the
    documentation on <a href="https://help.keyman.com/keyboard/" target="_blank">help.keyman.com</a>.
    The source files for your keyboard will remain in the GitHub repository mentioned above so you'll
    be able to find the keyboard source for future updates.
    </p>

    <li>Version Control:</li>
    <p>
    Configuring your keyboard source in GitHub helps keyboard maintainers track the history of changes in your keyboard.
    Keyboard maintainers will also be able to see when keyboards are deprecated by another keyboard.
    </p>

    <li>Automatic Keyboard Updates</li>
    <p>
        The catalog of Keyman keyboards is automatically rebuilt when updates to the keyboard repo are made, and
        your keyboard users will receive notifications in their Keyman apps when newer keyboard versions
        become available.
    </p>
</ul>

<h2>How the Repository is Organized</h2>

<p>
    The "release" section of the repository (contained in the "release" folder) contains keyboards that have complete source files and documentation. 
</p>
<p>
    The "experimental" section of the repository (in the "experimental" folder) contains keyboards that are under active development, but don't yet have all the files necessary for release, or are being tested by user community members before finalizing the design.
</p>
<p>
    The "legacy" section of the repository (in the "legacy" folder) contains older keyboards that are functional, but don't contain complete source and documentation. 
</p>
<p>
    Within each section of the repository, there is a level of subfolders that serve to group the keyboards
    so that it isn't necessary to scroll through hundreds of entries to find a particular keyboard.
    Most of these subfolders are single alphabetic characters, and each folder contains the keyboards that start with that letter.
    In addition, there are some folders (fv and gff, for example) that correspond to organizations which have contributed a number of keyboards.
</p>



<h2>Get Involved</h2>

<ul class='menu'>
    <li><a href="advanced">Advanced Keyboard Submission Guide</a></li>
    <p>
        For advanced users who are managing a number of keyboards and are comfortable using git,
        learn how to get set up and contribute with the full keyboards repository.
    </p>
    <li><a href="github">GitHub Keyboard Submission Guide</a></li>
    <p>
        For users who are creating and submitting a single keyboard or would rather use the GitHub interface,
        learn how to get set up and contribute with using the online GitHub interface.
    </p>
    <li><a href="starter">Starter Guide (deprecated)</a></li>
    <p>
        For new users who are only creating and submitting a single keyboard,
        learn how to get set up with the keyboard repository on GitHub and the Keyman tools.
        (This method is deprecated. Try the GitHub Keyboard Submission Guide instead.)
    </p>

</ul>
