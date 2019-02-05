<?php
  require_once('includes/template.php');

  head([
    'title' => "Keyman Developer Version History",
    'toc' => false
  ]);
?>

<h1>Keyman Developer Version History</h1>

<h3>9.0.523.0</h3>
<ul>
  <li>Fix: When a longpress popup is being edited, selecting another primary key can copy the details to that key's popup (additional scenario, I4926)</li>
  <li>Update: Updated KeymanWeb to latest build 408</li>
</h3>

<h3>9.0.519.0</h3>
<ul>
  <li>Fix: When a longpress popup is being edited, selecting another primary key can copy the details to that key's popup (I4926)</li>
  <li>Fix: If 'find char under cursor automatically' is on, OSK editor opens charmap if it is closed (I4927)</li>
  <li>Fix: Keyman 9 product installers should test for XP or Vista (I4934)</li>
  <li>Fix: Redraw not reliably working in text editor (I4962)</li>
  <li>Fix: Importing a KMN into a KVK does not work if includecodes are in the keyboard (I4979)</li>
  <li>Fix: Keyboard fonts dialog has incorrect tab order (I4980)</li>
  <li>Fix: Character Map is being updated even when not visible (I4981)</li>
  <li>Fix: Defined character constants cannot be referenced correctly in other stores (I4982)</li>
  <li>Fix: Starting a subprocess can fail due to constant buffer for CreateProcessW (I4983)</li>
</ul>

<h3>9.0.518.0</h3>
<ul>
  <li>Fixed: Compiler does not warn on an index() statement that has an offset one past the key (I4914)</li>
  <li>Improved: Text editor refresh is now faster after fix for I4870 (I4918)</li>
</ul>

<h3>9.0.517.0</h3>
<ul>
  <li>Fixed: Blank font filename entry in JSON metadata UI editor crashes on save [CrashID:tike.exe_9.0.516.0_009CD793_EAssertionFailed] (I4878)</li>
</ul>
  
<h3>9.0.516.0</h3>
<ul>
  <li>Fixed: Keyman Developer crashes when starting regression test [CrashID:tike.exe_9.0.511.0_0058BC63_EInvalidOperation] (I4839)</li>
  <li>Fixed: Editor does not always refresh immediately with new theming (I4870)</li>
  <li>Fixed: OSK font and Touch Layout font should be the same in Developer (I4872)</li>
  <li>Fixed: Keyman Configuration test windows do not always display correctly (I4874)</li>
  <li>Fixed: RTL flag is not mapped in the JSON editor (I4875)</li>
  <li>Fixed: Default "eng" language should be added if missing during debug to JSON (I4876)</li>
  <li>Fixed: JSON format is inconsistent with documentation (I4877)</li>
  <li>Added: "Treat hints and warnings as errors" option to compiler (I4865)</li>
  <li>Added: "Warn on deprecated features" option to compiler (I4866)</li>
  <li>Added: "Test for code after use()" warning to compiler (I4867)</li>
  <li>Added: Branding editor needs smoother interactions with test window (I4873)</li>
</ul>

<h3>9.0.515.0</h3>
<ul>
  <li>Added: Dynamically refresh Branding Pack UI Test window as edits happen (I4855)</li>
  <li>Fixed: Support view of particular pages of Keyman Configuration and missing pages in KCT Test (I4856)</li>
  <li>Fixed: Allow edit of dtd files in kct editor (I4857)</li>
  <li>Fixed: Asset files not always upgrading in Keyman Developer (I4858)</li>
</ul>

<h3>9.0.514.0</h3>
<ul> 
    <li>Added: New File dialog now creates folders automatically (I4852)</li>
    <li>Fixed: Inconsistent display of panels through Developer (I4851)</li>
</ul>

<h3>9.0.513.0</h3>
<ul> 
    <li>Fixed: Backspace doesn't always work in the keyboard debugger (I4838)</li>
</ul>

