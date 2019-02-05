<?php
  require_once('includes/template.php');

  head([
    'title' => "US English keyboard layout"
  ]);
?>
<h1>US English keyboard layout</h1>

<p>The US English keyboard layout determines the position of keys for Keyman positional keyboards. The images below show the layout
that is used. Note that some European keyboards have a few additional keys which don't appear on this layout. The Virtual Key
Identifier in Keyman Developer can be used to identify the names of these keys.</p>

<h2>Unshifted</h2>

<style>
.keyboard {
  border-collapse: separate;
  padding: 0 0 0 10px;
}

.keyboard .spacer { 
  width: 12px 
  height: 0px;
}

.keyboard .key_borderA,
.keyboard .key_ctrl_border {
  border: solid 1px #c0c0c0; 
  border-radius: 5px; 
  box-shadow: 4px 4px 6px rgba(128,128,128,0.5);
  height: 24px;
  margin: 4px 2px;
}

.keyboard .key_borderA {
  background: white; 
}

.keyboard .key_ctrl_border {
  background: #e0e0e0; 
}
</style>

<table class="keyboard">
  <tbody>
    <tr>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
    </tr>
    <tr>
      <td colspan="4" class="key_borderA">`</td>
      <td colspan="4" class="key_borderA">1</td>
      <td colspan="4" class="key_borderA">2</td>
      <td colspan="4" class="key_borderA">3</td>
      <td colspan="4" class="key_borderA">4</td>
      <td colspan="4" class="key_borderA">5</td>
      <td colspan="4" class="key_borderA">6</td>
      <td colspan="4" class="key_borderA">7</td>
      <td colspan="4" class="key_borderA">8</td>
      <td colspan="4" class="key_borderA">9</td>
      <td colspan="4" class="key_borderA">0</td>
      <td colspan="4" class="key_borderA">-</td>
      <td colspan="4" class="key_borderA">=</td>
      <td colspan="8" class="key_ctrl_border">Bksp</td>
    </tr>
    <tr>
      <td colspan="6" class="key_ctrl_border">Tab</td>
      <td colspan="4" class="key_borderA">q</td>
      <td colspan="4" class="key_borderA">w</td>
      <td colspan="4" class="key_borderA">e</td>
      <td colspan="4" class="key_borderA">r</td>
      <td colspan="4" class="key_borderA">t</td>
      <td colspan="4" class="key_borderA">y</td>
      <td colspan="4" class="key_borderA">u</td>
      <td colspan="4" class="key_borderA">i</td>
      <td colspan="4" class="key_borderA">o</td>
      <td colspan="4" class="key_borderA">p</td>
      <td colspan="4" class="key_borderA">[</td>
      <td colspan="4" class="key_borderA">]</td>
      <td colspan="6" class="key_borderA">\</td>
    </tr>
    <tr>
      <td colspan="7" class="key_ctrl_border">Caps</td>
      <td colspan="4" class="key_borderA">a</td>
      <td colspan="4" class="key_borderA">s</td>
      <td colspan="4" class="key_borderA">d</td>
      <td colspan="4" class="key_borderA">f</td>
      <td colspan="4" class="key_borderA">g</td>
      <td colspan="4" class="key_borderA">h</td>
      <td colspan="4" class="key_borderA">j</td>
      <td colspan="4" class="key_borderA">k</td>
      <td colspan="4" class="key_borderA">l</td>
      <td colspan="4" class="key_borderA">;</td>
      <td colspan="4" class="key_borderA">'</td>
      <td colspan="9" class="key_ctrl_border">Enter</td>
    </tr>
    <tr>
      <td colspan="9" class="key_ctrl_border">Shift</td>
      <td colspan="4" class="key_borderA">z</td>
      <td colspan="4" class="key_borderA">x</td>
      <td colspan="4" class="key_borderA">c</td>
      <td colspan="4" class="key_borderA">v</td>
      <td colspan="4" class="key_borderA">b</td>
      <td colspan="4" class="key_borderA">n</td>
      <td colspan="4" class="key_borderA">m</td>
      <td colspan="4" class="key_borderA">,</td>
      <td colspan="4" class="key_borderA">.</td>
      <td colspan="4" class="key_borderA">/</td>
      <td colspan="11" class="key_ctrl_border">Shift</td>
    </tr>
    <tr>
      <td colspan="6" class="key_ctrl_border">Ctrl</td>
      <td colspan="4" class="gap"></td>
      <td colspan="6" class="key_ctrl_border">Alt</td>
      <td colspan="28" class="key_borderA"> </td>
      <td colspan="6" class="key_ctrl_border">Alt</td>
      <td colspan="4" class="gap"></td>
      <td colspan="6" class="key_ctrl_border">Ctrl</td>
    </tr>
  </tbody>
</table>

 <h2>Shifted</h2>
 
<table class="keyboard">
  <tbody>
    <tr>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
      <td class="spacer"></td>
    </tr>
    <tr>
      <td colspan="4" class="key_borderA">~</td>
      <td colspan="4" class="key_borderA">!</td>
      <td colspan="4" class="key_borderA">@</td>
      <td colspan="4" class="key_borderA">#</td>
      <td colspan="4" class="key_borderA">$</td>
      <td colspan="4" class="key_borderA">%</td>
      <td colspan="4" class="key_borderA">^</td>
      <td colspan="4" class="key_borderA">&amp;</td>
      <td colspan="4" class="key_borderA">*</td>
      <td colspan="4" class="key_borderA">(</td>
      <td colspan="4" class="key_borderA">)</td>
      <td colspan="4" class="key_borderA">_</td>
      <td colspan="4" class="key_borderA">+</td>
      <td colspan="8" class="key_ctrl_border">Bksp</td>
    </tr>
    <tr>
      <td colspan="6" class="key_ctrl_border">Tab</td>
      <td colspan="4" class="key_borderA">Q</td>
      <td colspan="4" class="key_borderA">W</td>
      <td colspan="4" class="key_borderA">E</td>
      <td colspan="4" class="key_borderA">R</td>
      <td colspan="4" class="key_borderA">T</td>
      <td colspan="4" class="key_borderA">Y</td>
      <td colspan="4" class="key_borderA">U</td>
      <td colspan="4" class="key_borderA">I</td>
      <td colspan="4" class="key_borderA">O</td>
      <td colspan="4" class="key_borderA">P</td>
      <td colspan="4" class="key_borderA">{</td>
      <td colspan="4" class="key_borderA">}</td>
      <td colspan="6" class="key_borderA">|</td>
    </tr>
    <tr>
      <td colspan="7" class="key_ctrl_border">Caps</td>
      <td colspan="4" class="key_borderA">A</td>
      <td colspan="4" class="key_borderA">S</td>
      <td colspan="4" class="key_borderA">D</td>
      <td colspan="4" class="key_borderA">F</td>
      <td colspan="4" class="key_borderA">G</td>
      <td colspan="4" class="key_borderA">H</td>
      <td colspan="4" class="key_borderA">J</td>
      <td colspan="4" class="key_borderA">K</td>
      <td colspan="4" class="key_borderA">L</td>
      <td colspan="4" class="key_borderA">:</td>
      <td colspan="4" class="key_borderA">"</td>
      <td colspan="9" class="key_ctrl_border">Enter</td>
    </tr>
    <tr>
      <td colspan="9" class="key_ctrl_border">Shift</td>
      <td colspan="4" class="key_borderA">Z</td>
      <td colspan="4" class="key_borderA">X</td>
      <td colspan="4" class="key_borderA">C</td>
      <td colspan="4" class="key_borderA">V</td>
      <td colspan="4" class="key_borderA">B</td>
      <td colspan="4" class="key_borderA">N</td>
      <td colspan="4" class="key_borderA">M</td>
      <td colspan="4" class="key_borderA">&lt;</td>
      <td colspan="4" class="key_borderA">&gt;</td>
      <td colspan="4" class="key_borderA">?</td>
      <td colspan="11" class="key_ctrl_border">Shift</td>
    </tr>
    <tr>
      <td colspan="6" class="key_ctrl_border">Ctrl</td>
      <td colspan="4" class="gap"></td>
      <td colspan="6" class="key_ctrl_border">Alt</td>
      <td colspan="28" class="key_borderA"> </td>
      <td colspan="6" class="key_ctrl_border">Alt</td>
      <td colspan="4" class="gap"></td>
      <td colspan="6" class="key_ctrl_border">Ctrl</td>
    </tr>
  </tbody>
</table>

