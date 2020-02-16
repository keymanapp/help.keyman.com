<?php
  require_once('includes/template.php');

  head([
    'title' => "Keyman language history"
  ]);
?>

<h1 class="title" id="reference__struct_history">Keyman language history</h1>

<h2>Keyman 3</h2>

<ul>
  <li>The structure of rules is not backwardly compatible with earlier versions of Keyman. The left hand side of the rule
  changed from being a sequence of keystrokes to being a context + single keystroke.</li>
  <li><a href='stores'>Stores</a> were introduced.</li>
  <li><a href='long-lines'>Long line</a> support</li>
</ul>

<h2>Keyman 4</h2>

<ul>
  <li>The <code>+</code> character became required, and usage became stricter to follow the standard now: the plus character
  must separate context from keystroke in a rule.</li>
  <li>Keyboards are now compiled by the developer into .kmx files, rather than being distributed as .kmn files.</li>
</ul>

<h2>Keyman 5</h2>

<ul>
  <li>Added <a href='unicode'>Unicode support</a></li>
  <li>Added <a href='../reference/call'>Input Method eXtension support</a></li>
  <li>Deprecated <a href='../reference/bitmap'><code>bitmaps</code> statement</a></li>
  <li>Deprecated <a href='../reference/language'><code>language</code> statement</a>.
  Note that the <code>language</code> statement was reintroduced in Keyman 6 with a new meaning</li>
  <li>Keyman 5.0 added system stores</li>
  <li>Deprecated <a href='../reference/layout'><code>layout</code> statement</a></li>
</ul>

<h2>Keyman 6</h2>

<ul>
  <li>Added <a href='constants'>named character constant</a> support</li>
  <li>Added <a href='../reference/ethnologuecode'>Ethnologue (ISO 639-3) code</a> support</li>
  <li>Added <a href='../reference/mnemoniclayout'>Mnemonic layouts</a> (reworked in Keyman 8 and 9)</li>
  <li>Added <a href='virtual-keys'>Virtual character keys</a> to support mnemonic layouts</li>
  <li>Keyman 6.0 added support for deadkeys and virtual keys in stores</li>
  <li>Enhanced <a href='../reference/context'><code>context()</code> statement</a> to work on left hand side of rule</li>
</ul>

<h2>Keyman 7</h2>

<ul>
  <li>Added <a href='../reference/visualkeyboard'><code>&amp;visualkeyboard</code> store</li>
  <li>Enhanced <a href='../reference/language'><code>&amp;language</code> store</a> to support combined codes</li>
  <li>Added <a href='../reference/notany'><code>notany()</code> statement</a></li>
  <li>Added web keyboard support</li>
  <li>Enhanced <a href='../reference/bitmap'><code>&amp;bitmap</code> store</a> to support .ico format files</li>
  <li>Added <a href='../reference/windowslanguages'><code>&amp;windowslanguages</code> store</a></li>
  <li>Keyman 7.0 extended maximum store length to 4095 characters</li>
</ul>

<h2>Keyman 8</h2>

<ul>
  <li>Added <a href='../reference/if'><code>if()</code> statement</a></li>
  <li>Added <a href='../reference/set'><code>set()</code> statement</a></li>
  <li>Added <a href='../reference/save'><code>save()</code> statement</a></li>
  <li>Added <a href='../reference/reset'><code>reset()</code> statement</a></li>
</ul>

<h2>Keyman 9</h2>

<ul>
  <li>Added <a href='/developer/current-version/guides/develop/'>touch device support</a></li>
  <li>Added <a href='../reference/keyboardversion'><code>&amp;keyboardversion</code> store</a></li>
  <li>Added <a href='../reference/kmw_embedcss'><code>&amp;kmw_embedcss</code> store</a></li>
  <li>Added <a href='../reference/platform'><code>platform</code> statement</a></li>
  <li>Added <a href='../reference/layer'><code>layer</code> statement</a></li>
  <li>Added <a href='../reference/targets'><code>&amp;targets</code> statement</a></li>
</ul>

<h2>Keyman 10</h2>

<ul>
  <li>Changed language tags from ISO 639-3 to BCP 47</li>
  <li>Deprecated <a href='../reference/ethnologuecode'><code>&amp;ethnologuecode</code> store</a></li>
  <li>Deprecated <a href='../reference/language'><code>&amp;language</code> store</a></li>
  <li>Deprecated <a href='../reference/windowslanguages'><code>&amp;windowslanguages</code> store</a></li>
  <li>Left and right modifiers are supported in KeymanWeb 10.0 and later</li>
  <li>Deadkeys now work 100% identically in KeymanWeb 10.0 and Keyman Desktop 10.0, in particular using multiple deadkeys in a row.</li>
</ul>
