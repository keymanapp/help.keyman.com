<?php
  require_once('includes/template.php');

  $pagestyle = '#section2 .wrapper { overflow-x: inherit }';

  // Required
  head([
    'title' =>'Keyman Engine',
    'css' => ['template.css'],
    'showMenu' => true,
    'toc' => false,
    'index' => false
  ]);
?>
<h2 class="center">Keyman Engine</h2>
<div class="product-index">
  <div class="product" id="product-web">
      <a href="web">
          <img src="<?php echo cdn("img/icon-engineweb.png"); ?>" />
          <h3>Keyman Engine for Web</h3>
          <p>
            Integrate Keyman into your web applications.
          </p>
      </a>
  </div>
  <div class="product" id="product-iphone">
      <a href="iphone-and-ipad">
          <img src="<?php echo cdn("img/icon-engineios.png"); ?>" />
          <h3>Keyman Engine for iPhone and iPad</h3>
          <p>
            Integrate Keyman into your iPhone and iPad apps.
          </p>
      </a>
  </div>
  <div class="product" id="product-android">
      <a href="android">
          <img src="<?php echo cdn("img/icon-engineandroid.png"); ?>" />
          <h3>Keyman Engine for Android</h3>
          <p>
            Integrate Keyman into your Android apps.
          </p>
      </a>
  </div>
  <div class="product" id="product-wordpress">
      <a href="windows">
          <img src="<?php echo cdn("img/icon-enginedesktop.png"); ?>" />
          <h3>Keyman Engine for Windows</h3>
          <p>
            Build a fully branded and customised desktop keyboarding product for Windows.
          </p>
      </a>
  </div>
</div>