<h3>9.0.512.0</h3>
<ul> 
    <li>Added: Update KeymanWeb to build 403 (I4837)</li>
    <li>Added: Context-sensitive help missing V8 and V9 keywords (I4840)</li>
    <li>Added: Restructure version 9 developer help (I4841)</li>
    <li>Fixed: Ctrl+N, Ctrl+O not working in Developer Project view (I2986)</li>
    <li>Fixed: Compiler does not recognise baselayout, layer or platform at the start of a line (I4784)</li>
    <li>Fixed: Character Identifier cells are too narrow for entire U+xxxxxx caption (I4832)</li>
    <li>Fixed: Character Identifier blank font grid needs formatting (I4834)</li>
    <li>Fixed: Project window needs Keyman 9 icons (I4835)</li>
    <li>Fixed: Character Map and Character Identifier don't match tokens at start of line (I4842)</li>
    <li>Fixed: Delete key doesn't work in the keyboard debugger (I4845)</li>
    <li>Fixed: Code editor does not get focus automatically when file is loaded (I4847)</li>
</ul>

<h3>9.0.511.0</h3>
<ul> 
    <li>Added: Refresh Keyman Developer look and feel for release (I4796)</li>
    <li>Added: Split Path and Name boxes in New File dialogs (I4798)</li>
    <li>Added: Add Character Identifier to Keyman Developer (I4807)</li>
    <li>Added: Add character preview to debug window (I4808)</li>
    <li>Added: Track keystrokes in debug status form (I4809)</li>
    <li>Added: Add Restart Debugger button to debug status window (I4815)</li>
    <li>Added: Note in compile log if symbols are included in build (I4823)</li>
    <li>Added: Add Unicode 8.0.0 to Keyman Developer 9 (I4829)</li>
    <li>Fixed: Convert to Characters tool is inconsistent (I4797)</li>
    <li>Fixed: Preview keys are wrong colour in Developer (I4799)</li>
    <li>Fixed: Targets box overlaps name box in keyboard editor (I4810)</li>
    <li>Fixed: Hide JSON metadata tab for desktop keyboards (I4811)</li>
    <li>Fixed: Tab order in Details page for Keyboard Editor is incorrect (I4812)</li>
    <li>Fixed: Keyboard preview background colour is incorrect (I4813)</li>
    <li>Fixed: Image preview in package editor doesn't refresh after changes (I4814)</li>
    <li>Fixed: Tidy up display of key in debug status window (I4816)</li>
    <li>Fixed: Regression test buttons have incorrect labels (I4817)</li>
    <li>Fixed: Remove obsolete files from Keyman Developer source (I4818)</li>
    <li>Fixed: Keyman Developer home page in About dialog is incorrect (I4819)</li>
    <li>Fixed: Keyboard fonts dialog box has incorrect control types (I4820)</li>
    <li>Fixed: Update icons for version 9.0 in New File dialog (I4821)</li>
    <li>Fixed: Form sizes are incorrect with new theming (I4822)</li>
    <li>Fixed: Fonts don't always load correctly in KeymanWeb test page (I4824)</li>
    <li>Fixed: Make kmcomp command line details consistent (I4825)</li>
    <li>Fixed: Navigation keys don't work in debugger (I4826)</li>
    <li>Fixed: Key down debug events are not always processed correctly (I4827)</li>
    <li>Fixed: Font identifier miscalculates percentages when supplementary plane characters in string (I4828)</li>
</ul>

<h3>Keyman Developer 9.0.510.0</h3>
<ul>
  <li>Keyboard debugger does not always activate profile correctly (I4767)</li>
  <li>Add "open in code view" default option for keyboards (I4751)</li>
  <li>Opening a keyboard externally can open it multiple times (I4749)</li>
  <li>V9.0 - Enable SHIFT+ESC to pause debugger with TSF (I4033)</li>
</ul>

