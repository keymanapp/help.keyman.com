<?php
  require_once('includes/template.php');

  head([
    'title' => "Keyboard Editor",
    'css' => ['template.css','kmguides.css']
  ]);
?>

<h1>Keyboard Editor</h1>

<p>The keyboard editor is the heart of Keyman Developer. This window allows you to edit all aspects of a keyboard layout, from the visual
layout of the keyboard, to logic rules, to touch interactions, and more.</p>

<p>The editor is divided into multiple tabs. Initially, only three tabs will be visible: Details, Layout, and Build. A keyboard
can have multiple source files, which are all managed within this one editor.</p>

<p>The following image shows the first tab of the editor, the Details tab, for a brand new keyboard, with those three initial tabs.</p>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmKeymanWizard_New.png') ?>" alt="Keyboard Editor - New file, Details tab" /></p>

<aside>
  <h2>Note</h2>
  <p>Users of earlier versions of Keyman Developer may initially have trouble finding tabs such as the Icon tab or the On-Screen tab, as they are not
  initially visible. The Features grid on the Details tab allows you to add these extra features into the keyboard.</p>
</aside>

<h2>Keyboard component files</h2>

<p>A keyboard contains multiple source files. The following table lists the file types and which tabs are used to edit them. The filenames shown are 
defaults and can be modified, by editing the corresponding line in the source file (and renaming the file). However, where possible the default
names should be used.</p>

<table class='display'>
  <thead>
    <tr>
      <th>File type</th>
      <th>Tabs</th>
      <th>Feature</th>
      <th>Store name</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class='language-none'><code><var>file</var>.kmn</code></td>
      <td>Details, Layout</td>
      <td></td>
      <td></td>
      <td>The primary keyboard source file. Required.</td>
    </tr>
    <tr>
      <td class='language-none'><code><var>file</var>.kvks</code></td>
      <td>On-Screen</td>
      <td>Desktop On Screen Keyboard</td>
      <td><a href='/developer/language/reference/visualkeyboard'><code>&amp;visualkeyboard</code></a></td>
      <td>The visual presentation of the keyboard for desktop computers.</td>
    </tr>
    <tr>
      <td class='language-none'><code><var>file</var>.ico</code>, <code><var>file</var>.bmp</code></td>
      <td>Icon</td>
      <td>Icon</td>
      <td><a href='/developer/language/reference/bitmap'><code>&amp;bitmap</code></a></td>
      <td>An icon that represents the keyboard in the user interface on desktop computers.</td>
    </tr>
    <tr>
      <td class='language-none'><code><var>file</var>.keyman-touch-layout</code></td>
      <td>Touch Layout</td>
      <td>Touch-Optimised Keyboard</td>
      <td><a href='/developer/language/reference/layoutfile'><code>&amp;layoutfile</code></a></td>
      <td>The touch layout visual description file</td>
    </tr>
    <tr>
      <td class='language-none'><code><var>file</var>-code.js</code></td>
      <td>Embedded JS</td>
      <td>Embedded Javascript</td>
      <td><a href='/developer/language/reference/kmw_embedjs'><code>&amp;kmw_embedjs</code></a></td>
      <td>Additional Javascript code for <a href='../guides/develop/imx'>IMX</a> functionality</td>
    </tr>
    <tr>
      <td class='language-none'><code><var>file</var>.css</code></td>
      <td>Embedded CSS</td>
      <td>Embedded CSS</td>
      <td><a href='/developer/language/reference/kmw_embedcss'><code>&amp;kmw_embedcss</code></a></td>
      <td>Additional CSS stylesheet for custom touch and web layout styling</td>
    </tr>
    <tr>
      <td class='language-none'><code><var>file</var>-help.htm</code></td>
      <td>Web Help</td>
      <td>Web Help</td>
      <td><a href='/developer/language/reference/kmw_helpfile'><code>&amp;kmw_helpfile</code></a></td>
      <td>HTML file that replaces the On Screen Keyboard on desktop web layouts</td>
    </tr>
    <tr>
      <td class='language-none'><code><var>file</var>-codes.txt</code></td>
      <td>Include Codes</td>
      <td>Include Codes</td>
      <td><a href='/developer/language/reference/includecodes'><code>&amp;includecodes</code></a></td>
      <td>Code dictionary for use with <a href='/developer/language/guide/constants'>named constants</a></td>
    </tr>
  </tbody>
