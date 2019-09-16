<?php
  require_once('includes/template.php');

  head([
    'title' => "KeymanWeb 12.0 Keyboard Properties"
  ]);
?>
<h1 class="title" id="keyboard_properties">Keyboard Properties</h1>

<p>
    Most keyboards are generated automatically from the Keyman keyboard source by 
    <span class="emphasis"><em>Keyman Developer</em></span> and contain properties used by 
    <span class="emphasis"><em>KeymanWeb</em></span> during keyboard mapping. 
    Keyboards implement mapping by invoking functions within <span class="emphasis"><em>KeymanWeb</em></span>, 
    but do not interact directly with the user interface.  
    However, user interfaces may need to interact with custom developed keyboards if, for example, 
    they use a "pick list" or have other IME-like behavior.
  </p><p>
    Each registered keyboard object defines some or all of the following exposed string properties:
  </p><div class="informaltable">  <table border="1"><colgroup><col><col><col><col></colgroup><thead>
    <tr><th align="left">Property name</th><th align="left">Parameter in 'GetKeyboards'</th><th align="left">Defined by</th><th align="left">Description</th></tr></thead>
    <tbody><tr><td align="left"><span class="emphasis"><em>KN</em></span></td><td align="left">name</td><td align="left">Keyboard (mandatory)</td><td align="left">Visible name of keyboard</td></tr>
    <tr><td align="left"><span class="emphasis"><em>KI</em></span></td><td align="left">internalName</td><td align="left">Keyboard (mandatory)</td><td align="left">Internal, identifying name of keyboard (must be unique)</td></tr>
    <tr><td align="left"><span class="emphasis"><em>KD</em></span></td><td align="left">keyboardID</td><td align="left">Keyboard ID</td><td align="left">Globally unique ID (deprecated, assigned by Tavultesoft)</td></tr>
    <tr><td align="left"><span class="emphasis"><em>KL</em></span></td><td align="left">language</td><td align="left">Stub script</td><td align="left">Main supported language</td></tr>
    <tr><td align="left"><span class="emphasis"><em>KLC</em></span></td><td align="left">languageCode</td><td align="left">Keyboard (optional) or stub script</td><td align="left">BCP 47 code(s) for supported keyboard language(s)</td></tr>
    <tr><td align="left"><span class="emphasis"><em>KC</em></span></td><td align="left">country</td><td align="left">Stub script</td><td align="left">Name of country</td></tr>
    <tr><td align="left"><span class="emphasis"><em>KCC</em></span></td><td align="left">countryCode</td><td align="left">Stub script</td><td align="left">Abbreviation for country name</td></tr>
    <tr><td align="left"><span class="emphasis"><em>KR</em></span></td><td align="left">region</td><td align="left">Stub script</td><td align="left">Language region or continent</td></tr>
    <tr><td align="left"><span class="emphasis"><em>KRC</em></span></td><td align="left">regionCode</td><td align="left">Stub script</td><td align="left">Three-letter region code</td></tr>
    </tbody></table></div><p>
    Keyboard objects may also define some or all of the following properties:
  </p><div class="informaltable"><table border="1"><colgroup><col><col><col></colgroup><thead><tr><th align="left">Property name</th><th align="left">Type</th><th align="left">Description</th></tr></thead><tbody><tr><td align="left"><span class="emphasis"><em>KV</em></span></td><td align="left">JavaScript object</td><td align="left">Visual keyboard object</td></tr><tr><td align="left"><span class="emphasis"><em>KH</em></span></td><td align="left">html</td><td align="left">Keyboard-specific help</td></tr><tr><td align="left"><span class="emphasis"><em>KS</em></span></td><td align="left">number</td><td align="left">Uses SMP (1) or only BMP (0 or omitted) Unicode encoding</td></tr><tr><td align="left"><span class="emphasis"><em>KDU</em></span></td><td align="left">number</td><td align="left">Include (1) or omit (0 or none) Latin letter labels to keys for phonetic layouts</td></tr><tr><td align="left"><span class="emphasis"><em>KVKL</em></span></td><td align="left">JSON</td><td align="left">Layout specification</td></tr><tr><td align="left"><span class="emphasis"><em>KFont</em></span></td><td align="left">JavaScript object</td><td align="left">Embedded font specification for mapped input elements and on-screen keyboard</td></tr><tr><td align="left"><span class="emphasis"><em>KOskFont</em></span></td><td align="left">JavaScript object</td><td align="left">Embedded font specification for on-screen keyboard</td></tr></tbody></table></div><p>
    For most keyboards which require an embedded font, the same font will be used for mapped elements and the 
    on-screen keyboard, and only the <span class="emphasis"><em>KFont</em></span> property wil be defined.  The additional 
    property <span class="emphasis"><em>KOskFont</em></span> property would only be used where it may be helpful to use a different 
    embedded font for the on-screen keyboard.  
  </p><p>
    The <span class="emphasis"><em>KFont</em></span> and <span class="emphasis"><em>KOskFont</em></span> objects have the following members:
  </p><div class="informaltable"><table border="1"><colgroup><col><col><col><col></colgroup><thead><tr><th align="left">Member name</th><th align="left">Type</th><th align="left">Description</th><th align="left">Example</th></tr></thead><tbody><tr><td align="left"><span class="emphasis"><em>family</em></span></td><td align="left">string</td><td align="left">Font-family name for embedded font</td><td align="left">LatinWeb</td></tr><tr><td align="left"><span class="emphasis"><em>files</em></span></td><td align="left">string or string array</td><td align="left">Font file name or names</td><td align="left">['DejaVuSans.ttf','DejaVuSans.woff','DejaVuSans.eot']</td></tr></tbody></table></div></div>