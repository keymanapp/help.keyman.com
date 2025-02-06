<?php
  require_once('includes/template.php');

$pagestyle = '#section2 .wrapper { overflow-x: inherit }';

  // Required
  head([
    'title' =>'Keyman Support | Type to the world in your language',
    'css' => ['template.css'],
    'showMenu' => true,
    'index' => false,
    'toc' => false
  ]);
?>
<h1 class="major-title">Keyman Products Help Index</h1>
<div class="product-index">
    <div class="product" id="product-windows">
        <a href="windows">
            <img src="<?php echo cdn("img/icon-desktop.png"); ?>" />
            <h3>Keyman for Windows</h3>
            <p>
                Type in your language in all your favourite software applications for Windows.  Keyman for Windows will automatically configure your system for your language.
            </p>
        </a>
    </div>
    <div class="product" id="product-macosx">
        <a href="mac">
            <img src="<?php echo cdn("img/icon-mac.png"); ?>" />
            <h3>Keyman for macOS</h3>
            <p>
                Type in your language in all your favourite software applications for macOS.
            </p>
        </a>
    </div>
    <div class="product" id="product-linux">
        <a href="linux">
            <img src="<?php echo cdn("img/icon-tux.png"); ?>" />
            <h3>Keyman for Linux</h3>
            <p>
                Type in your language in your software applications for Linux.
            </p>
        </a>
    </div>
    <div class="product" id="product-web">
        <a href="web">
            <img src="<?php echo cdn("img/icon-web.png"); ?>" />
            <h3>keymanweb.com</h3>
            <p>
                Type instantly in your web browser and post to Facebook, Google and more, or copy and paste to use the text anywhere!  No download or configuration is required.
            </p>
        </a>
    </div>
    <div class="product" id="product-iphone">
        <a href="iphone-and-ipad">
            <img src="<?php echo cdn("img/icon-iphone.png"); ?>" />
            <h3>Keyman for iPhone and iPad</h3>
            <p>
                Type in your language on your iPhone.  Keyman brings the iPhone language experience to life, adding support for many languages and scripts that Apple do not support!
            </p>
        </a>
    </div>
    <div class="product" id="product-android">
        <a href="android">
            <img src="<?php echo cdn("img/icon-android2.png"); ?>" />
            <h3>Keyman for Android</h3>
            <p>
                Type in over 600 languages on your Android device. Touch enabled keyboards for phone, 7-inch and 10-inch tablets ensure a seamless typing solution across any Android device.
            </p>
        </a>
    </div>
    <div class="product" id="product-bookmarklet">
        <a href="bookmarklet">
            <img src="<?php echo cdn("img/icon-bookmarklet.png"); ?>" />
            <h3>Keyman Bookmarklet</h3>
            <p>
                Add the Keyman Bookmarklet to your web browser to type in your language on every website you visit.
            </p>
        </a>
    </div>
    <div class="product" id="knowledgebase">
        <a href="/knowledge-base/">
            <img src="<?php echo cdn("img/helpIconBig.png"); ?>" />
            <h3>Knowledge Base</h3>
            <p>
                Find how-tos, information, and solutions to problems in our collection of knowledge base articles.
            </p>
        </a>
    </div>
</div>
<p><a href='/version-history'>Product version history</a></p>
