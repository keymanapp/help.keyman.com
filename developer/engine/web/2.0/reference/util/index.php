<?php
  require_once('includes/template.php');

  head([
    'title' => "KeymanWeb Utility Module"
  ]);
?>
<h1 class="title" id="utility">Utility Module</h1>

<p>
    The KeymanWeb Utility Function module is exposed to the developer as 
    <code class="code">window.tavultesoft.keymanweb.util</code>.
  </p>
  
  <dl>
	<dt><a href='addStyleSheet'><code>addStyleSheet</code> Function</a></dt>
	<dd>Add or override default On-Screen Keyboard styles.</dd>
  </dl>

  <dl>
    <dt><a href='alert'><code>alert</code> Function</a></dt>
    <dd>Customized alert window.</dd>
  </dl>
  <dl>

	<dt><a href='attachDOMEvent'><code>attachDOMEvent</code> Function</a></dt>
	<dd>Attach user-defined event handler for any DOM event for an element.</dd>
  </dl>

  <dl>
	<dt><a href='createElement'><code>createElement</code> Function</a></dt>
	<dd>Create an unselectable HTML element for the KeymanWeb On-Screen keyboard and User Interfaces.</dd>
  </dl> 

  <dl>
	<dt><a href='createShim'><code>createShim</code> Function</a></dt>
	<dd>Create a 'shim' IFrame element to control display of overlapped elements.</dd>
  </dl> 

  <dl>
	<dt><a href='detachDOMEvent'><code>detachDOMEvent</code> Function</a></dt>
	<dd>Detach DOM event handler from element to prevent memory leaks.</dd>
  </dl> 

  <dl>
	<dt><a href='getAbsolute'><code>getAbsolute</code> Function</a></dt>
	<dd>Get the absolute position of an element.</dd>
  </dl> 

  <dl>
	<dt><a href='getAbsoluteX'><code>getAbsoluteX</code> Function</a></dt>
	<dd>Get the absolute y-coordinate of an element.</dd>
  </dl> 

  <dl>
	<dt><a href='getAbsoluteY'><code>getAbsoluteY</code> Function</a></dt>
	<dd>Get the absolute y-coordinate of an element.</dd>
  </dl> 

  <dl>
	<dt><a href='getIEVersion'><code>getIEVersion</code> Function</a></dt>
	<dd>Get browser version (where browser-dependent code needed).</dd>
  </dl> 

  <dl>
	<dt><a href='getOption'><code>getOption</code> Function</a></dt>
	<dd>Get a KeymanWeb, On-Screen Keyboard or User Interface option value.</dd>
  </dl> 

  <dl>
	<dt><a href='hideShim'><code>hideShim</code> Function</a></dt>
	<dd>Hides the 'shim' IFrame element.</dd>
  </dl> 

  <dl>
	<dt><a href='linkStyleSheet'><code>linkStyleSheet</code> Function</a></dt>
	<dd>Add a reference to an external stylesheet file.</dd>
  </dl> 

  <dl>
	<dt><a href='isTouchDevice'><code>isTouchDevice</code> Function</a></dt>
	<dd>Allow external callers (such as UIs) to detect if the active device is touch sensitive.</dd>
  </dl> 

  <dl>
	<dt><a href='loadCookie'><code>loadCookie</code> Function</a></dt>
	<dd>Get a document cookie, or an array of all document cookies.</dd>
  </dl> 
  
  <dl>
	<dt><a href='rgba'><code>rgba</code> Function</a></dt>
	<dd>Browser-independent alpha-channel management.</dd>
  </dl> 
  
  <dl>
	<dt><a href='removeStyleSheet'><code>removeStyleSheet</code> Function</a></dt>
	<dd>Remove user-defined style sheet.</dd>
  </dl> 
  
  <dl>
	<dt><a href='saveCookie'><code>saveCookie</code> Function</a></dt>
	<dd>Save document variables as a cookie.</dd>
  </dl> 
  
  <dl>
	<dt><a href='setOption'><code>setOption</code> Function</a></dt>
	<dd>Set a KeymanWeb, On-Screen Keyboard or User Interface option value.</dd>
  </dl> 
  
  <dl>
	<dt><a href='showShim'><code>showShim</code> Function</a></dt>
	<dd>Inserts a 'shim' IFrame element to manage display of overlapped elements.</dd>
  </dl> 
  
  <dl>
	<dt><a href='toFloat'><code>toFloat</code> Function</a></dt>
	<dd>Floating conversion with default.</dd>
  </dl> 
  
  <dl>
	<dt><a href='toNumber'><code>toNumber</code> Function</a></dt>
	<dd>Integer conversion with default.</dd>
  </dl> 
  
  <dl>
	<dt><a href='toNzString'><code>toNzString</code> Function</a></dt>
	<dd>Returns default string value if argument is null, false, an empty string, or undefined.</dd>
  </dl>   