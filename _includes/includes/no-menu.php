<?php
  require_once __DIR__ . '/../autoload.php';
  use Keyman\Site\Common\KeymanHosts;

 if(!isset($device)){
   $device = '';
 }

 // If we're in embedded mode, let's disable the default help.keyman.com
 // hyperlink at the top; it could easily be used by accident,
 // and embedding "web views" often have no back button.
 if(!isset($embed_template)) {
   $embed_template = false;
 }
?>
<body data-device="<?php echo $device; ?>">
  <div id="container">
    <div class="header">
      <div id="show-phone-menu-spacer"></div>
      <?php if(!$embed_template) { ?>
        <a id="home-link" href="/">
          <img id="logo" src="<?php echo cdn(KeymanHosts::Instance()->Tier() == KeymanHosts::TIER_PRODUCTION ? "img/logo2.png" : "img/logo2dev.png"); ?>" alt='Keyman Logo' />
        </a>
      <?php } else { ?>
        <img id="logo" src="<?php echo cdn(KeymanHosts::Instance()->Tier() == KeymanHosts::TIER_PRODUCTION ? "img/logo2.png" : "img/logo2dev.png"); ?>" alt='Keyman Logo' />
      <?php } ?>
      <div id="no-menu-spacer"></div>
      <img id="header-bottom" src="<?php echo cdn("img/headerbar.png"); ?>" alt='Header bottom' />
      <a id="help" href="//keyman.com">
        <p id="keyman-help">Keyman.com</p><img src="<?php echo cdn("img/helpIcon.png"); ?>">
      </a>
    </div>
    <div id="phone-header-spacer"></div>