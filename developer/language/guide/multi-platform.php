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

<h3>Keyboard Design</h3>

<p>Keyboards are not a "one size fits all" problem in the world of computing.  Keyboards that work well for desktops and laptops
with their physical keyboards typically function quite differently from mobile phones and tablets with their touch-based keyboard
layouts.  While not strictly necessary, a keyboard developer should develop a touch layout for keyboards that
  might see use on mobile devices.</p>

<p>See our <a href="/developer/current-version/guides/develop/creating-a-touch-keyboard-layout-for-amharic">
    Creating a touch keyboard layout for Amharic</a> guide for an in-depth discussion of the benefits of touch layouts
and some philosophy on touch keyboard design.</p>

<p>In the case that a keyboard should have special features or handling on a given platform, consider use of the
  <a href="/developer/language/reference/platform"><code class="language-keyman">platform()</code></a> statement to allow your keyboard
the flexibility necessary to accomplish those goals.</p>

<h2>KeymanWeb</h2>

<p>Of particular note is KeymanWeb, our web-based keyboarding solution designed to work in browsers on any platform or device, touch-enabled or not.
  As KeymanWeb is also embedded within the iOS and Android apps as their keyboarding engine due to its flexibility, ensuring full compatibility
  with KeymanWeb will go a long way to making your keyboards fully cross-platform compatible.  Most standard Keyman
  functionality is available, though there are certain additional restrictions due to historical web development
  conditions.</p>

<p>Of particular note is that KeymanWeb customizes itself quite heavily based on the end-user's browsing device.  When
  viewed on a standard desktop or laptop computer, it emulates the behavior of Keyman Desktop and Keyman for Mac as
  closely as possible, displaying a similar OSK when requested.  On mobile devices, such as tablets or phones, KeymanWeb can
  adjust and use an optimized touch-layout keyboard if one is provided by the keyboard designer.  If one is not provided, the
  basic 'desktop'-style keyboard can also work on mobile devices, though it is generally suboptimal because keys are organised
  as in a physical layout, resulting in many keys on each layer.</p>

<h3>Additional Stores</h3>

<p>The following lists additional information that you can pass to the compiler.</p>

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
  <li><a href="/developer/language/reference/visualkeyboard"><code class="language-keyman">&amp;VisualKeyboard</code>:</a>
  Use a store with this name to reference the .kvk file to embed into the KeymanWeb keyboard.</li>
</ul>

<h3>Recommendations</h3>

<ul>
<li>Only Unicode keyboards are supported.</li>
<li>Avoid using virtual keys where possible, as some platforms do not support all virtual keys.  In particular, Opera does
not support ALT.</li>
<li>KeymanWeb presently cannot distinguish between left and right Ctrl/Alt, as most of the major browsers used to lack
  support for this.  You may wish to consider use of the <a href="/developer/language/reference/platform">
    <code class="language-keyman">platform()</code> statement</a> to provide workarounds for this in the web environment.</li>
<li>Do include a visual keyboard and help information - this makes the keyboard vastly more useable.</li>
  <li>Save your keyboard file with a filename comprised of the letters a-z (lower case), digits 0-9, and underscore (_).
    <ul><li>See <a href="/developer/keyboards/#toc-use-ascii-characters-for-keyboard-base-names">our keyboard submission guidelines page</a>
    for more details.</li></li></ul>
<li>Virtual key output is not supported.</li>
<li>The <code class="language-keyman">platform()</code> statement and <a href='compile-targets'><code class="language-keyman">$keymanonly</code>
    and <code class="language-keyman">$keymanweb</code> compile targets</a> can be used to manage implementation differences
  between the two platforms. Where possible, use <code>platform()</code> statements.
</ul>
