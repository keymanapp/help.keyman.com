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
    We now have a single source for open source keyboards on github.com
</p>

<p style="text-align: left; padding-left: 30px;"><a href="https://github.com/keymanapp/keyboards" target="_blank"><strong>https://github.com/keymanapp/keyboards</strong></a></p>

<p>
    A large proportion of the keyboards on the site, including nearly all the keyboards that we have developed,
    are open source keyboards. You are of course welcome to download the layouts yourself and improve them,
    and we hope you will contribute your own keyboards to this repository for all to use.
</p>

<h3>Why You Should Contribute</h3>
<ul>
    <li>Accessibility:</li>
    <p>
    Many previous keyboards were stored on websites that no longer exist. Configuring your keyboard in the
    keyboards repo helps ensure users can download your keyboard from
    <a href="https://keyman.com/developer/keymanweb/keyboards.php" target="_blank">keyman.com</a>, find the
    documentation on <a href="https://help.keyman.com/keyboards/" target="_blank">help.keyman.com</a>, and you'll
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

<h2>Get Involved</h2>

<ul class='menu'>
    <p>
        For new users who are only creating and submitting a single keyboard, learn how to get set up with the keyboard
        repository on GitHub and the Keyman tools.
    </p>
    <li><a href="starter">Starter Guide</a></li>

    <p>
        For advanced users who are managing a larger number of keyboards, learn how to set up and contribute with
        the full keyboards repository.
    </p>
    <li><a href="advanced">Advanced Keyboard Submission Guide</a></li>
</ul>
