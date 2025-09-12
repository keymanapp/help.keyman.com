<?php
 if(!isset($device)){
    $device = '';
 }

 $section = $_SERVER['PHP_SELF'] == '/_includes/md/mdhost.php'
   ? ('/' . $_REQUEST['file'])
   : $_SERVER['PHP_SELF'];

   global $baselanguage;
 if(empty($baselanguage)) {
   if(preg_match('/^\/developer\/([0-9]+\.[0-9]+|language)\//i', $section)) {
     $baselanguage = ' class="language-keyman"';
   } else if(preg_match('/^\/developer\/engine\/web\/([0-9]+\.[0-9]+)\//i', $section)) {
     $baselanguage = ' class="language-javascript"';
   } else {
     $baselanguage = '';
   }
 } else {
   $baselanguage = " class='$baselanguage'";
 }

 if(preg_match('/^\/([a-z0-9._-]+)\//i', $section, $matches)) {
   $section = $matches[1];
 }

?>
<body data-device="<?= $device ?>" data-section="<?= $section ?>"<?= $baselanguage ?>>
<div id="phone-menu">
    <div id="phone-menu-inner">
        <div class="phone-menu-item">
            <h3>Product Support</h3>
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
        <div class="phone-menu-item">
            <h3>Keyboard Support</h3>
            <ul>
                <li><a href="/keyboard">Keyboard Home</a></li>
           </ul>
        </div>
        <div class="phone-menu-item">
            <h3>Developer Support</h3>
            <ul>
             <li><a href="/developer">Developer Home</a></li>
                <li><a href="/developer/current-version/">Keyman Developer</a></li>
                <li><a href="/developer/engine/web/">Keyman Engine for Web</a></li>
                <li><a href="/developer/engine/iphone-and-ipad/">Keyman Engine for iPhone and iPad</a></li>
                <li><a href="/developer/engine/android/">Keyman Engine for Android</a></li>
                <li><a href="/developer/engine/windows/">Keyman Engine for Windows</a></li>
                <li><a href="/developer/cloud/">Keyman Cloud</a></li>
            </ul>
        </div>
        <div class="phone-menu-item">
            <h3>Contact and Search</h3>
            <ul>
               <li><a href="<?= \Keyman\Site\Common\KeymanHosts::Instance()->keyman_com ?>/contact">Contact Us</a></li>
               <li><a href="/search/">Search Help</a></li>
           </ul>
        </div>
        <div class="phone-menu-item">
            <h3>Keyman.com Homepage</h3>
            <ul>
               <li><a href="<?= \Keyman\Site\Common\KeymanHosts::Instance()->keyman_com ?>">Keyman.com</a></li>
           </ul>
        </div>
    </div>
</div>