<?php
  require_once('includes/template.php');

  head([
    'title' => 'How to test your lexical model'
  ]);
?>

<h1>How to test your lexical model</h1>

<p>It is helpful to be familiar with processes for testing touch keyboards before starting to test a lexical model. This tutorial
builds on knowledge found in the following two articles:</p>

<ul>
  <li>
    <a href='how-to-test-your-keyboard-layout-with-keyman-developer-10-touch-and-desktop'>Testing keyboard layouts on devices</a>
  </li>
  <li>
    <a href='how-to-test-your-touch-layout-in-the-google-chrome-mobile-emulator'>Testing keyboard layouts in the Chrome Mobile 
    Emulator</a>
  </li>
</ul>

<h2>Test Process</h2>

<p>Lexical models are tested in Keyman Developer's web testing environment. They can be loaded on any device that can access the
testing web site, in the same way as testing a keyboard layout.</p>

<p>A lexical model must be tested in conjunction with a keyboard. The keyboard provides the input, and the lexical model will present
suggestions based on that input. In normal use, a lexical model is linked to a keyboard by the BCP 47 language code with which they
are both registered. However, within the debug environment, any lexical model can be tested with any keyboard -- but of course an
Arabic lexical model will not provide useful suggestions with a Hindi keyboard, so you still need a keyboard which will provide
sensible input to the model.</p>

<p>There are two ways to load a lexical model in the web-based test environment:</p>

<ol>
  <li>
    The first option is to start testing a keyboard as you would, in the web test environment. The keyboard will remain available
    within the web test environment until Keyman Developer is restarted, even if you switch projects.
  </li>
  
  <li>
    The second way is to specify a compiled .js keyboard file for the lexical model test to load when you start testing, in the
    <strong>Build</strong> tab of the Lexical Model Editor. This keyboard can be selected once and remains saved in your project 
    user settings for future tests.
  </li>
</ol>

<p>To start testing a lexical model, follow the steps below:</p>

<ol>
  <li>
    Ensure the model is compiled by pressing F7 within the lexical model editor, or pressing the <strong>Compile Model</strong>
    button within the <strong>Build</strong> tab.
  </li>

  <li>
    Prepare the associated keyboard for testing as you normally would, and load it in the web test environment following
    the instructions above. In the example below, I have selected the fv_sencoten keyboard to use during my lexical model test (you
    may alternatively choose to load the keyboard project and start testing from there).
    <br />
    <img title="model-test-page" src="<?= cdn('img/developer/130/lm/test-model.png')?>">
  </li>

  <li>
    Choose the URL in the web addresses list as shown in the image above.  Keyman Developer lists all the addresses on your computer
    that it can find; some will be addressable by other devices, where as addresses such as 'localhost' or '127.0.0.1' are only
    visible on the local computer. Typically, any other device must still be on the same network, and you must make sure you allow
    Keyman Developer through your local computer firewall for port 8008 (the default debugging port).
  </li>

  <li>
    If you choose to use Google Chrome Mobile Emulator, click <strong>Open debugger in local browser</strong> and follow the steps 
    in the <a href='how-to-test-your-touch-layout-in-the-google-chrome-mobile-emulator'>article on testing with Chrome</a> to start
    testing.
    <br />
    <img title="model-test" src="<?= cdn('img/developer/130/lm/model-test-in-emulator.png')?>">
  </li>

  <li>
    Once you start testing, you can swap between models from the <strong>Models</strong> menu in the test web page. As you type on
    the touch keyboard, you should see suggestions change in the banner, and you should be able to select the suggestions. You can
    also do the same testing in a web browser on a mobile device. Note: you can point your mobile device camera at the QRCode 
    on screen to quickly load the selected URL on your mobile device.
  </li>
</ol>

<p>In order to test the lexical model inside Keyman on a mobile device, you will need to
<a href='../lexical-models/distribute'>prepare the model file for distribution</a>.</p>
