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
</ul>
<p>When your keyboard is ready, you should have a compiled keyboard package. The example below shows the
  Thamizha Tamil99 touch layout.</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/ios/16.0/guides/in-app/keyboard-layout-in-developer.png"); ?>"><img
        class="asset asset-image at-xid-6a00d83432368053ef01b7c759d462970b image-full img-responsive"
        title="Keyman-developer"
        src="<?php echo cdn("img/engine/ios/16.0/guides/in-app/keyboard-layout-in-developer-800wi.png"); ?>"
        alt="Keyman-developer" border="0"/></a></p>
<p>Open the package tab for your keyboard and compile it.  Then, open the folder containing your package</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/ios/16.0/guides/in-app/find-package-via-developer.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01bb07fd4d71970d image-full img-responsive"
        title="Keyman-developer-open-containing-folder"
        src="<?php echo cdn("img/engine/ios/16.0/guides/in-app/find-package-via-developer-800wi.png"); ?>"
        alt="Keyman-developer-open-containing-folder" border="0"/></a></p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/ios/16.0/guides/in-app/package-file.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01b8d0e2f3e2970c image-full img-responsive"
        title="Compiled-keyboard-file"
        src="<?php echo cdn("img/engine/ios/16.0/guides/in-app/package-file-800wi.png"); ?>"
        alt="Compiled-keyboard-file" border="0"/></a></p>
<h3>4. Add your keyboard package to the project</h3>
<p>Copy your compiled keyboard package (in this example <strong>ekwtamil99uni.kmp</strong>) to your macOS machine
  within the <strong>KMSample1\Keyboards</strong> folder.
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/ios/16.0/guides/in-app/package-import.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01b8d0e3c836970c image-full img-responsive"
        title="Copy-keyboard-file"
        src="<?php echo cdn("img/engine/ios/16.0/guides/in-app/package-import.png"); ?>"
        alt="Copy-keyboard-file" border="0"/></a></p>
<p>When you switch back into Xcode, use the right-click context menu to "Add Files to 'KMSample1'":</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/ios/16.0/guides/in-app/xcode-package-import.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01b7c75abaa9970b img-responsive"
        title="Android-studio-assets"
        src="<?php echo cdn("img/engine/ios/16.0/guides/in-app/xcode-package-import-800wi.png"); ?>"
        alt="Android-studio-assets" border="0"/></a></p>
<p>Next, edit <code>ViewController.viewDidLoad()</code> to add the keyboard (ekwtamil99uni) with <code>Manager.shared</code>
  from KeymanEngine.framework.
<pre class='language-swift'><code>  // Add a custom keyboard
  let kmpFileURL = Bundle.main.url(forResource: "ekwtamil99uni", withExtension: "kmp")!
  let keyboardID = FullKeyboardID(keyboardID: "ekwtamil99uni", languageID: "ta")

  do {
    let package = try ResourceFileManager.shared.prepareKMPInstall(from: kmpFileURL) as! KeyboardKeymanPackage
    try ResourceFileManager.shared.install(resourceWithID: keyboardID, from: package)

    _ = Manager.shared.setKeyboard(withFullID: keyboardID)
  } catch {
    print("Error preloading: \(error)")
  }
</code></pre>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/ios/16.0/guides/in-app/fully-imported.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01bb07fe335f970d image-full img-responsive"
        title="Android-studio-adding-keyboard"
        src="<?php echo cdn("img/engine/ios/16.0/guides/in-app/fully-imported-800wi.png"); ?>"
        alt="Android-studio-adding-keyboard" border="0"/></a></p>
</code></pre>

<h3>5. Build and run the app</h3>

<p>You can run your app through Xcode's built-in Simulator, which can emulate a number of iOS devices.  Simply choose
a target device to test against from the drop-down toward the top-left.  For example, in the previous image, you can see
"iPod Touch (7th generation)" selected.
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/ios/16.0/guides/in-app/ios-simulator-tamil.png"); ?>"><img
        class="asset  asset-image at-xid-6a00d83432368053ef01b7c75abb95970b image-full img-responsive"
        title="Android-emulator-tamil"
        src="<?php echo cdn("img/engine/ios/16.0/guides/in-app/ios-simulator-tamil.png"); ?>"
        alt="Android-emulator-tamil" border="0"/></a></p>
<p>And there you have it: your first Keyman Engine for iPhone and iPad app!</p>

<h2 name="See_also" id="See_also">See Also</h2>


<ul>
  <li><a href="../system-keyboard/">Guide: Build a system keyboard app</a></li>
  <li><a href="/developer/current-version/">Keyman Developer Documentation</a></li>
  <li><a href="../../">Keyman Engine for iPhone and iOS Documentation</a></li>
  <li><a href="https://developer.apple.com/">Apple Developer Home</a></li>
</ul>