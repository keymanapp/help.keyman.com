---
title: Hardware keyboard forms
---

Keyman works transparently across all the common hardware keyboard form factors. The following table lists the most common forms:

* US (ANSI) form
* European (ISO) form
* Brazilian (ABNT2) form

Most modern Korean and Japanese layouts are similar to US (ANSI) layout, with some additional control keys. They are not pictured here.

### Virtual Key Visual Layout

<style>
.keyboard {
  text-align: left;
  font-size: 16px;
  font-family: sans-serif;
  white-space: nowrap;
  overflow-x: auto;
  overflow-y: hidden;
  position: relative;
  left: 0; top: 0;
  margin-bottom: 1em;
}

.keyboard--row {
  display: block;
  height: 3em;
  margin: 0.5em;
}

.keyboard--row > * {
  display: inline-block;
  box-sizing: border-box;
  position: relative;
  cursor: pointer;
  -webkit-user-select: none;

  border-radius: 0.3em;
  margin: 0.06em;
  padding: 0 0.2em;
  width: 3.3em;
  height: 100%;
}

.key--w3 {
  width: 4.6em;
}

.key--w4 {
  width: 5.9em;
}

.key--w5 {
  width: 6.4em;
}

.key--w6 {
  width: 6.5em;
}

.key--w8 {
  width: 8.3em;
}

.key--space {
  width: 19em;
}

.key--iso-enter {
  left: 49.8em;
  top: 4em;
  width: 4.7em;
  height: 6.75em;
  float: right;
  position: absolute;
  border: none !important;
  box-shadow: none !important;
  border-radius: 0 !important;
  background: url(
  'data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 470 675"><path d="M 35 35   L 440 35   A 30 30, 0,0,1, 470 65   L 470,645   A 30 30, 0,0,1, 440,675   L 220,675   A 30 30, 0,0,1, 190 645 L 190,355 A 30 30, 0,0,0, 160,325 L 35,325 A 30 30, 0,0,1, 5,295 L 5,65 A 30 30, 0,0,1, 35 35" stroke="rgb(136,136,136)" stroke-width="0" fill="rgb(102,102,102)" /><path d="M 35 5   L 435 5   A 30 30, 0,0,1, 465 35   L 465,615   A 30 30, 0,0,1, 435,645   L 220,645   A 30 30, 0,0,1, 190 615 L 190,325 A 30 30, 0,0,0, 160,295 L 35,295 A 30 30, 0,0,1, 5,265 L 5,35 A 30 30, 0,0,1, 35 5" stroke="rgb(136,136,136)" stroke-width="6" fill="rgb(204,204,204)" /></svg>') 0 / auto 100% !important;

  clip-path:
    path();
    /* polygon(0 0, 4.8em 0, 4.8em 6.7em, 2.0em 6.7em, 2.0em 3.2em, 0 3.2em); */

}

.key--bottom-left > * {
  position: absolute;
  text-align: left;
  bottom: 0.4em;
  left: 0.4em;
}

.key--bottom-right > * {
  position: absolute;
  text-align: right;
  bottom: 0.4em;
  right: 0.4em;
}

.key--word > * {
  font-size: 0.8em;
}

.key--letter > div {
  font-size: 0.7em;
  font-family: Consolas;
  text-align: right;
  float: right;
  clear: right;
}

.key--letter > div.key--letter-sm {
  padding-top: 0.15em;
  font-size: 0.6em;
}

.key--letter > div:first-child {
  margin-top: 1.8em;
  line-height: 0.9em;
}

.key--letter > span {
  font-size: 0.9em;
  display: block;
  position: absolute;
  left: 0.2em;
  text-align: left;
}

.key--letter > span:last-child {
  top: 1.3em;
}

/* Colors */

.keyboard.keyboard--dark .keyboard--row > * {
  background: #333;
  color: #eee;
  border: 1px solid #444;
  box-shadow: 0 0.2em 0 0.05em #222;
  border-bottom-color: #555;
}

.keyboard.keyboard--dark .keyboard--row > .key--letter {
  background: #555;
  border-color: #666;
  box-shadow: 0 0.2em 0 0.05em #444;
  border-bottom-color: #707070;
}

.keyboard.keyboard--dark .keyboard--row > .key--extra {
  background: #336;
  border-color: #447;
  box-shadow: 0 0.2em 0 0.05em #224;
  border-bottom-color: #557;
}

