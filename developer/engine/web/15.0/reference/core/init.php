<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: init"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_init">init</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Initializes KeymanWeb and configures KeymanWeb Options.</p>

<p>Note that this is an asynchronous operation.</p>

<?php
syntax("keyman.init(initOptions);");
params("initOptions", "Object", "Please see the Description section below for the necessary object specification.");
returns("Promise", "A <a href='https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise'>".
  "JavaScript Promise</a> fulfilled upon full initialization.");
?>

<h2 id="Description" name="Description"><a name="init_options">Initialization Options</a></h2>

</p>

<?php

obj_spec("initOptions",
  "ui", "string|object optional", "The user interface to be used on desktop devices.  Default value: <code>'float'</code>. " .
    "<br>Please see below for the specification of this parameter if using an object value.",
  "root", "string optional", "The folder KeymanWeb should consider root.  Default value: <code>undefined</code>,\n".
    "which sets <code>root</code> to the base folder where keymanweb.js is located.",
  "resources", "string optional", "The image folder URL for UI resources. Default value: <code>[root]/resources</code>.",
  "keyboards", "string optional", "The folder containing local keyboard resources if utilized.".
    "  Default value: <code>[root]/keyboards</code>.",
  "fonts", "string optional", "Folder containing any embedded fonts required for keyboards or the OSK.\n".
    "Default value: <code>[root]</code>.",
  "attachType", "string optional", "Must be <code>'auto'</code>, or <code>'manual'</code>. ".
    "Specifies the default behavior for attaching KeymanWeb to any input elements on the webpage. ".
    "Default value: <code>'manual'</code> for mobile devices and <code>'auto'</code> for other devices.<ul>".
    "<li>If <code>'auto'</code>, KeymanWeb will automatically attach to every non-disabled control, even those added after ".
    "page initialization.</li>".
    "<li>If <code>'manual'</code>, KeymanWeb must be instructed to attached manually to each control it should handle input for.</li></ul>",
  "setActiveOnRegister", "string optional", "Specified whether KeymanWeb will set the newly registered keyboard as active. ".
    "Default value: <code>'true'</code>.<ul>".
    "<li>If <code>'true'</code>, KeymanWeb will automatically activate a keyboard when registered.</li>".
    "<li>If <code>'false'</code>, KeymanWeb will not activate a keyboard when registered.</li></ul>",
  "useAlerts", "boolean optional", "Specified whether KeymanWeb will display internal alerts. ".
    "Default value: <code>true</code>.<ul>".
    "<li>If <code>true</code>, KeymanWeb will display internal alerts.</li>".
    "<li>If <code>false</code>, KeymanWeb will not display internal alerts. ".
    "Choose this if you want to customize the alert messages for use on your site.</li></ul>"
  );

?>

<hr>
<p>If setting <code>initOptions.ui</code> with an object value, it should be specified as follows: </p>

<?php

obj_spec(false, // disables the initial text, allowing a custom lead-in instead.
  "name", "string", "The name of the ui to utilize for non-mobile devices.",
  "right", "optional boolean", "A Float-UI-only option.  Sets right-alignment of the UI.  Defaults to <code>false</code>."
)

?>
