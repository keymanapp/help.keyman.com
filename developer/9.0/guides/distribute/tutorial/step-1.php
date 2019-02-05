<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 1: What do we include?"
  ]);
?>

<h1>Step 1: What do we include?</h1>

<p>What is the purpose of a package? To make installation of a keyboard, fonts, documentation, and on screen keyboard as
straightforward as possible for the end user.</p>

<p>We need to keep this goal in mind as we work on all the aspects of a package.</p>

<p>A good package will:</p>

<ol type="1">
  <li>Collect the keyboard and font files together for simple installation</li>
  <li>Include Start Menu items for documentation</li>
</ol>

<p>A great package will also:</p>

<ol type="1">
  <li>Include a 'readme' visible before install.</li>
  <li>Include a 'welcome.htm' file which is displayed after install.</li>
  <li>Include an On Screen Keyboard if relevant.</li>
  <li>Include documentation on use of the keyboard.</li>
</ol>

 <p>Packages uploaded to the Tavultesoft website will get basic icon ratings reflecting their ease of install/use:</p>

<ul type="disc">
  <li><img src="<?= cdn('img/developer/90/tutorial_package_includesfonts.gif') ?>"> includes fonts</li>
  <li><img src="<?= cdn('img/developer/90/tutorial_package_includesdocs.gif') ?>"> includes documentation</li>
  <li><img src="<?= cdn('img/developer/90/tutorial_package_includesosk.gif') ?>"> includes on screen keyboards</li>
  <li><img src="<?= cdn('img/developer/90/tutorial_package_includeswelcome.gif') ?>"> includes welcome.htm</li>
</ul>


<p>In general, the more icons that a package earns, the easier that end users will find it to start using.</p>

<p><a href="step-2.php" title="Step 2: Creating Additional Files for the Package">Step 2: Creating Additional Files for the Package</a></p>
