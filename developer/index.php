<?php
  require_once('includes/template.php');

$pagestyle = '#section2 .wrapper { overflow-x: inherit }';

  // Required
  head([
    'title' =>'Keyman Developer Help Index',
    'toc' => false,
    'index' => false,
    'css' => ['template.css'],
    'showMenu' => true
  ]);
?>
<h1 class="major-title">Keyman Developer Help Index</h1>

<div class="product-index">

  <div class="product" id="product-language">
      <a href="language/">
          <img src="<?php echo cdn("img/icon-language.png"); ?>" />
          <h3>Keyman Keyboard Language</h3>
          <p>
            Documentation and reference for the Keyman keyboard programming language.
          </p>
      </a>
  </div>
  <div class="product" id="product-ldml">
      <a href="ldml/">
          <img height="100" style="padding: 25px;" src="<?php echo cdn("img/icon-ldml.png"); ?>" />
          <h3>LDML Format</h3>
          <p>
            Documentation and reference for the Locale Data Markup Language (LDML) format.
          </p>
      </a>
  </div>
  <div class="product" id="product-developer">
      <a href="current-version/">
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
          <h3>Keyman Engine for iOS</h3>
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
      <h3>Keyboard Repository</h3>
      <p>Open source repository for Keyman keyboards</p>
    </a>
  </div>

  <div class="product" id="product-lexical-models">
    <a href="lexical-models">
      <img src="<?= cdn("img/icon-lexical-model.png"); ?>" />
      <h3>Lexical Models Repository</h3>
      <p>Open source repository for Keyman lexical models</p>
    </a>
  </div>

  <div class="product" id="product-training">
    <a href="videos">
      <img src="<?= cdn("img/icon-vimeo.png"); ?>" />
      <h3>Keyman Training Videos</h3>
      <p>Training presentations for Keyman Developer</p>
    </a>
  </div>

  <div class="product" id="product-core">
    <a href="core">
      <img src="<?= cdn("img/icon-core.png"); ?>" />
      <h3>Keyman Core</h3>
      <p>Internal API documentation for Keyman Core</p>
    </a>
  </div>

</div>