.keyboard.keyboard--dark .key--letter > span {
  color: orange;
}

.keyboard.keyboard--dark .key--letter span.french {
  color: yellow
}

.keyboard.keyboard--dark .key--letter span.german {
  color: red
}

.keyboard.keyboard--dark .key--letter span.brazil {
  color: green
}

.keyboard.keyboard--dark .key--iso-enter {
  background: url(
  'data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 470 675"><path d="M 35 35   L 440 35   A 30 30, 0,0,1, 470 65   L 470,645   A 30 30, 0,0,1, 440,675   L 220,675   A 30 30, 0,0,1, 190 645 L 190,355 A 30 30, 0,0,0, 160,325 L 35,325 A 30 30, 0,0,1, 5,295 L 5,65 A 30 30, 0,0,1, 35 35" stroke-width="0" fill="rgb(34,34,34)" /><path d="M 35 5   L 435 5   A 30 30, 0,0,1, 465 35   L 465,615   A 30 30, 0,0,1, 435,645   L 220,645   A 30 30, 0,0,1, 190 615 L 190,325 A 30 30, 0,0,0, 160,295 L 35,295 A 30 30, 0,0,1, 5,265 L 5,35 A 30 30, 0,0,1, 35 5" stroke="rgb(68,68,68)" stroke-width="6" fill="rgb(51,51,51)" /></svg>') 0 / auto 100% !important;

}

/* Light keyboard */

.keyboard.keyboard--light .keyboard--row > * {
  background: #ccc;
  color: #111;
  border: 1px solid #888;
  box-shadow: 0 0.2em 0 0.05em #666;
  border-bottom-color: #ddd;
}

.keyboard.keyboard--light .keyboard--row > .key--letter {
  background: #f0f0f0;
  border-color: #888;
  box-shadow: 0 0.2em 0 0.05em #666;
  border-bottom-color: #ddd;
}

.keyboard.keyboard--light .keyboard--row > .key--extra {
  background: #ccf;
  border-color: #88c;
  box-shadow: 0 0.2em 0 0.05em #668;
  border-bottom-color: #99d;
}

.keyboard.keyboard--light .key--letter > span {
  color: #884400;
}

.keyboard.keyboard--light .key--letter span.french {
  color: #888800
}

.keyboard.keyboard--light .key--letter span.german {
  color: red
}

.keyboard.keyboard--light .key--letter span.brazil {
  color: green
}
</style>

The layouts below show US English "QWERTY" key caps, with a few of the
variations for French "AZERTY" and German "QWERTZ". They do not show
variations for punctuation, in order to maintain visual clarity.

The US virtual key identifiers are shown here, because these reflect the
identifiers that Keyman always uses, independent of the hardware layout.

## US / ANSI form

