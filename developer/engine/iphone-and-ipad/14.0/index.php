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
    The Keyman Engine for iPhone and iPad 14.0 SDK is designed to provide advanced international keyboard support to iOS apps.
    <br/><br/>
    As a developer, you simply need to use (or subclass) TextView or TextField instead
    of using an ordinary UITextView or UITextField.
    <br/><br/>
    To let a user pick/download additional keyboards, there are 2 pre-made buttons you can use that
    bring up the Keyman keyboard UI.
    <br/><br/>
    All of the methods and delegate calls of the original UIKit classes are retained.
    <br/><br/>
    With version 14.0, we have deprecated direct use of .js files for resources in favor of supporting
    .kmp packages.  Package files have the same old .js files bundled alongside any related resources (like 
    fonts and documentation) on your behalf, making the process of setting up keyboards and lexical models easier.
</p>

<h2 id="Guides" name="Guides">Guides</a></h2>

<ul>
  <li><a href='guides/in-app/'>Build an in-app keyboard</a></li>
  <li><a href='guides/system-keyboard/'>Build a system keyboard app</a></li>
</ul>

<h2 id="Classes" name="Classes">Available Classes/Methods</h2>

<h3 id="resource_identification" name="resource_identification">Resource Identification</h3>

<dl>
  <dt><code><a href="KeymanPackage/">KeymanPackage</a></code></dt>
  <dd>The KeymanPackage is the base class used to represent various types of Keyman packages within
the Keyman Engine and their contents.</dd>
</dl>

<h3 id="resource_management" name="resource_management">Resource Management</h3>

<dl>
  <dt><code><a href='ResourceFileManager/'>ResourceFileManager</a></code></dt>
  <dd>The core class for managing and installing keyboards and lexical models</dd>
</dl>

<h3 id="keyboard_control" name="keyboard_control">Controlling the Keyboard</h3>

<dl>
  <dt><code><a href='Manager/'>Manager</a></code></dt>
  <dd>The core class for controlling Keyman Engine</dd>
</dl>

<h3 id="ui_setup" name="ui_setup">UI elements & setup</h3>

<dl>
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
    1) Create a new iOS project
</p><p>
    2) On your project's "General" tab, click the '+' sign under "Embedded Binaries" to add KeymanEngine.framework.
    <ul>
      <li>If you wish to use KeymanEngine-universal.framework instead for development, be aware
      that you may need to note the following:
        <ul>
          <li>Xcode may have issues with the "-universal" part of the name; dropping this component after
            copying may be prudent.</li>
          <li>The 14.0 version of Keyman Engine for iPhone and iPad was compiled using Swift 5.</li>
          <li>Dragging the framework into the project will not properly set the framework up for embedding.</li>
        </ul>
      </li>
      <li>When done properly, Xcode should automatically link the library and setup the bundle for copying.
      <ul>
          <li>To verify, go to your target's "Build Phases" tab and check that the following details are in place:</li>
          <ul>
              <li>'KeymanEngine.framework' is set within "Link Binary With Libraries"</li>
              <li>'KeymanEngine.framework' is set within "Embed Frameworks"</li>
          </ul>
      </ul>
      </li>
    </ul>
</p>
<p>
    3) Include KeymanEngine's dependencies within your project:
    <br/>
       (found in 'Link Binary With Libraries' in your target's 'build phases' tab)
    <ul>
      <li>Ensure each of the following frameworks is included under "Embedded Binaries":
      <ul>
        <li>DeviceKit</li>
        <li>ObjcExceptionBridging</li>
        <li>Reachability</li>
        <li>Sentry</li>
        <li>XCGLogger</li>
        <li>Zip</li>
      </ul></li>
      <li>
        You may find it helpful to use a dependency manager
        (such as <a href="https://github.com/Carthage/Carthage">Carthage</a>) to assist with framework
        maintenance. You may find our Cartfile (used with Carthage) for this
        <a href="https://github.com/keymanapp/keyman/blob/tree/stable-14.0/ios/Cartfile">here</a>.
      </li>
    </ul>
</p>
<p>
    4) Import "KeymanEngine" into any source files requiring Keyman classes.
</p><p>
    5) [OPTIONAL] Add the language .kmp files which you want to use to your project (e.g. thai_kedmanee.kmp)
    <ul>
        <li>drag them into the project</li>
        <li>go to your target, then the "Build Phases" tab, and add them to the "Copy Bundle Resources" section</li>
        <li>to avoid xcode warnings, remove them from the "Compile Sources" section</li>
    </ul>
</p><p>
    6) [OPTIONAL] Set the initial language prior to showing the keyboard for the first time
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
  To see the SDK in action, open the samples folder to find two small sample projects. All of the above steps have already been performed.
</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="/developer/engine/iphone-and-ipad/12.0/" title="Keyman Engine for iPhone and iPad 12.0">
      Keyman Engine for iPhone and iPad 12.0</a></li>
  <li><a href="/developer/engine/iphone-and-ipad/11.0/" title="Keyman Engine for iPhone and iPad 11.0">
      Keyman Engine for iPhone and iPad 11.0</a></li>
  <li><a href="/developer/engine/iphone-and-ipad/10.0/" title="Keyman Engine for iPhone and iPad 10.0">
      Keyman Engine for iPhone and iPad 10.0</a></li>
  <li><a href="/developer/engine/iphone-and-ipad/2.0/" title="Keyman Engine for iPhone and iPad 2.0">
      Keyman Engine for iPhone and iPad 2.0</a></li>
  <li><a href="/developer/current-version/" title="Keyman Developer">Keyman Developer</a></li>
  <li><a href='http://keyman.com/developer/keymanweb/keyboards.php' title="Keyboard Library">Keyboard Library</a></li>
  <li><a href="/developer/engine/android/current-version/" title="Keyman Engine for Android">Keyman Engine for Android 10.0</a></li>
</ul>


