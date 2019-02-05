<?php
 if(!isset($device)){
    $device = '';
 }
?>
<body data-device="<?php echo $device; ?>">
    <div id="container">
        <div class="header">
            <div id="show-phone-menu-spacer"></div>
            <a id="home-link" href="/"><img id="logo" src="<?php echo cdn("img/logo2.png"); ?>" alt='Keyman Logo' /></a>
            <div id="no-menu-spacer"></div>
            <img id="header-bottom" src="<?php echo cdn("img/headerbar.png"); ?>" alt='Header bottom' />
            <a id="help" href="http://keyman.com"><p id="keyman-help">Keyman.com</p><img src="<?php echo cdn("img/helpIcon.png"); ?>"></a>
        </div>
        <div id="phone-header-spacer"></div>