<div class="keyboard keyboard--light">
  <div class="keyboard--row">
    <div class="key--letter"><div>E00</div><div class='key--letter-sm'>K_BKQUOTE</div><span>~</span><span>`</span></div>
    <div class="key--letter"><div>E01</div><div>K_1</div><span>!</span><span>1</span></div>
    <div class="key--letter"><div>E02</div><div>K_2</div><span>@</span><span>2</span></div>
    <div class="key--letter"><div>E03</div><div>K_3</div><span>#</span><span>3</span></div>
    <div class="key--letter"><div>E04</div><div>K_4</div><span>$</span><span>4</span></div>
    <div class="key--letter"><div>E05</div><div>K_5</div><span>%</span><span>5</span></div>
    <div class="key--letter"><div>E06</div><div>K_6</div><span>^</span><span>6</span></div>
    <div class="key--letter"><div>E07</div><div>K_7</div><span>&</span><span>7</span></div>
    <div class="key--letter"><div>E08</div><div>K_8</div><span>*</span><span>8</span></div>
    <div class="key--letter"><div>E09</div><div>K_9</div><span>(</span><span>9</span></div>
    <div class="key--letter"><div>E10</div><div>K_0</div><span>)</span><span>0</span></div>
    <div class="key--letter"><div>E11</div><div class='key--letter-sm'>K_HYPHEN</div><span>_</span><span>-</span></div>
    <div class="key--letter"><div>E12</div><div>K_EQUAL</div><span>+</span><span>=</span></div>
    <div class="key--bottom-right key--word key--w4"><span>Backspace</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w3"><span>Tab</span></div>
    <div class="key--letter"><div>D01</div><div>K_Q</div><span>Q</span><span class='french'>A</span></div>
    <div class="key--letter"><div>D02</div><div>K_W</div><span>W</span><span class='french'>Z</span></div>
    <div class="key--letter"><div>D03</div><div>K_E</div><span>E</span><span></span></div>
    <div class="key--letter"><div>D04</div><div>K_R</div><span>R</span><span></span></div>
    <div class="key--letter"><div>D05</div><div>K_T</div><span>T</span><span></span></div>
    <div class="key--letter"><div>D06</div><div>K_Y</div><span>Y</span><span class='german'>Z</span></div>
    <div class="key--letter"><div>D07</div><div>K_U</div><span>U</span><span></span></div>
    <div class="key--letter"><div>D08</div><div>K_I</div><span>I</span><span></span></div>
    <div class="key--letter"><div>D09</div><div>K_O</div><span>O</span><span></span></div>
    <div class="key--letter"><div>D10</div><div>K_P</div><span>P</span><span></span></div>
    <div class="key--letter"><div>D11</div><div>K_LBRKT</div><span>{</span><span>[</span></div>
    <div class="key--letter"><div>D12</div><div>K_RBRKT</div><span>}</span><span>]</span></div>
    <div class="key--letter key--w3"><div>D13</div><div>K_BKSLASH</div><span>|</span><span>\</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w6"><span>Caps Lock</span></div>
    <div class="key--letter"><div>C01</div><div>K_A</div><span>A</span><span class='french'>Q</span></div>
    <div class="key--letter"><div>C02</div><div>K_S</div><span>S</span><span></span></div>
    <div class="key--letter"><div>C03</div><div>K_D</div><span>D</span><span></span></div>
    <div class="key--letter"><div>C04</div><div>K_F</div><span>F</span><span></span></div>
    <div class="key--letter"><div>C05</div><div>K_G</div><span>G</span><span></span></div>
    <div class="key--letter"><div>C06</div><div>K_H</div><span>H</span><span></span></div>
    <div class="key--letter"><div>C07</div><div>K_J</div><span>J</span><span></span></div>
    <div class="key--letter"><div>C08</div><div>K_K</div><span>K</span><span></span></div>
    <div class="key--letter"><div>C09</div><div>K_L</div><span>L</span><span></span></div>
    <div class="key--letter"><div>C10</div><div>K_COLON</div><span>: <span class='french'>M</span></span><span>;</span></div>
    <div class="key--letter"><div>C11</div><div>K_QUOTE</div><span>"</span><span>'</span></div>
    <div class="key--bottom-right key--word key--w5"><span>Enter</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w8"><span>Shift</span></div>
    <div class="key--letter"><div>B01</div><div>K_Z</div><span>Z <span class='german'>Y</span></span><span class='french'>W</span></div>
    <div class="key--letter"><div>B02</div><div>K_X</div><span>X</span><span></span></div>
    <div class="key--letter"><div>B03</div><div>K_C</div><span>C</span><span></span></div>
    <div class="key--letter"><div>B04</div><div>K_V</div><span>V</span><span></span></div>
    <div class="key--letter"><div>B05</div><div>K_B</div><span>B</span><span></span></div>
    <div class="key--letter"><div>B06</div><div>K_N</div><span>N</span><span></span></div>
    <div class="key--letter"><div>B07</div><div>K_M</div><span>M</span><span></span></div>
    <div class="key--letter"><div>B08</div><div>K_COMMA</div><span>&lt;</span><span>,</span></div>
    <div class="key--letter"><div>B09</div><div class='key--letter-sm'>K_PERIOD</div><span>&gt;</span><span>.</span></div>
    <div class="key--letter"><div>B10</div><div>K_SLASH</div><span>?</span><span>/</span></div>
    <div class="key--bottom-right key--word key--w8"><span>Shift</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w3"><span>Ctrl</span></div>
    <div class="key--bottom-left key--word key--w3"><span>Win (Cmd)</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Alt (Option)</span></div>
    <div class="key--letter key--right key--space"><div>A03</div><div>K_SPACE</div><span>&nbsp;</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Alt (Option)</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Win (Cmd)</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Context</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Ctrl</span></div>
  </div>
</div>

Some rare layouts move the `[K_BKSLASH]` / `[D13]` key up a row, to the left of
<kbd>Backspace</kbd>. The key identifiers do not change.

## European / ISO form

<div class="keyboard keyboard--light">
  <div class="keyboard--row">
    <div class="key--letter"><div>E00</div><div class='key--letter-sm'>K_BKQUOTE</div><span>~</span><span>`</span></div>
    <div class="key--letter"><div>E01</div><div>K_1</div><span>!</span><span>1</span></div>
    <div class="key--letter"><div>E02</div><div>K_2</div><span>@</span><span>2</span></div>
    <div class="key--letter"><div>E03</div><div>K_3</div><span>#</span><span>3</span></div>
    <div class="key--letter"><div>E04</div><div>K_4</div><span>$</span><span>4</span></div>
    <div class="key--letter"><div>E05</div><div>K_5</div><span>%</span><span>5</span></div>
    <div class="key--letter"><div>E06</div><div>K_6</div><span>^</span><span>6</span></div>
    <div class="key--letter"><div>E07</div><div>K_7</div><span>&</span><span>7</span></div>
    <div class="key--letter"><div>E08</div><div>K_8</div><span>*</span><span>8</span></div>
    <div class="key--letter"><div>E09</div><div>K_9</div><span>(</span><span>9</span></div>
    <div class="key--letter"><div>E10</div><div>K_0</div><span>)</span><span>0</span></div>
    <div class="key--letter"><div>E11</div><div class='key--letter-sm'>K_HYPHEN</div><span>_</span><span>-</span></div>
    <div class="key--letter"><div>E12</div><div>K_EQUAL</div><span>+</span><span>=</span></div>
    <div class="key--bottom-right key--word key--w4"><span>Backspace</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w3"><span>Tab</span></div>
    <div class="key--letter"><div>D01</div><div>K_Q</div><span>Q</span><span class='french'>A</span></div>
    <div class="key--letter"><div>D02</div><div>K_W</div><span>W</span><span class='french'>Z</span></div>
    <div class="key--letter"><div>D03</div><div>K_E</div><span>E</span><span></span></div>
    <div class="key--letter"><div>D04</div><div>K_R</div><span>R</span><span></span></div>
    <div class="key--letter"><div>D05</div><div>K_T</div><span>T</span><span></span></div>
    <div class="key--letter"><div>D06</div><div>K_Y</div><span>Y</span><span class='german'>Z</span></div>
    <div class="key--letter"><div>D07</div><div>K_U</div><span>U</span><span></span></div>
    <div class="key--letter"><div>D08</div><div>K_I</div><span>I</span><span></span></div>
    <div class="key--letter"><div>D09</div><div>K_O</div><span>O</span><span></span></div>
    <div class="key--letter"><div>D10</div><div>K_P</div><span>P</span><span></span></div>
    <div class="key--letter"><div>D11</div><div>K_LBRKT</div><span>{</span><span>[</span></div>
    <div class="key--letter"><div>D12</div><div>K_RBRKT</div><span>}</span><span>]</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w6"><span>Caps Lock</span></div>
    <div class="key--letter"><div>C01</div><div>K_A</div><span>A</span><span class='french'>Q</span></div>
    <div class="key--letter"><div>C02</div><div>K_S</div><span>S</span><span></span></div>
    <div class="key--letter"><div>C03</div><div>K_D</div><span>D</span><span></span></div>
    <div class="key--letter"><div>C04</div><div>K_F</div><span>F</span><span></span></div>
    <div class="key--letter"><div>C05</div><div>K_G</div><span>G</span><span></span></div>
    <div class="key--letter"><div>C06</div><div>K_H</div><span>H</span><span></span></div>
    <div class="key--letter"><div>C07</div><div>K_J</div><span>J</span><span></span></div>
    <div class="key--letter"><div>C08</div><div>K_K</div><span>K</span><span></span></div>
    <div class="key--letter"><div>C09</div><div>K_L</div><span>L</span><span></span></div>
    <div class="key--letter"><div>C10</div><div>K_COLON</div><span>: <span class='french'>M</span></span><span>;</span></div>
    <div class="key--letter"><div>C11</div><div>K_QUOTE</div><span>"</span><span>'</span></div>
    <div class="key--letter key--extra"><div>D13</div><div class='key--letter-sm'>K_BKSLASH</div><span>|</span><span>\</span></div>
    <div class="key--bottom-right key--word key--iso-enter"><span>Enter</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w3"><span>Shift</span></div>
    <div class="key--letter key--extra"><div>B00</div><div>K_oE2</div><span>|</span><span>\</span></div>
    <div class="key--letter"><div>B01</div><div>K_Z</div><span>Z <span class='german'>Y</span></span><span class='french'>W</span></div>
    <div class="key--letter"><div>B02</div><div>K_X</div><span>X</span><span></span></div>
    <div class="key--letter"><div>B03</div><div>K_C</div><span>C</span><span></span></div>
    <div class="key--letter"><div>B04</div><div>K_V</div><span>V</span><span></span></div>
    <div class="key--letter"><div>B05</div><div>K_B</div><span>B</span><span></span></div>
    <div class="key--letter"><div>B06</div><div>K_N</div><span>N</span><span></span></div>
    <div class="key--letter"><div>B07</div><div>K_M</div><span>M</span><span></span></div>
    <div class="key--letter"><div>B08</div><div>K_COMMA</div><span>&lt;</span><span>,</span></div>
    <div class="key--letter"><div>B09</div><div class='key--letter-sm'>K_PERIOD</div><span>&gt;</span><span>.</span></div>
    <div class="key--letter"><div>B10</div><div>K_SLASH</div><span>?</span><span>/</span></div>
    <div class="key--bottom-right key--word key--w8"><span>Shift</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w3"><span>Ctrl</span></div>
    <div class="key--bottom-left key--word key--w3"><span>Win (Cmd)</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Alt (Option)</span></div>
    <div class="key--letter key--right key--space"><div>A03</div><div>K_SPACE</div><span>&nbsp;</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Alt (Option)</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Win (Cmd)</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Context</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Ctrl</span></div>
  </div>
