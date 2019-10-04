<?php
  $pagetitle = 'Guide: build a system keyboard app'; 
  require_once('includes/template.php');
  
  head([
    'title' => $pagetitle
  ]);
?>
<h1 class="center"><?php echo $pagetitle; ?></h1>

<p>In <a href="../in-app/">part 1</a> of this series, we looked at the steps involved in creating a basic Android app
  which included a Keyman in-app keyboard. In this post, we'll work with the second sample included in the Keyman
  Engine for iPhone and iPad package, which is a very basic System Keyboard app. This post builds on concepts and setup from
  the first post, so be sure you are familiar with that before you start on this one.</p>

<h3>1. Basic configuration</h3>

<p>As you may recall, the Keyman Engine for iPhone and iPad archive includes two sample projects.
  This guide will use the second example project, <strong>KMSample2</strong>.
<ol type="1" start="1">
  <li>The KMSample2 project can be found at <strong>samples/KMSample2</strong>.</li>
  <li>Double-click <strong>KMSample2.xcodeproj</strong> to begin, or open it via
    <strong>File > Open</strong> to get started.</li>
</ol>

<h3>2. Run the sample app</h3>

<p>The KMSample2 app includes the Tamil99M keyboard as an example keyboard. Without any further modifications to the code, the
  app should run and you'll be able to configure your device to use your app as the system keyboard.</p>
<p>However, due to Apple's code signing policies, you'll need to reconfigure the project a bit first:</p>
<ol>
  <li>You will need to choose an unreserved App Group name for compilation to succeed.
    Do a find and replace on "group.KMSample" with your custom name.</li>
  <li>You may also need to alter the Bundle Identifier under the project properties' "General" tab.</li>
  <li>Note that provisioning profiles must be set for both the KMSample2 and SWKeyboard targets.</li>
  <li>The downloaded project does not bundle the frameworks you'll need - make sure to get those in place.</li>
</ol>
<p>Once all of the pieces are in place, launch the app in Simulator, then back out to the main screen.
  From there, launch the Settings app and go to <strong>General > Keyboards > Keyboards</strong>
to enable KMSample2 as a system keyboard.</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/ios/12.0/guides/system-keyboard/set-sys-kbd-800wi.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01b8d0e9c7c0970c-800wi image-full img-responsive"
        title="Emulator" src="<?php echo cdn("img/engine/ios/12.0/guides/system-keyboard/set-sys-kbd-800wi.png"); ?>"
        alt="Emulator" border="0"/></a></p>
<p>Once that's done, open any app that can accept text input and select KMSample2 as your keyboard!  Note that in this sample,
the Tamil99M keyboard can be accessed through the keyboard's "globe" key if it is not set active within KMSample2.</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/ios/12.0/guides/system-keyboard/sys-kbd-active.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01b8d0e9c7c0970c-800wi image-full img-responsive"
        title="Emulator" src="<?php echo cdn("img/engine/ios/12.0/guides/system-keyboard/sys-kbd-active-800wi.png"); ?>"
        alt="Emulator" border="0"/></a></p>

<h3>3. Extending the app</h3>

<p>From here, you will no doubt want to replace the keyboard with your own one; again, follow the instructions from Part
  1 to make this change.</p>
<aside>
  <h3>Tip</h3>
  <p>You will need to append a keyboard version to the file. In this example, <b>tamil99m.js</b> has a
    keyboard version 1.1, so it is renamed to <b>tamil99m-1.1.js</b>.</p>
</aside>
<p>You can also customise the look and feel of the on screen keyboard by including a custom CSS file in your keyboard
  through Keyman Developer.</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/android/10.0/guides/system-keyboard/add-embedded-css.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01b7c7604a62970b image-full img-responsive"
        title="AddEmbeddedCSS" src="<?php echo cdn("img/engine/android/10.0/guides/system-keyboard/add-embedded-css-800wi.png"); ?>"
        alt="AddEmbeddedCSS" border="0"/></a></p>

<p>The CSS rules required to style your keyboard are beyond the scope of this post, but the <strong>kmwosk.css</strong>
  file included in the Keyman Developer 12.0 distribution and in the
  <a href="https://github.com/keymanapp/keyman/blob/master/web/source/resources/osk/kmwosk.css" target="_blank">
    KeymanWeb 12.0 source</a>&nbsp;is a good place to start. See this
  <a href="http://help.keyman.com/developer/engine/web/12.0/reference/osk/classes">reference</a> for more information
  about the On-Screen Keyboard.</p>

<p>Finally, you will want to improve the style and branding of the main activity in KMSample2. The sample includes a plain
  banner branding image, which you may want to replace with your own.  The app itself is notably plain, and you
  will probably want to make that a lot prettier and include detailed instructions for users on how to enable the system keyboard
on their own.  (Unfortunately, apps cannot directly summon the appropriate menu.)</p>

<p>That's all there is to creating a System Keyboard with Keyman Engine for iPhone and iPad. We've taken care of all the complex
  details of keyboarding in the Keyman Engine, so you can focus on the look and feel and the layout of your
  keyboard.</p>

<h3>Further links</h3>

<ul>
  <li><a href="../in-app/">Part 1 of this series</a></li>
  <li><a href="/developer/12.0/" target="_blank">Keyman Developer Documentation</a></li>
  <li><a href="http://developer.apple.com/" target="_blank">Apple Developer Home</a></li>
</ul>