<h3>Keyman Developer 9.0.509.0</h3>
<ul>
  <li>Package compiler (buildpkg) needs to specify username and password on command line (I4763)</li>
  <li>Buildpkg needs to support different paths for msi and kmp files (I4764)</li>
  <li>Add "open in code view" default option for keyboards (I4751)</li>
  <li>Double-click on message does not find source line since build 500 (I4765)</li>
  <li>EthnologueCode system store does not correlate to control on first page of wizard for messages (I4766)</li>
  <li>Keyboard debugger does not always activate profile correctly (I4767)</li>
  <li>Opening a keyboard externally can open it multiple times (I4749)</li>
  <li>KeymanWeb key is no longer required for debugger in Keyman Developer (I4768)</li>
  <li>Keyman Developer missing keymanweb-osk.ttf from layoutbuilder install (I4747)</li>
  <li>Command line package compiler should trap exceptions and report rather than crashing (I4769)</li>
  <li>Product compiler does not create output path if required (I4756)</li>
  <li>Add "open in code view" default option for keyboards (I4751)</li>
  <li>If kmcmpdll.dll does not exist in debug path, try default paths (I4770)</li>
  <li>Update regressiontest app for Engine and Developer 9.0 (I4771)</li>
</ul>

<h3>Keyman Developer 9.0.508.0</h3>
<ul>
  <li>Fixed: Project files need to build package installers (I4734)</li>
  <li>Added: Clean and Build single file commands to project (I4735)</li>
  <li>Fixed: Product files don't include version in output filename in project (I4736)</li>
  <li>Fixed: Clean package should also clean installer (I4737)</li>
  <li>Fixed: Product compiler crashes with stack overflow in build 507 (I4738)</li>
  <li>Fixed: Don't show "keep in touch" for non-keyman products (I4740)</li>
  <li>Fixed: Package installer compiler references wrong path for compiled package file (I4741)</li>
  <li>Fixed: Product compiler does not save .msi or .pxx into project output folder (I4743)</li>
  <li>Fixed: Keyman Developer 9.0 fails to upgrade from Developer 8.0 cleanly (I4744)</li>
</ul>

<h3>Keyman Developer 9.0.505.0</h3>
<ul>
  <li>Fixed: Crash when developer tries Upload to Tavultesoft and internet connection is down [CrashID:tike.exe_9.0.504.0_0068E2DC_ESOAPHTTPException] (I4726)</li>
  <li>Fixed: Changing font while touch layout editor in Code mode results in broken \ rules (I4727)</li>
  <li>Fixed: Saving a keyboard with a locked feature file causes Developer to crash [CrashID:tike.exe_9.0.504.0_0045876A_EFCreateError] (I4728)</li>
  <li>Fixed: If you attempt to load a non-XML file as a project, it silently fails and overwrites the file (I4729)</li>
  <li>Fixed: Loading a kvk file in a keyboard, where content is invalid, crashes developer [CrashID:tike.exe_9.0.504.0_0078D23F_EVisualKeyboardLoader] (I4730)</li>
</ul>

<h3>Keyman Developer 9.0.504.0</h3>
<ul>
  <li>Fixed: Project display crashes if project render output file is locked [CrashID:tike.exe_9.0.489.0_0045876A_EFCreateError] (I4654)</li>
  <li>Fixed: Developer crashes when changing font settings and in code view for touch layout if not on first line [CrashID:tike.exe_9.0.487.0_0069BE51_ERangeError] (I4655)</li>
  <li>Fixed: Loading a non-project file as a project crashes Developer [CrashID:tike.exe_9.0.497.0_00813E09_EProjectLoader] (I4703)</li>
  <li>Fixed: Compiling a standalone keyboard crashes Developer [CrashID:tike.exe_9.0.503.0_00A4316C_EAccessViolation] (I4720)</li>
  <li>Fixed: Developer crashes if a file is in use and a reload is attempted (I4721)</li>
  <li>Fixed: Keyboard uploads fail due to incorrect server name (I4722)</li>
  <li>Fixed: Switching from source tab to design tab in layout fails to refresh the layout (I4723)</li>
  <li>Fixed: Compiler generates warnings for JSON files if output path is source path (I4724)</li>
</ul>

<h3>Keyman Developer 9.0.502.0</h3>
<ul>
  <li>Project no longer crashes if file parameters change during build (I4710)</li>
  <li>Closing a modified package no longer crashes Developer (I4708)</li>
</ul>

<h3>Keyman Developer 9.0.501.0</h3>
<ul>
  <li>kmcomp no longer modifies project files during a build (I4709)</li>