</div>

The keys shown in blue differ from the US / ANSI form:
  * The key `[K_oE2]` / `[B00]` to the right of the left <kbd>Shift</kbd> key is
    not found on the US / ANSI form.
  * The <kbd>Enter</kbd> key is two rows high.
  * The key `[K_BKSLASH]` / `[D13]` is moved down a row on the European / ISO.
    Note that it retains its designation of `D13` despite being on row `C`.

## Brazilian / ABNT2 form

<div class="keyboard keyboard--light">
  <div class="keyboard--row">
    <div class="key--letter"><div>E00</div><div class='key--letter-sm'>K_BKQUOTE</div><span>~</span><span>`</span></div>
    <div class="key--letter"><div>E01</div><div>K_1</div><span>!</span><span>1</span></div>
    <div class="key--letter"><div>E02</div><div>K_2</div><span>@</span><span>2</span></div>
    <div class="key--letter"><div>E03</div><div>K_3</div><span>#</span><span>3</span></div>
    <div class="key--letter"><div>E04</div><div>K_4</div><span>$</span><span>4</span></div>
    <div class="key--letter"><div>E05</div><div>K_5</div><span>%</span><span>5</span></div>
    <div class="key--letter"><div>E06</div><div>K_6</div><span>^</span><span>6</span></div>
    <div class="key--letter"><div>E07</div><div>K_7</div><span>&</span><span>7</span></div>
    <div class="key--letter"><div>E08</div><div>K_8</div><span>*</span><span>8</span></div>
    <div class="key--letter"><div>E09</div><div>K_9</div><span>(</span><span>9</span></div>
    <div class="key--letter"><div>E10</div><div>K_0</div><span>)</span><span>0</span></div>
    <div class="key--letter"><div>E11</div><div class='key--letter-sm'>K_HYPHEN</div><span>_</span><span>-</span></div>
    <div class="key--letter"><div>E12</div><div>K_EQUAL</div><span>+</span><span>=</span></div>
    <div class="key--bottom-right key--word key--w4"><span>Backspace</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w3"><span>Tab</span></div>
    <div class="key--letter"><div>D01</div><div>K_Q</div><span>Q</span><span class='french'>A</span></div>
    <div class="key--letter"><div>D02</div><div>K_W</div><span>W</span><span class='french'>Z</span></div>
    <div class="key--letter"><div>D03</div><div>K_E</div><span>E</span><span></span></div>
    <div class="key--letter"><div>D04</div><div>K_R</div><span>R</span><span></span></div>
    <div class="key--letter"><div>D05</div><div>K_T</div><span>T</span><span></span></div>
    <div class="key--letter"><div>D06</div><div>K_Y</div><span>Y</span><span class='german'>Z</span></div>
    <div class="key--letter"><div>D07</div><div>K_U</div><span>U</span><span></span></div>
    <div class="key--letter"><div>D08</div><div>K_I</div><span>I</span><span></span></div>
    <div class="key--letter"><div>D09</div><div>K_O</div><span>O</span><span></span></div>
    <div class="key--letter"><div>D10</div><div>K_P</div><span>P</span><span></span></div>
    <div class="key--letter"><div>D11</div><div>K_LBRKT</div><span>{</span><span>[</span></div>
    <div class="key--letter"><div>D12</div><div>K_RBRKT</div><span>}</span><span>]</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w6"><span>Caps Lock</span></div>
    <div class="key--letter"><div>C01</div><div>K_A</div><span>A</span><span class='french'>Q</span></div>
    <div class="key--letter"><div>C02</div><div>K_S</div><span>S</span><span></span></div>
    <div class="key--letter"><div>C03</div><div>K_D</div><span>D</span><span></span></div>
    <div class="key--letter"><div>C04</div><div>K_F</div><span>F</span><span></span></div>
    <div class="key--letter"><div>C05</div><div>K_G</div><span>G</span><span></span></div>
    <div class="key--letter"><div>C06</div><div>K_H</div><span>H</span><span></span></div>
    <div class="key--letter"><div>C07</div><div>K_J</div><span>J</span><span></span></div>
    <div class="key--letter"><div>C08</div><div>K_K</div><span>K</span><span></span></div>
    <div class="key--letter"><div>C09</div><div>K_L</div><span>L</span><span></span></div>
    <div class="key--letter"><div>C10</div><div>K_COLON</div><span>: <span class='french'>M</span></span><span>;</span></div>
    <div class="key--letter"><div>C11</div><div>K_QUOTE</div><span>"</span><span>'</span></div>
    <div class="key--letter key--extra"><div>D13</div><div class='key--letter-sm'>K_BKSLASH</div><span>|</span><span>\</span></div>
    <div class="key--bottom-right key--word key--iso-enter"><span>Enter</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w3"><span>Shift</span></div>
    <div class="key--letter key--extra"><div>B00</div><div>K_oE2</div><span>|</span><span>\</span></div>
    <div class="key--letter"><div>B01</div><div>K_Z</div><span>Z <span class='german'>Y</span></span><span class='french'>W</span></div>
    <div class="key--letter"><div>B02</div><div>K_X</div><span>X</span><span></span></div>
    <div class="key--letter"><div>B03</div><div>K_C</div><span>C</span><span></span></div>
    <div class="key--letter"><div>B04</div><div>K_V</div><span>V</span><span></span></div>
    <div class="key--letter"><div>B05</div><div>K_B</div><span>B</span><span></span></div>
    <div class="key--letter"><div>B06</div><div>K_N</div><span>N</span><span></span></div>
    <div class="key--letter"><div>B07</div><div>K_M</div><span>M</span><span></span></div>
    <div class="key--letter"><div>B08</div><div>K_COMMA</div><span>&lt;</span><span>,</span></div>
    <div class="key--letter"><div>B09</div><div class='key--letter-sm'>K_PERIOD</div><span>&gt;</span><span>.</span></div>
    <div class="key--letter"><div>B10</div><div>K_SLASH</div><span>?</span><span>/</span></div>
    <div class="key--letter key--extra"><div>B11</div><div>K_?C1</div><span class='brazil'>?</span><span class='brazil'>/</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Shift</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w3"><span>Ctrl</span></div>
    <div class="key--bottom-left key--word key--w3"><span>Win (Cmd)</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Alt (Option)</span></div>
    <div class="key--letter key--right key--space"><div>A03</div><div>K_SPACE</div><span>&nbsp;</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Alt (Option)</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Win (Cmd)</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Context</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Ctrl</span></div>
  </div>
</div>

The keys shown in blue differ from the US / ANSI form:
  * The key `[K_oE2]` / `[B00]` to the right of the left <kbd>Shift</kbd> key is
    not found on the US / ANSI form.
  * Right hand blue key `[K_?C1]` / `[B11]` is not found on the US / ANSI form.
  * The <kbd>Enter</kbd> key is two rows high.
  * The key `[K_BKSLASH]` / `[D13]` is moved down a row on the European / ISO.
    Note that it retains its designation of `D13` despite being on row `C`.
