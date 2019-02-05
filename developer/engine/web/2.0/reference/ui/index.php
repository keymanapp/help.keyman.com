<?php
  require_once('includes/template.php');

  head([
    'title' => "Desktop User Interfaces"
  ]);
?>

<h1 class="title" id="ui">Desktop User Interfaces</h1>

<p>
    Four different  KeymanWeb user interfaces for desktop browsers are included, 
    allowing users to select and enable keyboard mapping from a list of installed keyboards, 
    and to control the visibility of the On-Screen Keyboard.  
  </p>

  <dl>
	<dt><a href='button'>"Button" Interface</a></dt>
	<dd>The simplest user interface is the "button" UI, which appears at a fixed position on the web page, and is attached to an empty 'Div' element with id='KeymanWebControl' added to the page where appropriate.</dd>
  </dl>

  <dl>
	<dt><a href='toggle'>"Toggle" Interface</a></dt>
	<dd>The "toggle" user interface provides a drop-down list of supported input languages and keyboards, and moves with the focus to appear at the right hand side of the focused element.</dd>
  </dl>
  
  <dl>
	<dt><a href='float'>"Float" Interface</a></dt>
	<dd>The "float" user interface (the original KeymanWeb user interface) appears as a drop-down list of available keyboards below the currently focused element</dd>
  </dl>
  
  <dl>
	<dt><a href='toolbar'>"Toolbar" Interface</a></dt>
	<dd>For pages which must support a large number of languages from many regions, we recommend using our "toolbar" user interface, which displays a drop-down map allowing users to first choose the region from the map or by name, then select input language by country.</dd>
  </dl>
  
  
  <p class="releaseinfo">
  </p><p>
    Alternatively, developers may implement a custom interface for desktop browsers with appropriate 
    corporate branding, using the various API functions to manage keyboard selection and display.
  </p><p class="releaseinfo">
  </p><p> 
    For touch-screen devices, the user-interface is integrated into the On-Screen Keyboard, 
    and cannot be overridden by the developer.
  </p>