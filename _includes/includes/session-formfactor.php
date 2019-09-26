<?php
if(!isset($_SESSION)) session_start();

// Which platform are we embedding within?
if(isset($_REQUEST['formfactor'])) {
  $formFactor = $_REQUEST['formfactor'];
  if(!in_array($formFactor, ['detect','phone','tablet'])) {
    $formFactor = 'detect';
  }
} else if(isset($_SESSION['formfactor'])) {
  $formFactor = $_SESSION['formfactor'];
} else {
  $formFactor = 'detect';
}

// Save our processed session data.
$_SESSION['formfactor'] = $formFactor;

/* Establishes the default CSS class attribute for reliant pages.
 * The resulting `$formFactorClass` var is global-referenced
 * by template.php, which will apply the attribute.
 *
 * See function `build_page_class` there for specifics.
 */
if($formFactor == "phone") {
  $formFactorClass = "phone-form";
} else {
  $formFactorClass = "tablet-form";
}
?>