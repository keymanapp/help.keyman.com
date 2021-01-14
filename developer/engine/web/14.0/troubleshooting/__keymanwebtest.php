<?php
  $bSh=false;
  //$script='keymanwebtest_load.js';
  $pagetitle='KeymanWeb Diagnostic Test';
  $ondocumentload='SetupDocument';
  $style='table.display tr td { border: solid 1px #808080 } td.c, th.c { text-align: center } code { font: 1em courier }';

  require_once('header.php');
  
  echo "<script type='text/javascript' src='__keymanwebtest.js'></script>";
  echo "<script type='text/javascript'>window.onload = function() { KeymanWeb.SetActiveKeyboard('Keyboard_keymanwebtest'); } </script>";
  
  if(isset($_REQUEST['version']))
  {
    /* Form has been submitted - send to email (for now) */

    $sender = 'Tavultesoft KeymanWeb Diagnostics';
    $senderaddress = 'keymanweb@tavultesoft.com';

    $address = 'mcdurdin@tavultesoft.com';
    
    $body = 
      "KEYMANWEB DIAGNOSTIC REPORT\n\n".

               "Browser:         {$_SERVER['HTTP_USER_AGENT']}\n";
      
    if(isset($_REQUEST['submitname']))
      $body .= "Submitter name:  {$_REQUEST['submitname']}\n";
    if(isset($_REQUEST['submitemail']))
      $body .= "Submitter email: {$_REQUEST['submitemail']}\n";
    if(isset($_REQUEST['build']))
      $body .=
               "KeymanWeb build: {$_REQUEST['build']}\n\n";
    $body .=
               "Form Version:    {$_REQUEST['version']}\n\n";
    if(isset($_REQUEST['browserdetails']))
      $body .=
               "BROWSER DETAILS\n\n{$_REQUEST['browserdetails']}\n\n";

    $body .= 

      "TEST RESULTS\n\n";

    $maxlength = 0;
    foreach ($_REQUEST as $n => $r)
    	if(substr($n, 0, 2) == 'KN')
   	    $maxlength = max($maxlength, strlen($r));
    	  
      
    foreach ($_REQUEST as $n => $r) {
      //echo "$n => $r<br/>";
    	if(substr($n, 0, 2) == 'KN')
    	{
    	  $v = substr($n, 2, 3);
    	  if(isset($_REQUEST["KF$v"])) 
    	    $rResult = $_REQUEST["KF$v"] == 'P' ? 'Pass' : ($_REQUEST["KF$v"] == 'F' ? 'FAIL' : '****');
    	  else
          $rResult = '';
    	  if(isset($_REQUEST["KI$v"])) $rInput = $_REQUEST["KI$v"]; else $rInput = '';
    	  
    	  $rID = $_REQUEST["KD$v"];
    	  
    	  if($rResult == '')
      	   // header row
    	    $body .= "\n$rID ".strtoupper($r)."\n\n";
    	  else
    	    $body .= str_pad("$rID $r:", $maxlength+1)."   $rResult (from \"$rInput\")\n";
    	}
    }
    
    if(isset($_REQUEST['comments']))
      $body .= "\nCOMMENTS\n\n".$_REQUEST['comments'];
      
    $body .= "\n\nEOF\n";

    @mail($address, "KeymanWeb Diagnostic Report", $body, 
        "From: $sender <$senderaddress>\r\n".
        "Reply-To: $sender <$senderaddress>\r\n".
        "Message-Id: <kmw.".uniqid()."@tavultesoft.com>\r\n".
        "Content-Type: text/plain; charset=\"UTF-8\"\r\n".
        //"Content-Transfer-Encoding: base64\n".
        "X-Mailer: Tavultesoft-CRM/1.0");
        
    echo "<h1>Submitted Diagnostic Report</h1><pre>$body</pre><script type='text/javascript'>function SetupDocument() {}</script>";
    require_once('footer.php');
    return;
  }
