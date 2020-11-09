<?php
  require_once('includes/template.php');

  head([
    'title' => "KeymanWeb Output Functions"
  ]);

  require_once('includes/__docheader.php');
?>
<h1 class="title" id="output">Output Functions - the Keyboard API</h1>

<p>
    The KeymanWeb core object <code class="code">window.keyman.interface</code> (with legacy-oriented, deprecated alias
  <code class="code">KeymanWeb</code>) exposes a number of functions for low-level processing of input, context and output. These functions are
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
  <dt><a href='any'><code>any</code> Function (Deprecated)</a></dt>
  <dd>Returns whether or not the char <code>ch</code> is found within the <a href="/developer/language/reference/any">
      <code class="language-keyman">any</code></a>(<a href="/developer/language/reference/store"><code class="language-keyman">store</code></a>)
    string, setting an internally-tracked index for use in the <code>indexOutput</code> function.</dd>
    <dd>Shorthand name:  <code>KeymanWeb.KA</code></dd>
  </dl>

  <dl>
  <dt><a href='beep'><code>beep</code> Function</a></dt>
  <dd>Flash body or element as substitute for an audible feedback <a href="/developer/language/reference/beep">
      <code class="language-keyman">beep</code></a>.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KB</code></dd>
  </dl>

  <dl>
  <dt><a href='beepReset'><code>beepReset</code> Function</a></dt>
  <dd>Cancels a previous feedback <a href="/developer/language/reference/beep"><code class="language-keyman">beep</code></a>
    operation on a page element.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KBR</code></dd>
  </dl>

  <dl>
  <dt><a href='context'><code>context</code> Function (Deprecated)</a></dt>
  <dd>Gets <a href="/developer/language/reference/context"><code class="language-keyman">context</code></a> for an ongoing
    keyboard operation relative to the caret's present position.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KC</code></dd>
  </dl>

  <dt><a href='contextExOutput'><code>contextExOutput</code> Function</a></dt>
  <dd>Emits the character or object at `contextOffset` from the current matched rule's context.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KCXO</code></dd>
  </dl>

  <dl>
  <dt><a href='contextMatch'><code>contextMatch</code> Function (Deprecated)</a></dt>
  <dd>Context matching:  Returns <code>true</code> if the specified <code>context</code> call matches a provided string.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KCM</code></dd>
  </dl>

  <dl>
  <dt><a href='deadkeyMatch'><code>deadkeyMatch</code> Function (Deprecated)</a></dt>
  <dd>Deadkey matching:  Seeks to match the <a href="/developer/language/reference/deadkey"><code class="language-keyman">deadkey</code></a>
    state <code>dk</code> at the relative caret position <code>n</code>.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KDM</code></dd>
  </dl>

  <dl>
  <dt><a href='deadkeyOutput'><code>deadkeyOutput</code> Function</a></dt>
    <dd>Deadkey output:  Associates the <a href="/developer/language/reference/deadkey"><code class="language-keyman">deadkey</code></a> state
      <code>dk</code> with the element at the current caret position, after overwriting <code>nd</code> characters.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KDO</code></dd>
  </dl>

  <dl>
    <dt><a href='deleteContext'><code>deleteContext</code> Function</a></dt>
    <dd>Context deletion - removes the specified number of deadkeys and characters from the left of the caret.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KDC</code></dd>
  </dl>

  <dl>
    <dt><a href='fullContextMatch'><code>fullContextMatch</code> Function</a></dt>
    <dd>Context matching:  Returns <code>true</code> if the current context matches the specified rule context specification.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KFCM</code></dd>
  </dl>

  <dl>
  <dt><a href='ifStore'><code>ifStore</code> Function</a></dt>
    <dd><code>ifStore</code> compares the content of a <a href="/developer/language/guide/stores#toc-system-stores">system
      <code class="language-keyman">store</code></a> with a string value.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KIFS</code></dd>
  </dl>

  <dl>
  <dt><a href='indexOutput'><code>indexOutput</code> Function</a></dt>
  <dd>Index-based output:  Outputs a mapped character according to a previous selection from a <code>keyman.interface.any()</code>
    call upon a <a href="/developer/language/reference/store"><code class="language-keyman">store</code></a>
    string, after deleting <code>nd</code> characters.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KIO</code></dd>
  </dl>

  <dl>
    <dt><a href='insertText'><code>insertText</code> Function</a></dt>
    <dd>Inserts a text string and optional <a href="/developer/language/reference/deadkey"><code class="language-keyman">deadkey</code></a>
      into the active output element.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KT</code></dd>
  </dl>

  <dl>
    <dt><a href='isKeypress'><code>isKeypress</code> Function</a></dt>
    <dd>Returns <code>true</code> if the input event corresponds to a keypress event resulting in character output.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KIK</code></dd>
  </dl>

  <dl>
  <dt><a href='keyInformation'><code>keyInformation</code> Function</a></dt>
  <dd>Returns an object with extended information about a specified keystroke event.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KKI</code></dd>
  </dl>

  <dl>
  <dt><a href='keyMatch'><code>keyMatch</code> Function</a></dt>
  <dd>Keystroke matching:  Returns <code>true</code> if the event matches the rule's shift mask and key code.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KKM</code></dd>
  </dl>

  <dl>
  <dt><a href='loadStore'><code>loadStore</code> Function</a></dt>
  <dd>Load an option <a href="/developer/language/guide/stores"><code class="language-keyman">store</code></a>
    value from a cookie or default value if no prior stored value exists.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KLOAD</code></dd>
  </dl>

  <dl>
  <dt><a href='_nul'><code>nul</code> Function</a></dt>
  <dd><a href="/developer/language/reference/nul"><code class="language-keyman">nul</code></a> context check:  Returns <code>true</code>
    if the length of the <a href="/developer/language/reference/context"><code class="language-keyman">context</code></a>
    is less than or equal to <code>n</code> characters.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KN</code></dd>
  </dl>

  <dl>
  <dt><a href='output'><code>output</code> Function</a></dt>
  <dd>Outputs the specified string to an element, overwriting characters before the caret if specified.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KO</code></dd>
  </dl>

  <dl>
  <dt><a href='registerKeyboard'><code>registerKeyboard</code> Function</a></dt>
  <dd>Register the keyboard stub and load the keyboard.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KR</code></dd>
  </dl>

  <dl>
  <dt><a href='registerStub'><code>registerStub</code> Function</a></dt>
  <dd>Register the keyboard stub, return true if already registered.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KRS</code></dd>
  </dl>

  <dl>
    <dt><a href='saveFocus'><code>saveFocus</code> Function</a></dt>
    <dd>Save focus:  Temporarily saves keyboard processing data for the currently-focused control.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KSF</code></dd>
  </dl>

  <dl>
  <dt><a href='saveStore'><code>saveStore</code> Function</a></dt>
  <dd>Save an option <a href="/developer/language/guide/stores"><code class="language-keyman">store</code></a>
    value to a cookie for the active keyboard.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KSAVE</code></dd>
  </dl>

  <dl>
  <dt><a href='setStore'><code>setStore</code> Function</a></dt>
  <dd><code>setStore</code> sets the value of a <a href="/developer/language/guide/stores#toc-system-stores">system
      <code class="language-keyman">store</code></a> to a string.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KSETS</code></dd>
  </dl>

  <dl>
  <dt><a href='stateMatch'><code>stateMatch</code> Function</a></dt>
  <dd>State-key matching:  Returns <code>true</code> if the event matches the rule's state-key requirements.</dd>
    <dd>Shorthand name: <code>KeymanWeb.KSM</code></dd>
  </dl>