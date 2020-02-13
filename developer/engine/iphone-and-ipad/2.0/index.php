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
    The Keyman Engine for iPhone and iPad 2.0 SDK is designed to provide advanced international keyboard support to iOS apps.
    <br/><br/>
    As a developer, you simply need to use (or subclass) KMTextView or KMTextField instead
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

<p>Everything you need should be in these five classes:</p>

<dl>
  <dt><code><a href='KMManager/'>KMManager</a></code></dt>
  <dd>...</dd>

  <dt><code><a href='KMTextView/'>KMTextView</a></code></dt>
  <dd>...</dd>

  <dt><code><a href='KMTextField/'>KMTextField</a></code></dt>
  <dd>...</dd>

  <dt><code><a href='KMKeyboardPickerButton/'>KMKeyboardPickerButton</a></code></dt>
  <dd>...</dd>

  <dt><code><a href='KMKeyboardPickerBarButtonItem/'>KMKeyboardPickerBarButtonItem</a></code></dt>
  <dd>...</dd>
</dl>

<p>Their header files are included with the library and have further documentation. It is especially important to look at KMManager.h</p>

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
        <li>e.g. for Thai Kedmanee -> [[KMManager sharedInstance] setKeyboardWithID:@"thai_kedmanee" languageID:@"tha"];</li>
        <li>the keyboard defaults to English USA if not set otherwise</li>
    </ul>
</p>

<h2>Keyman Demo</h2>
<p>
  To see the SDK in action, open the KeymanDemo project. All of the above steps have already been performed.
  <br/><br/>
  Additionally, you can see examples of:
  <ul>
    <li>KMTextView</li>
    <li>KMTextField</li>
    <li>KMKeyboardPickerButton</li>
    <li>KMKeyboardPickerBarButtonItem</li>
    <li>language fetching</li>
    <li>keyboard downloading/switching</li>
    <li>responding to Keyman events</li>
  </ul>
</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="/developer/engine/iphone-and-ipad/13.0/" title="Keyman Engine for iPhone and iPad 13.0">
      Keyman Engine for iPhone and iPad 13.0</a></li>
  <li><a href="/developer/engine/iphone-and-ipad/12.0/" title="Keyman Engine for iPhone and iPad 12.0">
      Keyman Engine for iPhone and iPad 12.0</a></li>
  <li><a href="/developer/engine/iphone-and-ipad/11.0/" title="Keyman Engine for iPhone and iPad 11.0">
    Keyman Engine for iPhone and iPad 11.0</a></li>
  <li><a href="/developer/engine/iphone-and-ipad/10.0/" title="Keyman Engine for iPhone and iPad 10.0">
    Keyman Engine for iPhone and iPad 10.0</a></li>
  <li><a href="/developer/9.0/" title="Keyman Developer 9.0">Keyman Developer 9.0</a></li>
  <li><a href='http://keyman.com/developer/keymanweb/keyboards.php' title="Keyboard Library">Keyboard Library</a></li>
  <li><a href="/developer/engine/android/2.0/" title="Keyman Engine for Android 2.0">Keyman Engine for Android 2.0</a></li>
</ul>

  