</ul>

<h3>Keyman Developer 9.0.500.0</h3>
<ul>
  <li>Add silent and warning-as-error parameters to kmcomp (I4706)</li>
  <li>Add clean target to kmcomp (I4707)</li>
</ul>

<h3>Keyman Developer 9.0.499.0</h3>
<ul>
  <li>Add KeymanDeveloperPath environment variable to installer (I4705)</li>
</ul>

<h3>Keyman Developer 9.0.498.0</h3>
<ul>
  <li>Project files should be formatted XML (I4704)</li>
</ul>

<h3>Keyman Developer 9.0.497.0</h3>
<ul>
  <li><Modules> section should be in project .user file (I4700)</li>
  <li>If version is not specified in keyboard file, it gets blank instead of 1.0 in kmcomp .kpj (I4701)</li>
  <li>Package actions crash if package not part of a project [CrashID:tike.exe_9.0.496.0_008033BD_EAccessViolation] (I4702)</li>
</ul>

<h3>Keyman Developer 9.0.496.0</h3>
<ul>
  <li>Remove VCL dependency for mrulist (I4697)</li>
  <li>Split project and user preferences files (I4698)</li>
  <li>Compile .kpj files from kmcomp (I4699)</li>
  <li>Split UI actions from non-UI actions in projects (I4694)</li>
  <li>Debugger needs to use project file filename not internal name (I4695)</li>
  <li>Refactor compile into project file action (I4686)</li>
  <li>Split project UI actions into separate classes (I4687)</li>
  <li>Add build path to project settings (I4688)</li>
  <li>Redesign package editor as left tabbed (I4689)</li>
  <li>Pull keyboard version into package version when adding a keyboard (I4690)</li>
  <li>Always save project automatically (I4691)</li>
  <li>Add Clean as project action (I4692)</li>
  <li>Fix crash when creating left tabbed page control without images (I4693)</li>
</ul>

<h3>Keyman Developer 9.0.495.0</h3>
<ul>
  <li>Move Developer help to online only (I4677)</li>
  <li>Fixup Ctrl+PgUp, Ctrl+PgDn, Alt+Left, Alt+Right hotkeys (I4678)</li>
  <li>Remember focus for active editor when swapping editors (I4679)</li>
  <li>Ctrl+S often activates the "select key" dialog in editor (I4680)</li>
  <li>mnemoniclayout store should be enough to block design view (I4681)</li>
  <li>Installing a keyboard with an OSK from Developer fails to install the OSK (I4682)</li>
</ul>

<h3>Keyman Developer 9.0.489.0</h3>
<ul>
  <li>WiX file generator in Keyman Developer was failing due to security (I4643)</li>
</ul>

<h3>Keyman Developer 9.0.488.0</h3>
<ul>
  <li>Debug host keyboard did not correctly map through some Keyman keyboard keys (I4156)</li>
</ul>

<h3>Keyman Developer 9.0.485.0</h3>
<ul>
  <li>Keyman Developer failed to import kvk xml file (I4619)</li>
</ul>

<h3>Keyman Developer 9.0.484.0</h3>
<ul>
  <li>context statement in output could fail in some situations in KeymanWeb compiler (I4611)</li>
</ul>

<h3>Keyman Developer 9.0.476.0</h3>
<ul>
  <li>The text editor in the keyboard wizard is no longer blanked in some circumstances when switching tabs (I4557)</li>
  <li>Keyboard parser no longer forces keyboard version to 9.0 (I4558)</li>
  <li>Debugger development - disable debug tip when stopping debugging (I4331)</li>
</ul>

<h3>Keyman Developer 9.0.475.0</h3>
<ul>
  <li>JSON search needs to do cleanname on the keyboard filename to find candidates (I4508)</li>
</ul>

<h3>Keyman Developer 9.0.474.0</h3>
<ul>
  <li>Consolidate the compile action into single command (I4504)</li>
  <li>Add JSON metadata editor to keyboard wizard (I4505)</li>
  <li>Add command to send email with targets (I4506)</li>
  <li>Move tab close button onto tabs (I4507)</li>