?>
<script type="text/javascript">
  var KWControl = null, MaxID;
  
  function SetupDocument()
  {
    KeymanWeb.Init();

    document.getElementById('KWBuild').innerHTML = KeymanWeb.Build;
    var s = '', t = '';
    for(var nav in navigator)
    {
      s = s + '<b>'+nav + '<'+'/b>: '+navigator[nav]+"<br\/>";
      t = t + nav + ': '+navigator[nav]+"\n";
    }
    document.getElementById('TDBrowserDetails').innerHTML = s;
    document.f.browserdetails.value = t;
    
    KWControl = document.getElementById('KWControl');
    KeymanWeb.SetMode('manual');
    KeymanWeb.ShowInterface(KeymanWeb.GetAbsoluteX(KWControl), KeymanWeb.GetAbsoluteY(KWControl));

    /* Clear all results */
  
    for(var i = 1; i < MaxID; i++)
    {
      var elem = document.getElementById('KI'+i);
      if(elem)
      {
        if(elem.tagName == 'input') 
          if(elem.type.toLowerCase() == 'checkbox') elem.checked = false;
          else elem.value = '';
        document.getElementById('KF'+i).value = '';
      }
    }
    
    //document.getElementById('Iframe_9_2').contentWindow.document.designMode='on';    
    document.f.submitname.focus();
  }
  
  function error(t, s)
  {
    if(t) t=t.id; else t='(no element)';
    var elem = document.getElementById('error');
    elem.innerHTML = elem.innerHTML + t + ': '+s + '<br/>';

    elem = document.getElementById('ferror');
    ferror.value = ferror.value + t+': '+s+"\n";
  }
  
  function gettestfields(e)
  {
    var t;
    if(!e) e=window.event;
    if(e.target) t=e.target;
    else if(e.srcElement) t=e.srcElement;
    
    if(!t) { error(null, "Your browser does not appear to support basic javascript requirements."); return; }
    
    var tID = t.id;
    tID = tID.substring(2,5);
    
    var elemExpected = document.getElementById('KE'+tID);

    var elemFormResult = document.getElementById('KF'+tID);
    if(!elemFormResult) { error(t, "This field has no form result"); return; }

    var elemResult = document.getElementById('KR'+tID);
    if(!elemResult) { error(t, "This field has no results space"); return; } //<-- for some fields this is okay
    
    var elemRow = document.getElementById('KT'+tID);
    
    return {input:t, expected:elemExpected, formresult:elemFormResult, result:elemResult, tablerow:elemRow};
  }
  
  function prep(e)
  {
    var v=gettestfields(e);
    if(!v) return true;
    
    v.result.innerHTML = '';
    v.formresult.value = '';
    
    v.tablerow.style.backgroundColor = '#e0e0e0';
//    if(v.tablerow.scrollIntoView)
  //    v.tablerow.scrollIntoView(false);
    return true;
  }
  
  function clickresult(e)
  {
    var v=gettestfields(e);
    if(!v) return true;
    
    if(!v.input.checked)
    {
      v.formresult.value = 'F';
      v.result.innerHTML = '<span style="color: red">FAIL<\/span>';
    }
    else
    {
      v.formresult.value = 'P';
      v.result.innerHTML = '<span style="color: green">PASS<\/span>';
    }
    return true;
  }

  function check(e)
  {
    var v=gettestfields(e);
    if(!v) return true;

    if((v.expected && v.expected.innerHTML != v.input.value) || (!v.expected && !v.input.checked))
    {
      v.result.innerHTML = '<span style="color: red">FAIL<\/span>';
      v.formresult.value = 'F';
    }
    else
    {
      v.result.innerHTML = '<span style="color: green">PASS<\/span>';
      v.formresult.value = 'P';
    }
    v.tablerow.style.backgroundColor = 'white';
    return true;
  }

  function submitform(e)
  {
    document.f.build.value = KeymanWeb.Build;
    var f=0;
    for(var i = 1; i < MaxID; i++)
    {
      var elem = document.getElementById('KF'+i);
      if(elem && elem.value == '')
      {
        document.getElementById('KT'+i).style.backgroundColor='yellow';
        if(!f)
        {
          window.alert('You have not completed all tests.  Please make sure you complete *all* tests before submitting.  The first incomplete test has been selected; incomplete tests are highlighted in yellow.');
          document.getElementById('KI'+i).focus();
          f=1;
        }
      }
    }
    
    return !f;
  }
