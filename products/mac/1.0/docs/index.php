<?php
  require_once('includes/template.php');

  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['template.css','keyboard.css','keys.css']
  ]);
?>

<h1>Keyman for Mac OS X Support</h1>

<p>Need help using Keyman for Mac OS X?  You'll find everything you need here, including product documentation,
frequently asked questions, tutorials and videos.  If you need to, you can even write to us and we'll make
sure we get you a solution to the problem.</p>

<div class='leftcol'>
  <div class='box'>
    <h2><a href=start_tutorial.php>Getting Started</a></h2>
    <ul>
      <li><a href=start_tutorial.php>Step-by-step Guide</a></li>
      <li><a href=start_download-install_keyboard.php>Installing a keyboard</a></li>
    </ul>
  </div>

  <div class='box'>
    <h2><a href=common.php>Common Questions</a></h2>
    <ul>
      <li><a href=about_requirements.php>Which versions does Keyman for Mac OS X work with?</a></li>
      <li><a href=common_keyboards.php>Which keyboards work on Mac?</a></li>
      <li><a href='../../version-history'>Version history</a></li>
    </ul>
  </div>

  <div class='box'>
    <h2>Ask for Help</h2>
    <ul>
      <li><a href='https://community.software.sil.org/c/keyman'>Ask other users in the SIL Keyman Community</a></li>
    </ul>
  </div>
</div>

<div class='rightcol'>
  <h2>Help Topics</h2>

  <div class='leftsubcol'>
<!--    <h3><a href='9.0/docs/troubleshooting.php'>Troubleshooting</a></h3>
    <ul>
      <li><a href='http://<?= $site_tavultesoft ?>/kb/?KnowledgeBaseID=42'>Square boxes or fonts not showing correctly</a></li>
      <li><a href='http://<?= $site_tavultesoft ?>/kb/?KnowledgeBaseID=40'>How to send a diagnostic report to Tavultesoft</a></li>
      <li><a href='http://<?= $site_tavultesoft ?>/kb/?KnowledgeBaseID=41'>Right-to-left text out of order</a></li>
      <li><a href='http://<?= $site_tavultesoft ?>/kb/?KnowledgeBaseID=63'>Windows and Word language configuration</a></li>
    </ul>-->

<!--    <h3><a href='9.0/docs/basic.php'>Using Keyman Desktop</a></h3>
    <ul>
      <li><a href='9.0/docs/basic_config_menu.php'>Configuration Tasks</a></li>
      <li><a href='9.0/docs/basic_languageswitcher.php'>Language Switcher</a></li>
      <li><a href='9.0/docs/basic_osk.php'>On Screen Keyboard</a></li>
      <li><a href='9.0/docs/basic_fonthelper.php'>Font Helper</a></li>
    </ul>

    <h3><a href='9.0/docs/advanced.php'>Advanced Topics</a></h3>
    <ul>
      <li><a href='9.0/docs/basic_charactermap.php'>Character Map</a></li>
      <li><a href='9.0/docs/start_hotkey_set.php'>Hotkeys</a></li>
      <li><a href='9.0/docs/advanced_tsf.php'>Text Services Framework Addin</a></li>
      <li><a href='http://<?= $site_tavultesoft ?>/kb/?id=33'>Use Word macros to switch keyboard and font</a></li>
      <li><a href='/developer/9.0/docs/comapi.php'>Application Programming Interface (API)</a></li>
    </ul>-->
  </div>

  <div class='rightsubcol'>
    <h3><a href='/keyboard/'>Keyboard Layouts</a></h3>
    <ul>
      <li><a href='/keyboard/ekwtamil99uni'>Tamil99</a></li>
      <li><a href='/keyboard/gff_amh_7'>Amharic</a></li>
      <li><a href='/keyboard/european2'>EuroLatin2</a></li>
      <li><a href='/keyboard/'>More keyboards...</a></li>
    </ul>

    <h3>Other Resources</h3>
    <ul>
      <li><a href='/kb/'>Knowledge Base</a></li>
      <li><a href='/developer/'>Keyman Developer Help</a></li>
      <li><a href='/products/web/2.0/'>KeymanWeb Help</a></li>
    </ul>
  </div>
</div>
