<?php
  require_once('includes/template.php'); 

$pagestyle = '#section2 .wrapper { overflow-x: inherit }';
  
  // Required
  head([
    'title' =>'Keyman Developer Help Index',
    'toc' => false,
    'index' => false,
    'css' => ['template.css','index.css'],
    'showMenu' => true
  ]);
?>
<h2 class="center">Keyman Developer Help Index</h2>
<div class="product" id="product-language">
    <a href="language/">
        <img src="<?php echo cdn("img/icon-language.png"); ?>" />
        <h3>Keyman Keyboard Language</h3>
        <p>
          Documentation and reference for the Keyman keyboard programming language.
        </p>
    </a>
</div>
<div class="product" id="product-developer">
    <a href="10.0/">
        <img src="<?php echo cdn("img/icon-developer.png"); ?>" />
        <h3>Keyman Developer</h3>
        <p>
          User guides for the keyboard development
          tool Keyman Developer.
        </p>
    </a>
</div>
<div class="product" id="product-web">
    <a href="engine/web">
        <img src="<?php echo cdn("img/icon-engineweb.png"); ?>" />
        <h3>Keyman Engine for Web</h3>
        <p>
          Integrate Keyman into your web applications.
        </p>
    </a>
</div>
<div class="product" id="product-iphone">
    <a href="engine/iphone-and-ipad">
        <img src="<?php echo cdn("img/icon-engineios.png"); ?>" />
        <h3>Keyman Engine for iPhone and iPad</h3>
        <p>
          Integrate Keyman into your iPhone and iPad apps.
        </p>
    </a>
</div>
<div class="product" id="product-android">
    <a href="engine/android">
        <img src="<?php echo cdn("img/icon-engineandroid.png"); ?>" />
        <h3>Keyman Engine for Android</h3>
        <p>
          Integrate Keyman into your Android apps.
        </p>
    </a>
</div>
<div class="product" id="product-wordpress">
    <a href="engine/desktop">
        <img src="<?php echo cdn("img/icon-enginedesktop.png"); ?>" />
        <h3>Keyman Engine for Desktop</h3>
        <p>
          Build a fully branded and customised desktop keyboarding product for Windows.
        </p>
    </a>
</div>
<div class="product" id="product-bookmarklet">
    <a href="cloud">
        <img src="<?php echo cdn("img/icon-cloud.png"); ?>" />
        <h3>Keyman Cloud Services</h3>
        <p>
          Manage and deploy your Keyman applications from one easy to use dashboard.
        </p>
    </a>
</div>

<div class="product" id="product-keyboards">
  <a href="keyboards">
    <img src="<?php echo cdn("img/icon-keyboard.png"); ?>" />
    <h3>Keyman Cloud Keyboard Repository</h3>
    <p>Open source repository for Keyman keyboards</p>
  </a>
</div>  
