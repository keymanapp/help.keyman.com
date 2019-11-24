<?php
  require_once('includes/template.php'); 

  $pagestyle = '#section2 .wrapper { overflow-x: inherit }';
  
  // Required
  head([
    'title' =>'Keyman Core | Keyman Developer Help',
    'css' => ['template.css','index.css'],
    'showMenu' => true
  ]);
?>
<h2 class="center">Keyman Core</h2>
<div class="product" id="product-web">
    <a href="web">
        <img src="<?php echo cdn("img/icon-core-web.png"); ?>" />
        <h3>Keyman Core Web</h3>
        <p>
          Documents low level Keyman Javascript API for Keyman Engine on Web (Android, iOS, Web).
        </p>
    </a>
</div>
<div class="product" id="product-desktop">
    <a href="desktop">
        <img src="<?php echo cdn("img/icon-core-desktop.png"); ?>" />
        <h3>Keyman Core Desktop</h3>
        <p>
          Documents low level Keyman C API for Keyman Engine on desktop platforms (Windows, macOS, Linux)
        </p>
    </a>
</div>
