<?php
  require_once('includes/template.php');

  head([
    'title' => "Keywords by Type"
  ]);
?>

<h1 class="title" id="reference__keywordsbytype">Keywords by Type</h1>

<h2><a name="id500426" id="id500426"></a>System stores</h2>

<p>Header keywords have been replaced by <a class="link" href="../guide/stores" title="Using Stores">system stores</a>.
While header keywords continue to work, they have been deprecated and should be replaced by the corresponding system store.</p>

<dl>
  <dt><a href="bitmap" title="&amp;Bitmap store and BITMAP statement"><code>&amp;Bitmap</code> store, <code>BITMAP</code> statement, <code>BITMAPS</code> statement</a></dt>
  <dd>An image that appears in the language menu</dd>

  <dt><a href="caps" title="Caps Lock stores and statements"><code>&amp;CapsOnOnly</code> store, <code>CAPS ON ONLY</code> statement</a></dt>
  <dd>Manages CAPS LOCK behaviour - pressing Caps Lock key only switches on Caps Lock state</dd>

  <dt><a href="caps" title="Caps Lock stores and statements"><code>&amp;CapsAlwaysOff</code> store, <code>CAPS ALWAYS OFF</code> statement</a></dt>
  <dd>Manages CAPS LOCK behaviour - pressing Caps Lock key has no effect</dd>
  
  <dt><a href="caps" title="Caps Lock stores and statements"><code>&amp;ShiftFreesCaps</code> store, <code>SHIFT FREES CAPS</code> statement</a></dt>
  <dd>Manages CAPS LOCK behaviour - pressing Shift key turns off Caps Lock</dd>

  <dt><a href="copyright" title="&amp;Copyright store and COPYRIGHT statement"><code>&amp;Copyright</code> store and <code>COPYRIGHT</code> statement</a></dt>
  <dd>A copyright message for the keyboard</dd>

  <dt><a href="ethnologuecode" title="&amp;EthnologueCode store"><code>&amp;EthnologueCode</code> store</a></dt>
  <dd>The ISO 639-3 (formerly SIL Ethnologue) code for the language (Deprecated)</dd>

  <dt><a href="hotkey" title="&amp;Hotkey store and HOTKEY statement"><code>&amp;Hotkey</code> store and <code>HOTKEY</code> statement</a></dt>
  <dd>Sets a default activation hotkey for the keyboard</dd>

  <dt><a href="includecodes" title="&amp;includecodes store"><code>&amp;includecodes</code> store</a></dt>
  <dd>Reference an external file for named character constants</dd>

  <dt><a href="keyboardversion" title="&amp;keyboardversion store"><code>&amp;keyboardversion</code> store</a></dt>
  <dd>Specifies the version of the keyboard</dd>

  <dt><a href="kmw_embedcss" title="&amp;kmw_embedcss store"><code>&amp;kmw_embedcss</code> store</a></dt>
  <dd>Specifies an additional library of CSS code to be embedded in a web or touch keyboard</dd>

  <dt><a href="kmw_embedjs" title="&amp;kmw_embedjs store"><code>&amp;kmw_embedjs</code> store</a></dt>
  <dd>Specifies an additional library of Javascript code to be embedded in a web or touch keyboard</dd>

  <dt><a href="kmw_helpfile" title="&amp;kmw_helpfile store"><code>&amp;kmw_helpfile</code> store</a></dt>
  <dd>Specifies the embedded help html file for web keyboards</dd>

  <dt><a href="kmw_helptext" title="&amp; store"><code>&amp;kmw_helptext</code> store</a></dt>
  <dd>Specifies the embedded help text for web keyboards</dd>

  <dt><a href="kmw_rtl" title="&amp;kmw_rtl store"><code>&amp;kmw_rtl</code> store</a></dt>
  <dd>Specifies the directionality of text controls for web keyboards</dd>

  <dt><a href="language" title="&amp;Language store, LANGUAGE statement"><code>&amp;Language</code> store, <code>LANGUAGE</code> statement</a></dt>
  <dd>Specifies the system language to install or associate with the keyboard (Deprecated)</dd>

  <dt><a href="layout" title="LAYOUT statement"><code>LAYOUT</code> statement</a></dt>
  <dd>Windows system layout for the keyboard (Deprecated)</dd>

  <dt><a href="layoutfile" title="&amp;layoutfile store"><code>&amp;layoutfile</code> store</a></dt>
  <dd>Specifies the JSON format touch keyboard layout filename</dd>

  <dt><a href="message" title="&amp;Message store and MESSAGE statement"><code>&amp;Message</code> store and <code>MESSAGE</code> statement</a></dt>
  <dd>A message that appears when the keyboard is installed</dd>

  <dt><a href="mnemoniclayout" title="&amp;mnemoniclayout store"><code>&amp;mnemoniclayout</code> system store</a></dt>
  <dd>Sets a keyboard to be mnemonic or positional</dd>

  <dt><a href="name" title="&amp;Name store and NAME statement"><code>&amp;Name</code> store and <code>NAME</code> statement</a></dt>
  <dd>The name of the keyboard</dd>

  <dt><a href="oldcharposmatching" title="&amp;OldCharPosMatching store"><code>&amp;OldCharPosMatching</code> store</a></dt>
  <dd>Turns on the Keyman 5.0 and earlier character position matching (not implemented)</dd>

  <dt><a href="targets" title="&amp;targets store"><code>&amp;targets</code> store</a></dt>
  <dd>Specifies the platforms which the compiler will generate outputs for</dd>

  <dt><a href="version" title="&amp;Version store and VERSION statement"><code>&amp;Version</code> store and <code>VERSION</code> statement</a></dt>
  <dd>The Keyman keyboard version</dd>

  <dt><a href="visualkeyboard" title="&amp; store"><code>&amp;VisualKeyboard</code> store</a></dt>
  <dd>Specifies the .kvk visual keyboard file associated with the keyboard</dd>

  <dt><a href="windowslanguages" title="&amp;windowslanguages store"><code>&amp;windowslanguages</code> store</a></dt>
  <dd>Specifies a set of Windows language codes to which the keyboard can be associated (Deprecated)</dd>
