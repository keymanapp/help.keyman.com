<?php
  $pagetitle = 'Guide: build an in-app keyboard';
  require_once('includes/template.php');

  head([
    'title' => $pagetitle
  ]);
?>
<h1 class="center"><?php echo $pagetitle; ?></h1>

<p>Keyman Engine for iPhone and iPad allows you to use any Keyman touch keyboard in your iOS app, or even to create
  your own system keyboard app for purchase in the App Store.<br/>
  This guide will walk you through the steps for creating your first iOS app with Keyman Engine for iPhone and iPad.</p>
<p>If you are not familiar with iOS development, you will find the
  <a href="https://developer.apple.com/library/archive/referencelibrary/GettingStarted/DevelopiOSAppsSwift/">
    "Start Developing iOS Apps" online guide by Apple</a> an invaluable
  resource, and working through some of their tutorials first will help you with the rest of this guide.</p>
<h3>1. Install Free Tools</h3>
<ol>
  <li>Install <a href="https://keyman.com/developer/">Keyman Developer 10 or later</a> on a Windows machine.</li>
  <ul>
    <li>Alternatively, it is possible to compile keyboards with a command-line tool under WINE, but we do not yet
    support a GUI interface for keyboard development on macOS.</li>
  </ul>
  <li>Install <a href="https://apps.apple.com/us/app/xcode/id497799835?mt=12">
      Xcode</a>.
  </li>
</ol>
<h3>2. Download the Keyman Engine for iOS and Sample Project</h3>
<ol>
  <li>Keyman 10+ users can download the engine from downloads.keyman.com
    <p>Download the latest <a href="https://downloads.keyman.com/ios/stable/">keyman-engine-ios.zip</a>
      and extract the files to a new folder.</p>
  </li>
</ol>
<p>The archive includes two sample projects and an iOS-targetting .framework file. This guide will use the first
  example project, <strong>KMSample1</strong>.
<ol type="1" start="1">
  <li>The KMSample1 project can be found at <strong>samples/KMSample1</strong>.</li>
  <li>Double-click <strong>KMSample1.xcodeproj</strong> to begin, or open it via
    <strong>File > Open</strong> to get started.</li>
</ol>
</p>
<h3>3. Create a keyboard layout</h3>
<p>Use Keyman Developer to build a touch layout. The following blog posts walk through some of the development and
  testing for creating a touch keyboard layout:</p>
<!-- For this section, there's no need to create separate duplicates of the Developer part. -->
<ul>
  <li><a href="/developer/current-version/guides/develop/creating-a-touch-keyboard-layout-for-amharic">
      Creating a Touch Keyboard Layout for Amharic with Keyman Developer 12</a></li>
  <li><a href="/developer/current-version/guides/develop/creating-a-touch-keyboard-layout-for-amharic-the-nitty-gritty">
      Creating A Touch Keyboard Layout For Amharic — The Nitty Gritty</a></li>
  <li><a href="/developer/current-version/guides/test/keyboard-touch-and-desktop">
      How to test your keyboard layout with Keyman Developer — touch and desktop</a></li>
  <li><a href="/developer/current-version/guides/test/keyboard-touch-mobile-emulator">
      How to test your touch layout in the Google Chrome mobile emulator</a></li>
</ul>
<p>When your keyboard is ready, you should have a compiled keyboard Javascript file. The example below shows the
  Tamil Mobile99 touch layout.</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/android/10.0/guides/in-app/touch-layout.png"); ?>"><img
        class="asset asset-image at-xid-6a00d83432368053ef01b7c759d462970b image-full img-responsive"
        title="Keyman-developer"
        src="<?php echo cdn("img/engine/android/10.0/guides/in-app/touch-layout-800wi.png"); ?>"
        alt="Keyman-developer" border="0"/></a></p>
<p>Open the containing folder for the keyboard to find the Javascript file to copy over; its name will be based on
  your source keyboard name.</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/android/10.0/guides/in-app/open-containing-folder.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01bb07fd4d71970d image-full img-responsive"
        title="Keyman-developer-open-containing-folder"
        src="<?php echo cdn("img/engine/android/10.0/guides/in-app/open-containing-folder-800wi.png"); ?>"
        alt="Keyman-developer-open-containing-folder" border="0"/></a></p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/android/10.0/guides/in-app/compiled-keyboard-file.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01b8d0e2f3e2970c image-full img-responsive"
        title="Compiled-keyboard-file"
        src="<?php echo cdn("img/engine/android/10.0/guides/in-app/compiled-keyboard-file-800wi.png"); ?>"
        alt="Compiled-keyboard-file" border="0"/></a></p>