</table>

<p>Three tabs include both visual and code editors: the Layout, Touch Layout and JSON Metadata tabs. Changes to one view will be
immediately reflected in the other view. The code in the Layout tab is important because that reflects both the Details and the Layout
tab.</p>

<h2 id="details">Details tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmKeymanWizard_Details.png') ?>" alt="Keyboard Editor - Details tab" /></p>

<p>The Details tab grows as you add more options to a keyboard. The fields here are:</p>

<dl id="details-fields">
  <dt>Name</dt>
  <dd>The name of the keyboard, corresponding to the <a href='/developer/language/reference/name'><code>&amp;name</code> store</a>.</dd>
  
  <dt>Targets</dt>
  <dd>The intended target devices and operating systems, corresponding to the <a href='/developer/language/reference/targets'><code>&amp;targets</code> store</a>.
  Changing the targets will hide or show parts of the Details and Compile tabs. If no targets are selected, Keyman Developer will treat the keyboard as a
  Windows-only keyboard, for backward compatibility reasons.</dd>
  
  <dt>Copyright</dt>
  <dd>Enter the details of the copyright owner for the keyboard. <a href='/developer/language/reference/copyright'><code>&amp;copyright</code> store</a>.</dd>

  <dt>Message</dt>
  <dd>Enter a message that will be shown at install time for the keyboard (on Windows, macOS). <a href='/developer/language/reference/message'><code>&amp;message</code> store</a>.</dd>

  <dt>Keyboard is right-to-left</dt>
  <dd>Check this box to indicate that the keyboard is a right-to-left keyboard, for web and touch layouts. <a href='/developer/language/reference/kmw_rtl'><code>&amp;kmw_rtl</code> store</a>.</dd>

  <dt>Web Help Text</dt>
  <dd>A single line of text, with basic HTML allowed, shown at the bottom of the desktop web On Screen Keyboard. <a href='/developer/language/reference/kmw_helptext'><code>&amp;kmw_helptext</code> store</a>.</dd>

  <dt>Keyboard version</dt>
  <dd>The version of the keyboard. Read the reference documentation for <a href='/developer/language/reference/keyboardversion'><code>&amp;keyboardversion</code> store</a> to understand the legal values for this field. This
  is not the same as the <a href='/developer/language/reference/version'><code>&amp;version</code> store</a>, which controls the Keyman (and Keyman Developer) version for which a keyboard is designed.</dd>
  
  <dt>Comments</dt>
  <dd>This field corresponds to the first lines of comments in the keyboard source, and is visible only to the keyboard designer.</dd>
  
  <dt>Features</dt>
  <dd>The Features grid controls which additional file components are included in the keyboard, as listed in the Component Files section above. Each of the features relates to a system store. Adding a feature will
  add an extra tab to the editor, and add the corresponding store to the keyboard source. Removing a feature will not delete the component file, but will just remove the store from the keyboard source.</dd>
</dl>

<h2>Layout tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmKeymanWizard_Layout_Design.png') ?>" alt="Keyboard Editor - Layout tab, Design view" /></p>

<p>The Layout tab gives you a simple interface to quickly create a keyboard using a visual representation of a desktop/laptop computer keyboard. You
can drag and drop characters from the character map to create keyboard layouts. You cannot access most of Keyman's more powerful
features from the Layout Design view, but it will be useful to get you started on your design.</p>

<p>Each key can have zero or more characters assigned to it. Each key can be assigned a different set of characters for each shift
state. You can change the shift state by clicking on the Shift, Ctrl, and Alt keys.</p>

<p>There are two ways to assign characters to the keys:</p>

