<?php
  require_once('includes/template.php');

  head([
    'title' => "How To - Use Word Macros to Switch Fonts and Keyman Keyboards Together"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">How To - Use Word Macros to Switch Fonts and Keyman Keyboards Together</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="troubleshooting_sigma.php">Prev</a> </td><th width="60%" align="center">Chapter 6. Troubleshooting Index</th><td width="20%" align="right"> <a accesskey="n" href="troubleshooting_excel.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="troubleshooting_macros">How To - Use Word Macros to Switch Fonts and Keyman Keyboards Together</h2></div></div></div><p>You can use the Keyman COM API in Keyman Desktop to control Tavultesoft Keyman from most macro languages. An example is presented for Microsoft Word's Visual Basic for Applications.</p><p>To create these macros, you will need to do the following:</p><div class="orderedlist"><ol type="1"><li><p>In Word, select the Visual Basic Editor.</p></li><li><p>In the Project pane, double-click Normal-&gt;Microsoft Word Objects-&gt;ThisDocument.</p></li><li><p>Select Tools-&gt;References.</p></li><li><p>Scroll down to Tavultesoft Keyman Library, tick it and click <span class="guibutton">OK</span>.</p></li><li><p>Paste the functions in and change the fonts and keyboard names as desired. You can add additional functions for the extra keyboards you want to activate.</p></li></ol></div><p>You could assign hotkeys or toolbar buttons to these routines. See the following links for more details:</p><div class="itemizedlist"><ul type="disc"><li><p><a class="ulink" href="http://word.mvps.org/FAQs/Customization/AsgnCmdOrMacroToToolbar.htm" target="_blank">Assign a macro to a toolbar</a></p></li><li><p><a class="ulink" href="http://word.mvps.org/FAQs/Customization/AsgnCmdOrMacroToHotkey.htm" target="_blank">Assign a macro to a hotkey</a></p></li><li><p><a class="ulink" href="http://word.mvps.org/FAQs/Customization/CustomizeRibbon.htm" target="_blank">Assign a macro to the Ribbon in Word 2007</a></p></li></ul></div><p>The macros are presented below:</p><pre class="programlisting">
'
' Keyman COM API access in Visual Basic for Applications
' ------------------------------------------------------
'
Sub SwitchEuropeanLatinOn()
    Selection.Font.Name = "Gentium"
    Dim t As TavultesoftKeyman
    Set t = New TavultesoftKeyman
    t.Control.ActiveKeyboard = t.Keyboards("european")
        ' Use the filename of the keyboard here (without the '.kmx' extension)
        ' You can findout the filename of the keyboard by viewing its details
        ' in Keyman Desktop Configuration
End Sub

Sub SwitchKeymanOff()
    Selection.Font.Name = "Arial"
    Dim t As TavultesoftKeyman
    Set t = New TavultesoftKeyman
    t.Control.ActiveKeyboard = Nothing
End Sub
</pre><p>You can create a macro that toggles the Keyman keyboard and font as follows:</p><pre class="programlisting">
Sub ToggleKeyboard_Greek()
     Dim t As TavultesoftKeyman, k As IKeymanKeyboard
     Set t = New TavultesoftKeyman
     Set k = t.Control.ActiveKeyboard
              
     If k Is Nothing Then
        v = 1
     ElseIf k.Name &lt;&gt; "GalaxieGreekKM6" Then   ' Change this to your desired keyboard name
        v = 1
     Else
        v = 0
     End If
         
     If v = 1 Then
          Selection.Font.Name = "Galaxie Unicode Greek"   ' Change this to your desired font name
          t.Control.ActiveKeyboard = t.Keyboards("GalaxieGreekKM6")  ' Change this to your desired keyboard name
     Else
          Selection.Font.Name = "Times New Roman"   ' Change this to your desired default font name
          t.Control.ActiveKeyboard = Nothing
     End If
End Sub
</pre><h3><a name="id626398"></a>Related Topics</h3><div class="itemizedlist"><ul type="disc"><li><p>
        <a class="xref" href="start_font.php" title="How To - Find the Best Fonts for a Keyman Keyboard">How To - Find the Best Fonts for a Keyman Keyboard</a>
      </p></li><li><p>
        <a class="xref" href="basic_fonthelper.php" title="Keyman Toolbox - Font Helper">Keyman Toolbox - Font Helper</a>
      </p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="troubleshooting_sigma.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="troubleshooting.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="troubleshooting_excel.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">How To - Fix Greek Medial Sigma Changing to Final Sigma Unexpectedly in MS Word </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> How To - Use Keyman Desktop in Excel</td></tr></table></div>