</script>

<h1>KeymanWeb Test Page</h1>

<p>To verify that KeymanWeb is working correctly in your browser, complete all the tests below.  If any of the
tests fail, please add some descriptive comments about the errors you received before submitting the form.</p>

<p>We cannot guarantee that we can give a personal reply to each of the diagnostic reports submitted, but
we will review each one and they will be utilised in future development of KeymanWeb.</p>

<p><i>In the current version of KeymanWeb, only US English keyboard layouts are supported - please make sure that
you have selected US English layout in your operating system in order to ensure valid results.</i></p>

<form name='f' action='__keymanwebtest.php' method='post'>
<input type='hidden' name='build' /><input type='hidden' name='browserdetails' />

<h2>Contact Details</h2>
<p>Please enter contact details so we can discuss your diagnostic report with you.  These fields are optional.</p>
<table class='display'>
<tr><td>Your name:</td><td><input type="text" name="submitname" size=50 /></td></tr>
<tr><td>Email address:</td><td><input type="text" name="submitemail" size=50 /></td></tr></table>

<h2>KeymanWeb UI</h2>

<div id='KeymanWebControl'></div>

<h2>Diagnostic Tests</h2>
<div style='width: 780px; height: 400px; overflow: auto; border: solid 1px black'>
<table id="tests" class='display'>

