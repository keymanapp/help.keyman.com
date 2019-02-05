<?php
  require_once('includes/template.php');

  head([
    'title' => "KeymanWeb 2.0"
  ]);
?>

<h1 class="title" id="">KeymanWeb 2.0 Reference</h1>

  <dl>
	<dt><a href='overview'>KeymanWeb 2.0 Overview</a></dt>
	<dd>KeymanWeb is a cross-browser JavaScript input method solution.</dd>
  </dl>
  
  <dl>
	<dt><a href='core'>KeymanWeb Core Module</a></dt>
	<dd>The KeymanWeb core module is exposed to the developer as <code>window.tavultesoft.keymanweb</code>.</dd>
  </dl>

  <dl>
	<dt><a href='osk'>On-Screen Keyboard Module</a></dt>
	<dd>The On-Screen Keyboard module is exposed to the developer as <code>window.tavultesoft.keymanweb.osk</code>.</dd>
  </dl>

  <dl>
	<dt><a href='util'>KeymanWeb Utility Module</a></dt>
	<dd>The KeymanWeb Utility Function module is exposed to the developer as <code>window.tavultesoft.keymanweb.util</code>.
    </dd>
  </dl>

  <dl>
	<dt><a href='output'>KeymanWeb Output Functions</a></dt>
    <dd>The KeymanWeb core object <code>window.tavultesoft.keymanweb</code> also exposes a number of functions for
      low-level processing of input, context and output. </dd>
  </dl>

  <dl>
	<dt><a href='compatibility'>KeymanWeb Compatibility Functions</a></dt>
	<dd>The following KeymanWeb core functions have been retained for compatibility with existing custom keyboards, but
    should not be used in any new keyboards or user interfaces. Equivalent new function calls are indicated.</dd>
  </dl>

  <dl>
	<dt><a href='ui'>Desktop User Interfaces</a></dt>
	<dd>Four different KeymanWeb user interfaces for desktop browsers are included, allowing users to select and enable
    keyboard mapping from a list of installed keyboards, and to control the visibility of the On-Screen Keyboard.</dd>
  </dl>

  <dl>
	<dt><a href='core/init#init_options'>KeymanWeb 2.0 Initialization Options</a></dt>
	<dd>The following options can be defined by the site designer in the initialization call to KeymanWeb.</dd>
  </dl>

  <dl>
	<dt><a href='events'>KeymanWeb 2.0 Events</a></dt>
	<dd>A number of KeymanWeb events are exposed to allow the designer of a user interface to control the appearance and
    behavior of user interface elements. Standard event-processing requires all arguments to be passed as an array
    (object) with named member variables.</dd>
  </dl>

  <dl>
	<dt><a href='keyboard_properties'>KeymanWeb 2.0 Keyboard Properties</a></dt>
	<dd>Most keyboards are generated automatically from the Keyman keyboard source by Keyman Developer and contain
    properties used by KeymanWeb during keyboard mapping.</dd>
  </dl> 

  <dl>
	<dt><a href='layouts'>KeymanWeb 2.0 Layout Designer</a></dt>
	<dd>One of the main features of KeymanWeb 2 is its ability to support distinct, user-customizable layouts for
    touch-screen keyboards on phones and tablets.</dd>
  </dl> 

  <dl>
	<dt><a href='layoutspec'>KeymanWeb 2.0 Layout Specifications</a></dt>
	<dd>Touch-screen layouts for KeymanWeb 2 are specified as JSON objects containing a member object for each specified device type.</dd>
  </dl> 

  <dl>
  <dt><a href='/developer/language/guide/multi-platform'>KeymanWeb Keyboard Development Reference</a></dt>
  <dd>Information on how to explicitly support KeymanWeb in custom keyboards.</dd>
  </dl>