<?php
    require_once('includes/template.php');

$pagestyle = '#section2 .wrapper { overflow-x: inherit }';

  // Required
  head([
    'title' =>'Keyman Support | Type to the world in your language',
    'css' => ['template.css'],
    'index' => false,
    'toc' => false
  ]);
?>
<h1 class="major-title">Welcome to Keyman Support - what do you need help with today?</h1>
<div class="product-index">
  <div class="product" id="product-products">
      <a href="/products/">
          <img src="<?php echo cdn("img/icon-products.png"); ?>" />
          <h3>Keyman Products</h3>
          <p>
            Learn how to use the range of Keyman software. Includes documentation and help for Keyman for Windows (Desktop),
            Keymanweb.com, Keyman for Android, Keyman for iPhone and iPad, Keyman for Wordpress and the Keyman Bookmarklet.
          </p>
      </a>
  </div>
  <div class="product" id="product-keyboard">
      <a href="/keyboard/">
          <img src="<?php echo cdn("img/icon-keyboard.png"); ?>" />
          <h3>Keyboard Documentation</h3>
          <p>
            Learn how to use a specific keyboard. Includes keyboard documentation, layouts, examples and reference charts.
          </p>
      </a>
  </div>
  <div class="product" id="product-developer">
      <a href="/developer/">
          <img src="<?php echo cdn("img/icon-dev.png"); ?>" />
          <h3>Developer Area</h3>
          <p>
            Find support and documentation for Keyman Developer, as well as our Keyman Engine products: Keyman Engine for Desktop, Keyman Engine for Web, Keyman Engine for Android and Keyman Engine for iPhone and iPad.
          </p>
      </a>
  </div>
</div>