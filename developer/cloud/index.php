<?php
  require_once('includes/template.php'); 

$pagestyle = '#section2 .wrapper { overflow-x: inherit }';
  
  // Required
  head([
    'title' =>'Keyman Support | Type to the world in your language',
    'css' => ['template.css','index.css'],
    'showMenu' => true
  ]);
?>
<h2 class="center">Keyman Cloud</h2>
<div class="product">
    <a href="4.0/">
        <img src="<?php echo cdn("img/icon-cloud.png"); ?>" />
        <h3>KeymanWeb Server API 4.0</h3>
        <p>
          KeymanWeb 4.0 Server Data API documentation.
        </p>
    </a>
</div>
<div class="product">
    <a href="3.0/">
        <img src="<?php echo cdn("img/icon-cloud.png"); ?>" />
        <h3>KeymanWeb Server API 3.0</h3>
        <p>
          KeymanWeb 3.0 Server Data API documentation.
        </p>
    </a>
</div>

<div class="product">
    <a href="2.0/">
        <img src="<?php echo cdn("img/icon-cloud.png"); ?>" />
        <h3>KeymanWeb Server API 2.0</h3>
        <p>
          KeymanWeb 2.0 Server Data API documentation.
        </p>
    </a>
</div>
<div class="product">
    <a href="1.0/webapi.php">
        <img src="<?php echo cdn("img/icon-cloud.png"); ?>" />
        <h3>KeymanWeb Server API 1.0</h3>
        <p>
          KeymanWeb 1.0 Server Data API documentation.
        </p>
    </a>
</div>

<div class="product">
    <a href="https://blog.keyman.com/2012/06/programmatic-access-to-tavultesofts-keyboard-catalogue/">
        <img src="<?php echo cdn("img/icon-keyboard.png"); ?>" />
        <h3>Keyman Desktop Keyboards API</h3>
        <p>
          Documentation for programmatic access to Keyman's keyboard catalogue.
        </p>
    </a>
</div>

<div class="product">
    <a href="keyboard_info/1.0">
        <img src="<?php echo cdn("img/icon-keyboard.png"); ?>" />
        <h3>.keyboard_info 1.0 file specification</h3>
        <p>
          JSON-based description of keyboard file metadata used in
          Keyman repositories
        </p>
    </a>
</div>

<div class="product">
    <a href="search/1.0">
        <img src="<?php echo cdn("img/icon-cloud.png"); ?>" />
        <h3>Keyboard Search API 1.0</h3>
        <p>
          Keyboard Search API 1.0 documentation.
        </p>
    </a>
</div>

<div class="product">
    <a href="keyboard/1.0">
        <img src="<?php echo cdn("img/icon-cloud.png"); ?>" />
        <h3>Keyboard Result API 1.0</h3>
        <p>
          Keyboard Result API 1.0 documentation.
        </p>
    </a>
</div>

<div class="product">
    <a href="version/2.0">
        <img src="<?php echo cdn("img/icon-cloud.png"); ?>" />
        <h3>Keyman Version API 2.0</h3>
        <p>
            Keyman Version API 2.0 documentation.
        </p>
    </a>
</div>

<div class="product">
    <a href="model_info/1.0">
        <img src="<?php echo cdn("img/icon-cloud.png"); ?>" />
        <h3>.model_info 1.0 file specification</h3>
        <p>
          JSON-based description of model file metadata used in
          Keyman repositories
        </p>
    </a>
</div>
