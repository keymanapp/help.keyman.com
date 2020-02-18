<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Test Keyboard Key Values</title>
</head>
<body>

<script type="text/javascript">
  var kctest, kcdebug;
  
  function _GetKeyEventProperties(e)
  {
    var s = new Object();
    if (!e) e = window.event;
    if (e.target) s.Ltarg = e.target;
    else if (e.srcElement) s.Ltarg = e.srcElement;
    else return null;
    if (s.Ltarg.nodeType == 3) // defeat Safari bug
      s.Ltarg = s.Ltarg.parentNode;

    if (e.keyCode) s.Lcode = e.keyCode;
    else if (e.which) s.Lcode = e.which;    
    else return null;
    
    if(e.shiftKey != null)
      s.Lmodifiers = 
        (e.shiftKey ? 0x10 : 0) |
        (e.ctrlKey ? (e.ctrlLeft ? 0x20 : 0x20) : 0) | 
        (e.altKey ? (e.altLeft ? 0x40 : 0x40) : 0);
    else
      s.Lmodifiers = 
        ((e.modifiers & 1) == 1 ? 0x40 : 0) |
        ((e.modifiers & 2) == 2 ? 0x20 : 0) |
        ((e.modifiers & 4) == 4 ? 0x10 : 0);
    
    s.LisVirtualKey = (e.charCode != null && (e.charCode == 0 || (s.Lmodifiers & 0x60) != 0)) || e.type != 'keypress';
    s.type = e.type;
    //if(s.Lcode > 18) alert(e.type+':'+e.charCode+'..'+e.type+'..'+s.Lmodifiers+' virtkey: '+s.LisVirtualKey);
   
    return s;
  }
  
function getkeycode(e)
{
  var Levent = _GetKeyEventProperties(e);
  kcdebug.value = kcdebug.value + Levent.type + ': '+Levent.Lcode+ ' ("'+String.fromCharCode(Levent.Lcode)+'", '+Levent.Lmodifiers+")\n";
  if(Levent.Lcode >= 32 && Levent.type == 'keydown') kckeycode.value = kckeycode.value + String.fromCharCode(Levent.Lcode);
}
  
</script>
<p><input id="kctest" size=40 type="text" /></p>
<p><textarea id="kcdebug" cols="60" rows="15"></textarea></p>
<p><input id="kckeycode" size=40 type="text" /></p>
<script type="text/javascript">
  kctest = document.getElementById('kctest');
  kcdebug = document.getElementById('kcdebug');
  kckeycode = document.getElementById('kckeycode');
  kctest.onkeydown = getkeycode;
  kctest.onkeypress = getkeycode;
</script>
</body>
</html>