</ul>

<h3>Keyman Developer 9.0.473.0</h3>
<ul>
  <li>Add kmw_embedcss to feature support in Developer (I4369)</li>
  <li>Tab and Dismiss keys have been removed from touch templates (I4475)</li>
  <li>Added source version of KMW to Keyman Developer (I4476)</li>
</ul>

<h3>Keyman Developer 9.0.472.0</h3>
<ul>
  <li>The dismiss keyboard and tab buttons should not be required by Keyman Developer now (I4447)</li>
  <li>Sometimes when saving, the list of &WINDOWSLANGUAGES is doubled (I4329)</li>
  <li>Standard fonts should not be downloaded to devices in test window (I4448)</li>
  <li>Font CSS responds as ISO-8859-1 instead of UTF-8 (I4449)</li>
  <li>Layout Builder is missing OSK special keys font in some situations (I4450)</li>
  <li>Touch layout editor polish (I4330)</li>
</ul>

<h3>Keyman Developer 9.0.471.0</h3>
<ul>
  <li>JSON hosting for installing keyboard into native app has wrong extension (I4437)</li>
  <li>Keyboard debugger does not show button control in desktop mode (I4438)</li>
  <li>If more than one language listed for a keyboard, the JSON file becomes invalid (I4440)</li>
</ul>

<h3>Keyman Developer 9.0.469.0</h3>
<ul>
  <li>Download Keyboard dialog does not display correctly (I4414)</li>
  <li>OSK does not show underlying characters if base keyboard is not loaded (I4415)</li>
</ul>

<h3>Keyman Developer 9.0.467.0</h3>
<ul>
  <li>Manual Activate dialog is misformatted (I4408)</li>
  <li>Wrong font selected in keyboard debugger touch layout (I4409)</li>
  <li>Metrics should be visible in touch layout editor (I4410)</li>
  <li>Character map allows Ctrl+Click to insert character (I4411)</li>
  <li>Wrong font selected in keyboard debugger touch layout (I4409)</li>
</ul>

<h3>Keyman Developer 9.0.463.0</h3>
<ul> 
  <li>Line number comments are no longer incorrectly added to non-debug builds (I4384)</li>
</ul>

<h3>Keyman Developer 9.0.460.0</h3>
<ul>
  <li>Web and touch keyboards now support custom stylesheets with &amp;kmw_embedcss (I4368)</li>
  <li>Line number comments are now included in generated Javascript when compiling with debug (I4373)</li>
</ul>

<h3>Keyman Developer 9.0.458.0</h3>

<ul>
  <li>Added: Require Windows 7 or later for install (I4313)</li>
</ul>

<h3>Keyman Developer 9.0.454.0</h3>

<ul>
  <li>Fixed: Compiling a product installer failed with xsl security error (I3734)</li>
</ul>

<h3>Keyman Developer 9.0.453.0</h3>

<ul>
  <li>Fixed: Clicking Remove Feature when no feature selected crashes [CrashID:tike.exe_9.0.449.0_00987F63_EAccessViolation]  (I4247)</li>
</ul>

<h3>Keyman Developer 9.0.452.0</h3>

<ul>
  <li>Fixed: File format dropdown should be disabled in project view (I3733)</li>
  <li>Fixed: Crash opening project in read-only location [CrashID:tike.exe_9.0.443.0_005E202D_EOleException]  (I4212)</li>
  <li>Added: Added BCP-47 language codes to unicodedata (I4257)</li>
  <li>Fixed: Keyboard font dialog crashed if in text editor view (I4258)</li>
  <li>Added: Generate a .json file when compiling keyboard for web (I4259)</li>
  <li>Added: Add link to install keyboard file into native app into debug web (I4260)</li>
  <li>Added: Build 357 of KeymanWeb into Developer (I4261)</li>
  <li>Fixed: Compile to web and test fails when keyboard version is not 1.0 (I4263)</li>
  <li>Fixed: If Keyman Developer is running, double clicking a file in Explorer doesn't open it (I4264)</li>
</ul>

