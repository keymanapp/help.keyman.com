<?php /*
  Name:             midas
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      18 Mar 2008

  Modified Date:    18 Mar 2008
  Authors:          mcdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          18 Mar 2008 - mcdurdin - Tidy up
*/
  $pagetitle = 'Mozilla Rich Text Editing Example';
  $script = 'unified_loader.js';
  $wide_page = true;
  $ondocumentload='Start';
  $header_extra_code = <<<END
<script type='text/javascript'>  
  function Start() {
  document.getElementById('edit').contentWindow.document.designMode = "on";
  try {
    document.getElementById('edit').contentWindow.document.execCommand("undo", false, null);
  }  catch (e) {
    alert("This demo is not supported on your level of Mozilla.");
  }

  InitToolbarButtons();
  if (document.addEventListener) {
    document.addEventListener("mousedown", dismisscolorpalette, true);
    document.getElementById("edit").contentWindow.document.addEventListener("mousedown", dismisscolorpalette, true);
    document.addEventListener("keypress", dismisscolorpalette, true);
    document.getElementById("edit").contentWindow.document.addEventListener("keypress", dismisscolorpalette, true);
  } else if (document.attachEvent) {
    document.attachEvent("mousedown", dismisscolorpalette, true);
    document.getElementById("edit").contentWindow.document.attachEvent("mousedown", dismisscolorpalette, true);
    document.attachEvent("keypress", dismisscolorpalette, true);
    document.getElementById("edit").contentWindow.document.attachEvent("keypress", dismisscolorpalette, true);
  }
  
  KeymanWeb.Init();
  KeymanWeb.AttachToControl(document.getElementById('edit'));
}
</script>
END;
  require_once('kmwdevheader.php');
