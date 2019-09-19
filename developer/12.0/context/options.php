<?php
  require_once('includes/template.php');

  head([
    'title' => "Options Dialog"
  ]);
?>

<h1>Options Dialog</h1>

<h2>General tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/120/ui/frmOptions_General.png') ?>" alt="Options dialog - General tab" /></p>

<p>The following options are configurable in TIKE in the <span class="guilabel">General</span> tab:</p>

<dl>
  <dt>Show splash screen</dt>
  <dd>If checked, displays a splash screen when Keyman Developer is started.</dd>

  <dt>Allow multiple instances of TIKE</dt>
  <dd>Allow Keyman Developer to be started multiple times, instead of loading other files in the current instance when selected from Explorer.</dd>

  <dt>Open keyboard files in source view.</dt>
  <dd>Instead of opening a keyboard file in the Details tab, open directly into the Layout tab, Source pane.</dd>
  
  <dt>Save visual keyboard source files (.kvks) as XML</dt>
  <dd>Keyman Developer will default to saving .kvks files as XML when editing, which makes them easier to share in version control systems such as Git.
  The compiled .kvk files will be binary and will work with earlier versions of Keyman Desktop. However, if you are sharing keyboard source files with 
  developers using earlier versions of Keyman Developer, you should clear this checkbox so they can load the files.</dd>
    
  <dt>External Editor</dt>
  <dd>You can open any Keyman source file shown in the project in an external text editor by right-clicking on the file and
  selecting "Open in External Editor". The files available for editing externally are .kmn, .kps, and .kvks. This field configures which editor you wish to
  use to edit the files. Note: if you need to pass command line parameters to the editor, you will need to wrap the command in a
  batch file and reference the batch file here.</dd>
  
  <dt>Proxy settings</dt>
  <dd>Configure the HTTP proxy settings for online functionality within Keyman Developer, such as uploading files to Tavultesoft.</dd>
  
  <dt>SMTP settings</dt>
  <dd>Configure your SMTP server settings for email functionality within Keyman Developer, such as emailing debug URLs for the touch layout debugger.</dd>
</dl>

<h2>Editor tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/120/ui/frmOptions_Editor.png') ?>" alt="Options dialog - Editor tab" /></p>

<dl>
  <dt>Use tab character</dt>
  <dd>Sets whether to use the Tab character or spaces for indents.</dd>

  <dt>Indent size</dt>
  <dd>The indent size, measured in number of spaces.</dd>

  <dt>Link quoted font size to primary font size</dt>
  <dd>If checked, the quoted font size will be the same as the default font size.</dd>

  <dt>Default font</dt>
  <dd>Sets the font for ordinary text in the editor.</dd>

  <dt>Quoted font</dt>
  <dd>Sets the font for displaying comments text and strings in Keyman source files in single or double quotes.</dd>
  
  <dt>Editor theme</dt>
  <dd>Sets the display theme and syntax highlighting options for the editor. A <a href='../reference/editor-themes'>custom theme</a> can be defined in a JSON file.</dd>
</dl>

<h2>Debugger tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/120/ui/frmOptions_Debugger.png') ?>" alt="Options dialog - Debugger tab" /></p>

<dl>
  <dt>Enable test window (from version 5.0)</dt>
  <dd>Enables the Keyman 5-style Test window instead of the debugger.</dd>

  <dt>Breakpoints fire also when exiting line</dt>
  <dd>Breakpoints will fire when a rule has finished being processed also.</dd>

  <dt>Turn on single step after breakpoint</dt>
  <dd>Activates single-step mode after a breakpoint fires.</dd>

  <dt>Show matched character offsets in stores</dt>
  <dd>Displays numeric indices of characters in stores</dd>

  <dt>Automatically recompile if no debug information available</dt>
  <dd>When the debugger starts, rebuild a keyboard without prompting if the keyboard has no debug symbols included.</dd>
</dl>

<h2>Character Map tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/120/ui/frmOptions_CharacterMap.png') ?>" alt="Options dialog - Character Map tab" /></p>

<dl>
  <dt>Find character under cursor automatically</dt>
  <dd>The character beneath the cursor in the edit window will be highlighted in the Character Map. This will intelligently parse
    the character data under the cursor so that a character code (e.g. U+1234) will be highlighted correctly.</dd>

  <dt>Disable database lookups</dt>
  <dd>Disables looking characters up in the database.</dd>

  <dt>Update database</dt>
  <dd>
      Rebuilds the Unicode character database from source unicodedata.txt and blocks.txt. These files can be downloaded from the
      Unicode website at <a class="ulink" href="http://www.unicode.org/ucd/" target="_blank">http://www.unicode.org/ucd/</a>. This
      lets you update the character map with a newer version of Unicode. Keyman Developer 10.0 was released with Unicode version 10.0
      data. <!-- TODO:11.0 - update to released Unicode data version -->
  </dd>
</dl>