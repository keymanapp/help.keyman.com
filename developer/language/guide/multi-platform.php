<?php

require_once('includes/template.php');

head([
  'title' => "Multi-platform keyboards"
]);
?>

<h2>Designing keyboards for use across multiple platforms</h2>

<p>Keyman Developer offers the capacity to develop keyboards for multiple platforms and environments with the same source material.
As it is sometimes beneficial to provide custom-tailored support for the features of particular platforms, please keep the
following in mind when designing a keyboard to enhance its potential use.</p>

<p>Keyman keyboards run on Windows, macOS, Linux, iOS, and Android devices and in web browsers. There are differences in how keyboards
  work for each of these platforms and Keyman automatically adapts to each platform as far as possible.</p>

<h3>Keyboard Design</h3>

<p>Keyboards are not a "one size fits all" problem in the world of computing.  Keyboards that work well for desktops and laptops
with their physical keyboards typically function quite differently from mobile phones and tablets with their touch-based keyboard
layouts.  While not strictly necessary, a keyboard developer should develop a touch layout for keyboards that
  might see use on mobile devices.</p>

<p>See our <a href="/developer/current-version/guides/develop/creating-a-touch-keyboard-layout-for-amharic">
    Creating a touch keyboard layout for Amharic</a> guide for an in-depth discussion of the benefits of touch layouts
and some philosophy on touch keyboard design.</p>

<p>While the presented layout will differ according to the physical device it is running on, the keyboard logic implemented in
  keyboard rules will be available to all platforms. This includes functionality such as reordering of input, normalization,
  and prevention of invalid sequences.</p>

<p>In the case that a keyboard should have special features or handling on a given platform, consider use of the
  <a href="/developer/language/reference/platform"><code class="language-keyman">platform()</code></a> statement to allow your keyboard
the flexibility necessary to accomplish those goals.</p>

<h2>Implementation Note</h2>

<p>Internally, Keyman for iPhone and iPad and Keyman for Android use KeymanWeb to display the touch keyboard, and to process
  rules. KeymanWeb keyboards (.js format) support basically all the same functionality as Keyman Desktop keyboards (.kmx format).
  There are a few store() statements specific to KeymanWeb that are detailed below.</p>

<p>If you do not provide a touch layout in your keyboard design, KeymanWeb will use the desktop On Screen Keyboard (.kvk / .kvks format)
  data. While the basic 'desktop'-style keyboard can work on mobile devices, it is generally suboptimal because keys are organised
  as in a physical layout, resulting in too many keys on each layer, which are small and hard to select reliably.</p>

<h3>Additional Stores for KeymanWeb</h3>

<p>The following Keyman Keyboard Language system stores provide functionality specific to KeymanWeb:</p>

<ul>
  <li><a href="/developer/language/reference/kmw_embedcss" title="&amp;kmw_embedcss store"><code class="language-keyman">&amp;kmw_embedcss</code>:</a>
  Specifies an additional library of CSS code to be embedded in a web or touch keyboard</li>
  <li><a href="/developer/language/reference/kmw_embedjs" title="&amp;kmw_embedjs store"><code class="language-keyman">&amp;kmw_embedjs</code>:</a>
  Specifies an additional library of Javascript code to be embedded in a web or touch keyboard</li>
  <li><a href="/developer/language/reference/kmw_helpfile" title="&amp;kmw_helpfile store"><code class="language-keyman">&amp;kmw_helpfile</code>:</a>
  Specifies the embedded help html file for web keyboards</li>
  <li><a href="/developer/language/reference/kmw_helptext" title="&amp; store"><code class="language-keyman">&amp;kmw_helptext</code>:</a>
  Specifies the embedded help text for web keyboards</li>
  <li><a href="/developer/language/reference/kmw_rtl" title="&amp;kmw_rtl store"><code class="language-keyman">&amp;kmw_rtl</code>:</a>
  Specifies the directionality of text controls for web keyboards</li>
</ul>

<h3>Recommendations for Supporting Multiple Platforms</h3>

<ul>
  <li>Only Unicode keyboards are supported for KeymanWeb (.js format) keyboards.</li>
  <li>When using keys with modifiers, use just Shift, AltGr (Right Alt) and Shift+AltGr. The left-hand modifiers should be reserved
    for system functions (such as hotkeys), and the Right Ctrl modifier can also be difficult, especially on macOS.</li>
  <li>When designing your touch layout, layers correspond roughly to modifiers, but avoid following the modifier paradigm for any
    layer apart from Shift: it usually makes more sense to use long-press menus rather than having an AltGr layer.</li>
  <li>Do include a visual keyboard and help information - this makes the keyboard vastly more useable.</li>
  <li>Save your keyboard file with a filename comprised of the letters a-z (lower case), digits 0-9, and underscore (_).
    <ul>
      <li>See <a href="/developer/keyboards/#toc-use-ascii-characters-for-keyboard-base-names">our keyboard submission guidelines page</a>
    for more details.</li></ul>
  </li>
  <li>Virtual key output is not supported: this is legacy functionality that has many compatibility concerns and
    should not be used on any platform.</li>
  <li>The <a href='/developer/language/reference/platform'><code class="language-keyman">platform()</code> statement</a> and 
    <a href='compile-targets'><code class="language-keyman">$keymanonly</code>
    and <code class="language-keyman">$keymanweb</code> compile targets</a> can be used to manage implementation differences
    between .kmx and .js compiled keyboard files. Where possible, use <code>platform()</code> statements.</li>
</ul>