<ul type="disc">
  <li>Click on a key, and then type the character's code into the Unicode Character Value(s) field, or the type/paste the character 
    itself into the Output character(s) field.</li>

  <li>Select the character from the Character Map and drag and drop it onto the appropriate key. This will set the key to output
    that character.</li>
</ul>

<aside>
  <h2>Hint</h2>
  <p>To add the character to a key with existing characters, hold <kbd>Ctrl</kbd> while dropping it onto the key.</p>
</aside>

<p>Note that any key that does not have a character assigned to it will output what the selected Windows layout specifies.</p>

<dl>
  <dt>Distinguish between left and right Ctrl/Alt</dt>
  <dd>A Keyman keyboard can treat left and right Ctrl and Alt identically, or it can distinguish between them. The Design view allows one or the other mode (in Code view, you can
  use both interchangeably).</dd>
  
  <dt>Display 102nd Key (as on European keyboards)</dt>
  <dd>European keyboards have one extra key that is not on US keyboards. This key is positioned to the right of the left shift key. Some other keyboards have additional keys;
  these are not shown on the layout designer.</dd>
</dl>

<p>You can press and release <kbd>Ctrl</kbd> to select another key on the keyboard using your keyboard.</p>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmKeymanWizard_Layout_Code.png') ?>" alt="Keyboard Editor - Layout tab, Code view" /></p>

<p>The Code view shows the source code of the keyboard file. This is where all the information in the Details and Layout tab is stored, and additional logic and 
complex keyboard layouts will be edited entirely in the Code view.</p>

<p>See the <a href='editor'>Editor topic</a> for more information on how to use the editor shown within this view.</p>

<h2>On-Screen tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmKeymanWizard_OnScreenKeyboard.png') ?>" alt="Keyboard Editor - On-Screen tab" /></p>

<p>This tab allows you to edit the visual representation of your keyboard layout. The content on this tab is stored in the .kvks file associated with your keyboard.
The visual representation is used only in desktop and desktop web; however if no touch layout is defined, this layout will be synthesized into a touch layout automatically.</p>

<p>An On-Screen keyboard is optional but in most keyboards is recommended. The On-Screen keyboard may not always match the actual layout identically, because you may choose to
hide some of the details of encoding from the interface presented to the user. The user can also choose to print the layout.</p>

<p>This keyboard layout can also be printed or included in HTML or other documentation. The editor allows you to export the file to HTML, PNG or BMP formats.</p>

<dl>
  <dt>Fill from layout</dt>
  <dd>Compiles the keyboard file, and processes each possible keystroke in the keyboard file to automatically generate an On-Screen Keyboard that matches the layout. This can be
  used to effectively pre-populate the On-Screen Keyboard and reduces the complexity of designing it from scratch.</dd>
  
  <dt>Import</dt>
  <dd>Imports an On Screen Keyboard from an XML file.</dd>

  <dt>Export</dt>
  <dd>Exports the On Screen Keyboard to an XML file.</dd>

  <dt>Text</dt>
  <dd>The key cap for the selected key</dd>
  
  <dt>Bitmap</dt>
  <dd>A bitmap that is displayed on the selected key (not recommended, as it will not scale cleanly)</dd>
  
  <dt>Display underlying layout characters</dt>
  <dd>If checked, then the base or underlying layout will show in small letters at the top left of each key cap. This can be helpful to provide users with a guide as to the 
  position of each key on the keyboard, especially for non-Latin scripts.</dd>
  
  <dt>Distinguish between left and right Ctrl/Alt</dt>
  <dd>If checked, treats the left and right Ctrl/Alt as separate layers</dd>
  
  <dt>Display 102nd Key (as on European keyboards)</dt>
  <dd>European keyboards have one extra key that is not on US keyboards. This key is positioned to the right of the left shift key. Some other keyboards have additional keys;
  these are not shown on the layout designer.</dd>
  
  <dt>Auto-fill underlying layout</dt>
  <dd>When the Fill from layout button is clicked, if this option is checked, then keys without corresponding rules in the Layout will be filled with the base layout character.</dd>
</dl>

