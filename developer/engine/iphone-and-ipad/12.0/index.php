<?php
  $pagetitle = 'Keyman for iPhone and iPad Developer Support'; 
  require_once('includes/template.php');
  
  head([
    'title' => $pagetitle
  ]);
?>
<h1 class="center"><?php echo $pagetitle; ?></h1>

<h2 id="Overview" name="Overview">Overview</h2>

<p>
    The Keyman Engine for iPhone and iPad 12.0 SDK is designed to provide advanced international keyboard support to iOS apps.
    <br/><br/>
    As a developer, you simply need to use (or subclass) TextView or TextField instead
    of using an ordinary UITextView or UITextField.
    <br/><br/>
    To let a user pick/download additional keyboards, there are 2 pre-made buttons you can use that
    bring up the Keyman keyboard UI.
    <br/><br/>
    All of the methods and delegate calls of the original UIKit classes are retained.
</p>

<h2 id="Guides" name="Guides">Guides</a></h2>

<ul>
  <li><a href='guides/in-app/'>Build an in-app keyboard</a></li>
  <li><a href='guides/system-keyboard/'>Build a system keyboard app</a></li>
</ul>

<h2 id="Classes" name="Classes">Available Classes/Methods</h2>

<p>Everything you need should be in these classes. It is especially important to look at Manager.swift</p>

<dl>
  <dt><code><a href='Manager/'>Manager</a></code></dt>
  <dd>The core class for controlling Keyman Engine</dd>

  <dt><code><a href='TextField/'>TextField</a></code></dt>
  <dd>A UITextField to use with the Keyman Engine</dd>

  <dt><code><a href='TextView/'>TextView</a></code></dt>
  <dd>A UITextView to use with the Keyman Engine</dd>

  <dt><code><a href='KeyboardPickerButton/'>KeyboardPickerButton</a></code></dt>
  <dd>A button for bringing up the keyboard picker menu</dd>

  <dt><code><a href='KeyboardPickerBarButtonItem/'>KeyboardPickerBarButtonItem</a></code></dt>
  <dd>A bar that displays the keyboard picker when tapped</dd>
</dl>

<h2>Adding the Keyman Engine for iPhone and iPad SDK to your project</h2>

<p>
    1) create a new iOS project
    <br/><br/>
    2) drag the 'libKeyman' folder into your project
    <ul>
        <li>this includes the library itself, some headers and a resources bundle</li>
        <li>Xcode should automatically link the library and setup the bundle for copying</li>
        <ul>
            <li>if not, go to your target's "Build Phases" tab and add:</li>
            <ul>
                <li>'libKeyman.a' to "Link Binary With Libraries"</li>
                <li>'Keyman.bundle' to "Copy Bundle Resources"</li>
            </ul>
        </ul>
    </ul>
    <br/><br/>
    3) add '-all_load' to 'other linker flags' in your project or target build settings
    <ul>
        <li>otherwise categories in the static library will fail and your app will crash at runtime</li>
    </ul>
    <br/><br/>
    4) add the following frameworks/libraries to your project:
    <br/>
       (found in 'Link Binary With Libraries' in your target's 'build phases' tab)
    <ul>
        <li>CFNetwork</li>
        <li>MobileCoreServices</li>
        <li>Libz</li>
        <li>SystemConfiguration</li>
        <li>CoreGraphics</li>
        <li>UIKit</li>
        <li>CoreText</li>
        <li>AudioToolbox</li>
    </ul>
    <br/><br/>
    5) import "Keyman.h" into any source files which require any Keyman classes
    <br/><br/>
    6) [OPTIONAL] add the language .js files which you want to use to your project (e.g. thai_kedmanee.js)
    <ul>
        <li>drag them into the project</li>
        <li>go to your target, then the "Build Phases" tab, and add them to the "Copy Bundle Resources" section</li>
        <li>to avoid xcode warnings, remove them from the "Compile Sources" section</li>
    </ul>
    <br/><br/>
    7) [OPTIONAL] set the initial language prior to showing the keyboard for the first time
    <ul>
        <li>it is recommended to do this when the app first launches</li>
        <li>e.g. for Thai Kedmanee
<pre class="language-swift"><code>Manager.shared.setKeyboard("thai_kedmanee");
</code></pre></li>
        <li>the keyboard defaults to English USA if not set otherwise</li>
    </ul>
</p>

<h2>Keyman Demo</h2>
<p>
  To see the SDK in action, open the KeymanDemo project. All of the above steps have already been performed.
  <br/><br/>
  Additionally, you can see examples of:
  <ul>
    <li>TextView</li>
    <li>TextField</li>
    <li>KeyboardPickerButton</li>
    <li>KeyboardPickerBarButtonItem</li>
    <li>language fetching</li>
    <li>keyboard downloading/switching</li>
    <li>responding to Keyman events</li>
  </ul>
</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="/developer/engine/iphone-and-ipad/10.0/" title="Keyman Engine for iPhone and iPad 10.0">
      Keyman Engine for iPhone and iPad 10.0</a></li>
  <li><a href="/developer/engine/iphone-and-ipad/2.0/" title="Keyman Engine for iPhone and iPad 2.0">
      Keyman Engine for iPhone and iPad 2.0</a></li>
  <li><a href="/developer/10.0/" title="Keyman Developer 10.0">Keyman Developer 10.0</a></li>
  <li><a href='http://keyman.com/developer/keymanweb/keyboards.php' title="Keyboard Library">Keyboard Library</a></li>
  <li><a href="/developer/engine/android/10.0/" title="Keyman Engine for Android 10.0">Keyman Engine for Android 10.0</a></li>
</ul>

  
