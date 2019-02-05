<?php
  require_once('includes/template.php');

  head([
    'title' => "KeymanWeb Output Functions"
  ]);
?>
<h1 class="title" id="output">Output Functions - the Keyboard API</h1>

<p>
    The KeymanWeb core object <code class="code">window.tavultesoft.keymanweb</code>
    also exposes a number of functions for low-level processing of input, context and output. These functions are
    designed for use by keyboards compiled through Keyman Developer in order to facilitate input text processing and will
    also work for custom-coded KeymanWeb keyboards.  As such, most of these functions should only be called by keyboard code,
    and a good understanding of the <a href="/developer/language">Keyman Keyboard Language</a> will prove extremely beneficial
    toward understanding the keyboard API functions enumerated in this section.
</p>
<p>
    Custom user interfaces would not normally use these functions, but they are described here 
    as some custom keyboards, such as IME-style keyboards, may need to interact with the user interface.
  </p>
  
  <dl>
	<dt><a href='KA'><code>KA</code> Function</a></dt>
	<dd>Returns whether or not the char <code>ch</code> is found within the <a href="/developer/language/reference/any">
      <code class="language-keyman">any</code></a>(<a href="/developer/language/reference/store"><code class="language-keyman">store</code></a>)
    string, setting the internally-tracked index 'n' accordingly.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KB'><code>KB</code> Function</a></dt>
	<dd>Flash body or element as substitute for an audible feedback <a href="/developer/language/reference/beep">
      <code class="language-keyman">beep</code></a>.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KBR'><code>KBR</code> Function</a></dt>
	<dd>Cancels a previous feedback <a href="/developer/language/reference/beep"><code class="language-keyman">beep</code></a>
    operation on a page element.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KC'><code>KC</code> Function</a></dt>
	<dd>Gets <a href="/developer/language/reference/context"><code class="language-keyman">context</code></a> for an ongoing
    keyboard operation relative to the caret's present position.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KCM'><code>KCM</code> Function</a></dt>
	<dd>Context matching:  Returns <code>true</code> if <code>KC(n,ln,elem) == val</code>.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KDM'><code>KDM</code> Function</a></dt>
	<dd>Deadkey matching:  Seeks to match the <a href="/developer/language/reference/deadkey"><code class="language-keyman">deadkey</code></a>
    state <code>dk</code> at the relative caret position <code>n</code>.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KDO'><code>KDO</code> Function</a></dt>
	<dd>Deadkey output:  Associates the <a href="/developer/language/reference/deadkey"><code class="language-keyman">deadkey</code></a> state
    <code>dk</code> with the element at the current caret position, after overwriting <code>nd</code> characters.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KIFS'><code>KIFS</code> Function</a></dt>
	<dd>KIFS compares the content of a <a href="/developer/language/guide/stores#toc-system-stores">system
      <code class="language-keyman">store</code></a> with a string value.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KIK'><code>KIK</code> Function</a></dt>
	<dd>Returns <code>true</code> if the input event corresponds to a keypress event resulting in character output.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KIO'><code>KIO</code> Function</a></dt>
	<dd>Index-based output:  Outputs a mapped character according to a previous selection from a <code>KeymanWeb.KA()</code>
    call upon a <a href="/developer/language/reference/store"><code class="language-keyman">store</code></a>
    string, after deleting <code>nd</code> characters.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KKI'><code>KKI</code> Function</a></dt>
	<dd>Returns an object with extended information about a specified keystroke event.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KKM'><code>KKM</code> Function</a></dt>
	<dd>Keystroke matching:  Returns <code>true</code> if the event matches the rule's shift mask and key code.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KLOAD'><code>KLOAD</code> Function</a></dt>
	<dd>Load an option <a href="/developer/language/guide/stores"><code class="language-keyman">store</code></a>
    value from a cookie or default value if no prior stored value exists.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KN'><code>KN</code> Function</a></dt>
	<dd><a href="/developer/language/reference/nul"><code class="language-keyman">nul</code></a> context check:  Returns <code>true</code>
    if the length of the <a href="/developer/language/reference/context"><code class="language-keyman">context</code></a>
    is less than or equal to <code>n</code> characters.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KO'><code>KO</code> Function</a></dt>
	<dd>Outputs the specified string to an element, overwriting <code>nd</code> characters before the caret.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KR'><code>KR</code> Function</a></dt>
	<dd>Register the keyboard stub and load the keyboard.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KRS'><code>KRS</code> Function</a></dt>
	<dd>Register the keyboard stub, return true if already registered.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KSAVE'><code>KSAVE</code> Function</a></dt>
	<dd>Save an option <a href="/developer/language/guide/stores"><code class="language-keyman">store</code></a>
    value to a cookie for the active keyboard.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KSETS'><code>KSETS</code> Function</a></dt>
	<dd>KSETS sets the value of a <a href="/developer/language/guide/stores#toc-system-stores">system
      <code class="language-keyman">store</code></a> to a string.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KSF'><code>KSF</code> Function</a></dt>
	<dd>Save focus:  Temporarily saves keyboard processing data for the currently-focused control.</dd>
  </dl> 
  
  <dl>
	<dt><a href='KT'><code>KT</code> Function</a></dt>
	<dd>Inserts a text string and optional <a href="/developer/language/reference/deadkey"><code class="language-keyman">deadkey</code></a>
    into the active output element.</dd>
  </dl> 