<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    head(['title' => "$class class"]);
    
    // See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array for sample
?>
<h1>KMManager class</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <strong><code>KMManager</code></strong> class provides methods for controlling Keyman Engine</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre class="language-java"><code><var>KMManager</var>.methodName()</code></pre>
<pre class="language-java"><code><var>KMManager</var>.CONSTANT</code></pre>

<h2 id="Description" name="Description">Description</h2>

<p>The KMManager is the core class which provides most of the methods and constants you will need to develop your apps with Keyman Engine</p>

<!-- Fill in examples of how to use, etc. -->

<h2 id="Methods" name="Methods">Methods</h2>

<dl>
  <dt><code><a href='addKeyboard.php'>addKeyboard()</a></code></dt>
  <dd>adds a keyboard into the keyboards list</dd>

  <dt><code><a href='addKeyboardDownloadEventListener.php'>addKeyboardDownloadEventListener()</a></code></dt>
  <dd>adds the specified listener into the list of keyboard download event listeners</dd>

  <dt><code><a href='addKeyboardEventListener.php'>addKeyboardEventListener()</a></code></dt>
  <dd>adds the specified listener into the list of keyboard event listeners</dd>

  <dt><code>addLexicalModel()</code></dt>
  <dd>adds a lexical model into the lexical models list</dd>

  <dt><code>advanceToNextInputMode()</code></dt>
  <dd>switch to the next system keyboard input mode</dd>

  <dt><code><a href='canAddNewKeyboard.php'>canAddNewKeyboard()</a></code></dt>
  <dd>returns whether adding a new keyboard is enabled in the keyboard picker menu</dd>

  <dt><code>canRemoveKeyboard()</code></dt>
  <dd>returns whether removing a keyboard is enabled in the keyboard picker menu</dd>

  <dt><code><a href='createInputView.php'>createInputView()</a></code></dt>
  <dd>creates the input view to be used in InputMethodService</dd>

  <dt><code>deregisterLexicalModel()</code></dt>
  <dd>deregisters the specified lexical model from the LMLayer so it isn't used</dd>

  <dt><code>executeHardwareKeystroke()</code></dt>
  <dd>process the keystroke generated from a physical keyboard</dd>

  <dt><code>getAssociatedLexicalModel()</code></dt>
  <dd>search the installed lexical models list and see if there's an associated model for a given language</dd>

  <dt><code><a href='getBannerHeight.php'>getBannerHeight()</a></code></dt>
  <dd>returns the height of the suggestion banner</dd>

  <dt><code><a href='getCurrentKeyboardIndex.php'>getCurrentKeyboardIndex()</a></code></dt>
  <dd>returns index number of the current keyboard in keyboards list</dd>

  <dt><code><a href='getCurrentKeyboardInfo.php'>getCurrentKeyboardInfo()</a></code></dt>
  <dd>returns information dictionary of the current keyboard</dd>

  <dt><code><a href='getDefaultKeyboard.php'>getDefaultKeyboard()</a></code></dt>
  <dd>returns the default fallback keyboard if none have been added</dd>

  <dt><code><a href='getFontTypeface.php'>getFontTypeface()</a></code></dt>
  <dd>creates a new typeface from the specified font filename</dd>

  <dt><code><a href='getGlobeKeyAction.php'>getGlobeKeyAction()</a></code></dt>
  <dd>returns the action type of the 'Globe' key</dd>

  <dt><code><strike>getKeyboardFontFilename()</strike> (Deprecated)</code></dt>
  <dd>use getKeyboardTextFontFilename or getKeyboardOskFontFilename instead</dd>

  <dt><code><strike>getKeyboardFontTypeface()</strike> (Deprecated)</code></dt>
  <dd>use getKeyboardTextFontTypeface or getKeyboardOskFontTypeface instead</dd>

  <dt><code><a href='getKeyboardHeight.php'>getKeyboardHeight()</a></code></dt>
  <dd>returns the height of the keyboard frame</dd>

  <dt><code><a href='getKeyboardIndex.php'>getKeyboardIndex()</a></code></dt>
  <dd>returns index number of the specified keyboard in keyboards list</dd>

  <dt><code><a href='getKeyboardInfo.php'>getKeyboardInfo()</a></code></dt>
  <dd>returns information dictionary of the specified keyboard</dd>

  <dt><code><a href='getKeyboardsList.php'>getKeyboardsList()</a></code></dt>
  <dd>returns the array of keyboards list</dd>

  <dt><code><a href='getKeyboardOskFontFilename.php'>getKeyboardOskFontFilename()</a></code></dt>
  <dd>returns the selected keyboard's OSK font filename</dd>

  <dt><code><a href='getKeyboardOskFontTypeface.php'>getKeyboardOskFontTypeface()</a></code></dt>
  <dd>creates a new typeface from the selected keyboard's OSK font</dd>

  <dt><code><a href='getKeyboardState.php'>getKeyboardState()</a></code></dt>
  <dd>returns the specified keyboard's state</dd>

  <dt><code><a href='getKeyboardTextFontFilename.php'>getKeyboardTextFontFilename()</a></code></dt>
  <dd>returns the selected keyboard's text font filename</dd>

  <dt><code><a href='getKeyboardTextFontTypeface.php'>getKeyboardTextFontTypeface()</a></code></dt>
  <dd>creates a new typeface from the selected keyboard's text font</dd>

  <dt><code>getKMKeyboard()</code></dt>
  <dd>returns the KMKeyboard depending whether it's an in-app or system keyboard</dd>

  <dt><code><a href='getLatestKeyboardFileVersion.php'>getLatestKeyboardFileVersion()</a></code></dt>
  <dd>returns the specified keyboard's latest file version number</dd>

  <dt><code>getLexicalModelInfo()</code></dt>
  <dd>returns information dictionary of the specified lexical model</dd>

  <dt><code>getLexicalModelsList()</code></dt>
  <dd>returns the array of lexical models list</dd>

  <dt><code><a href='getMaySendCrashReport'>getMaySendCrashReport()</a></code></dt>
  <dd>returns whether Keyman Engine is allowed to send crash reports over the network to sentry.keyman.com</dd>

  <dt><code><a href='getVersion.php'>getVersion()</a></code></dt>
  <dd>returns the version number of Keyman Engine</dd>

  <dt><code><a href='hasConnection.php'>hasConnection()</a></code></dt>
  <dd>returns whether the device has active network connection</dd>

  <dt><code><a href='hideSystemKeyboard.php'>hideSystemKeyboard()</a></code></dt>
  <dd>hides the system OSK</dd>

  <dt><code><a href='initialize.php'>initialize()</a></code></dt>
  <dd>initializes the Keyman manager</dd>

  <dt><code><a href='isDebugMode.php'>isDebugMode()</a></code></dt>
  <dd>returns whether debugging of Keyman Engine is enabled</dd>

  <dt><code><a href='isHelpBubbleEnabled.php'>isHelpBubbleEnabled()</a></code></dt>
  <dd>returns whether the help bubble is enabled</dd>

  <dt><code><a href='keyboardExists.php'>keyboardExists()</a></code></dt>
  <dd>returns whether the specified keyboard exists in keyboards list</dd>

  <dt><code>lexicalModelExists()</code></dt>
  <dd>returns whether the specified lexical model exists in lexical models list</dd>

  <dt><code><a href='onConfigurationChanged.php'>onConfigurationChanged()</a></code></dt>
  <dd>performs necessary actions in an InputMethodService's <code>onConfigurationChanged()</code></dd>

  <dt><code><a href='onDestroy.php'>onDestroy()</a></code></dt>
  <dd>performs necessary actions in an InputMethodService's <code>onDestroy()</code></dd>

  <dt><code><a href='onPause.php'>onPause()</a></code></dt>
  <dd>performs necessary actions in an Activity's <code>onPause()</code></dd>

  <dt><code><a href='onResume.php'>onResume()</a></code></dt>
  <dd>performs necessary actions in an Activity's <code>onResume()</code></dd>

  <dt><code><a href='onStartInput.php'>onStartInput()</a></code></dt>
  <dd>performs necessary actions in an InputMethodService's <code>onStartInput()</code></dd>

  <dt><code>registerAssociatedLexicalModel()</code></dt>
  <dd>registers a lexical model with the associated language ID</dd>

  <dt><code>registerLexicalModel()</code></dt>
  <dd>registers a lexical model to use with the LMLayer</dd>

  <dt><code><a href='removeKeyboard.php'>removeKeyboard()</a></code></dt>
  <dd>removes the keyboard at specified position from the keyboards list</dd>

  <dt><code><a href='removeKeyboardDownloadEventListener.php'>removeKeyboardDownloadEventListener()</a></code></dt>
  <dd>removes the specified listener from the list of keyboard download event listeners</dd>

  <dt><code><a href='removeKeyboardEventListener.php'>removeKeyboardEventListener()</a></code></dt>
  <dd>removes the specified listener from the list of keyboard event listeners</dd>

  <dt><code><a href='setCanAddNewKeyboard.php'>setCanAddNewKeyboard()</a></code></dt>
  <dd>sets whether adding a new keyboard is allowed in the keyboard picker menu</dd>

  <dt><code>setCanRemoveKeyboard()</code></dt>
  <dd>sets whether removing a keyboard is allowed in the keyboard picker menu</dd>

  <dt><code><a href='setDebugMode.php'>setDebugMode()</a></code></dt>
  <dd>enables or disables debugging of Keyman Engine</dd>

  <dt><code><a href='setDefaultKeyboard.php'>setDefaultKeyboard()</a></code></dt>
  <dd>sets the default fallback keyboard to use if none have been added</dd>

  <dt><code><a href='setGlobeKeyAction.php'>setGlobeKeyAction()</a></code></dt>
  <dd>sets an action type for the 'Globe' key</dd>

  <dt><code><a href='setHelpBubbleEnabled.php'>setHelpBubbleEnabled()</a></code></dt>
  <dd>enables or disables the help bubble</dd>

  <dt><code><a href='setKeyboard.php'>setKeyboard()</a></code></dt>
  <dd>sets the keyboard to be used</dd>

  <dt><code><a href='setKeyboardPickerFont.php'>setKeyboardPickerFont()</a></code></dt>
  <dd>sets the font for the keyboard picker menu</dd>

  <dt><code><strike>setKeymanLicense() (Deprecated)</strike></code></dt>
  <dd>sets the developer license/key pair to unlock Keyman Engine</dd>

  <dt><code><a href='setMaySendCrashReport'>setMaySendCrashReport()</a></code></dt>
  <dd>sets whether Keyman Engine can send crash reports over the network to sentry.keyman.com</dd>

  <dt><code><a href='setShouldAllowSetKeyboard.php'>setShouldAllowSetKeyboard()</a></code></dt>
  <dd>sets whether Keyman Engine allows setting a keyboard other than the default keyboard</dd>

  <dt><code><a href='setShouldCheckKeyboardUpdates.php'>setShouldCheckKeyboardUpdates()</a></code></dt>
  <dd>sets whether Keyman Engine should check for keyboard updates</dd>

  <dt><code><a href='shouldAllowSetKeyboard.php'>shouldAllowSetKeyboard()</a></code></dt>
  <dd>returns whether Keyman Engine allows setting a keyboard other than the default keyboard</dd>

  <dt><code><a href='shouldCheckKeyboardUpdates.php'>shouldCheckKeyboardUpdates()</a></code></dt>
  <dd>returns whether Keyman Engine should check for keyboard updates</dd>

  <dt><code><a href='showKeyboardPicker.php'>showKeyboardPicker()</a></code></dt>
  <dd>displays the keyboard picker menu</dd>

  <dt><code><strike>showLanguageList()</strike> (Deprecated)</code></dt>
  <dd>displays the language list</dd>

  <dt><code><a href='switchToNextKeyboard.php'>switchToNextKeyboard()</a></code></dt>
  <dd>loads the next available keyboard in keyboards list</dd>

  <dt><code><a href='updateSelectionRange.php'>updateSelectionRange()</a></code></dt>
  <dd>updates the selection range of the current context</dd>

  <dt><code><a href='updateText.php'>updateText()</a></code></dt>
  <dd>updates the current context with the specified text</dd>
</dl>