<h2>Touch Layout tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmKeymanWizard_TouchLayout_Design.png') ?>" alt="Keyboard Editor - Touch Layout tab, Design view" /></p>

<p>The Touch Layout tab is used to create the visible representation of the keyboard layout for touch devices. It works similarly to the On Screen Keyboard Editor conceptually, but 
has a number of additional features specific to touch. Keys on the touch layout trigger rules within the normal Keyman keyboard; if no rule is defined for a given key, it will be
given output if it has a standard code beginning with <code>K_</code>, or if it is a Unicode value code, starting with <code>U_</code>.</p>

<p>In Design view, the editor can show a number of different device types, including iPhone and iPad, in different orientations, to allow you to visualize the keyboard layout before
you load it onto a device. The following image shows all aspects of the touch design view.</p>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmKeymanWizard_TouchLayout_Design_2.png') ?>" alt="Keyboard Editor - Touch Layout tab, Design view closeup" /></p>

<h3>Top bar controls</h3>

<dl>
  <dt>Template...<dt>
  <dd>The Template button allows you to choose a standard layout of keys from a predefined set. These layouts move the standard set of keys around and between layers to reduce the number
  of keys on each layer, optimising for mobile phone or other sizes. When Keyman Developer switches to a new template, it will transfer key definitions to the new layout as far as possible,
  but if keys on the current layout are not in the new template, their definitions will be lost. Therefore, selecting an appropriate template early in the development process is suggested.</dd>
  
  <dt>Import from On Screen</dt>
  <dd>If you have an existing On Screen Keyboard for your keyboard layout, importing the design from the On Screen Keyboard can reduce the development time considerably. Once you have imported,
  you will probably want to select a new template to transform the desktop-oriented design to a tablet or phone design automatically.</dd>
  
  <dt>Platform area</dt>
  <dd>The platform controls allow you to select and add or remove platform support for a given layout. If a platform is not defined, then Keyman Engine will transform the layout from another
  platform automatically, so you don't necessarily need to define layouts for each platform.</dd>
  
  <dt>Layer area</dt>
  <dd>Each layout for each platform is made up of one or more layers of keys. Each layer can have a default shift state associated with it, which allows keys to trigger specific rules in the 
  Layout code.</dd>
  
  <dt>Presentation</dt>
  <dd>This selector allows you to choose the simulated view of the keyboard, either landscape or portrait, for a number of devices. The presented keyboard may not be 100% identical to the final
  layout as seen on the device, but this allows you to get a feel for the design before testing.</dd>
</dl>

<h3>Keyboard area</h3>
<p>Under the top bar is the keyboard design area. This shows a device with a presentation of the key layout. Within the key layout, you can click on any key to edit it. There are a number of
controls:</p>

<dl>
  <dt>Red circle with an X</dt>
  <dd>This button to the top right of the key will delete the key from the row; if it is the last key on the row, the entire row will be deleted.</dd>
  
  <dt>Green arrow with a +</dt>
  <dd>These buttons will insert a key to the left or right, or a single key on a new row above or below the selected key. Adding extra keys scales the entire keyboard.</dd>
  
  <dt>Dragging the right hand side of the key</dt>
  <dd>Dragging the right hand side of the key will resize the key; resizing the key will rescale the entire keyboard so it still fits within the device screen.</dd>
  
  <dt>Key Cap</dt>
  <dd>You can drop characters from Character Map directly into the key cap edit box, or type directly.</dd>

  <dt>Key Code</dt>
  <dd>Clicking on a key code on a key cap will focus the key code edit box instead of the key cap edit box.</dd>
  
  <dt>Drag and drop</dt>
  <dd>Keys can be moved around the keyboard by dragging them with the mouse; a ghost landing box will appear beneath the key when it can be dropped. If the key is dropped in an invalid area,
  no action will occur.</dd>
  
  <dt>Double-click</dt>
  <dd>Double clicking on a key with a "Next Layer" defined will switch to that layer.</dd>
  
  <dt>Top right slash</dt>
  <dd>A slash in the top right of a key indicates the presence of a long press menu for that key.</dd>

  <dt>Metrics</dt>
  <dd>The metrics displayed on the right hand side of the keyboard show the virtual width of each row of the keyboard, and the number of keys. For small devices, 10 keys is the maximum recommended
  number in a row; each key has a standard width of 100. While each row can be a different length, the last key in the row will be stretched to balance the final design; 'spacer' keys can be used
  to leave a visual gap on the right hand side of the keyboard. You should aim to make each row the same total width for consistent results.</dd>
