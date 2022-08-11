<?php
  require_once('includes/template.php');

  head([
    'title' => "KeymanWeb 15.0"
  ]);

  require_once("includes/__docheader.php");
?>

<h1 class="title" id="">KeymanWeb 15.0 Reference</h1>

  <dl>
  <dt><a href='overview'>KeymanWeb Overview</a></dt>
  <dd>KeymanWeb is a cross-browser JavaScript input method solution.</dd>
  </dl>
  
  <dl>
  <dt><a href='core'>KeymanWeb Core Module</a></dt>
  <dd>The KeymanWeb core module is exposed to the developer as <code>window.keyman</code>.</dd>
  </dl>

  <dl>
  <dt><a href='osk'>On-Screen Keyboard Module</a></dt>
  <dd>The On-Screen Keyboard module is exposed to the developer as <code>window.keyman.osk</code>.</dd>
  </dl>

  <dl>
  <dt><a href='util'>KeymanWeb Utility Module</a></dt>
  <dd>The KeymanWeb Utility Function module is exposed to the developer as <code>window.keyman.util</code>.
    </dd>
  </dl>

  <dl>
  <dt><a href='interface'>KeymanWeb Output Functions</a></dt>
    <dd>KeymanWeb exposes its keyboard interface object through <code>window.keyman.interface</code>, providing a number of functions for
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
  <dt><a href='core/init#init_options'>KeymanWeb Initialization Options</a></dt>
  <dd>The following options can be defined by the site designer in the initialization call to KeymanWeb.</dd>
  </dl>

  <dl>
  <dt><a href='events'>KeymanWeb Events</a></dt>
  <dd>A number of KeymanWeb events are exposed to allow the designer of a user interface to control the appearance and
    behavior of user interface elements. Standard event-processing requires all arguments to be passed as an array
    (object) with named member variables.</dd>
  </dl>

  <dl>
  <dt><a href='keyboard_properties'>KeymanWeb Keyboard Properties</a></dt>
  <dd>Most keyboards are generated automatically from the Keyman keyboard source by Keyman Developer and contain
    properties used by KeymanWeb during keyboard mapping.</dd>
  </dl> 

  <dl>
  <dt><a href='layouts'>KeymanWeb Layout Designer</a></dt>
  <dd>One of the main features of KeymanWeb is its ability to support distinct, user-customizable layouts for
    touch-screen keyboards on phones and tablets.</dd>
  </dl> 

  <dl>
  <dt><a href='layoutspec'>KeymanWeb Layout Specifications</a></dt>
  <dd>Touch-screen layouts for KeymanWeb are specified as JSON objects containing a member object for each specified device type.</dd>
  </dl> 

  <dl>
  <dt><a href='/developer/language/guide/multi-platform'>KeymanWeb Keyboard Development Reference</a></dt>
  <dd>Information on how to explicitly support KeymanWeb in custom keyboards.</dd>
  </dl>