</dl>

<h2>Variable system stores</h2>

<dl>
  <dt><a href="baselayout" title="&amp;baselayout store"><code>&amp;baselayout</code> store</a></dt>
  <dd>Determines the current system hardware keyboard layout</dd>

  <dt><a href="layer" title="&amp;layer store"><code>&amp;layer</code> store</a></dt>
  <dd>Tests or sets the current touch keyboard layer visible on the on screen keyboard</dd>
  
  <dt><a href="platform" title="&amp;platform store"><code>&amp;platform</code> store</a></dt>
  <dd>Determines the current platform keyboard is operating on</dd>
</dl>

<h2><a name="id500643" id="id500643"></a>Rule keywords</h2>

<dl>
  <dt><a href="any" title="any() statement"><code>any()</code> statement</a></dt>
  <dd>Matches on an array of characters</dd>

  <dt><a href="baselayout" title="baselayout() statement"><code>baselayout()</code> statement</a></dt>
  <dd>Determines the current system hardware keyboard layout</dd>

  <dt><a href="beep" title="beep statement"><code>beep</code> statement</a></dt>
  <dd>Generates a beep on the speaker (or a flash on web devices)</dd>
  
  <dt><a href="call" title="call() statement"><code>call()</code> statement</a></dt>
  <dd>Calls an Input Method Extension</dd>

  <dt><a href="context" title="context statement"><code>context</code> statement</a></dt>
  <dd>Outputs the context part of a rule</dd>

  <dt><a href="deadkey" title="deadkey(), dk() statement"><code>deadkey()</code>, <code>dk()</code> statement</a></dt>
  <dd>Matches and generates deadkeys</dd>

  <dt><a href="if" title="if() statement"><code>if()</code> statement</a></dt>
  <dd>Tests a store or system state for a value</dd>

  <dt><a href="index" title="index() statement"><code>index()</code> statement</a></dt>
  <dd>Outputs from an array of characters</dd>

  <dt><a href="layer" title="layer() statement"><code>layer()</code> statement</a></dt>
  <dd>Sets the current touch keyboard layer visible on the on screen keyboard</dd>
  
  <dt><a href="notany" title="notany() statement"><code>notany()</code> statement</a></dt>
  <dd>Matches anything not in a particular array of characters</dd>

  <dt><a href="nul" title="nul statement"><code>nul</code> statement</a></dt>
  <dd>Forces no output on a rule, or enforces empty context</dd>

  <dt><a href="outs" title="outs() statement"><code>outs()</code> statement</a></dt>
  <dd>Outputs an array of characters</dd>

  <dt><a href="platform" title="platform() statement"><code>platform()</code> statement</a></dt>
  <dd>Determines the current platform keyboard is operating on</dd>
  
  <dt><a href="return" title="return statement"><code>return</code> statement</a></dt>
  <dd>Stops processing of the current keystroke</dd>

  <dt><a href="reset" title="reset() statement"><code>reset()</code> statement</a></dt>
  <dd>Resets a store to its initial value</dd>

  <dt><a href="save" title="save() statement"><code>save()</code> statement</a></dt>
  <dd>Persists a store value for next edit session</dd>

  <dt><a href="set" title="set() statement"><code>set()</code> statement</a></dt>
  <dd>Sets a store or system state to a specific value</dd>

  <dt><a href="use" title="use() statement"><code>use()</code> statement</a></dt>
  <dd>Starts processing in another group</dd>
</dl>
 
<h2><a name="id500821" id="id500821"></a>Structural keywords</h2>

<dl>
  <dt><a href="begin" title="begin statement"><code>begin</code> statement</a></dt>
  <dd>Defines the starting group for the keyboard layout</dd>

  <dt><a href="group" title="group() statement"><code>group()</code> statement</a></dt>
  <dd>Starts a new group of rules</dd>

  <dt><a href="match" title="match rule"><code>match</code> rule</a></dt>
  <dd>A system rule that is fired after another rule is matched in the same group</dd>

  <dt><a href="nomatch" title="nomatch rule"><code>nomatch</code> rule</a></dt>
  <dd>A system rule that is fired when no rule is matched in a group</dd>

  <dt><a href="store" title="store() statement"><code>store()</code> statement</a></dt>
  <dd>Defines an array of characters</dd>
</dl>
