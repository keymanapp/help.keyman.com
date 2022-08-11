<?php
  require_once('includes/template.php');

  head([
    'title' => "'Button' Interface"
  ]);
?>
<h1 class="title" id="button">"Button" Interface</h1>

  <p>
    The simplest user interface is the "button" UI, which appears at a fixed position on the web page, 
    and is attached to an empty 'Div' element with id='KeymanWebControl' added to the page where appropriate.
  </p>
  
  <p> 
    When the mouse is hovered over the 'button' UI, a menu of supported input languages and keyboards is shown: 
  </p>
  
  <span class="inlinemediaobject"><img src="images/ui_button.png"></span>
  
  <p>
    In this example, a Japanese keyboard with an Input Method Editor (IME) has been selected.
  </p></div>