?>

    <style type="text/css">
      .imagebutton {height: 22px; width: 23px; border: solid 2px #C0C0C0; background-color: #C0C0C0}
      .image {position: relative; left: 1px; top: 1px; height:20px; width:21px; border:none;}
      .toolbar {height: 30px; background-color: #C0C0C0;}
    </style>
    <script type="text/javascript">

var command = "";

function InitToolbarButtons() {
  var kids = document.getElementsByTagName('DIV');

  for (var i=0; i < kids.length; i++) {
    if (kids[i].className == "imagebutton") {
      kids[i].onmouseover = tbmouseover;
      kids[i].onmouseout = tbmouseout;
      kids[i].onmousedown = tbmousedown;
      kids[i].onmouseup = tbmouseup;
      kids[i].onclick = tbclick;
    }
  }
}

function tbmousedown(e)
{
  var evt = e ? e : window.event; 

  this.firstChild.style.left = '2px';
  this.firstChild.style.top = '2px';
  this.style.border="inset 2px";
  if (evt.returnValue) {
    evt.returnValue = false;
  } else if (evt.preventDefault) {
    evt.preventDefault( );
  } else {
    return false;
  }
}

function tbmouseup()
{
  this.firstChild.style.left = '1px';
  this.firstChild.style.top = '1px';
  this.style.border="outset 2px";
}

function tbmouseout()
{
  this.style.border="solid 2px #C0C0C0";
}

function tbmouseover()
{
  this.style.border="outset 2px";
}

  function insertNodeAtSelection(win, insertNode)
  {
      // get current selection
      var sel = win.getSelection();

      // get the first range of the selection
      // (there's almost always only one range)
      var range = sel.getRangeAt(0);

      // deselect everything
      sel.removeAllRanges();

      // remove content of current selection from document
      range.deleteContents();

      // get location of current selection
      var container = range.startContainer;
      var pos = range.startOffset;

      // make a new range for the new selection
      range=document.createRange();

      if (container.nodeType==3 && insertNode.nodeType==3) {

        // if we insert text in a textnode, do optimized insertion
        container.insertData(pos, insertNode.nodeValue);

        // put cursor after inserted text
        range.setEnd(container, pos+insertNode.length);
        range.setStart(container, pos+insertNode.length);

      } else {


        var afterNode;
        if (container.nodeType==3) {

          // when inserting into a textnode
          // we create 2 new textnodes
          // and put the insertNode in between

          var textNode = container;
          container = textNode.parentNode;
          var text = textNode.nodeValue;

          // text before the split
          var textBefore = text.substr(0,pos);
          // text after the split
          var textAfter = text.substr(pos);

          var beforeNode = document.createTextNode(textBefore);
          afterNode = document.createTextNode(textAfter);

          // insert the 3 new nodes before the old one
          container.insertBefore(afterNode, textNode);
          container.insertBefore(insertNode, afterNode);
          container.insertBefore(beforeNode, insertNode);

          // remove the old node
          container.removeChild(textNode);

        } else {

          // else simply insert the node
          afterNode = container.childNodes[pos];
          container.insertBefore(insertNode, afterNode);
        }

        range.setEnd(afterNode, 0);
        range.setStart(afterNode, 0);
      }

      sel.addRange(range);
  };

function getOffsetTop(elm) {

  var mOffsetTop = elm.offsetTop;
  var mOffsetParent = elm.offsetParent;

  while(mOffsetParent){
    mOffsetTop += mOffsetParent.offsetTop;
    mOffsetParent = mOffsetParent.offsetParent;
  }
 
  return mOffsetTop;
}

function getOffsetLeft(elm) {

  var mOffsetLeft = elm.offsetLeft;
  var mOffsetParent = elm.offsetParent;

  while(mOffsetParent){
    mOffsetLeft += mOffsetParent.offsetLeft;
    mOffsetParent = mOffsetParent.offsetParent;
  }
 
  return mOffsetLeft;
}

function execColor(color)
{
  document.getElementById("edit").contentWindow.focus();
  document.getElementById("edit").contentWindow.document.execCommand(window.command, false, color);
  document.getElementById("colorpalette").style.visibility="hidden";
}

function tbclick()
{
  if ((this.id == "forecolor") || (this.id == "hilitecolor")) {
    window.command = this.id;
    buttonElement = document.getElementById(this.id);
    document.getElementById("colorpalette").style.left = getOffsetLeft(buttonElement)+'px';
    document.getElementById("colorpalette").style.top = getOffsetTop(buttonElement) + buttonElement.offsetHeight+'px';
    document.getElementById("colorpalette").style.visibility="visible";
  } else if (this.id == "createlink") {
    var szURL = prompt("Enter a URL:", "http://");
    if ((szURL != null) && (szURL != "")) {
      document.getElementById('edit').contentWindow.document.execCommand("CreateLink",false,szURL);
    }
  } else if (this.id == "createimage") {
    imagePath = prompt('Enter Image URL:', 'http://');
    if ((imagePath != null) && (imagePath != "")) {
      document.getElementById('edit').contentWindow.document.execCommand('InsertImage', false, imagePath);
    }
  } else if (this.id == "createtable") {
    e = document.getElementById("edit");
    rowstext = prompt("enter rows");
    colstext = prompt("enter cols");
    rows = parseInt(rowstext);
    cols = parseInt(colstext);
    if ((rows > 0) && (cols > 0)) {
      table = e.contentWindow.document.createElement("table");
      table.setAttribute("border", "1");
      table.setAttribute("cellpadding", "2");
      table.setAttribute("cellspacing", "2");
      tbody = e.contentWindow.document.createElement("tbody");
      for (var i=0; i < rows; i++) {
        tr =e.contentWindow.document.createElement("tr");
        for (var j=0; j < cols; j++) {
          td =e.contentWindow.document.createElement("td");
          br =e.contentWindow.document.createElement("br");
          td.appendChild(br);
          tr.appendChild(td);
        }
        tbody.appendChild(tr);
      }
      table.appendChild(tbody);      
      insertNodeAtSelection(e.contentWindow, table);
    }
  } else {
    document.getElementById('edit').contentWindow.document.execCommand(this.id, false, null);
  }
  document.getElementById('edit').contentWindow.focus();
}

function Select(selectname)
{
  var cursel = document.getElementById(selectname).selectedIndex;
  /* First one is always a label */
  if (cursel != 0) {
    var selected = document.getElementById(selectname).options[cursel].value;
    document.getElementById('edit').contentWindow.document.execCommand(selectname, false, selected);
    document.getElementById(selectname).selectedIndex = 0;
  }
  document.getElementById("edit").contentWindow.focus();
}

function dismisscolorpalette()
{
  document.getElementById("colorpalette").style.visibility="hidden";
}


  </script>

<p>This is a modified example from <a href='http://mozilla.org/editor/midasdemo/'>http://mozilla.org/editor/midasdemo/</a>.</p>
<p>The Cut, Copy, and Paste buttons below are disabled for security reasons. To enable
them for purposes of this demo, you need to <a href="http://mozilla.org/editor/midasdemo/securityprefs.html">edit your preferences file</a>.</p>

<table bgcolor="#C0C0C0" id="toolbar1">
<tr>
<td>
<div class="imagebutton" id="cut"><img class="image" src="../inc/dev/midas/cut.gif" alt="Cut" title="Cut"></div>
</td>
<td>
<div class="imagebutton" id="copy"><img class="image" src="../inc/dev/midas/copy.gif" alt="Copy" title="Copy"></div>
</td>
<td>
<div class="imagebutton" id="paste"><img class="image" src="../inc/dev/midas/paste.gif" alt="Paste" title="Paste"></div>
<td>
</td>
<td>
</td>
<td>
<div class="imagebutton" id="undo"><img class="image" src="../inc/dev/midas/undo.gif" alt="Undo" title="Undo"></div>

</td>
<td>
<div class="imagebutton" id="redo"><img class="image" src="../inc/dev/midas/redo.gif" alt="Redo" title="Redo"></div>
</td>
<td>
</td>
<td>
<div style="left: 10px;" class="imagebutton" id="createlink"><img class="image" src="../inc/dev/midas/link.gif" alt="Insert Link" title="Insert Link"></div>
</td>
<td>
<div style="left: 10px;" class="imagebutton" id="createimage"><img class="image" src="../inc/dev/midas/image.gif" alt="Insert Image" title="Insert Image"></div>
</td>
<td>
</td>
<td>
<div style="left: 10px;" class="imagebutton" id="createtable"><img class="image" src="../inc/dev/midas/table.gif" alt="Insert Table" title="Insert Table"></div>
</td>

</tr>
</table>
<br>
<table bgcolor="#C0C0C0" id="toolbar2">
<tr>
<td>
<select id="formatblock" onchange="Select(this.id);">
  <option value="<p>">Normal</option>
  <option value="<p>">Paragraph</option>
  <option value="<h1>">Heading 1 <H1></option>
  <option value="<h2>">Heading 2 <H2></option>

  <option value="<h3>">Heading 3 <H3></option>
  <option value="<h4>">Heading 4 <H4></option>
  <option value="<h5>">Heading 5 <H5></option>
  <option value="<h6>">Heading 6 <H6></option>
  <option value="<address>">Address <ADDR></option>
  <option value="<pre>">Formatted <PRE></option>

</select>
</td>
<td>
<select id="fontname" onchange="Select(this.id);">
  <option value="Font">Font</option>
  <option value="Arial">Arial</option>
  <option value="Courier">Courier</option>
  <option value="Times New Roman">Times New Roman</option>
</select>

</td>
<td>
<select unselectable="on" id="fontsize" onchange="Select(this.id);">
  <option value="Size">Size</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>

  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>  
</select>
</td>
<td>
<div class="imagebutton" id="bold"><img class="image" src="../inc/dev/midas/bold.gif" alt="Bold" title="Bold"></div>
</td>
<td>
<div class="imagebutton" id="italic"><img class="image" src="../inc/dev/midas/italic.gif" alt="Italic" title="Italic"></div>
</td>

<td>
<div class="imagebutton" id="underline"><img class="image" src="../inc/dev/midas/underline.gif" alt="Underline" title="Underline"></div>
</td>
<td>
</td>
<td>
<div style="left: 10px;" class="imagebutton" id="forecolor"><img class="image" src="../inc/dev/midas/forecolor.gif" alt="Text Color" title="Text Color"></div>
</td>
<td>
<div style="left: 40px;" class="imagebutton" id="hilitecolor"><img class="image" src="../inc/dev/midas/backcolor.gif" alt="Background Color" title="Background Color"></div>
</td>
<td>
</td>
<td>
<div style="left: 10px;" class="imagebutton" id="justifyleft"><img class="image" src="../inc/dev/midas/justifyleft.gif" alt="Align Left" title="Align Left"></div>
</td>
<td>

<div style="left: 40px;" class="imagebutton" id="justifycenter"><img class="image" src="../inc/dev/midas/justifycenter.gif" alt="Center" title="Center"></div>
</td>
<td>
<div style="left: 70px;" class="imagebutton" id="justifyright"><img class="image" src="../inc/dev/midas/justifyright.gif" alt="Align Right" title="Align Right"></div>
</td>
<td>
</td>
<td>
<div style="left: 10px;" class="imagebutton" id="insertorderedlist"><img class="image" src="../inc/dev/midas/orderedlist.gif" alt="Ordered List" title="Ordered List"></div>
</td>
<td>
<div style="left: 40px;" class="imagebutton" id="insertunorderedlist"><img class="image" src="../inc/dev/midas/unorderedlist.gif" alt="Unordered List" title="Unordered List"></div>
</td>
<td>
</td>
<td>
<div style="left: 10px;" class="imagebutton" id="outdent"><img class="image" src="../inc/dev/midas/outdent.gif" alt="Outdent" title="Outdent"></div>

</td>
<td>
<div style="left: 40px;" class="imagebutton" id="indent"><img class="image" src="../inc/dev/midas/indent.gif" alt="Indent" title="Indent"></div>
</td>
</tr>
</table>
<br>
<iframe id="edit" width="100%" height="200px"></iframe>
<iframe width="250" height="170" id="colorpalette" src="../inc/dev/midas/color.html" style="visibility:hidden; position: absolute;"></iframe>

<script>
function viewsource(source)
{
  var html;
  if (source) {
    html = document.createTextNode(document.getElementById('edit').contentWindow.document.body.innerHTML);
    document.getElementById('edit').contentWindow.document.body.innerHTML = "";
    html = document.getElementById('edit').contentWindow.document.importNode(html,false);
	document.getElementById('edit').contentWindow.document.body.appendChild(html);
    document.getElementById("toolbar1").style.visibility="hidden";
    document.getElementById("toolbar2").style.visibility="hidden";  
  } else {
    html = document.getElementById('edit').contentWindow.document.body.ownerDocument.createRange();
    html.selectNodeContents(document.getElementById('edit').contentWindow.document.body);
    document.getElementById('edit').contentWindow.document.body.innerHTML = html.toString();
    document.getElementById("toolbar1").style.visibility="visible";
    document.getElementById("toolbar2").style.visibility="visible";  
  }
}

function usecss(source)
{
  document.getElementById('edit').contentWindow.document.execCommand("useCSS", false, !(source));  
}

function readonly(source)
{
    document.getElementById('edit').contentWindow.document.execCommand("readonly", false, !(source));  
}
</script>
<input type="checkbox" onclick="viewsource(this.checked)">
View HTML Source</input>

<input checked type="checkbox" onclick="usecss(this.checked)">
Use CSS</input>
<input type="checkbox" onclick="readonly(this.checked)">
Read only</input>

<input type='text' size='64' />
<textarea rows='16' cols='64'></textarea>

<?php require_once('kmwdevfooter.php'); ?>
