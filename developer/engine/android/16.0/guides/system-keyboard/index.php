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
    Engine for Android package, which is a very basic System Keyboard app. This post builds on concepts and setup from
    the first post, so be sure you are familiar with that before you start on this one.</p>

<h3>1. Basic configuration</h3>

<p>If <strong>KMSample2.zip</strong> exists from the downloaded <strong>Keyman Engine for Android</strong>, extract it
    to a new folder. Otherwise, the KMSample2 project
    can be found at <strong>Samples/KMSample2</strong></p>

<h3>2. Run the sample app</h3>

<p>The KMSample2 app includes the Tamil 99 Basic keyboard as an example keyboard. Without any further modifications, the
    app should run and you'll be able to configure your device to use your app as the system keyboard.</p>

<p><a class="asset-img-link" style="display: inline;"
    href="<?php echo cdn("img/engine/android/14.0/guides/system-keyboard/emulator-800wi.png"); ?>"><img
    class="asset  asset-image at-xid-6a00d83432368053ef01b8d0e9c7c0970c-800wi image-full img-responsive"
    title="Emulator" src="<?php echo cdn("img/engine/android/14.0/guides/system-keyboard/emulator-800wi.png"); ?>"
    alt="Emulator" border="0"/></a></p>

<h3>3. Extending the app</h3>

<p>From here, you will no doubt want to replace the keyboard with your own one; again, follow the instructions from Part
    1 to make this change.</p>
<p>You can also customise the look and feel of the on screen keyboard by including a custom CSS file in your keyboard
    through Keyman Developer.</p>
<p><a class="asset-img-link" style="display: inline;"
    href="<?php echo cdn("img/engine/android/10.0/guides/system-keyboard/add-embedded-css.png"); ?>"><img
    class="asset  asset-image at-xid-6a00d83432368053ef01b7c7604a62970b image-full img-responsive"
    title="AddEmbeddedCSS" src="<?php echo cdn("img/engine/android/10.0/guides/system-keyboard/add-embedded-css-800wi.png"); ?>"
    alt="AddEmbeddedCSS" border="0"/></a></p>

<p>The CSS rules required to style your keyboard are beyond the scope of this post, but the <strong>kmwosk.css</strong>
    file included in the Keyman Developer 16.0 distribution and in the
    <a href="https://github.com/keymanapp/keyman/blob/master/web/source/resources/osk/kmwosk.css" target="_blank">
    KeymanWeb 16.0 source</a>&nbsp;is a good place to start. See this
    <!-- TODO: Update to web/16.0 -->
    <a href="/developer/engine/web/15.0/reference/osk/classes">reference</a> for more information
    about the On-Screen Keyboard.</p>

<p>Do take the time to read through the source of <strong>KMSample2</strong>, as it includes some boilerplate code
    required to link Keyman Engine through to the Android Input Method services and vice versa.</p>

<p>Finally, you will want to improve the style and branding of the main activity in KMSample2. The sample includes just
    two buttons to link to the Android Input Method Settings and Input Method Menu, as a pointer to the two
    configuration steps that your users will need to undertake in order to start using your keyboard.</p>

<p><a class="asset-img-link" style="display: inline;"
    href="<?php echo cdn("img/engine/android/14.0/guides/system-keyboard/main-activity-layout-800wi.png"); ?>"><img
    class="asset  asset-image at-xid-6a00d83432368053ef01b8d0e9c8a6970c image-full img-responsive"
    title="MainActivityLayout" src="<?php echo cdn("img/engine/android/14.0/guides/system-keyboard/main-activity-layout-800wi.png"); ?>"
    alt="MainActivityLayout" border="0"/></a></p>

<p>You will probably want to make that a lot prettier, and include more detailed instructions!</p>

<p>That's all there is to creating a System Keyboard with Keyman Engine for Android. We've taken care of all the complex
    details of keyboarding in the Keyman Engine, so you can focus on the look and feel and the layout of your
    keyboard.</p>

<h3>Further links</h3>

<ul>
    <li><a href="../in-app/">Part 1 of this series</a></li>
    <li><a href="/developer/16.0/" target="_blank">Keyman Developer Documentation</a></li>
    <li><a href="http://developer.android.com/index.html" target="_blank">Android Developer Home</a></li>
</ul>
