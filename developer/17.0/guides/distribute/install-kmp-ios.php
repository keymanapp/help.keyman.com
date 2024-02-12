<?php
require_once('includes/template.php');

head([
  'title' => 'Installing Custom Keyboards to your iOS Device'
]);
?>

<h1 class="title">Installing Custom Keyboards to your iPhone or iPad</h1>
<h2>Overview</h2>

<p>In the 10.0 release of <a href="/products/iphone-and-ipad/10.0/">Keyman for iPhone and iPad</a>, we added a highly requested feature -
    the ability to easily download custom keyboards to your iOS device.</p>

<h2>Installing a custom keyboard</h2>
<p>To install a custom keyboard, you will first need a link to the keyboard package on a website or in your email.</p>

<p>If you want to build and deploy your own keyboard, you will need some technical skills for this, and can read our
    full step-by-step instructional on how to do this <a href="packages">here</a>.</p>

<p>Once you have a website or email with a link to the keyboard package, follow these steps on your iPhone or iPad
    to download and install the keyboard package into the Keyman for iPhone and iPad application:</p>

<h2 id="step-1">Step 1) Click the link to your custom keyboard package file</h2>
<p>The link in this example is for GFF Amharic 7 keyboard.</p>

<p><img src="<?= cdn('img/app/10.0/dist-url-screen-i.png')?>"></p>

<p>Safari will display an option to open the KMP file with Keyman</p>

<p><img src="<?= cdn('img/app/10.0/dist-kmp-open-i.png')?>"></p>

<h2 id="step-2">Step 2) Click Open in "Keyman"</h2>
<p>Keyman for iPhone and iPad will parse the metadata in the package. If the keyboard package includes a "welcome.htm" file,
    this will be displayed at the confirmation to install the keyboard package</p>

<p><img src="<?= cdn('img/app/10.0/dist-welcome-i.png')?>"></p>

<p>If "welcome.htm" is not included, a generic page with the package ID and package version will be shown.</p>

<h2 id="step3">Step 3) Click the top right "Install" button</h2>
<p>The keyboard from the keyboard package is successfully installed!</p>
<p><img src="<?= cdn('img/app/10.0/dist-kmp-success-i.png')?>"></p>

<p>All the keyboards in the package are installed as a group. In this example, the package only has the "GFF Amharic 7"
    keyboard, so it becomes the active keyboard</p>

<p><img src="<?= cdn('img/app/10.0/dist-install1-i.png')?>"></p>