</dl>

<h3>Middle bar controls</h3>

<p>Below the keyboard area is another control bar for editing details of the selected key.</p>

<dl>
  <dt>Key Type</dt>
  <dd><p>The general appearance of each key is determined by the key type, which is selected (in Keyman Developer 10) from a drop-down
  list:</p>

    <table class='display'>
      <thead>
        <tr>
          <th>Key Type</th>
          <th>Description</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Default (normal) key</td>
          <td>A standard letter or character key on the keyboard</td>
        </tr>

        <tr>
          <td>Special (shift) key</td>
          <td>The grey control type keys, layer shifts, Enter, Backspace, etc.</td>
        </tr>

        <tr>
          <td>Active special key</td>
          <td>A variation on the Special keys, which shows a highlight, typically used 
          to indicate that a shift key for example is down.</td>
        </tr>

        <tr>
          <td>Dead-key</td>
          <td>While this key type has no difference in function to default keys, it will have a 
          different style to indicate that it is different; the logic in the keyboard source 
          may well be a deadkey, for example.</td>
        </tr>

        <tr>
          <td>Blank key</td>
          <td>This type of key cannot be selected in use and shows as a blank key.</td>
        </tr>

        <tr>
          <td>Spacer</td>
          <td>Leaves a space in the keyboard at the point it is inserted, in the background
          colour of the keyboard area.</td>
        </tr>
      </tbody>
    </table>
  </dd>

  <dt>Shift</dt>
  <dd>Determines the shift state that Keyman Engine will receive from the key stroke, such as Shift or Ctrl.
  This makes it simpler to design a single keyboard that works across both desktop and mobile interfaces.</dd>
  
  <dt>Code</dt>
  <dd><p>Each key must be given an identifying key code which is unique to the key layer. Key codes by and large correspond to the virtual
  key codes used when creating a keyboard program for a desktop keyboard, and should start with <code>K_</code>, for keys mapped to standard Keyman
  virtual key names, e.g. <code>K_HYPHEN</code>, and <code>T_</code> or <code>U_</code> for user-defined names, e.g. <code>T_ZZZ</code>. If keyboard rules exist matching the key code in
  context, then the output from the key will be determined by the processing of those rules. It is usually best to include explicit rules
  to manage the output from each key, but if no rules matching the key code are included in the keyboard program, and the key code
  matches the pattern <code>U_<var>xxxx</var></code> (where <code><var>xxxx</var></code> is a 4-digit uppercase hex string), then the Unicode character <code>U+<var>xxxx</var></code> will be output. The key
  code is always required, and a default code will usually be generated automatically by Keyman Developer 10.</p>

    <ul>
      <li><code><var>K_xxxx</var></code> is used for a standard Keyman Desktop key name, e.g. <code>K_W</code>, <code>K_ENTER</code>. You cannot make up your own <code>K_<var>xxxx</var></code> names. Many of
        the <code>K_</code> ids have overloaded output behaviour, for instance, if no rule is matched for <code>K_W</code>, Keyman will output 'w' when it
        is touched. The standard key names are listed in <a class="link" href="/developer/language/guide/virtual-keys" title=
        "Virtual Keys and Virtual Character Keys">Virtual Keys and Virtual Character Keys</a>. Typically, you would use only the
        "common" virtual key codes.</li>

      <li><code>T_<var>xxxx</var></code> is used for any user defined names, e.g. <code>T_SCHWA</code>. If you wanted to use it, <code>T_ENTER</code> would also be valid. If no rule
        matches it, the key will have no output behaviour.</li>

      <li><code>U_<var>####</var></code> is used as a shortcut for a key that will output that single Unicode value, if no rule matches it. This is similar to
        the overloaded behaviour for <code>K_</code> ids. Thus <code><var>####</var></code> must be a valid hexadecimal value. E.g. <code>U_0259</code> would generate a schwa if no rule
        matches. It is still valid to have a rule such as <code>+ [U_0259] > ...</code></li>
    </ul>
  </dd>
  
  <dt>Padding Left</dt>
  <dd>Padding to the left of each key can be adjusted, and specified as a percentage of the default key width (100). If not specified, a
  standard padding of 5% of the key width is used between adjacent keys.</dd>

  <dt>Width</dt>
  <dd>The layout is scaled to fit the widest row of keys in the device width, assuming a default key width of 100 units. Keys that are to
  be wider or narrower than the default width should have width specified as a percentage of the default width. For any key row that is
  narrower than the widest row, the width of the last key in the row will be automatically increased to align the right hand side of the
  key with the key with the right edge of the keyboard. However, where this is not wanted, a "spacer" key can be inserted to
  leave a visible space instead. As shown in the above layouts, where the spacer key appears on the designer screen as a narrow key, but
  will not be visible in actual use.</dd>

  <dt>Next Layer</dt>
  <dd>The virtual keys <code>K_SHIFT</code>, <code>K_CONTROL</code>, <code>K_MENU</code>, etc. are normally used to switch to another key layer, which is implied by the key
  code. The left and right variants of those key codes, and also additional layer-switching keys mentioned above (<code>K_NUMERALS</code>, <code>K_SYMBOLS</code>,
  <code>K_CURRENCIES</code>, <code>K_ALTGR</code>) can also be used to automatically switch to the appropriate key layer instead of outputting a character.
  However, it is sometimes useful for a key to output a character first, then switch to a new layer, for example, switching back to the
  default keyboard layer after a punctuation key on a secondary layer had been used. Specifying the <code>nextlayer</code> for a key allows a
  different key layer to be selected automatically following the output of the key. Of course, that can be manually overridden by
  switching to a different layer if preferred.</dd>

  <dt>Add/Remove long press popup</dt>
  <dd>Adds or removes the long press menu from the selected key.</dd>
