<?php
 if(!isset($device)){
    $device = '';
 }

 // If we're in embedded mode, let's disable the default help.keyman.com
 // hyperlink at the top; it could easily be used by accident,
 // and embedding "web views" often have no back button.
 if(!isset($embed)) {
   $embed = false;
 }
?>
<body data-device="<?php echo $device; ?>">
  <div id="container">
    <div class="header">
      <div id="show-phone-menu-spacer"></div>
      <?php if(!$embed) { ?>
      <a id="home-link" href="/">
      <?php } ?>
        <img id="logo" src="<?php echo cdn("img/logo2.png"); ?>" alt='Keyman Logo' />
      <?php if(!$embed) { ?>
      </a>
      <?php } ?>
      <div id="no-menu-spacer"></div>
      <img id="header-bottom" src="<?php echo cdn("img/headerbar.png"); ?>" alt='Header bottom' />
      <a id="help" href="http://keyman.com">
        <p id="keyman-help">Keyman.com</p><img src="<?php echo cdn("img/helpIcon.png"); ?>">
      </a>
    </div>
    <div id="phone-header-spacer"></div>