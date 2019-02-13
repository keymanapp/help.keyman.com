<?php
  require_once('includes/template.php');

  head([
    'title' => "Creating a new keyboard"
  ]);
?>

<h1>Creating a new keyboard</h1>

<h2>Introduction</h2>

<p>
  If you have never created a keyboard before, you might want to work through
  the Keyman Developer Tutorial. The tutorial takes you through the process of
  creating a keyboard using the Keyman Keyboard Language.
</p>

<p>
  There are two ways to create a keyboard from scratch:
</p>

<ul>
  <li>Using the Keyboard Layout Design Mode editor</li>
  <li>Using the Keyman Keyboard Language in Source Mode</li>
</ul>

<h2>Using the Keyboard Layout editor</h2>

<p>
  The Keyboard Layout Design Mode editor gives you a simple interface to quickly create a keyboard
  using a visual representation of a computer keyboard. You can drag and drop
  characters from a character map, and create Unicode keyboard layouts.
  You cannot access most of Keyman's more powerful features from 
  Design mode, but it will be useful to get you started on your design. You
  can swap from Design Mode to Source Mode in Keyman Developer.
  <a href='using-the-keyboard-editor'>Learn more about the Keyboard Wizard</a>.
</p>

<h2>Using the Keyman Keyboard Language</h2>

<p>
  The Keyman Keyboard Language (.kmn files) is what provides the flexibility that
  is needed to write keyboards with complex character management, including
  constraints, dead keys, post-entry parsing, virtual key management (accessing any
  key on the keyboard), and other Keyman features. You can learn more about the
  Keyman Keyboard Language in the <a href='/developer/language'>Programmer's Guide</a>.
</p>
