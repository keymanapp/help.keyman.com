<?php
$pagetitle = 'Guide: build an in-app keyboard';
require_once('includes/template.php');

head([
    'title' => $pagetitle
]);
?>
<h1 class="center"><?php echo $pagetitle; ?></h1>

<p>Keyman Engine for Android allows you to use any Keyman touch keyboard in your Android app, or even to create your own
    system keyboard app for purchase in the Play Store.<br/>
    This guide will walk you through the steps for creating your first Android app with Keyman Engine for Android.</p>
<p>If you are not familiar with Android development, you will find the
    <a href="https://developer.android.com/training/index.html">Android Developer online training</a> an invaluable
    resource, and working through some of their tutorials first will help you with the rest of this guide.</p>
<h3>1. Install Free Tools</h3>
<ol>
    <li>Install <a href="https://keyman.com/developer/">Keyman Developer 14 or later</a>.</li>
    <li>Install <a href="http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html">
            Java SE Development Kit</a>.
    </li>
    <li>Install <a href="https://developer.android.com/studio/index.html">Android Studio</a>.</li>
    Android Studio runs on several platforms. Keyman Developer 10 runs on Windows 7 or later.
</ol>
<h3>2. Configure Android Studio</h3>
<ol>
    <li>For Windows users, from <strong>Control Panel>System>System Properties>Environment Variables</strong>,<br/>
        create a system variable <strong>ANDROID_HOME</strong> to the location of your Android SDK. The default
        installation location is<br/>
        c:\Users\[USER]\AppData\Local\Android\sdk where [USER] is your Windows username.
    </li>
    <li>For Linux users, add the following to ~/.bashrc</li>
<pre class="language-bash"><code>export ANDROID_HOME=$HOME/Android/Sdk
export PATH=$PATH:$ANDROID_HOME/tools
</code></pre>
    <li>In a command prompt or terminal, accept all the SDK license agreements</li>
<pre class="language-bash"><code>cd c:\Users\[USER]\AppData\Local\Android\sdk\tools\bin
yes | ./sdkmanager.bat --licenses
</code></pre>
</ol>

<h3>3. Download Keyman Engine for Android and Build Sample projects</h3>
<ol>
    <li>
        Download the <a href="https://keyman.com/engine/">Keyman for Android SDK</a>
        and extract the files to a new folder.
    </li>
</ol>
<p>The archive includes two sample projects and an Android .aar library file. This guide will use the first
    example project, <strong>KMSample1</strong>.</p>
<ol type="1" start="1">
    <li>If <strong>KMSample1.zip</strong> exists, extract it to a new folder. Otherwise, the KMSample1 project
        can be found at <strong>Samples/KMSample1</strong></li>
    <li>In Android Studio, select <strong>File&gt;Open</strong> and choose the KMSample1 project folder from
        the previous step.
    </li>
    <li>When the project loads, you may be prompted to install Android SDKs; go ahead and follow the prompts to
        fixup any missing SDK dependencies.
    </li>
</ol>

<h3>4. Create a keyboard layout</h3>
<p>Use Keyman Developer to build a touch layout. The following blog posts walk through some of the development and
    testing for creating a touch keyboard layout:</p>
<ul>
    <li><a href="/developer/13.0/guides/develop/creating-a-touch-keyboard-layout-for-amharic-with-keyman-developer-10">
        Creating a Touch Keyboard Layout for Amharic with Keyman Developer 13</a></li>
    <li><a href="/developer/13.0/guides/develop/creating-a-touch-keyboard-layout-for-amharic-the-nitty-gritty">
        Creating A Touch Keyboard Layout For Amharic — The Nitty Gritty</a></li>
    <li><a href="/developer/13.0/guides/test/how-to-test-your-keyboard-layout-with-keyman-developer-10-touch-and-desktop">
        How to test your keyboard layout with Keyman Developer 13 — touch and desktop</a></li>
    <li><a href="/developer/13.0/guides/test/how-to-test-your-touch-layout-in-the-google-chrome-mobile-emulator">
        How to test your touch layout in the Google Chrome mobile emulator</a></li>
</ul>
<p>When your keyboard is ready, you should have a compiled keyboard package file. The example below shows the
    Tamil 99 Basic touch layout.</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/android/14.0/guides/in-app/touch-layout.png"); ?>"><img
      class="asset asset-image at-xid-6a00d83432368053ef01b7c759d462970b image-full img-responsive"
      title="Keyman-developer"
      src="<?php echo cdn("img/engine/android/14.0/guides/in-app/touch-layout-800wi.png"); ?>"
      alt="Keyman-developer" border="0"/></a></p>
<p>From the package editor, open the containing folder for the keyboard package to find the .kmp file to copy over; its name will be based on
    your source keyboard name. If your keyboard project settings is configured to output to <strong>$PROJECTPATH\build</strong>,
  you may need to navigate up a folder and into the <strong>build</strong> folder.</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/android/14.0/guides/in-app/open-containing-folder.png"); ?>"><img
      class="asset  asset-image at-xid-6a00d83432368053ef01bb07fd4d71970d image-full img-responsive"
      title="Keyman-developer-open-containing-folder"
      src="<?php echo cdn("img/engine/android/14.0/guides/in-app/open-containing-folder-800wi.png"); ?>"
      alt="Keyman-developer-open-containing-folder" border="0"/></a></p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/android/14.0/guides/in-app/compiled-keyboard-file.png"); ?>"><img
      class="asset  asset-image at-xid-6a00d83432368053ef01b8d0e2f3e2970c image-full img-responsive"
      title="Compiled-keyboard-file"
      src="<?php echo cdn("img/engine/android/14.0/guides/in-app/compiled-keyboard-file-800wi.png"); ?>"
      alt="Compiled-keyboard-file" border="0"/></a></p>

