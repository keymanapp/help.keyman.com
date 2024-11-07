<?php
require_once('includes/template.php');

head([
    'title' => "Keyman Core Desktop API"
]);
?>
<h1 class="title">Keyman Core Desktop API</h1>

<h2>Overview</h2>

<p>Keyman Core Desktop is the component of Keyman Engine that implements keyboarding rules. It is
platform independent and allows support for different keyboard formats to be implemented within
Keyman Engine. Eventually, Keyman Core will be used in Keyman on Windows, macOS and Linux.
As of writing, Keyman for Linux, Keyman for Windows, and Keyman Developer use Keyman Core.</p>

<p>This is an internal API intended for use only within Keyman Engine.</p>

<h2>Requirements</h2>

<ol type="1">
  <li id="req1">Cross platform.</li>
  <li id="req2">Cross language.</li>
  <li id="req3">Facilitate stateless operation of the Engine.</li>
  <li id="req4">Keyboard format agnostic -- support both KMN and future LDML based keyboards.</li>
  <li id="req5">Support querying Engine attributes.</li>
  <li id="req6">Support querying Keyboard attributes.</li>
  <li id="req7">Idempotent.</li>
</ol>

<h2>Design decisions in support of requirements:</h2>
<ul>
  <li>
    Use C or C99 types and calling convention for the interface, it has the
    broadest language FFI support. [<a href="#req1">1</a>,<a href="#req2">2</a>]
  </li>
  <li>
    Have client (Platform layer) code load keyboards, manage & pass state.
    [<a href="#req3">3</a>,<a href="#req4">4</a>,<a href="#req7">7</a>]
  </li>
  <li>
    Provide query calls to return static attributes data for keyboards and
    engine. [<a href="#req5">5</a>,<a href="#req6">6</a>]
  </li>
  <li>
    Provide get/set calls for client accessible keyboard state information.
    [<a href="#req4">3</a>,<a href="#req4">4</a>]
  </li>
</ul>

<h2>Glossary</h2>
<dl>
  <dt>Platform layer</dt>
  <dd>
    The code that consumes the Keyman Keyboard Processor API, and provides the
    operating system-specific handling of keystroke events and integration with
    applications.
  </dd>

  <dt>Client Application</dt>
  <dd>
    The application that has the focus and receives text events from the
    Platform layer.
  </dd>

  <dt>Context</dt>
  <dd>Text preceding the insertion point.</dd>

  <dt>Marker</dt>
  <dd>Positional state that can be placed in the Context.</dd>

  <dt>Keyboard</dt>
  <dd>A set of rules for execution by an Engine.</dd>

  <dt>Option</dt>
  <dd>A variable in a dynamic or static key value store.</dd>

  <dt>Processor</dt>
  <dd>
    The component that implements this API and can parse and execute a
    particular keyboard.
  </dd>

  <dt>State</dt>
  <dd>
    An object that hold internal state of the Processor for a given
    insertion point.
  </dd>

  <dt>Action</dt>
  <dd>
    A directive output by the processor detailing how the Platform layer
    should transform the Client Application's text buffer. There may be several
    items produced by a single keyboard event.
  </dd>

  <dt>Keyboard Event</dt>
  <dd>
    A virtual key event and modifier map received from the platform to be
    processed with the state object for this Client application.
  </dd>

  <dt>Virtual Key</dt>
  <dd>
    A code based on the US English layout, with values matching the Windows
    virtual key codes. See keyboardprocessor_vkeys.h for definitions.
  </dd>

  <dt>Modifier Key</dt>
  <dd>
    The set of Control, Shift, Alt, Caps Lock keys. On some platforms these
    may have other names (e.g. Alt is called Option on macOS); other
    platform-specific modifiers such as Windows key are excluded from this set.
    Some modifiers are transient, such as Control, and others have long-lasting
    state, such as Caps Lock.
  </dd>
</dl>
