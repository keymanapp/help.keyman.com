<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    head(['title' => "$class class"]);
    
    // See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array for sample
?>
<h1>KeyboardEventHandler class</h1>

<h2 id="Description" name="Description">Description</h2>

<p>The KeyboardEventHandler class provides keyboard events and methods to notify registered listeners on keyboard events.</p>

<h2 id="Events" name="Events">Events</h2>

<dl>
  <dt><code><a href='onKeyboardChanged.php'>onKeyboardChanged()</a></code></dt>
  <dd>is called when another keyboard has been set</dd>

  <dt><code><a href='onKeyboardDismissed.php'>onKeyboardDismissed()</a></code></dt>
  <dd>is called when the keyboard has been dismissed</dd>

  <dt><code><a href='onKeyboardDownloadFinished.php'>onKeyboardDownloadFinished()</a></code></dt>
  <dd>is called when a keyboard download has finished</dd>

  <dt><code><a href='onKeyboardDownloadStarted.php'>onKeyboardDownloadStarted()</a></code></dt>
  <dd>is called when a keyboard download has started</dd>

  <dt><code><a href='onKeyboardLoaded.php'>onKeyboardLoaded()</a></code></dt>
  <dd>is called when the keyboard has been loaded for the first time</dd>

  <dt><code><a href='onKeyboardShown.php'>onKeyboardShown()</a></code></dt>
  <dd>is called when the keyboard has been shown</dd>
</dl>