<aside>
  <h3>Tip</h3>
  <p>You will need to append a keyboard version to the file. In this example, <b>tamil99m.js</b> has a
    keyboard version 1.1, so it is renamed to <b>tamil99m-1.1.js</b>.</p>
</aside>
<h3>4. Add your keyboard to the project</h3>
<p>Copy your compiled keyboard file (in this example <strong>tamil99m-1.1.js</strong>) to its own folder on your macOS machine
  within the <strong>KMSample1\Keyboards</strong> folder. If you have a font, then place it within the same folder.
  This example uses <strong>aava1.ttf</strong>.</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/ios/13.0/guides/in-app/keyboard-resource-finder.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01b8d0e3c836970c image-full img-responsive"
        title="Copy-keyboard-file"
        src="<?php echo cdn("img/engine/ios/13.0/guides/in-app/keyboard-resource-finder-800wi.png"); ?>"
        alt="Copy-keyboard-file" border="0"/></a></p>
<p>When you switch back into Xcode, use the right-click context menu to "Add Files to 'KMSample1'":</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/ios/13.0/guides/in-app/import-keyboard-in-xcode.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01b7c75abaa9970b img-responsive"
        title="Android-studio-assets"
        src="<?php echo cdn("img/engine/ios/13.0/guides/in-app/import-keyboard-in-xcode-800wi.png"); ?>"
        alt="Android-studio-assets" border="0"/></a></p>
<p>Next, edit <code>ViewController.viewDidLoad()</code> to add the keyboard (tamil99m) with <code>Manager.shared</code>
  from KeymanEngine.framework.
  If you're not using a custom font (this example uses <strong>aava1.ttf</strong>), you can set KMKey_Font to the default font:</p>
<pre class='language-swift'><code>  // Add a custom keyboard
  let kb = InstallableKeyboard(id: "tamil99m",
                               name: "Tamil 99M",
                               languageID: "ta",
                               languageName: "Tamil",
                               version: "1.1",
                               isRTL: false,
                               font: Font(filename: "aava1.ttf"),
                               oskFont: nil,
                               isCustom: true)

  let urls = [
    Bundle.main.url(forResource: "tamil99m-1.1", withExtension: "js")!,
    Bundle.main.url(forResource: "aava1", withExtension: "ttf")!
  ]

  do {
    // Ensures the files are placed (at runtime) where the framework can easily manage them.
    try Manager.shared.preloadFiles(forKeyboardID: kb.id, at: urls, shouldOverwrite: true)
  } catch {
    print("Error preloading: \(error)")
  }

  Manager.shared.addKeyboard(kb)
</code></pre>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/ios/13.0/guides/in-app/keyboard-load-code.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01bb07fe335f970d image-full img-responsive"
        title="Android-studio-adding-keyboard"
        src="<?php echo cdn("img/engine/ios/13.0/guides/in-app/keyboard-load-code-800wi.png"); ?>"
        alt="Android-studio-adding-keyboard" border="0"/></a></p>
</code></pre>

<h3>5. Build and run the app</h3>

<p>You can run your app through Xcode's built-in Simulator, which can emulate a number of iOS devices.  Simply choose
a target device to test against from the drop-down toward the top-left.  For example, in the previous image, you can see
"iPhone X" selected.
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/ios/13.0/guides/in-app/ios-simulator-tamil.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01b7c75abb95970b image-full img-responsive"
        title="Android-emulator-tamil"
        src="<?php echo cdn("img/engine/ios/13.0/guides/in-app/ios-simulator-tamil-800wi.png"); ?>"
        alt="Android-emulator-tamil" border="0"/></a></p>
<p>And there you have it: your first Keyman Engine for iPhone and iPad app!</p>

<h2 name="See_also" id="See_also">See Also</h2>


<ul>
  <li><a href="../system-keyboard/">Guide: Build a system keyboard app</a></li>
  <li><a href="/developer/current-version/">Keyman Developer Documentation</a></li>
  <li><a href="/developer/engine/iphone-and-ipad/13.0/">Keyman Engine for iPhone and iOS Documentation</a></li>
  <li><a href="https://developer.apple.com/">Apple Developer Home</a></li>
</ul>