</dl>

<h3>Long press area</h3>

<p>The keys in the long press area cannot be resized but the controls otherwise work the same as in the main keyboard area. The keys cannot be dragged between the main keyboard area and 
the long press area. The bar below the long press area contains the corresponding controls for the long press keys.</p>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmKeymanWizard_TouchLayout_Code.png') ?>" alt="Keyboard Editor - Touch Layout tab, Code view" /></p>

<p>The Code view allows you to edit the JSON source of the touch layout file. This makes certain operations simpler, such as batched rearranging of keys, or using another text editor
to make bulk changes. The Code view uses the standard <a href='editor'>editor</a>.</p>

<p>The format of the layout file is described in <a href='../guides/develop/creating-a-touch-keyboard-layout-for-amharic-the-nitty-gritty'>Creating a touch keyboard layout guide</a>.</p>

<h2>Icon tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmKeymanWizard_Icon.png') ?>" alt="Keyboard Editor - Icon tab" /></p>

<p>The icon tab allows you to edit the icon associated with the keyboard. An external icon editor will allow you to create more sophisticated icons with alpha transparency and multiple
resolutions, but this will cover the standard 16x16 256 colour icon which is all that many keyboards require. The controls at the top left are:</p>

<dl>
  <dt>Pencil</dt>
  <dd>Freehand drawing with the selected colour; use right mouse button for secondary colour.</dd>
  
  <dt>Line</dt>
  <dd>Draw a straight line</dd>
  
  <dt>Open box</dt>
  <dd>Draw an outline box</dd>
  
  <dt>Filled box</dt>
  <dd>Draw a filled box in current colour</dd>
  
  <dt>Open circle</dt>
  <dd>Draw an outline circle or ellipse</dd>

  <dt>Filled circle</dt>
  <dd>Draw a filled circle or ellipse in the current colour</dd>

  <dt>Fill</dt>
  <dd>Fill from the current point all contiguous pixels of the same colour</dd>

  <dt>Text</dt>
  <dd>Add a letter or letters to the icon</dd>
