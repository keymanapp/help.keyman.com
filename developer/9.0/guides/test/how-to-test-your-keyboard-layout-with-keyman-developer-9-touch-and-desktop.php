<?php
  require_once('includes/template.php');

  head([
    'title' => 'How to test your keyboard layout — touch and desktop'
  ]);
?>

<h1>How to test your keyboard layout — touch and desktop</h1>

<p>Keyman Developer 9 includes full touch layout editing tools. In the image below I am editing the Geez Frontier Foundation's Amharic touch layout.</p>

<p><img title="Touch Editor - Amharic" src="<?= cdn('img/developer/90/testing/touch-editor-amharic.png') ?>" style='width:70%' alt="Touch Editor - Amharic"></p>

<p>Once you have created your keyboard layout, you need to test it. Your keyboard layout may cover desktops as well as touch devices. The <strong>Build</strong> tab of the keyboard editor gives you access to testing and debugging commands for all platforms.</p>

<p><img title="Touch Editor - Build tab" src="<?= cdn('img/developer/90/testing/touch-editor-build.png') ?>" style='width:70%' alt="Touch Editor - Build tab"></p>

<p>Testing is easy on Windows: press the <strong>Start Debugging</strong> button on the <strong>Build</strong>
  tab to test the rules in your keyboard layout with a <a href="/developer/9.0/context/debug.php">fully interactive debugger</a>.
  This allows you to step through complex rules, inspecting the contents of the stores referenced in each rule,
  and examine the context, deadkey state and output at each point.</p>

<p>After validating your rules, you will want to test the <a href="/developer/9.0/context/keyboard-editor#toc-on-screen-tab.php">on screen keyboard</a>
  and how your keyboard feels within other applications in Windows. &nbsp;We recommend <a href="../distribute/tutorial">creating a package</a>
  in order to simplify the installation of both the on screen keyboard and the keyboard (which are stored as two separate files).
  Then click the <strong>Install</strong> button in <strong>Build</strong> tab of the package wizard and you are done.</p>

<h2>Preparing to test</h2>

<p>But how do you test your touch layout on your iPhone, iPad or Android device? We've thought about this as well. Keyman Developer includes a web server specifically for testing and installing keyboard layouts on these devices.</p>

<p>To start the web server and debugging session, on the <strong>Build</strong> tab of your keyboard editor, click <strong>Test KeymanWeb Keyboard</strong> (we may rename these buttons in a later release to reflect the cross-platform targets here).</p>

<p>You may need to open up the host port on your local computer firewall; most firewall software will prompt you at this point. &nbsp;The default port that Keyman Developer uses is 8008. You can change this in the <strong>Tools</strong>/<strong>Options</strong>/<strong>Debugger</strong> dialog if necessary.</p>

<p>You will see a list of web addresses in the list box below the&nbsp;<strong>Test KeymanWeb Keyboard</strong>. This lists all the computer and domain names and IP addresses that Keyman Developer is listening on that we can find. Why so many? Because of the variety of network setups, different users will need to use different addresses; Keyman Developer leaves that up to you! &nbsp;We call the list the <strong>Debug Host List</strong>.</p>

<p><img title="KeymanWeb Debug Host" src="<?= cdn('img/developer/90/testing/startdebugging.png') ?>" alt="KeymanWeb Debug Host"></p>

<h2>Testing your web keyboard on your desktop</h2>

<p>You can test your desktop layout by selecting an address in the debug host list and clicking&nbsp;<strong>Open Debug in Browser</strong>. &nbsp;This will load the KeymanWeb Debug Host page in your browser, and you should be able to select your keyboard from the list and start using it.</p>

<h2>Testing your keyboard on a touch device</h2>

<p>To start testing on your mobile device, your device needs to be on the same network as your PC. Then open your web browser on the device. Which browser? On iOS, use Safari. &nbsp;On Android devices, we recommend using Chrome. We don't recommend the Android Browser, because its capabilities vary dramatically depending on the Android version and the brand of your device.</p>

<p>Then you will need to pick an address from the debug host list in Keyman Developer that your device can find. An IP address on the same network is almost always going to work, but you may find that a canonical domain name works as well, if you are in an environment with a name server. The localhost and 127.0.0.1 addresses are local to your PC -- so don't try those.</p>

<p>Enter the address into the URL bar on your browser; don't forget to type the <strong>:8008</strong> port at the end of the address you choose (on most devices you can skip the <strong>http://</strong> at the start):</p>

<p><img title="Enter the debug host URL" src="<?= cdn('img/developer/90/testing/frame/iphone-enter-debug-host.png')?>" style='width:33%' alt="Enter the debug host URL"></p>

<p>All going well, you should be presented with a page like this:</p>

<p><img title="Viewing the debug host on iPhone" src="<?= cdn('img/developer/90/testing/frame/iphone-debug-host.png')?>" style='width:33%' alt="Viewing the debug host on iPhone"></p>

<p>If you get a Host Not Found error, try different addresses from the <strong>KeymanWeb Debug Host</strong> list, check your computer's firewall settings, and make sure that both devices are on the same network.</p>

<p>Now you can instantly test your layout in KeymanWeb Touch, by clicking in the blank edit box: the touch layout will appear. If you make changes in Keyman Developer, just recompile (<strong>Compile to Web</strong> button, or Shift+F7), and reload on the touch device -- you don't need to click the <strong>Test KeymanWeb</strong> button again.</p>

<p><img title="Testing a keyboard on iPhone" src="<?= cdn('img/developer/90/testing/frame/iphone-debug-keyboard.png')?>" style='width:33%' alt="Testing a keyboard on iPhone"></p>

<h2>Loading your keyboard into the native Keyman apps</h2>

<p>Finally, you can also install your keyboard layout directly into Keyman for iPhone and iPad or Keyman for Android by clicking the&nbsp;<strong>Install Keyboard into native Keyman</strong> button on the test page on your device. You do need to have the app installed before clicking the button, of course.</p>

<p><img title="Installing the keyboard into native app" src="<?= cdn('img/developer/90/testing/frame/installing-native-keyboard-1.png')?>" style='width:33%' alt="Installing the keyboard into native app"></p>

<p><img title="Installing the keyboard into native app" src="<?= cdn('img/developer/90/testing/frame/installing-native-keyboard-2.png')?>" style='width:33%' alt="Installing the keyboard into native app"></p>

<p>Now your keyboard layout is installed and available in the Keyman App, and if you have the Keyman version with the system keyboard support installed, across all apps.</p>

<p>You can test multiple keyboards just by clicking <strong>Test KeymanWeb Keyboard</strong> in each keyboard editor.</p>

<h2>Related articles</h2>

<p>Other articles on developing touch layouts:</p>

<ul>
  <li><a href="../develop/creating-a-touch-keyboard-layout-for-amharic-with-keyman-developer-9">Creating a touch keyboard layout for Amharic - part 1</a></li>
  <li><a href="../develop/creating-a-touch-keyboard-layout-for-amharic-the-nitty-gritty">Creating a touch keyboard layout for Amharic - the nitty gritty</a></li>
  <li><a href='how-to-test-your-touch-layout-in-the-google-chrome-mobile-emulator'>How to test your touch layout in the Google Chrome mobile emulator</a></li>
</ul>

<p>You can distribute your keyboard to other users by following the instructions in these two articles:</p>

<ul>
  <li><a href="../distribute/mobile-apps">Distributing custom keyboards for Keyman mobile apps</a></li>
</ul>
