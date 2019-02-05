<?php
  require_once('includes/template.php');

  head([
    'title' => "Programmer's Guide - Keyboard Options"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Programmer's Guide - Keyboard Options</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="guide_lang_vkeys.php">Prev</a> </td><th width="60%" align="center">Keyman Keyboard Language Guide</th><td width="20%" align="right"> <a accesskey="n" href="index_guide_kmw.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="guide_lang_options">Programmer's Guide - Keyboard Options</h3></div></div></div><h4><a name="id590318"></a>Introduction</h4><p>
    Keyman 8 introduced support for dynamic keyboard options, which can be utilized in many different ways. 
    Some applications of the use of keyboard options are:
  </p><div class="itemizedlist"><ul type="disc"><li><p>Selection of alternate keyboard mappings, such as entering vowel modifiers before or after the vowel characters.</p></li><li><p>User control of whether to use CTRL or ALT etc. as a modifier key.</p></li><li><p>In languages where text is usually entered without word breaks, a user may choose whether or not to insert visible or invisible breaks at syllable boundaries.</p></li></ul></div><p>
    A keyboard option setting can be changed temporarily during use of a keyboard, or saved (in the Windows registry) 
    so that the same setting is used by default whenever the keyboard is used.  Default option settings can be selected 
    using Keyman Configuration.  Keyboard options are implemented by allowing the contents of a store to be changed during use of the keyboard.  (In earlier versions of Keyman, store contents are fixed during keyboard compilation and never changed during keyboard use.) Any number of options may be defined for a keyboard.
  </p><h4><a name="id643363"></a>Keyboard Option Keywords</h4><p>
    Four new keywords have been added to allow store content to be changed and tested.
    Stores used for keyboard options may be used in the context or output sections of a rule, but not to match the key section of a rule. 
    A store referred to in an option keyword must have its default content defined with a store(...) statement somewhere in the keyboard source.
  </p><h4><a name="id643370"></a>if</h4><p>
    The if keyword allows any rule to be applied conditionally, according to whether or not the specified condition is true when the rule is to be used. 
    The content of the store being used as a keyboard option can be compared with either a fixed string, or the content of another store. 
    Note that since the match and nomatch keywords refer to all matched rules in a group, the if condition can be used in a match or nomatch rule. 
  </p><p>
    The if keyword may be used in many different ways, such as:
  </p><div class="itemizedlist"><ul type="disc"><li>
      to provide alternate output for particular keystrokes:
      <pre class="programlisting">store(opt1) '0'
if(opt1='1') + '$' &gt; '£' 
      </pre></li><li>
      to conditionally branch to different rule groups, for example to process pending context in different ways when the spacebar is pressed:
      <pre class="programlisting">store(opt2) '0'
if(opt2 ='1') + " " &gt; use(ruleGroup1) 
if(opt2!='1') + " " &gt; use(ruleGroup2) 
      </pre></li><li>
      to set or change option values depending on the value of an option, or toggle between option settings:
      <pre class="programlisting">store(opt3) '0'
if(opt3 ='1') + [CTRL ALT "\"] &gt; set(opt3='0')
if(opt3!='1') + [CTRL ALT "\"] &gt; set(opt3='1')      
      </pre></li></ul></div><h4><a name="id643406"></a>set</h4><p>
    The set keyword used on the right hand side of a rule allows the content of a store to be defined dynamically, as a result of an entered key sequence. 
    The set keyword does not change the option permanantly, and if Keyman is restarted, or Keyman Configuration modified, then the default option value will be restored.
  </p><p>
    Changing an option with the set keyword while using one application will change it for all applications 
    if the "Select keyboard layout for all applications" Keyman Configuration option is set.
  </p><pre class="programlisting">store(opt1) '0'
+ [CTRL ALT "1"] &gt; set(opt1='1') 
+ [CTRL ALT "2"] &gt; set(opt1='2') 
  </pre><h4><a name="id643420"></a>save</h4><p>
    The save command saves a current option value in the Windows registry, to become the default option value for future use. 
    The save command will often be used following a set command to make a change permanent, as in the following example, 
    which will, in effect, permanently change the content of store opt1 from '0' to '1'.
  </p><pre class="programlisting">store(opt1) '0'
+ [CTRL ALT "1"] &gt; set(opt1='1') save(opt1) 
  </pre><h4><a name="id643432"></a>reset</h4><p>
    The reset command is used to restore an option to the current default value, either the value in the Windows registry from a previously matched rule using a save command,
    or else the store content as initialized in the keyboard source file. 
  </p><pre class="programlisting">+ [CTRL ALT "\"] &gt; reset(opt1)
  </pre><h4><a name="option-config"></a>Setting Options with Keyman Configuration</h4><p>
    In many situations, it is better to set an option using Keyman Configuration instead of dynamically with a rule being matched. 
    For example, if a keyboard allows two different sequences to be used to get a particular result, most users would not want or need 
    to change the option while the keyboard is being used, but simply select the appropriate option during keyboard installation and 
    configuration.  Including an Options Configuration file (options.htm) in the keyboard package allows keyboard options to be set during Keyboard Configuration, 
    by selecting the Keyboard Options entry from the menu displayed by the Options button for the keyboard.
  </p><p>
    Typically, the Options Configuration file will contain a heading, a form with radio buttons, or some other way of entering an option value, 
    and the javascript needed to load the settings.  A sample Option Configuration file is shown here:
  </p><pre class="programlisting">
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml" &gt;
&lt;html&gt;
&lt;head&gt;
  &lt;title&gt;S'gaw Karen Keyboard Options&lt;/title&gt;
  &lt;meta http-equiv="Content-Type" content="text/html;charset=utf-8" /&gt;
  &lt;style type='text/css'&gt;
    html, body { padding: 0; margin: 0; overflow: hidden }
    #size { padding: 12px; border: solid 1px black; background: #ffffff }
    p, label { font: 10pt Tahoma }
    h1 { font: bold 16pt Tahoma; margin-top: 4px; }
    #ok_button, #cancel_button { width: 100px }
    #buttons { text-align: right; }
    #formopt { padding: 2px 24px }
  &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div id='size'&gt;
  &lt;h1&gt;S'gaw Karen Keyboard Options&lt;/h1&gt;
  &lt;form method='get' action='keyman:ok'&gt;
  &lt;div id='formopt'&gt;
  &lt;fieldset&gt;
  &lt;label&gt;Select how to type modifier:&lt;/label&gt;
      &lt;p&gt;
      &lt;input type='radio' value='' name='option_order' id='option_order_logical' checked='checked' /&gt;&lt;label for='option_order_logical'&gt; Logical order&lt;/label&gt; (type modifier after the consonant)&lt;br /&gt;
      &lt;input type='radio' value='visual' name='option_order' id='option_order_visual' /&gt;&lt;label for='option_order_visual'&gt; Visual order&lt;/label&gt; (type modifier before the consonant)&lt;br /&gt;
    &lt;/p&gt;
  &lt;/fieldset&gt;
  
  &lt;fieldset&gt;
  &lt;label&gt;Select syllable boundary behaviour:&lt;/label&gt;
      &lt;p&gt;
      &lt;input type='radio' value='' name='option_zwsp' id='option_zwsp_none' checked='checked' /&gt;&lt;label for='option_zwsp_none'&gt; Do not insert Zero Width Space (ZWSP)&lt;/label&gt;&lt;br /&gt;
      &lt;input type='radio' value='zwsp' name='option_zwsp' id='option_zwsp_insert' /&gt;&lt;label for='option_zwsp_insert'&gt; Insert Zero Width Space (ZWSP)&lt;/label&gt;&lt;br /&gt;
      &lt;input type='radio' value='test' name='option_zwsp' id='option_zwsp_test' /&gt;&lt;label for='option_zwsp_test'&gt; Test syllable boundaries&lt;/label&gt; (insert "|" instead of ZWSP)&lt;br /&gt;
    &lt;/p&gt;
  &lt;/fieldset&gt;
    &lt;/div&gt;
    &lt;p id='buttons'&gt;&lt;input id='ok_button' type='submit' value='OK' /&gt; &lt;input id='cancel_button' type='reset' onclick='location.href="keyman:cancel"; return false;' value='Cancel' /&gt;&lt;/p&gt;
  &lt;/form&gt;

&lt;/div&gt;

  &lt;script type='text/javascript'&gt;    
    (function() { 
      var loc = window.location.search.substr(1).split('&amp;');
      for(var i = 0; i &lt; loc.length; i++)
      {
        var param = loc[i].split('=');
        var key = decodeURIComponent(param[0]);
        var val = decodeURIComponent(param[1]);
        var elem = document.forms[0].elements[key];
        if(elem)
        {
          if(typeof elem !== 'object' || typeof elem.length !== 'number') elem = [elem];

          for(var j = 0; j &lt; elem.length; j++)
            if(elem[j].type == 'checkbox' || elem[j].type == 'radio')
              elem[j].checked = elem[j].value == val;
            else
              elem[j].value = val;
        }
      }
    })();
  &lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;
    
    
  </pre><p>
    Two option store names used by the keyboard, option_order and option_zwsp, are set using this configuration file.  
    User selection is then made from the following dialog, presented when Keyboard Options are selected during Keyman Configuration:
  </p><p>
    <span class="inlinemediaobject"><img src="developer_images/guide_lang_options.gif"></span>
  </p><h4><a name="id643477"></a>Related Topics</h4><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference_if.php" title="if statement">if statement</a></p></li><li><p><a class="xref" href="reference_set.php" title="set statement">set statement</a></p></li><li><p><a class="xref" href="reference_save.php" title="save statement">save statement</a></p></li><li><p><a class="xref" href="reference_reset.php" title="reset statement">reset statement</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="guide_lang_vkeys.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="index_guide_language.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="index_guide_kmw.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Programmer's Guide - Virtual Keys </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> KeymanWeb Guide</td></tr></table></div>
