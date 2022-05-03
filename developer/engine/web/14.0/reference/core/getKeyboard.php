<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: getKeyboard"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_getKeyboard">getKeyboard</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Get keyboard meta data for the selected keyboard and language.</p>

<?php
syntax("keyman.getKeyboard(keyboardName, languageCode)");
params("keyboardName", "string", "The ID (internal name) of the keyboard.",
  "languageCode", "optional string", "The BCP 47 language code.");
returns("Object", "An object with metadata corresponding to the requested keyboard.");
?>

<h2 id="Description" name="Description">Description</h2>

<?php
obj_spec('keyboard',
  'Name', 'string', "User-friendly name of the keyboard.",
  "InternalName", "string", "Internal name of the keyboard.",
  "LanguageName", "string", "User-friendly name of the language actively tied to the keyboard.",
  "LanguageCode", "string", "The three-letter code used to internally represent the language.",
  "RegionName", "string", "The user-friendly name of the region of the world within which the language is predominantly found.",
  "RegionCode", "string", "The three-letter code representing the region.",
  "CountryName", "optional string", "The user-friendly name of the country in which the language is spoken.",
  "CountryCode", "optional string", "A three-letter code corresponding to the country.",
  "KeyboardID", "optional string", "<em>Deprecated.</em>  A unique identifier for the keyboard.  (Use 'InternalName' instead.)",
  "Font", "optional string", "The font packaged with the keyboard to support its use.",
  "OskFont", "optional string", "The font packaged with the keyboard to properly display specialized OSK characters.",
  "HasLoaded", "boolean", "<code>true</code> if the keyboard has been fully loaded.  <code>false</code> otherwise.",
  "IsRTL", "optional boolean", "<code>null</code> whenever HasLoaded is <code>false</code>.  Otherwise, <code>true</code> if the keyboard's target script is written right-to-left."
  );
?>

<p>See also <a href="addKeyboards.php"><?="keyman.addKeyboards()"?></a> and its documentation about keyboard specification
  objects.</p>