<h3>Keyman Developer 9.0.449.0</h3>

<ul>
  <li>Keyboard wizard crashes with missing template-default.js when adding Touch Layout (I4226)</li>
</ul>

<h3>Keyman Developer 9.0.448.0</h3>

<ul>
  <li>Manifests missing or malformed in some executables (I4205)</li>
  <li>Block U_0000-U_001F and U_0080-U_009F in layout files (I4198)</li>
  <li>adding a subkey array generates an invalid "?" id (I4213)</li>
  <li>template-default should be called template-latin (I4217)</li>
  <li>Activate/Purchase dialogs are incomplete and the Buy Modules button doesn't work (I4090)</li>
</ul>

<h3>Keyman Developer 9.0.447.0</h3>

<ul>
  <li>Add Windows compatibility values to all manifests (I4194)</li>
</ul>

<h3>Keyman Developer 9.0.443.0</h3>

<ul>
  <li>Need keyboard version control in Keyman Developer Wizard (I4157)</li>
  <li>Keyboardversion is not compiled into kmw js (I4155)</li>
  <li>keyboardversion is not read by KeymanWeb compiler and applied to filename. (I4154)</li>
</ul>

<h3>Keyman Developer 9.0.442.0</h3>

<ul>
  <li>Edit platform button still in editor even though it does nothing (Bug) (I4126)</li>
  <li>OSK Import KMX breaks some shift states  (Bug) (I4127)</li>
  <li>Edit Platform dialog is deleted but button is still there in touch layout editor (Bug) (I4129)</li>
  <li>Build php help files to help.keyman.com (Tweak) (I4135)</li>
  <li>Add keyboard version information to Keyman Configuration (Tweak) (I4136)</li>
  <li>Don't prompt to sort out L/R shift on save of keyboard  (Bug) (I4137)</li>
  <li>If the KVK is removed from the keyboard, it can still be imported into the touch layout until the file is closed (Bug) (I4138)</li>
  <li>Compress layout file when compiling to KMW (Tweak) (I4139)</li>
  <li>Add keyboard version information to keyboards (Develop) (I4140)</li>
  <li>Warn when unusable key ids are used (Develop) (I4141)</li>
  <li>Validate key ids are in an acceptable format (Develop) (I4142)</li>
  <li>Support modifier layers of KVK when importing a KMX (Bug) (I4143)</li>
  <li>When character is dropped or double-clicked to insert into html text field, no modified event is triggered (Bug) (I4144)</li>
  <li>Deadkeys are corrupted by KeyboardParser (Bug) (I4145)</li>
  <li>When importing OSK into touch layout, unused layers are populated with base layer (Bug) (I4146)</li>
  <li>If a touch layout is added to a keyboard, it doesn't get saved until the tab is visited (Bug) (I4147)</li>
  <li>Touch layout editor is missing a number of standard key names (Bug) (I4148)</li>
  <li>If a touch layout key has no id, the builder fails to load the json (Bug) (I4149)</li>
  <li>Double clicking on a key should activate its 'nextlayer' in touch layout editor (Tweak) (I4150)</li>
  <li>key id is not saved until field is blurred in touch layout editor (Bug) (I4151)</li>
  <li>Resizing a key with the grab handle causes other keys to overlap during the resize operation (Bug) (I4152)</li>
  <li>Pressing and releasing Ctrl in touch layout editor should allow selection of standard keys a-la layout editor (Tweak) (I4153)</li>
</ul>

<h3>Keyman Developer 9.0.441.0</h3>

<ul>
  <li>Double-click on Character Map when in Touch Layout Editor crashes TIKE (I4110)</li>
  <li>Double-click in char map when no input element focused in touch layout editor crashes TIKE (I4111)</li>
  <li>Installer links should be to keyman.com (I4115)</li>
  <li>KMW compiler should warn when extended shift flags are used (I4118)</li>
  <li>KMW compiler should only warn unassociated keys that are not special keys (I4119)</li>
  <li>Remove platform properties from touch layout editor as font details are now accessible via Keyboard|Font menu (I4120)</li>
  <li>Rename 'subkey' to 'touch+hold popup' (I4121)</li>
  <li>traditional touch template has K_SEMICOLON and K_SQUOTE wrongly named key ids (I4122)</li>
  <li>Keyman Developer installer should required Vista or later (I4123)</li>
