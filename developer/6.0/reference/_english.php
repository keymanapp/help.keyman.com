<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT

HTML:  <style><!--
HTML:  div.body table.keyboard { border: none; table-layout: fixed }
HTML:  div.body table.keyboard td.gap { border: none; padding: 0 }
HTML:  div.body table.keyboard td.spacer { border: none; height: 1px; width: 10px; padding: 0 }
HTML:  div.body table.keyboard td.key_borderA { border-style: outset; border-width: 3px; height: 40px; font-size: 12pt; font-family: Arial; padding: 0; text-align: center; vertical-align: middle }
HTML:  div.body table.keyboard td.key_ctrl_border { border-style: outset; border-width: 3px; height: 40px; font-size: 12pt; font-family: Arial; background-color: #E0E0E0; padding: 0; text-align: left; vertical-align: middle }
HTML:  --></style>

PAGE:           US English keyboard layout

BODY

SECTION:        US English keyboard layout

TEXT:           The US English keyboard layout determines the position of keys for Keyman positional keyboards.  The
                images below show the layout that is used.  Note that some European keyboards have a few additional 
                keys which don't appear on this layout.  The Virtual Key Identifier in TIKE can be used to identify the
                names of these keys.

HEADING:        Unshifted

HTML:    <table class="keyboard" cellspacing=0 cellpadding=0 border=1>
HTML:      <tr>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>      </tr>
HTML:      <tr>
HTML:     <td colspan="4" class="key_borderA" style="">`</td>
HTML:     <td colspan="4" class="key_borderA" style="">1</td>
HTML:     <td colspan="4" class="key_borderA" style="">2</td>
HTML:     <td colspan="4" class="key_borderA" style="">3</td>
HTML:     <td colspan="4" class="key_borderA" style="">4</td>
HTML:     <td colspan="4" class="key_borderA" style="">5</td>
HTML:     <td colspan="4" class="key_borderA" style="">6</td>
HTML:     <td colspan="4" class="key_borderA" style="">7</td>
HTML:     <td colspan="4" class="key_borderA" style="">8</td>
HTML:     <td colspan="4" class="key_borderA" style="">9</td>
HTML:     <td colspan="4" class="key_borderA" style="">0</td>
HTML:     <td colspan="4" class="key_borderA" style="">-</td>
HTML:     <td colspan="4" class="key_borderA" style="">=</td>
HTML:     <td colspan="8" class="key_ctrl_border" style="">Bksp</td>
HTML:     </tr>
HTML:      <tr>
HTML:     <td colspan="6" class="key_ctrl_border" style="">Tab</td>
HTML:     <td colspan="4" class="key_borderA" style="">q</td>
HTML:     <td colspan="4" class="key_borderA" style="">w</td>
HTML:     <td colspan="4" class="key_borderA" style="">e</td>
HTML:     <td colspan="4" class="key_borderA" style="">r</td>
HTML:     <td colspan="4" class="key_borderA" style="">t</td>
HTML:     <td colspan="4" class="key_borderA" style="">y</td>
HTML:     <td colspan="4" class="key_borderA" style="">u</td>
HTML:     <td colspan="4" class="key_borderA" style="">i</td>
HTML:     <td colspan="4" class="key_borderA" style="">o</td>
HTML:     <td colspan="4" class="key_borderA" style="">p</td>
HTML:     <td colspan="4" class="key_borderA" style="">[</td>
HTML:     <td colspan="4" class="key_borderA" style="">]</td>
HTML:     <td colspan="6" class="key_borderA" style="">\</td>
HTML:     </tr>
HTML:      <tr>
HTML:     <td colspan="7" class="key_ctrl_border" style="">Caps</td>
HTML:     <td colspan="4" class="key_borderA" style="">a</td>
HTML:     <td colspan="4" class="key_borderA" style="">s</td>
HTML:     <td colspan="4" class="key_borderA" style="">d</td>
HTML:     <td colspan="4" class="key_borderA" style="">f</td>
HTML:     <td colspan="4" class="key_borderA" style="">g</td>
HTML:     <td colspan="4" class="key_borderA" style="">h</td>
HTML:     <td colspan="4" class="key_borderA" style="">j</td>
HTML:     <td colspan="4" class="key_borderA" style="">k</td>
HTML:     <td colspan="4" class="key_borderA" style="">l</td>
HTML:     <td colspan="4" class="key_borderA" style="">;</td>
HTML:     <td colspan="4" class="key_borderA" style="">'</td>
HTML:     <td colspan="9" class="key_ctrl_border" style="">Enter</td>
HTML:     </tr>
HTML:      <tr>
HTML:     <td colspan="9" class="key_ctrl_border" style="">Shift</td>
HTML:     <td colspan="4" class="key_borderA" style="">z</td>
HTML:     <td colspan="4" class="key_borderA" style="">x</td>
HTML:     <td colspan="4" class="key_borderA" style="">c</td>
HTML:     <td colspan="4" class="key_borderA" style="">v</td>
HTML:     <td colspan="4" class="key_borderA" style="">b</td>
HTML:     <td colspan="4" class="key_borderA" style="">n</td>
HTML:     <td colspan="4" class="key_borderA" style="">m</td>
HTML:     <td colspan="4" class="key_borderA" style="">,</td>
HTML:     <td colspan="4" class="key_borderA" style="">.</td>
HTML:     <td colspan="4" class="key_borderA" style="">/</td>
HTML:     <td colspan="11" class="key_ctrl_border" style="">Shift</td>
HTML:     </tr>
HTML:      <tr>
HTML:     <td colspan="6" class="key_ctrl_border" style="">Ctrl</td>
HTML:     <td colspan="4" class="gap"></td>
HTML:     <td colspan="6" class="key_ctrl_border" style="">Alt</td>
HTML:     <td colspan="28" class="key_borderA" style="">&nbsp;</td>
HTML:     <td colspan="6" class="key_ctrl_border" style="">Alt</td>
HTML:     <td colspan="4" class="gap"></td>
HTML:     <td colspan="6" class="key_ctrl_border" style="">Ctrl</td>
HTML:      </tr>
HTML:    </table>

HEADING:        Shifted

HTML:    <table class="keyboard" cellspacing=0 cellpadding=0 border=1>
HTML:      <tr>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>
HTML:      <td class="spacer"></td><td class="spacer"></td><td class="spacer"></td>      </tr>
HTML:      <tr>
HTML:     <td colspan="4" class="key_borderA" style="">~</td>
HTML:     <td colspan="4" class="key_borderA" style="">!</td>
HTML:     <td colspan="4" class="key_borderA" style="">@</td>
HTML:     <td colspan="4" class="key_borderA" style="">#</td>
HTML:     <td colspan="4" class="key_borderA" style="">$</td>
HTML:     <td colspan="4" class="key_borderA" style="">%</td>
HTML:     <td colspan="4" class="key_borderA" style="">^</td>
HTML:     <td colspan="4" class="key_borderA" style="">&</td>
HTML:     <td colspan="4" class="key_borderA" style="">*</td>
HTML:     <td colspan="4" class="key_borderA" style="">(</td>
HTML:     <td colspan="4" class="key_borderA" style="">)</td>
HTML:     <td colspan="4" class="key_borderA" style="">_</td>
HTML:     <td colspan="4" class="key_borderA" style="">+</td>
HTML:     <td colspan="8" class="key_ctrl_border" style="">Bksp</td>
HTML:     </tr>
HTML:      <tr>
HTML:     <td colspan="6" class="key_ctrl_border" style="">Tab</td>
HTML:     <td colspan="4" class="key_borderA" style="">Q</td>
HTML:     <td colspan="4" class="key_borderA" style="">W</td>
HTML:     <td colspan="4" class="key_borderA" style="">E</td>
HTML:     <td colspan="4" class="key_borderA" style="">R</td>
HTML:     <td colspan="4" class="key_borderA" style="">T</td>
HTML:     <td colspan="4" class="key_borderA" style="">Y</td>
HTML:     <td colspan="4" class="key_borderA" style="">U</td>
HTML:     <td colspan="4" class="key_borderA" style="">I</td>
HTML:     <td colspan="4" class="key_borderA" style="">O</td>
HTML:     <td colspan="4" class="key_borderA" style="">P</td>
HTML:     <td colspan="4" class="key_borderA" style="">{</td>
HTML:     <td colspan="4" class="key_borderA" style="">}</td>
HTML:     <td colspan="6" class="key_borderA" style="">|</td>
HTML:     </tr>
HTML:      <tr>
HTML:     <td colspan="7" class="key_ctrl_border" style="">Caps</td>
HTML:     <td colspan="4" class="key_borderA" style="">A</td>
HTML:     <td colspan="4" class="key_borderA" style="">S</td>
HTML:     <td colspan="4" class="key_borderA" style="">D</td>
HTML:     <td colspan="4" class="key_borderA" style="">F</td>
HTML:     <td colspan="4" class="key_borderA" style="">G</td>
HTML:     <td colspan="4" class="key_borderA" style="">H</td>
HTML:     <td colspan="4" class="key_borderA" style="">J</td>
HTML:     <td colspan="4" class="key_borderA" style="">K</td>
HTML:     <td colspan="4" class="key_borderA" style="">L</td>
HTML:     <td colspan="4" class="key_borderA" style="">:</td>
HTML:     <td colspan="4" class="key_borderA" style="">"</td>
HTML:     <td colspan="9" class="key_ctrl_border" style="">Enter</td>
HTML:     </tr>
HTML:      <tr>
HTML:     <td colspan="9" class="key_ctrl_border" style="">Shift</td>
HTML:     <td colspan="4" class="key_borderA" style="">Z</td>
HTML:     <td colspan="4" class="key_borderA" style="">X</td>
HTML:     <td colspan="4" class="key_borderA" style="">C</td>
HTML:     <td colspan="4" class="key_borderA" style="">V</td>
HTML:     <td colspan="4" class="key_borderA" style="">B</td>
HTML:     <td colspan="4" class="key_borderA" style="">N</td>
HTML:     <td colspan="4" class="key_borderA" style="">M</td>
HTML:     <td colspan="4" class="key_borderA" style=""><</td>
HTML:     <td colspan="4" class="key_borderA" style="">></td>
HTML:     <td colspan="4" class="key_borderA" style="">?</td>
HTML:     <td colspan="11" class="key_ctrl_border" style="">Shift</td>
HTML:     </tr>
HTML:      <tr>
HTML:     <td colspan="6" class="key_ctrl_border" style="">Ctrl</td>
HTML:     <td colspan="4" class="gap"></td>
HTML:     <td colspan="6" class="key_ctrl_border" style="">Alt</td>
HTML:     <td colspan="28" class="key_borderA" style="">&nbsp;</td>
HTML:     <td colspan="6" class="key_ctrl_border" style="">Alt</td>
HTML:     <td colspan="4" class="gap"></td>
HTML:     <td colspan="6" class="key_ctrl_border" style="">Ctrl</td>
HTML:      </tr>
HTML:    </table>

RELATED:        "Virtual key codes",   "_struct_vkeys.html"
                "Language reference", "_struct.html"

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
