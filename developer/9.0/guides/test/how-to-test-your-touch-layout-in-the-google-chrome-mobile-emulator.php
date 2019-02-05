<?php
  require_once('includes/template.php');

  head([
    'title' => 'How to test your touch layout in the Google Chrome mobile emulator'
  ]);
?>

<h1>How to test your touch layout in the Google Chrome mobile emulator</h1>

<p>This post builds on knowledge in another article about <a href="how-to-test-your-keyboard-layout-with-keyman-developer-9-touch-and-desktop">testing Keyman touch layouts</a>. Now, we provide an alternative test platform for your keyboards, running on your desktop computer rather than your touch device.</p>

<p>Google Chrome includes a mobile emulator for web pages, for various devices including iPhones, iPads and Androids. Recent builds of KeymanWeb work well with this emulator and this provides a quicker and easier way, in many cases, to get a feel for the layout of your keyboard and do rapid testing.</p>

<p>It is still essential to test your layout on a real device as well as the emulator: the feel of clicking on keys with a mouse is very different, and gestures such as longpress menus will feel awkward on the emulator. We use both native mobile and emulator testing when building our layouts, switching between the two frequently.</p>

<p>The emulator works best in the iPhone and iPad emulation. Some of the other devices emulated may or not work as well.</p>

<h2>Test Process</h2>

<ol>
  <li>Start testing your keyboard with the <a href="how-to-test-your-keyboard-layout-with-keyman-developer-9-touch-and-desktop">original steps on testing touch keyboards</a>.
    <br />
    <img title="StartDebugging" src="<?= cdn('img/developer/90/testing/startdebugging.png');?>">
  </li>
  
  <li>Open Chrome, navigate to the debug host page for your keyboard, and press F12.
    <br />
    <img title="Chrome1" src="<?= cdn('img/developer/90/testing/chrome1.png') ?>" alt="Chrome1">
  </li>
  
  <li>In the Developer Tools window, click the mobile icon:
    <br />
    <img title="Chrome2" src="<?= cdn('img/developer/90/testing/chrome2.png') ?>" alt="Chrome2">
  </li>

  <li>Back in the debug host page, select the appropriate device from the mobile emulation toolbar, then press F5 to reload and enable the touch mode. The recommended devices are Apple iPad 1 / 2 &nbsp;/ iPad Mini for tablet testing, and Apple iPhone 5S for mobile testing.
    <br />
    <img title="Chrome3" src="<?= cdn('img/developer/90/testing/chrome3.png') ?>" alt="Chrome3">
  </li>
  
  <li>At this point, you should see a simulation of the iPhone or iPad screen, and KeymanWeb should be presenting its touch keyboard rather than the desktop equivalent. You'll also see the mouse cursor has turned into a fuzzy circle, to simulate a fingertip instead of a precise arrow.
    <br />
    <img title="Chrome4" src="<?= cdn('img/developer/90/testing/chrome4.png') ?>" alt=Chrome4">
  </li>
</ol>

<p>You can now test the keyboard layout and get an idea of how it will feel on a real touch device. Rotation, or changing device types will require a page load (F5) in order to render correctly.</p>

<ul>
  <li><a href="../develop/creating-a-touch-keyboard-layout-for-amharic-with-keyman-developer-9">Creating a touch keyboard layout for Amharic - part 1</a></li>
  <li><a href="../develop/creating-a-touch-keyboard-layout-for-amharic-the-nitty-gritty">Creating a touch keyboard layout for Amharic - the nitty gritty</a></li>
  <li><a href="how-to-test-your-keyboard-layout-with-keyman-developer-9-touch-and-desktop">How to test your keyboard layout — touch and desktop</a></li>
</ul>

<p>You can distribute your keyboard to other users by following the instructions in these two articles:</p>

<ul>
  <li><a href="../distribute/mobile-apps">Distributing custom keyboards for Keyman mobile apps</a></li>
</ul>
