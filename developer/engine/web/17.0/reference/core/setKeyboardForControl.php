<?php
require_once('includes/template.php');
head([
  'title' => "Function: setKeyboardForControl"
]);
require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_setKeyboardForControl">setKeyboardForControl</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Associate control with independent keyboard settings initialized to a specific keyboard.</p>

<?php
syntax("keyman.setDefaultKeyboardForControl(Pelem, keyboard, languageCode);");
params("Pelem", "Element", "The control element to be managed manually.",
  "keyboard", "optional string", "The ID (internal name) of a keyboard.",
  "languageCode", "optional string", "The three-letter language code for the keyboard.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>This function establishes the control with separately-managed keyboard settings from other, non-specialized controls on
  the page.  This may be undone by setting both <code>keyboard</code> and <code>languageCode</code> to null, reverting the
  control back to default keyboard-management behavior.</p>

<p>Note that either <strong>both</strong> parameters should be set or <strong>neither</strong>.  In particular, if
<code>languageCode</code> is specified but not <code>keyboard</code>, this method will not automatically select an appropriate
keyboard, even if one has previously been registered with that language code.</p>

<p>Due to system limitations, this function will fail if called on an IFRAME element.</p>

<p>See also <a href="../../guide/examples/control-by-control">Control-by-Control Example (guide)</a>
</p>