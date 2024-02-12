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
  <dt><code><a href='addKeyboard'>addKeyboard()</a></code></dt>
  <dd>adds a keyboard into the keyboards list</dd>

  <dt><code><a href='addKeyboardDownloadEventListener'>addKeyboardDownloadEventListener()</a></code></dt>
  <dd>adds the specified listener into the list of keyboard download event listeners</dd>

  <dt><code><a href='addKeyboardEventListener'>addKeyboardEventListener()</a></code></dt>
  <dd>adds the specified listener into the list of keyboard event listeners</dd>

  <dt><code><a href='addLexicalModel'>addLexicalModel()</a></code></dt>
  <dd>adds a lexical model into the lexical models list</dd>

  <dt><code><a href='advanceToNextInputMode'>advanceToNextInputMode()</a></code></dt>
  <dd>switch to the next system keyboard input mode</dd>

  <dt><code><a href='advanceToPreviousInputMethod'>advanceToPreviousInputMethod()</a></code></dt>
  <dd>switch to the previous system keyboard input mode</dd>

  <dt><code><a href='applyKeyboardHeight'>applyKeyboardHeight()</a></code></dt>
  <dd>sets the height of keyboard frame</dd>

  <dt><code><a href='canAddNewKeyboard'>canAddNewKeyboard()</a></code></dt>
  <dd>returns whether adding a new keyboard is enabled, like in the keyboard picker menu</dd>

  <dt><code><a href='canRemoveKeyboard'>canRemoveKeyboard()</a></code></dt>
  <dd>returns whether removing a keyboard is enabled, like in the keyboard picker menu</dd>

  <dt><code><a href='copyHTMLBannerAssets'>copyHTMLBannerAssets()</a></code></dt>
  <dd>copies a folder of HTML banner assets so it's available for your keyboard app's resources</dd>

  <dt><code><a href='createInputView'>createInputView()</a></code></dt>
  <dd>creates the input view to be used in InputMethodService</dd>

  <dt><code><a href='deregisterLexicalModel'>deregisterLexicalModel()</a></code></dt>
  <dd>deregisters the specified lexical model from the LMLayer so it isn't used</dd>

  <dt><code>executeHardwareKeystroke()</code></dt>
  <dd>process the keystroke generated from a physical keyboard</dd>

  <dt><code><a href='getAssociatedLexicalModel'>getAssociatedLexicalModel()</a></code></dt>
  <dd>search the installed lexical models list and see if there's an associated model for a given language</dd>

  <dt><code><a href='getBannerHeight'>getBannerHeight()</a></code></dt>
  <dd>returns the height of the suggestion banner</dd>

  <dt><code><a href='getCurrentKeyboardIndex'>getCurrentKeyboardIndex()</a></code></dt>
  <dd>returns index number of the current keyboard in keyboards list</dd>

  <dt><code><a href='getCurrentKeyboardInfo'>getCurrentKeyboardInfo()</a></code></dt>
  <dd>returns information dictionary of the current keyboard</dd>

  <dt><code><a href='getDefaultKeyboard'>getDefaultKeyboard()</a></code></dt>
  <dd>returns the keyboard information for the fallback keyboard</dd>

  <dt><code><a href='getFontTypeface'>getFontTypeface()</a></code></dt>
  <dd>creates a new typeface from the specified font filename</dd>

  <dt><code><a href='getGlobeKeyAction'>getGlobeKeyAction()</a></code></dt>
  <dd>returns the action type of the 'Globe' key</dd>

  <dt><code><a href='getHapticFeedback'>getHapticFeedback()</a></code></dt>
  <dd>returns whether the device vibrates as the user types</dd>

  <dt><code><strike>getKeyboardFontFilename()</strike> (Deprecated)</code></dt>
  <dd>use getKeyboardTextFontFilename or getKeyboardOskFontFilename instead</dd>

  <dt><code><strike>getKeyboardFontTypeface()</strike> (Deprecated)</code></dt>
  <dd>use getKeyboardTextFontTypeface or getKeyboardOskFontTypeface instead</dd>

  <dt><code><a href='getKeyboardHeight'>getKeyboardHeight()</a></code></dt>
  <dd>returns the height of the keyboard frame</dd>

  <dt><code><a href='getKeyboardIndex'>getKeyboardIndex()</a></code></dt>
  <dd>returns index number of the specified keyboard in keyboards list</dd>

  <dt><code><a href='getKeyboardInfo'>getKeyboardInfo()</a></code></dt>
  <dd>returns information dictionary of the specified keyboard</dd>

  <dt><code><a href='getKeyboardsList'>getKeyboardsList()</a></code></dt>
  <dd>returns the array of keyboards list</dd>

  <dt><code><a href='getKeyboardOskFontFilename'>getKeyboardOskFontFilename()</a></code></dt>
  <dd>returns the selected keyboard's OSK font filename</dd>

  <dt><code><a href='getKeyboardOskFontTypeface'>getKeyboardOskFontTypeface()</a></code></dt>
  <dd>creates a new typeface from the selected keyboard's OSK font</dd>

  <dt><code><a href='getKeyboardState'>getKeyboardState()</a></code></dt>
  <dd>returns the specified keyboard's state</dd>

  <dt><code><a href='getKeyboardTextFontFilename'>getKeyboardTextFontFilename()</a></code></dt>
  <dd>returns the selected keyboard's text font filename</dd>

  <dt><code><a href='getKeyboardTextFontTypeface'>getKeyboardTextFontTypeface()</a></code></dt>
  <dd>creates a new typeface from the selected keyboard's text font</dd>

  <dt><code>getKMKeyboard()</code></dt>
  <dd>returns the KMKeyboard depending whether it's an in-app or system keyboard</dd>

  <dt><code><a href='getLatestKeyboardFileVersion'>getLatestKeyboardFileVersion()</a></code></dt>
  <dd>returns the specified keyboard's latest file version number</dd>

  <dt><code>getLexicalModelInfo()</code></dt>
  <dd>returns information dictionary of the specified lexical model</dd>

  <dt><code>getLexicalModelsList()</code></dt>
  <dd>returns the array of lexical models list</dd>

  <dt><code><a href='getLanguageCorrectionPreferenceKey'>getLanguageCorrectionPreferenceKey()</a></code></dt>
  <dd>returns a String to use as a shared preference key to store whether the LMLayer should enable corrections for a given language</dd>

  <dt><code><a href='getLanguagePredictionPreferenceKey'>getLanguagePredictionPreferenceKey()</a></code></dt>
  <dd>returns a String to use as a shared preference key to store whether the LMLayer should enable suggestions for a given language.</dd>

  <dt><code><a href='getMaySendCrashReport'>getMaySendCrashReport()</a></code></dt>
  <dd>returns whether Keyman Engine is allowed to send crash reports over the network to sentry.keyman.com</dd>

  <dt><code><a href='getSpacebarText'>getSpacebarText()</a></code></dt>
  <dd>returns the current text display pattern for the spacebar</dd>

  <dt><code><a href='getVersion'>getVersion()</a></code></dt>
  <dd>returns the version number of Keyman Engine</dd>

  <dt><code><a href='hasConnection'>hasConnection()</a></code></dt>
  <dd>returns whether the device has active network connection</dd>

  <dt><code><a href='hideSystemKeyboard'>hideSystemKeyboard()</a></code></dt>
  <dd>hides the system OSK</dd>

  <dt><code><a href='initialize'>initialize()</a></code></dt>
  <dd>initializes the Keyman manager</dd>

  <dt><code><a href='isDebugMode'>isDebugMode()</a></code></dt>
  <dd>returns whether debugging of Keyman Engine is enabled</dd>

  <dt><code><strike>isHelpBubbleEnabled()</strike> (Deprecated)</code></dt>
  <dd>returns whether the help bubble is enabled</dd>

  <dt><code><a href='isKeyboardLoaded'>isKeyboardLoaded()</a></code></dt>
  <dd>returns whether the specified in-app or system keyboard is loaded</dd>

  <dt><code><a href='keyboardExists'>keyboardExists()</a></code></dt>
  <dd>returns whether the specified keyboard exists in keyboards list</dd>

  <dt><code>lexicalModelExists()</code></dt>
  <dd>returns whether the specified lexical model exists in lexical models list</dd>

  <dt><code><a href='onConfigurationChanged'>onConfigurationChanged()</a></code></dt>
  <dd>performs necessary actions in an InputMethodService's <code>onConfigurationChanged()</code></dd>

  <dt><code><a href='onDestroy'>onDestroy()</a></code></dt>
  <dd>performs necessary actions in an InputMethodService's <code>onDestroy()</code></dd>

  <dt><code><a href='onPause'>onPause()</a></code></dt>
  <dd>performs necessary actions in an Activity's <code>onPause()</code></dd>

  <dt><code><a href='onResume'>onResume()</a></code></dt>
  <dd>performs necessary actions in an Activity's <code>onResume()</code></dd>

  <dt><code><a href='onStartInput'>onStartInput()</a></code></dt>
  <dd>performs necessary actions in an InputMethodService's <code>onStartInput()</code></dd>

  <dt><code><a href='registerAssociatedLexicalModel'>registerAssociatedLexicalModel()</a></code></dt>
  <dd>registers a lexical model with the associated language ID</dd>

  <dt><code><a href='registerLexicalModel'>registerLexicalModel</a></code></dt>
  <dd>registers a lexical model to use with the LMLayer</dd>

  <dt><code><a href='removeKeyboard'>removeKeyboard()</a></code></dt>
  <dd>removes the keyboard at specified position from the keyboards list</dd>

  <dt><code><a href='removeKeyboardDownloadEventListener'>removeKeyboardDownloadEventListener()</a></code></dt>
  <dd>removes the specified listener from the list of keyboard download event listeners</dd>

  <dt><code><a href='removeKeyboardEventListener'>removeKeyboardEventListener()</a></code></dt>
  <dd>removes the specified listener from the list of keyboard event listeners</dd>

  <dt><code><a href='setCanAddNewKeyboard'>setCanAddNewKeyboard()</a></code></dt>
  <dd>sets whether adding a new keyboard is allowed</dd>

  <dt><code>setCanRemoveKeyboard()</code></dt>
  <dd>sets whether removing a keyboard is allowed, like in the keyboard picker menu</dd>

  <dt><code><a href='setDebugMode'>setDebugMode()</a></code></dt>
  <dd>enables or disables debugging of Keyman Engine</dd>

  <dt><code><a href='setDefaultKeyboard'>setDefaultKeyboard()</a></code></dt>
  <dd>sets the keyboard information for the fallback keyboard</dd>

  <dt><code><a href='setGlobeKeyAction'>setGlobeKeyAction()</a></code></dt>
  <dd>sets an action type for the 'Globe' key</dd>

  <dt><code><a href='setHapticFeedback'>setHapticFeedback()</a></code></dt>
  <dd>sets whether the device vibrates as the user types</dd>

  <dt><code><strike>setHelpBubbleEnabled()</strike> (deprecated)</code></dt>
  <dd>enables or disables the help bubble</dd>

  <dt><code><a href='setHTMLBanner'>setHTMLBanner()</a></code></dt>
  <dd>sets the contents of an HTML banner for Keyman Engine to display when suggestions aren't available</dd>

  <dt><code><a href='setKeyboard'>setKeyboard()</a></code></dt>
  <dd>sets the keyboard to be used</dd>

  <dt><code><a href='setKeyboardPickerFont'>setKeyboardPickerFont()</a></code></dt>
  <dd>sets the font for the keyboard picker menu</dd>

  <dt><code><strike>setKeymanLicense() (Deprecated)</strike></code></dt>
  <dd>sets the developer license/key pair to unlock Keyman Engine</dd>

  <dt><code><a href='setMaySendCrashReport'>setMaySendCrashReport()</a></code></dt>
  <dd>sets whether Keyman Engine can send crash reports over the network to sentry.keyman.com</dd>

  <dt><code><a href='setShouldAllowSetKeyboard'>setShouldAllowSetKeyboard()</a></code></dt>
  <dd>sets whether Keyman Engine allows setting a keyboard other than the default keyboard</dd>

  <dt><code><a href='setShouldCheckKeyboardUpdates'>setShouldCheckKeyboardUpdates()</a></code></dt>
  <dd>sets whether Keyman Engine should check for keyboard updates</dd>

  <dt><code><a href='setSpacebarText'>setSpacebarText()</a></code></dt>
  <dd>sets the current text display pattern for the spacebar</dd>

  <dt><code><a href='shouldAllowSetKeyboard'>shouldAllowSetKeyboard()</a></code></dt>
  <dd>returns whether Keyman Engine allows setting a keyboard other than the default keyboard</dd>

  <dt><code><a href='shouldCheckKeyboardUpdates'>shouldCheckKeyboardUpdates()</a></code></dt>
  <dd>returns whether Keyman Engine should check for keyboard updates</dd>

  <dt><code><a href='showKeyboardPicker'>showKeyboardPicker()</a></code></dt>
  <dd>displays the keyboard picker menu</dd>

  <dt><code><strike>showLanguageList()</strike> (Deprecated)</code></dt>
  <dd>displays the language list</dd>

  <dt><code><a href='switchToNextKeyboard'>switchToNextKeyboard()</a></code></dt>
  <dd>loads the next available keyboard in keyboards list</dd>

  <dt><code><a href='updateSelectionRange'>updateSelectionRange()</a></code></dt>
  <dd>updates the selection range of the current context</dd>

  <dt><code><a href='updateText'>updateText()</a></code></dt>
  <dd>updates the current context with the specified text</dd>
</dl>