<?php
  function AddGroup($id, $name, $secondrow = true, $correctoutput = true)
  {
    global $TestNumber;
    echo "<tr><th colspan='5' style='text-align: center'><input type='hidden' name='KN$TestNumber' value='$name' /><input type='hidden' name='KD$TestNumber' value='$id' />$name</th></tr>";
    if($secondrow) echo "<tr><th>Test Name</th><th>Instructions</th><th class='c'>".($correctoutput?"Correct output</th><th class='c'>Actual output":"</th><th class='c'>Correct?")."</th><th class='c'>Result</th></tr>";
    $TestNumber++;
  }
  
  function AddUserTest($id, $name, $instructions)
  {
    global $TestNumber;
    echo "<tr id='KT$TestNumber'><td>$id: $name</td><td colspan='2'>$instructions</td>".
      "<td style='text-align: center; vertical-align: bottom'><input type='hidden' name='KN$TestNumber' value='$name'/><input type='hidden' name='KD$TestNumber' value='$id'/>".
      "<input type='checkbox' name='KI$TestNumber' id='KI$TestNumber' onclick='clickresult(event)' onfocus='prep(event)' onblur='check(event)' />".
      "<input type='hidden' name='KF$TestNumber' id='KF$TestNumber' /></td>".
      "<td class='c' id='KR$TestNumber'></td></tr>";
    $TestNumber++;
  }
  
  function AddTest($id, $name, $instructions, $expected, $initialtext = '')
  {
    global $TestNumber;
    echo "<tr id='KT$TestNumber'><td>$id: $name</td><td>$instructions</td><td id='KE$TestNumber'>$expected</td>".
      "<td style='vertical-align: bottom'><input type='text' name='KI$TestNumber' size='16' id='KI$TestNumber' onfocus='prep(event)' onblur='check(event)' />".
      "<input type='hidden' name='KN$TestNumber' value='$name'/><input type='hidden' name='KD$TestNumber' value='$id'/><input type='hidden' name='KF$TestNumber' id='KF$TestNumber' /></td>".
      "<td id='KR$TestNumber'></td></tr>";
    $TestNumber++;
  }
  
  $TestNumber = 1;
  
  AddGroup('1.0', 'Browser Details', false);
  echo "<tr><td>Browser detected:</td><td colspan='4'><b>{$_SERVER['HTTP_USER_AGENT']}</b></td></tr>";
  echo "<tr><td>window.navigator:</td><td colspan='4' id='TDBrowserDetails'>&nbsp;</td></tr>";
  AddGroup('2.0', 'Basic Tests', true, false);
  AddUserTest('2.1', 'Load', 'Is the KeymanWeb user interface visible below?');
  AddUserTest('2.2', 'Keyboard Stub Load', 'Click on the list of keyboards.  Is a keyboard called "KeymanWeb Test" in the list?');
  AddUserTest('2.3', 'Keyboard Load', 'Click on the list of keyboards and select "KeymanWeb Test".  Do any errors appear?');
    
  AddGroup('3.0', 'Basic Keystroke Tests');
  echo "<tr><td colspan='5'>Make sure you have selected the KeymanWeb Test keyboard before continuing.</td></tr>";
  AddTest('3.1', 'One-to-one', 'Type <code>abc</code>', 'αβγ');
  AddTest('3.2', 'Context Check', 'Type <code>def</code>', 'δεζ');
  AddTest('3.3', 'Context Manipulate', 'Type <code>ghi</code>', 'ι');
  AddTest('3.4', 'Deadkey', 'Type <code>jkl</code>', 'ο');

  AddGroup('4.0', 'Modifier Keystroke Tests');
  echo "<tr><td colspan='5'>Make sure you have selected the KeymanWeb Test keyboard before continuing.</td></tr>";
  AddTest('4.1', 'Virtual Key', 'Type <code>mno</code>', 'μνξ');
  AddTest('4.2', 'Shift Modifiers', 'Press Shift+M', 'Shift+M ');
  AddTest('4.3', 'Ctrl Modifiers', 'Press Ctrl+M', 'Ctrl+M ');
  AddTest('4.4', 'Alt Modifiers', 'Press Alt+M', 'Alt+M ');
  AddTest('4.5', 'Shift+Ctrl Modifiers', 'Press Shift+Ctrl+M', 'Shift+Ctrl+M ');
  AddTest('4.6', 'Shift+Alt Modifiers', 'Press Shift+Alt+M', 'Shift+Alt+M ');
  AddTest('4.7', 'Ctrl+Alt Modifiers', 'Press Ctrl+Alt+M', 'Ctrl+Alt+M ');
  AddTest('4.8', 'Shift+Ctrl+Alt Modifiers', 'Press Shift+Ctrl+Alt+M', 'Shift+Ctrl+Alt+M ');

  AddGroup('5.0', 'Visual Keyboard Tests', true, false);
  AddUserTest('5.1', 'Display Visual Keyboard', 'Click the Visual Keyboard button.  Does the visual keyboard display correctly?  (note: the sample visual keyboard includes only a few characters)');
  AddUserTest('5.2', 'Resize Visual Keyboard', 'Drag the resize box on the bottom right of the visual keyboard.  Does it resize correctly?');

  AddGroup('6.0', 'Visual Keyboard Input Tests');
  echo "<tr><td colspan='5'>Make sure you have selected the KeymanWeb Test keyboard before continuing.</td></tr>";
  AddTest('6.1', 'One-to-one', 'Click <code>abc</code>', 'αβγ');
  AddTest('6.2', 'Context Check', 'Click <code>def</code>', 'δεζ');
  AddTest('6.3', 'Context Manipulate', 'Click <code>ghi</code>', 'ι');
  AddTest('6.4', 'Deadkey', 'Click <code>jkl</code>', 'ο');

  AddGroup('7.0', 'Visual Keyboard Modifier Input Tests');
  echo "<tr><td colspan='5'>Make sure you have selected the KeymanWeb Test keyboard before continuing.</td></tr>";
  AddTest('7.1', 'Virtual Key', 'Click <code>mno</code>', 'μνξ');
  AddTest('7.2', 'Shift Modifiers', 'Click Shift,M (reset shift states first)', 'Shift+M ');
  AddTest('7.3', 'Ctrl Modifiers', 'Click Ctrl,M (reset shift states first)', 'Ctrl+M ');
  AddTest('7.4', 'Alt Modifiers', 'Click Alt,M (reset shift states first)', 'Alt+M ');
  AddTest('7.5', 'Shift+Ctrl Modifiers', 'Click Shift,Ctrl,M (reset shift states first)', 'Shift+Ctrl+M ');
  AddTest('7.6', 'Shift+Alt Modifiers', 'Click Shift,Alt,M (reset shift states first)', 'Shift+Alt+M ');
  AddTest('7.7', 'Ctrl+Alt Modifiers', 'Click Ctrl,Alt,M (reset shift states first)', 'Ctrl+Alt+M ');
  AddTest('7.8', 'Shift+Ctrl+Alt Modifiers', 'Click Shift,Ctrl,Alt,M (reset shift states first)', 'Shift+Ctrl+Alt+M ');

  AddGroup('8.0', 'Insert and Selection Tests');
  echo "<tr><td colspan='5'>Make sure you have selected the KeymanWeb Test keyboard before continuing.</td></tr>";
  AddTest('8.1', 'Insert (typing)', 'Type <code>abc</code>, left arrow twice, type <code>m</code>', 'αμβγ');
  AddTest('8.2', 'Insert (mouse)', 'Type <code>abc</code>, click between α and β, type <code>b</code>', 'αμβγ');
  AddTest('8.3', 'Insert (typing, visual keyboard)', 'Type <code>abc</code>, left arrow twice, CLICK <code>m</code>', 'αμβγ');
  AddTest('8.4', 'Insert (mouse, visual keyboard)', 'Type <code>abc</code>, click between α and β, CLICK <code>m</code>', 'αμβγ');

  AddGroup('9.0', 'Visual Keyboard Context Tests');
  
  /* Add a test for the visual keyboard text area bug identified in Mozilla */
  
  echo "<tr id='KT$TestNumber'><td>9.1: Context in text areas</td><td>Click <code>def</code</td><td id='KE$TestNumber'>δεζ</td>".
      "<td style='vertical-align: bottom'>
      <textarea name='KI$TestNumber' cols='16' rows='1' id='KI$TestNumber' onfocus='prep(event)' onblur='check(event)'></textarea>".
      "<input type='hidden' name='KN$TestNumber' value='Context in text areas'/><input type='hidden' name='KD$TestNumber' value='9.1'/>
      <input type='hidden' name='KF$TestNumber' id='KF$TestNumber' /></td>".
      "<td id='KR$TestNumber'></td></tr>";
  $TestNumber++;

  /* Add a test for the richedit text area bug identified in Mozilla 

  echo "<tr id='KT$TestNumber'><td>9.2: First character context in richedits</td><td>Click <code>def</code</td><td id='KE$TestNumber'>δεζ</td>".
      "<td style='vertical-align: bottom'><input type='hidden' name='KI$TestNumber' />".
      "<iframe style='width: 150px; height: 100px' id='Iframe_9_2'></iframe>".
      "<input type='hidden' name='KN$TestNumber' value='First character context in richedits'/>".
      "<input type='hidden' name='KD$TestNumber' value='9.2'/>".
      "<input type='hidden' name='KF$TestNumber' id='KF$TestNumber' /></td>".
      "<td id='KR$TestNumber'></td></tr>";
  $TestNumber++;
  */
  
  AddGroup('Additional Comments', false);
?>  
  
  <tr><td colspan='5'>If you get errors, please copy as much detail from the error message into the box below:</td></tr>
  <tr><td colspan='5'><textarea name="comments" cols=80 rows=10></textarea><input type='hidden' id='ferror' name='errors'/></td></tr>
</table>
</div>

<?php
  echo "<script type='text/javascript'>MaxID = $TestNumber;</script>";
?>
  
<p><input type='hidden' name='version' value='1.1' /><input type='submit' onclick='return submitform(event);' value='Submit Test Results' /></p>

<p>KeymanWeb Build: <span id='KWBuild'></span></p>

<h2>Error Messages</h2>
<div id='error' style='width: 780px; height: 60px; overflow: auto; border: solid 1px black'></div>

</form>