<?php
  require_once('includes/template.php');

  head([
    'title' => "Using KeymanWeb: An Example"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Using KeymanWeb: An Example</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_keyboard_properties.php">Prev</a> </td><th width="60%" align="center">KeymanWeb 2.0</th><td width="20%" align="right"> <a accesskey="n" href="filetype.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_kmw20_example">Using KeymanWeb: An Example</h3></div></div></div><p>
    To use <span class="emphasis"><em>KeymanWeb</em></span> on a web page, four steps are required:
  </p><div class="itemizedlist"><ul type="disc"><li>
      Designate a DIV element as the <span class="emphasis"><em>KeymanWeb</em></span> controller by giving it the 
      id <span class="emphasis"><em>KeymanWebControl</em></span>.  This step is only necessary 
      for User Interfaces which are not attached to the currently active
      input element, such as the 'toolbar' or 'button' interfaces.
    </li><li>
      Insert the <span class="emphasis"><em>KeymanWeb</em></span> engine script, loading it either from the 
      Tavultesoft server or a local copy according to your license.
    </li><li>
      Initialize the <span class="emphasis"><em>KeymanWeb</em></span> object.
    </li><li>
      Add a keyboard script reference for each keyboard that is to be 
      available for users.  If the keyboard (javascript) source file name 
      is specified with no path, the keyboard will be loaded from the 
      default Tavultesoft keyboard repository, otherwise it will be loaded 
      from a path relative to the current document or local server root.
    </li></ul></div><p>
    These steps are illustrated in the following code for a sample HTML page using 
    <span class="emphasis"><em>KeymanWeb</em></span>:
  </p><pre class="programlisting">
&lt;body&gt;

  &lt;h2&gt;KeymanWeb - Example Using Toggle User Interface&lt;/h2&gt;

  &lt;div id='sampleFrame'&gt;
 
    &lt;!-- The following 'div' is a placeholder for the KeymanWeb object --&gt;
 
    &lt;div id='KeymanWebControl'&gt;&lt;/div&gt;
 
    &lt;!-- input fields --&gt;
    &lt;div id='inputArea'&gt;
      &lt;h3&gt;Type in your language in this text area:&lt;/h3&gt;      
      &lt;textarea rows='6' class='multilingual'&gt;&lt;/textarea&gt;
 
      &lt;h3&gt;or in this input field:&lt;/h3&gt;
      &lt;input class='multilingual' value=' '/&gt;
    &lt;/div&gt;
 
  &lt;/div&gt;
 
&lt;!-- The following scripts should be inserted at the end of the page
     after visible elements but before the closing 'body' tag. --&gt;
 
&lt;!-- Insert the (local or remotely downloaded) KeymanWeb object. --&gt;
  &lt;script type="text/javascript" src="kmw-release.js"&gt;&lt;/script&gt;
 
&lt;!-- If a custom user interface is used, its script should be inserted here. --&gt;
 
&lt;!-- 
     KeymanWeb initialization script, to initialize KeymanWeb 
     and specify parameters for its use:
      'key':  subscription license key (required parameter).
      'ui':   the type of user interface to be installed, if downloaded automatically 
              from the KeymanWeb server. If omitted, 'ui' will default to 'float' and 
              install the 'Floating User Interface'. 
      'root': URL from which to download the ui and keyboard objects. 
              Set to an empty string to load them from the same folder as the page source, 
              or omit to load them directly from the KeymanWeb server.  
--&gt;
  
  &lt;script&gt; 
    tavultesoft.keymanweb.init({
      key: '1234567890',
      ui:'toggle',
      root:''
    });
  &lt;/script&gt;
&lt;!-- ...end of initialization script --&gt;
 
&lt;!-- 
     Keyboard 'stubs' specifying the name and language code 
     for each keyboard that is to be available for users.  
     The actual keyboard object will be downloaded asynchronously when first selected for use.
 
     Any number of keyboards may be specified.  If the same keyboard is used for several 
     languages, it will only be loaded once, but a 'stub' must be included for each supported
     language. If two (or more) keyboards are available for a given language, both can be made
     available by including the appropriate stubs.
 
     For a keyboard to be available and correctly listed with all (standard) user interfaces,
     each 'stub' should specify the keyboard name, its internal name, the language, the ISO
     language code, the region, the (two letter) region code, and the keyboard's file name. 
    (Not all arguments are used by all user interfaces.)
--&gt;
 
  &lt;script type="text/javascript"&gt;
    KeymanWeb.KRS({KN:'European Latin',KI:'Keyboard_european',KL:'French',KLC:'fra',
      KR:'Europe',KRC:'eu',KF:'european.js'});
    KeymanWeb.KRS({KN:'Korean RR',KI:'Keyboard_korean_rr',KL:'Korean',KLC:'kor',
      KR:'Asia',KRC:'as',KF:'korean_rr.js'});
    KeymanWeb.KRS({KN:'Bangla - Joy-Unicode',KI:'Keyboard_joy_unicode',KL:'Bangla',KLC:'ban',
      KR:'Asia',KRC:'as',KF:'bangla_joy_kab.js'});    
    KeymanWeb.KRS({KN:'Lao 2008 Basic',KI:'Keyboard_lao_2008_basic',KL:'Lao',KLC:'lao',
      KR:'Asia',KRC:'as',KF:'lao_2008_basic.js'});     
    KeymanWeb.KRS({KN:'European Latin',KI:'Keyboard_european',KL:'German',KLC:'deu',
      KR:'Europe',KRC:'eu',KF:'european.js'});     
    KeymanWeb.KRS({KN:'French',KI:'Keyboard_french',KL:'French',KLC:'fra',
      KR:'Europe',KRC:'eu',KF:'french.js'});     
  &lt;/script&gt; 
    
&lt;/body&gt; 

  
  </pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_keyboard_properties.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="filetype.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">KeymanWeb Keyboard Properties </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> File Types</td></tr></table></div>
