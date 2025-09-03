<?php

require_once __DIR__ . '/../autoload.php';
use Keyman\Site\Common\KeymanHosts;

?>
<div id="container">
    <div class="header">
        <img id="show-phone-menu" src="<?php echo cdn("img/phonehide.png"); ?>" />
        <a id="home-link" href="/"><img id="logo" src="<?php echo cdn(KeymanHosts::Instance()->Tier() == KeymanHosts::TIER_PRODUCTION ? "img/logo2.png" : "img/logo2dev.png"); ?>" alt='Keyman Logo' /></a>
        <img id="header-bottom" src="<?php echo cdn("img/headerbar.png"); ?>" alt='Header bottom' />
        <a id="help" href="<?= \Keyman\Site\Common\KeymanHosts::Instance()->keyman_com ?>"><p id="keyman-help">Keyman.com</p><img src="<?php echo cdn("img/helpIcon.png"); ?>"></a>
    </div>
    <div id="top-menu-bg"></div>
    <div id="top-menu1">
        <a href="/"><img id="top-menu-icon" src="<?php echo cdn("img/icon1.png"); ?>" /></a>
        <div class="menu-wrapper">
            <div class="menu-item" id="keyboards">
                <h3><a href="/products/">Product Support</a><span class="header-triangle"><img src="<?php echo cdn("img/img_trans.png"); ?>" /></span></h3>
                <div class="menu-item-dropdown">
                    <div class="menu-dropdown-inner">
                        <ul>
                            <li><a href="/products/windows/">Keyman for Windows</a></li>
                            <li><a href="/products/mac/">Keyman for macOS</a></li>
                            <li><a href="/products/linux/">Keyman for Linux</a></li>
                            <li><a href="/products/web/">Keymanweb.com</a></li>
                            <li><a href="/products/iphone-and-ipad/">Keyman for iPhone and iPad</a></li>
                            <li><a href="/products/android/">Keyman for Android</a></li>
                            <li><a href="/products/bookmarklet/">Keyman Bookmarklet</a></li>
                            <hr/>
                            <li><a href="/knowledge-base/">Knowledge Base</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" id="products">
                <a href="/keyboard/" ><h3>Keyboard Documentation</h3></a>
            </div>
            <div class="menu-item" id="developers">
                <h3><a href="/developer/">Developer Home</a><span class="header-triangle"><img src="<?php echo cdn("img/img_trans.png"); ?>" /></span></h3>
                <div class="menu-item-dropdown">
                    <div class="menu-dropdown-inner">
                        <ul>
                            <li><a href="/developer/current-version/">Keyman Developer</a></li>
                            <li><a href="/developer/language/">Keyman Keyboard Language</a></li>
                            <li><a href="/developer/engine/web/">Keyman Engine for Web</a></li>
                            <li><a href="/developer/engine/iphone-and-ipad/">Keyman Engine for iOS</a></li>
                            <li><a href="/developer/engine/android/">Keyman Engine for Android</a></li>
                            <li><a href="/developer/engine/windows/">Keyman Engine for Windows</a></li>
                            <li><a href="/developer/cloud/">Keyman Cloud</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" id="tavultesoft">
                <a href="<?= \Keyman\Site\Common\KeymanHosts::Instance()->keyman_com ?>/contact/" ><h3>Contact Us</h3></a>
            </div>

            <div class="menu-pseudo-item" id="menu-search">
              <form action="/search/" method="get" role="search">
                <div class="search-wrap">
                  <label for="main-q" class="offscreen">Search</label>
                  <input type="search" id="main-q" name="q" placeholder="Search" data-value="" value="" />
                  <button type="submit" class="offscreen">Search</button>
                </div>
              </form>
            </div>

          </div>
        <img id="top-menu-bottom" src="<?php echo cdn("img/headerbar.png"); ?>" />
    </div>
    <div id="phone-header-spacer"></div>