</ul>

<h3>Keyman Developer 9.0.440.0</h3>

<ul>
  <li>Keyman Developer installer icon is still v8.0 style (I4100)</li>
  <li>Touch layout editor still has the font options in its Edit Platform dialog (I4091)</li>
</ul>

<h3>Keyman Developer 9.0.439.0</h3>

<ul>
  <li>Trace compile errors in subfiles in Keyman Developer (I4081)</li>
  <li>Make details tab scrollable with mouse wheel (I4082)</li>
  <li>When errors encountered in JSON layout file, locate the error in the source view (I4083)</li>
  <li>Remove old font selection controls from wizard (I4085)</li>
  <li>About should be version 9.0 style (I4086)</li>
  <li>Splash should be version 9.0 style (I4084)</li>
  <li>KeymanWeb compiler does not clear messages before starting (I4087)</li>
</ul>

<h3>Keyman Developer 9.0.438.0</h3>

<ul>
  <li>Keyman Developer Keyboard Font dialog helpful to reduce font confusion (I4057)</li>
  <li>Touch Layout Import OSK fails with weird error if OSK is missing (I4058)</li>
  <li>If OSK is not saved, then changes do not flow through in Touch Layout Import (I4059)</li>
  <li>KeymanWeb compiler should validate the layout file (I4060)</li>
  <li>KeymanWeb compiler needs defined codes for some errors (I4061)</li>
  <li>Touch Layout platforms do not allow font size specification (I4062)</li>
  <li>Web Debugger needs to embed fonts for OSK and text area (I4063)</li>
  <li>Touch layout editor does not apply fonts consistently to keys (I4064)</li>
  <li>Deleting a touch layout layer leaves a "null" entry in the layout file (I4065)</li>
</ul>

<h3>Keyman Developer 9.0.437.0</h3>

<ul>
  <li>Layout editor needs to refresh character map (I4046)</li>
  <li>TIKE shows an error if you try to save before viewing the touch layout tab (I4047)</li>
  <li>Various fixes and features for touch layout editor: (I4049)
    <ul>
      <li>Deselecting main key does not disable subkey or clear other controls
      <li>Drag+drop not sticking</li>
      <li>Drag+drop not allowing drop at end</li>
      <li>Key height not right</li>
      <li>Not showing editor in line for key</li>
      <li>Not showing key code on key</li>
      <li>No wedges showing</li>
      <li>No delete icon showing</li>
      <li>Deselecting does not disable controls</li>
      <li>If inserting or removing key padding, the key display does not refresh correctly</li>
      <li>'Label:' label should be removed</li>
      <li>Key id does not update on keyboard view when changed</li>
    </ul>
  </li>
  <li>Character map does not show currently selected char from keyboard view (I4049)</li>
  <li>Button UI not displaying in KMDev KMW test window (I4048)</li>
</ul>

<h3>Keyman Developer 9.0.436.0</h3>

<ul>
  <li>Add support for Redo to Keyman Developer actions (I4032)</li>
  <li>Enable SHIFT+ESC to pause debugger with TSF (I4033)</li>
  <li>Restructure keyboard wizard for source views and features (I4034)</li>
  <li>Parsing of UTF-8 in JSON layout file crashes TIKE (I4035)</li>
  <li>Keyboard Debug HTTP Host should be thread safe (I4036)</li>
  <li>Keyboard HTTP debugger sometimes caches old keyboards (I4037)</li>
</ul>

<h3>Keyman Developer 9.0.434.0</h3>

<ul>
  <li>Redesign Keyboard Wizard to integrate V9 features (I4021)</li>
  <li>Rework Import KMX to work with V9.0 Debug Host Keyboard (I4022)</li>
  <li>Touch Layout Editor crashes with file in use sometimes (I4023)</li>
  <li>Installer is missing jquery support files for Configuration UI (I4011)</li>
</ul>
