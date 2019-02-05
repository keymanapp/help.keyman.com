<?php /*
  Name:             history
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      18 Sep 2009

  Modified Date:    22 June 2015
  Authors:          mcdurdin, jmdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          18 Sep 2009 - mcdurdin - Polish
                    22 June 2015 - jmdurdin - Version 2 history
*/
  $pagename = 'Keyman Engine for Web 2.0 Version History';
  $pagetitle = 'Keyman Engine for Web 2.0 Version History';
  $MainPage = true;
  
  require_once('header.php');

  function injectGithubLink($s) {
    return preg_replace("/\(\#(\d+)\)/", "(<a href='https://github.com/keymanapp/keyman/issues/$1'>#$1</a>)", $s);
  }
 
  echo injectGithubLink( <<<END

<div class='body_text'>
  <h3>2.0.473 - 10 Jul 2017 (stable)</h3>
  <ul>
    <li>2.0 stable release build; no significant changes; removed a build warning (#125)</li>
  </ul>

  <h3>2.0.469 - 10 Jul 2017 (alpha)</h3>
  <ul>
    <li>Fixed bug with longpress menus not working correctly on symbol/numeric layers (#117)</li>
  </ul>
  
  <h3>2.0.465 - 04 Jul 2017</h3>
  <ul>
    <li>Fixed issues with Bookmarklet not loading correctly (#112)</li>
  </ul>
  
    <h3>2.0.464 - 29 Jun 2017</h3>
  <ul>
    <li>Fix for broken keys in hardware keyboards on Android devices (#111)</li>
  </ul>

  <h3>2.0.463 - 27 Jun 2017</h3>
  <ul>
    <li>Reworked keyboard load to provide clearer and faster feedback on errors, improve performance (#105)</li>
  </ul>

  <h3>2.0.460 - 21 Jun 2017</h3>
  <ul>
    <li>Automated build configuration with build scripts (#102)</li>
  </ul>

  <h3>2.0.453 - 16 Jun 2017</h3>
  <ul>
    <li>KeymanWeb now supports MutationObservers for dynamically added and removed input elements on the page when the 
        initialization option <code>attachType</code> is set to auto and will attach/detach to these automatically (#71)</li>
    <li>The touch implementation now supports keyboards with layers of differing row counts (#76)</li>
    <li>KeymanWeb support on touchscreen laptops is now greatly improved when not in touch-oriented mode (#82)</li>
    <li>Updated the source for compatibility and removal of warnings when building under the latest versions of Google Closure (#73)</li>
    <li>Update copyright messages (#96)</li>
    <li>General improvements to the KeymanWeb build paths (#95)</li>
    <li>Fix bugs where setActiveKeyboard would fail, and setting default keyboards fail (#94)</li>
  </ul>
END
  );
  
  echo <<<END
<ul>
<h3>Build 394 - 26/06/2015</h3>
<li>Added Android-specific OSK styling for phones and tablets.</li>
<h3>Build 393 - 18/06/2015</h3>
<li>Corrected text label for added popup copy of base key.</li>
<h3>Build 392 - 18/06/2015</h3>
<li>Key highlighting behaviour corrected.</li>
<li>OSK key sizes corrected.</li>
<h3>Build 391 - 18/06/2015</h3>
<li>Fixed text on key preview.</li>
<h3>Build 390 - 11/06/2015</h3>
<li>Updated CSS for vertical centering of text on keys.</li>
<h3>Build 389 - 02/06/2015</h3>
<li>Corrected key preview/popup key interaction on phones.</li>
<h3>Build 388 - 28/05/2015</h3>
<li>Key preview further corrected for compatibility with embedded iOS apps.</li>
<h3>Build 387 - 26/05/2015</h3>
<li>Key preview logic corrected for KMEI, KMEI-specific code moved out of kmwosk.js.</li>
<h3>Build 386 - 22/05/2015</h3>
<li>Key preview now fully tested, excluded for space bar, special keys, and popup keys.</li>
<h3>Build 385 - 15/05/2015</h3>
<li>Further changes to key preview and key highlighting.</li>
<h3>Build 384 - 14/05/2015</h3>
<li>Changed key preview to key highlighting for space bar and special keys.</li>
<h3>Build 383 - 12/05/2015</h3>
<li>Corrected moveOver, backspace key, preview management.</li>
<h3>Build 382 - 12/05/2015</h3>
<li>Changed integration of key preview notification (for embedded KMW).</li>
<li>Corrected key highlighting behaviour.</li>
<li>Fix nearestKey() error if returning null.</li>
<h3>Build 381 - 07/05/2015</h3>
<li>Single keyboard event model replacing separate key events.</li>
<li>Added changes to static layout.</li>
<h3>Build 380 - 24/04/2015</h3>
<li>Fix inconsistency from adjustHeights issue.</li>
<h3>Build 379 - 24/04/2015</h3>
<li>Trap errors in adjustHeights().</li>
<h3>Build 378 - 24/04/2015</h3>
<li>Correct adjustHeights().</li>
<h3>Build 377 - 16/02/2015</h3>
<li>Consolidation from separate development builds, no significant changes.</li>
<li>Fixed application of embedded font to OSK (github issue #7).</li>
<h3>Build 376 - 23/01/2015</h3>
<li>RTL set on entry, add support for SVG (for system keyboard fonts).</li>
<li>Added delay between installing and activating keyboards (github issue #6).</li>
<h3>Build 375 - 11/11/2014</h3>
<li>First open source build. (MCD).</li>
<li>Fixed github issue #1 - OSK key text truncated on phones.</li> 
<h3>Build 374 - 11/11/2014</h3>
<li>Internal builds, not for release.</li>
<h3>Build 369 - 28/10/2014</h3>
<li>Adjust OSK padding and margin in CSS.</li>
<h3>Build 368 - 25/10/2014</h3>
<li>Correct remote paths to keyboards, resources and fonts to correctly reference cloud server.</li>
<h3>Build 367 - 24/10/2014</h3>
<li>Prevent failure if bad arguments provided in request for meta-data sent to keyman cloud, warn user if unrecognized language given.</li>
<h3>Build 366 - 24/10/2014</h3>
<li>Fix addKeyboards() and related code to return complete keyboard list if called with no arguments.</li>
<li>Correct invalid return values in smpstring.js.</li>
<li>Remove debug reference from kmwtoggle.js.</li>
<li>kmwbase.js: accept file: as protocol for page or resource references.</li>
<li>Expose font checking as *isFontAvailable(name)* to allow site developers to check that a custom font has in fact been installed by the user's browser. (This was added partly to make it possible to know if cross-source font loading was being prevented, as by Firefox unless an override option is set. Not currently used, as use during page loading is problematic.).</li>
<h3>Build 365 - 20/10/2014</h3>
<li>Source, output and samples directories reorganized and new build.bat files added.</li>
<h3>Build 364 - 17/10/2014</h3>
<li>Updated initialization (and other) code to handle file:// when loading page directly from source rather than form a web site.</li>
<li>Tidy up OSK styles.</li>
<h3>Build 363 - 17/10/2014</h3>
<li>Added conditionallyHideOsk() to hide OSK if anywhere except mapped input touched except when scrolling.</li>
<li>Get more accurate (browser and device-dependent) device width for touch devices.</li>
<li>Add pixel-based scaling for OSK, move styles from js to CSS where possible.</li>
<li>Remove duplicated code for mouse event handling.</li>
<li>Add class modifier (kmw-5rows) to apply different scaling for 5-row keyboards in CSS.</li>
<li>Prevent failure if requested keyboard font unavailable, set default options (native.js).</li>
<li>Moved some default code back to keymanweb.js from native.js (can be overridden in embedded.js).</li>
<li>Moved option key and rotation event handling to native.js (not used by KMEI/KMEA).</li>
<li>kmwbase.js - add stub functions to avoid failure if initialization delayed, add exception trapping to viewport scaling.</li>
<h3>Build 362 - 05/09/2014</h3>
<li>Fixed addKeyboards() and related functions for loading keyboards fro the cloud or local files.</li>
<li>Added addKeyboardsByLanguage().</li>
<li>Added doKeyboardUnregistered() function to handle kmw.registered again if the list of registered keyboards changes to allow external UI to update language/keyboard menus.</li>
<li>Modified installKeyboard to use the file name as a parameter rather than the stub object.</li>
<li>Removed remaining domain validation code, revised path reference resolution during initialization.</li>
<li>OSK - qualify styles by OS, correct style name for OSK frame.</li>
<li>Add support for keyboard-specific style sheets.</li>
<li>Desktop UIs - set default keyboard to English to allow mapping to remain active, update menus after loading or unloading keyboard references.</li>
<li>Keyboard load wait indicator disabled when loading local keyboards.</li>
<li>Added member lists of languages and stubs to allow  deferred loading of metadata from cloud.</li>
<li>kmwbase.js: update code for getting path and protocol from executing script.</li>
<h3>Build 361 - 31/07/2014</h3>
<li>Added addKeyboards and related functions to load keyboards from the cloud server.</li>
<li>Moved alignInputs to native.js.</li>
<li>Removed explicit references to KeymanTouch  from shared code.</li>
<li>Moved keyboard load timer and device rotation handling to native.js, excluded from embedded.js.</li>
<li>Moved OSK refresh, keyboard load fail warning  to native.js.</li>
<h3>Build 360 - 25/07/2014</h3>
<li>Moved keyboard path and root path resolution to getKeyboardPath() function (for KMEW/KMEI branching).</li>
<li>Moved all KMEI/KMEA specific code to embedded.js, KMEW specific code to native.js.</li>
<li>Removed duplicated keymanweb.addEventListener function.</li>
<li>OSK - correct popup delay, moved showKeyTip() and popup-key highlighting to native.js. (Not used by KMEI/KMEA).</li>
<li>OSK - moved KMEI/KMEI specific code to embedded.js.</li>
<li>KMW and OSK - added mouse event handlers for desktop simulation.</li>
<li>OSK - use getStyleSheetPath() to separate KMEW from KMEI/KMEA paths.</li>
<li>OSK - move font check code to native.js.</li>
<li>kmwbase.js - added fontCheckTimer(), updated help URL, added default event handlers to replace inline handlers where possible, changed myPath(srcFile) to require name of source file to be used to identify path.</li>
<li>kmwbase.js - moved keyboard loading wait() function to kmwnative.js (not used by embedded apps).</li>
<h3>Build 359 - 12/06/2014</h3>
<li>Moved all key tip and key preview (KMEA, KMEI) code to highlight on/off function.</li>
<li>Added call to kmw.keyboardchange event from OSK language menu change.</li>
<h3>Build 358 - 12/06/2014</h3>
<li>Added call to oskClearKeyPreview() to cancel display of key preview window (where appropriate) by KMEA, KMEI.</li>
<h3>Build 357 - 08/05/2014</h3>
<li>Now calls oskCreateKeyPreview in KMEA, KMEI to support display of local key preview windows on those devices.</li>
<li>Corrected language menu on touch devices to ensure that the keyboard selector buttons remain visible when multiple keyboards are available for one language.</li>
<h3>Build 356 - 08/05/2014</h3>
<li>Correct keyboard load sequencing (KMEW-101).</li>
<h3>Build 355 - 02/05/2014</h3>
<li>Added code to executePopupKey to fully support unmapped key fallback processing.</li>
<h3>Build 354 - 01/05/2014</h3>
<li>Corrected code in executePopupKey to support layer mapping from native apps.</li>
<li>Reduced popup delay time if user slides touch point up toward popup window.</li>
<li>Reduced OSK spacebar caption line spacing and text size (CSS change and new class for spacebar caption parent).</li>
<li>(Build 353 failed and has been removed from repository.)</li>
<h3>Build 352 - 01/05/2014</h3>
<li>Reduced popup key delay when sending popup data to native keyman app (Keyman for iPhone, Keyman for Android).  Does not affect Keyman for Web.</li>
<h3>Build 351 - 01/05/2014</h3>
<li>Removed debug alert (affected IE only).</li>
<h3>Build 350 - 24/04/2014</h3>
<li>Corrected handling of U_xxxx virtual key codes to support all values except control codes.</li>
<li>Adjusted pop-key positioning.</li>
<li>Add support for code conditioning by layer (KIFS statement).</li>
<h3>Build 349 - 17/04/2014</h3>
<li>Added 'keytip' labels to phone layouts, removed simulated (pop-up key) labels.  Increased delay before displaying pop-up keys to 0.5 sec.</li>
<li>Hide non-functional keyboard layers and remove any shift-key references to such layers.</li>
<h3>Build 348 - 03/04/2014</h3>
<li>keymanweb.BuildVisualKeyboard (exposed) function restored to allow an image of the keyboard for any device to be displayed (or printed) using a desktop browser.</li>
<li>Updated file locations: if keyboard (or font)  file URL start with /,./ or ../, load with respect to current page; if URL includes :, treat as absolute, otherwise prepend keyboards (or fonts) path to given file name.</li>
<h3>Build 347</h3>
<li>Change all key ids to Keyman Desktop names, remove all duplicate names, and renumber special (non-outputting) keys from 50000.</li>
<li>Add special handling to distinguish between K_xxxx (mapped physical keys), T_xxxx (named touch keys), U_xxxx (touch keys with default Unicode output).</li>
<li>Extend and correct KIFS handling to constrain rules according to touch/physical keyboard, platform, form factor and browser/application.</li>
<li>Add device.browser member, extend identification of IE version to include IE11.</li>
<li>Fix incorrect language menu position for Firefox on Android.</li>
<h3>Build 346</h3>
<li>Correct font path to allow use of page-relative fonts. (Remove all absolute paths from code.).</li>
<h3>Build 345</h3>
<li>Prevent display of undefined OSK layers.</li>
<li>Set default font family for each OSK key (not only for entire OSK).</li>
<li>Expose function 'correctOSKTextSize()' to allow app to correct OSK text size.</li>
<li>Change pop-up key element id from 'subkey-...' to 'popup-[layer]-...' e.g. change subkey-K_A to popup-default-K_A. (KMEW-93).</li>
<li>Ensure that popup keys managed by device are correctly cancelled.</li>
<li>Apply modifier state to popup keys. (KMEW-93).</li>
<h3>Build 344</h3>
 <li>Add charset=UTF-8 to script tags to ensure correct interpretation of keyboards loaded by non-UTF-8 page. (KMEW-89).</li>
 <li>Correct font scaling on phone devices. (KMEW-90, KBDS-5).</li>
 <li>Add support for platform-dependent font size specification. (KMEW-90, KBDS-5).</li>
<h3>Build 343 - 28/03/2014</h3>
 <li>Now supports WordPress plug-in on touch devices as well as desktop. (KMEW-79).</li>
 <li>Correct layout issues with Chrome, Firefox and Opera browsers on Android, but abandon support for native Android browsers, as behaviour varies too much between devices and Android versions, which do not always display embedded (complex) fonts. (KMEW-82, KMEW-83).</li>
 <li>Default embedded font format for Android is now TTF (as well as for other platforms).</li>
 <li>Fix duplicated element border and background  display.</li>
 <li>Prevent *touchend* event propagation (causing unwanted behaviour).</li>
 <li>Correct focus when moving between mapped and unmapped elements.</li>
<h3>Build 342 Beta</h3>
<li>Correct OSK key sizing and appearance (especially Firefox).</li>
<li>Correct language selection from language menu (manage change of focus).</li>
<li>Correct duplicated element transparency.</li>
<h3>Build 341 Beta</h3>
 <li>Hide OSK when moving to unmapped input.</li>
 <li>Correct browser-dependent alignment of duplicated input elements.</li>
 <li>Match duplicated INPUT element height and spacing with base element.</li>
 <li>Cache keyboard input context strings to optimize rule processing (MCD).</li>
 <li>Prevent OSK disappearing when moving to next element.</li>
 <li>Support *email* and *url* input types (as well as *text* and *search*).</li>
 <li>Resize inputs after a rotation (Android browsers).</li>
 <li>Handle device rotation for Firefox browser.</li>
 <li>Recognize and correctly manage non-iOS devices that identify as iPad or iPhone in user agent string. (Android does not handle *gesture* events.)</li>
<h3>Build 340 Beta</h3>
 <li>Handle viewport scaling to remove fixed scaling restriction, required for WordPress Plug-In.</li>
 <li>Correct duplicated touch-screen input element for box-sizing and parent element attributes.</li>
 <li>Now use script-dependent character strings to check loading of embedded fonts.</li>
 <li>Sort input elements by position (once) rather than each time Tab is pressed. (KMEW-24).</li>
 <li>Add support for direct write to element by Keyman Engine for iPhone and iPad, Keyman Engine for Android.</li>
 <li>Handle device rotation using *orientationchange* event instead of resize event, and rescale OSK keys after a rotation. (Corrects resizing issue on iOS7.).</li>
 <li>Handle Enter/Return from OSK for search and submit input types.</li>
 <li>Correct OSK height and support external call by Keyman Engines for iPhone, iPad, Android.</li>
 <li>Handle blur event for duplicated input fields, and remove *onfocus* handler, since required behaviour is performed by *touchstart* handler.</li>
 <li>Recognize *KeymanTouch* “Mobile” and “Tablet” application identifiers and select form factor accordingly.</li>
 <li>Disable base elements on touch devices instead of setting readonly, to prevent base elements from ever receiving focus.</li>
 <li>Correct OSK key highlighting.</li>
 <li>Correct display and hiding of pop-up keys (especially for KeymanTouch).</li>
 <li>Adjust size and position of OSK and language menu for viewport and device-dependent scaling.</li>
<h3>Build 339 Beta</h3>
 <li>Identify Android version from user agent string.</li>
 <li>Manage double-tap zoom on Android native browsers (not completely effective).</li>
 <li>Support direct character insertion and pop-up key cancellation for *KeymanTouch.*.</li>
<h3>Build 338 Beta</h3>
 <li>Use absolute key positions for OSK.</li>
 <li>Manage standard keyboard layers on touch devices.</li>
 <li>Allow external control of OSK height (*KeymanTouch*).</li>
<h3>Build 337 Beta</h3>
 <li>Correct ‘*wait’* window behaviour.</li>
 <li>Prevent crash if keyboard stylesheet unavailable.</li>
<h3>Build 336 Beta</h3>
 <li>Correct API calls for returning keyboard metadata.</li>
 <li>Add new icons to desktop OSK title bar.</li>
 <li>Truncate long language names in toolbar UI.</li>
<h3>Build 335 Beta</h3>
 <li>Correct initialization timing.</li>
 <li>Add call-back to allow UI to manage OSK display events.</li>
 <li>Correct display of desktop ‘toggle’ UI.</li>
<h3>Build 334 Beta</h3>
 <li>Fix multi-touch response when hiding language menu on touch devices.</li>
 <li>Add special key recognition based on names instead of key IDs.</li>
 <li>Use custom alert for displaying build on touch devices.</li>
<h3>Build 333 Beta</h3>
 <li>Add support to allow KeymanTouch to manage iPad as well as iPhone.</li>
 <li>Add support for new special numeric, symbol and currency OSK layers.</li>
 <li>Correct OSK row sizing.</li>
 <li>Add single-key pop-up as temporary  solution for enlarging visible key on phone devices.</li>
 <li>Correct OSK cookie behaviour (for desktop browsers).</li>
 <li>Correct desktop UI initialization timing.</li>
<h3>Build 332 Beta</h3>
 <li>Recognize special numeric, symbol and currency OSK layers.</li>
<h3>Build 331 Beta</h3>
 <li>Rename attribute for embedded font files from ‘source’ to ‘files’.</li>
<h3>Build 330 Beta</h3>
 <li>Rename embedded font location option from ‘fontSource’ to ‘fonts’.</li>
 <li>Correct OSK initialization timing for subscription model.</li>
<h3>Build 329 Beta</h3>
<li>Support downloadable embedded fonts using added style-sheets.</li>
<li>Correct computed styles for non-IE browsers.</li>
<li>Fix non-ASCII key-cap labels for non-English layouts.</li>
<li>Manage scroll behaviour on language menu.</li>
<li>Rename duplicated input element class as ‘keymanweb-input’ (was ‘KMW-input’).</li>
<li>Align duplicated elements with base elements after a rotation or resize.</li>
<li>Set font for base elements according to keyboard and possibly embedded font.</li>
<li>Use root-relative paths for fonts and other resources.</li>
<h3>Build 327 Beta</h3>
 <li>Add API call ‘moveToElement’ to allow UI or page to set focus.</li>
 <li>Correct appearance and behaviour of  toolbar UI.</li>
<h3>Build 325 Beta</h3>
 <li>Correct resource paths.</li>
 <li>Fix alert window closure.</li>
 <li>Recognize own name as ‘keymanios’ and fix resource path for KeymanTouch applications.</li>
 <li>Clarify keyboard load failure message.</li>
 <li>Set US English as default keyboard.</li>
 <li>Correct determination of resource path.</li>
 <li>Delay touch device and UI initialization until page and all code loaded.</li>
 <li>Define special key codes for special layer selection.</li>
 <li>Support repeat on backspace for touch devices.</li>
 <li>Correct popup key font and text size.</li>
 <li>Fix language menu background behaviour.</li>
 <li>Add language menu index strip and highlight language menu key before selecting language.</li>
 <li>Remove explicit styles from code, add to default style sheet.</li>
 <li>Correct OSK size according to device (screen height and width reported differently by different devices).</li>
 <li>Add keycap labels for phonetic keyboards on touch devices.</li>
 <li>Use special font lookup for modifier and other special function keys.</li>
 <li>Revise (and simplify) default touch layout.</li>
 <li>Correct focus management for desktop toolbar UI.</li>
<h3>Build 320 Beta</h3>
 <li>Now takes language properties from keyboard descriptor (stub), not from keyboard, correcting problem with Eurolatin and other keyboards used for many different languages. (KMEW-26).</li>
 <li>Remove (obsolete) shadow and rounding style functions.</li>
 <li>Add custom alert and wait messages.</li>
 <li>Correct size and position of duplicated touch-device input elements.</li>
 <li>Add exposed function for selecting active input element.</li>
 <li>Prevent handling non-mappable input types.</li>
 <li>Add timeout to keyboard load.</li>
 <li>Add special initialization for KeymanTouch.</li>
 <li>Correct handling of saved language cookie.</li>
 <li>Re-align inputs on rotation.</li>
 <li>Correct keyboard registration issues.</li>
 <li>Add or correct calls for external UI management of OSK.</li>
 <li>Use classes to highlight OSK keys when touched.</li>
 <li>Correct positioning of pop-up key arrays.</li>
 <li>Move explicit OSK styles to CSS classes.</li>
<h3>Build 315 Beta - 25/01/2013</h3>
 <li>Add function for removal of external style sheet.</li>
 <li>Add function to automatically focus first mapped element on page.</li>
 <li>Corrected language menu behaviour.</li>
 <li>Moved language indicator to space bar.</li>
 <li>Redesign of language menu on touch screen devices.</li>
<h3>Build 310 Beta</h3>
 <li>Corrected keyboard mapping context error (KMEW-1).</li>
 <li>Fixed touch input element scrollbar positioning error (KMEW-5).</li>
 <li>Add function to manage loading external style sheets.</li>
 <li>(Many other developmental changes.)</li>
<h3>Build 300 Beta - 26/08/2011</h3>
 <li>First version of KeymanWeb with touch screen support.</li>
</ul>

</div>

END;
?>