<h3>5. Add your keyboard package to the project</h3>
<p>Copy your compiled keyboard package file (in this example <strong>basic_kbdtam99.kmp</strong>) to the
    <strong>KMSample1\app\src\main\assets\</strong> folder. If you have an associated dictionary, then copy that to the
    same <strong>assets</strong> folder. This example uses <strong>example.ta.wordlist.model.kmp</strong>.</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/android/14.0/guides/in-app/copy-keyboard-file.png"); ?>"><img
      class="asset  asset-image at-xid-6a00d83432368053ef01b8d0e3c836970c image-full img-responsive"
      title="Copy-keyboard-file"
      src="<?php echo cdn("img/engine/android/14.0/guides/in-app/copy-keyboard-file-800wi.png"); ?>"
      alt="Copy-keyboard-file" border="0"/></a></p>
<p>When you switch back into Android Studio, you should see the assets folder
    with your keyboard and dictionary files:</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/android/14.0/guides/in-app/android-studio-assets.png"); ?>"><img
      class="asset  asset-image at-xid-6a00d83432368053ef01b7c75abaa9970b img-responsive"
      title="Android-studio-assets"
      src="<?php echo cdn("img/engine/android/14.0/guides/in-app/android-studio-assets-800wi.png"); ?>"
      alt="Android-studio-assets" border="0"/></a></p>
<p>Next, edit <code>MainActivity.onCreate()</code> to add the keyboard (tamil99m) with <code>KMManager</code>.
    If your keyboard package is not using a custom font, you can set KMKey_Font to the default font:</p>
<pre class='language-java'><code>    // Add a custom keyboard
    Keyboard kbInfo = new Keyboard(
      "basic_kbdtam99", // Package ID - filename of the .kmp file
      "basic_kbdtam99", // Keyboard ID
      "Tamil 99 Basic", // Keyboard Name
      "ta",             // Language ID
      "Tamil",          // Language Name
      "1.0",            // Keyboard Version
      null,             // URL to help documentation if available
      "",               // URL to latest .kmp file
      true,             // Boolean to show this is a new keyboard in the keyboard picker

      // Font information of the .ttf font to use in KMSample1 (for example "aava1.ttf").
      // basic_kbdtam99 doesn't include a font. Can set blank "" or KMManager.KMDefault_KeyboardFont
      KMManager.KMDefault_KeyboardFont,  // Font for KMSample1 text field
      KMManager.KMDefault_KeyboardFont); // Font for OSK
    KMManager.addKeyboard(this, kbInfo);
</code></pre>
<p>If you included a dictionary in the sample app, add and register it with <code>KMManager</code>.</p>
<pre class='language-java'><code>    // Add a dictionary
    HashMap<String, String>lexicalModelInfo = new HashMap<String, String>();
    lexicalModelInfo.put(KMManager.KMKey_PackageID, "example.ta.wordlist");
    lexicalModelInfo.put(KMManager.KMKey_LanguageID, "ta");
    lexicalModelInfo.put(KMManager.KMKey_LexicalModelID, "example.ta.wordlist");
    lexicalModelInfo.put(KMManager.KMKey_LexicalModelVersion, "1.0");
    KMManager.addLexicalModel(context, lexicalModelInfo);
    KMManager.registerAssociatedLexicalModel("ta");
</code></pre>

<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/android/14.0/guides/in-app/android-studio-adding-keyboard.png"); ?>"><img
      class="asset  asset-image at-xid-6a00d83432368053ef01bb07fe335f970d image-full img-responsive"
      title="Android-studio-adding-keyboard"
      src="<?php echo cdn("img/engine/android/14.0/guides/in-app/android-studio-adding-keyboard-800wi.png"); ?>"
      alt="Android-studio-adding-keyboard" border="0"/></a></p>

<h3>6. Build and run the app</h3>
<p>You can run your app on a <a href="https://developer.android.com/studio/run/managing-avds.html">created Virtual Device</a>,
    or connect an Android device via USB to your computer to test. In either case, click the green Run button to start
    the app. The steps below show how to create a new Virtual Device</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/android/14.0/guides/in-app/android-studio-starting-debug.png"); ?>"><img
      class="asset  asset-image at-xid-6a00d83432368053ef01b8d0e2f402970c img-responsive"
      title="Android-studio-starting-debug"
      src="<?php echo cdn("img/engine/android/14.0/guides/in-app/android-studio-starting-debug-800wi.png"); ?>"
      alt="Android-studio-starting-debug" border="0"/></a></p>
<p>Click the <strong>[Create Virtual Device]</strong> button to add a new virtual device, and follow the prompts. Any recent emulated
    device should work fine. You will be prompted to download additional resources for the emulator when this runs.
</p>
<p><a class="asset-img-link" style="display: inline;"
      href="<?php echo cdn("img/engine/android/14.0/guides/in-app/android-emulator-tamil.png"); ?>"><img
      class="asset  asset-image at-xid-6a00d83432368053ef01b7c75abb95970b image-full img-responsive"
      title="Android-emulator-tamil"
      src="<?php echo cdn("img/engine/android/14.0/guides/in-app/android-emulator-tamil-800wi.png"); ?>"
      alt="Android-emulator-tamil" border="0"/></a></p>
<p>And there you have it: your first Keyman Engine for Android app!</p>

<h2 id="See_also">See Also</h2>

<ul>
    <li><a href="../system-keyboard/">Guide: Build a system keyboard app</a></li>
    <li><a href="/developer/15.0/">Keyman Developer Documentation</a></li>
    <li><a href="/developer/engine/android/15.0/">Keyman Engine for Android Documentation</a></li>
    <li><a href="https://developer.android.com/index.html">Android Developer Home</a></li>
</ul>