</dl>

<p>The icon can be exported or imported to/from various other formats. The transparent colour is the top left colour in the grid with an X in the box.
The icon can be rotated in any direction with the arrow controls below the toolbox; this will not lose data from the icon but will instead rotate the 
edge moving off the grid to the other side of the grid.</p>

<h2>Embedded JS tab</h2>

<p>This tab allows you to edit JavaScript code associated with the <a href='../guides/develop/imx'>IMX functionality</a> of the keyboard.</p>

<h2>Embedded CSS tab</h2>

<p>This tab allows you to edit the Cascading Style Sheet rules for the keyboard.</p>

<h2>Web Help tab</h2>

<p>This tab allows you to add a custom HTML snippet to replace the desktop on screen keyboard, for example useful if the keyboard uses sequences of keys
to produce characters.</p>

<h2>Include Codes tab</h2>

<p>This tab allows you to edit the <a href='/developer/language/guide/constants'>named constants</a> for the keyboard.</p>

<h2>Build tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmKeymanWizard_Build.png') ?>" alt="Keyboard Editor - Build tab" /></p>

<p>A set of common controls is across the top of this tab:</p>

<dl>
  <dt>Compile Keyboard</dt>

  <dd>You can compile the keyboard for testing and installation by clicking the <span class="guibutton">Compile</span> button, or
  selecting Keyboard, Compile Keyboard. This will compile the keyboard for all the selected Targets from the Details tab.</dd>

  <dt>Start Debugging</dt>
  <dd>To test your keyboard within Keyman Developer, press F5 to start the <a href='debug'>debugger</a>, or press the Start Debugging button.
  This is suitable for testing desktop layouts.</dd>

  <dt>Open Containing Folder</dt>
  <dd>Opens the folder which contains the keyboard source files.</dd>
  
  <dt>Add to Project</dt>
  <dd>If the keyboard file is not already part of the project, adds it to the project.</dd>
</dl>

<h3>Windows and macOS Targets</h3>

<p>If your keyboard is designed to target Windows and macOS, then the following buttons will also be visible:</p>

<dl>
  <dt>Install</dt>
  <dd>Installs the keyboard for use with Keyman Desktop on your computer</dd>

  <dt>Uninstall</dt>
  <dd>Uninstalls the keyboard from Keyman Desktop if previously installed</dd>
  
  <dt>Package for Distribution</dt>
  <dd>Creates a <a href='package-editor'>package file</a> to prepare distribution of the keyboard</dd>
</dl>

<h3>Web and Mobile Targets</h3>

<p>If your keyboard is designed to target KeymanWeb, mobile or tablet devices, the following controls will also be visible:</p>

<dl>
  <dt>Test Keyboard on Web</dt>
  <dd>Starts the Keyman Developer Web Server for the current keyboard.</dd>
  
  <dt>Addresses</dt>
  <dd>Lists the various IP addresses and hostnames that Keyman Developer is listening on</dd>
  
  <dt>Open debugger in local browser</dt>
  <dd>Starts your default browser with the selected address to allow testing of the keyboard directly</dd>
  
  <dt>Send addresses to email</dt>
  <dd>Sends the list of web addresses as an email so that you can more easily open the test site on your mobile
  device, or share with someone else on your network.</dd>
</dl>

<p>To test on other platforms, open one of the debug host addresses 
listed on your device.  Your device will need to be on the same 
network as the Keyman Developer computer.</p>

<p>You can test within the web browser on your device, or in the
native app if you have it installed: just click the Install
button on the debugger web page.</p>

<p>The Send to email function makes it easier to open the addresses
on your mobile device without having to enter them manually.</p>

<p>Learn more about <a href='../guides/test/'>testing on the web and mobile devices</a>.</p>
