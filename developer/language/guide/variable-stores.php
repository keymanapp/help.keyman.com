<?php
  require_once('includes/template.php');

  head([
    'title' => "Variable stores"
  ]);
?>

<h1>Variable stores</h1>

<p>Keyman 8 introduced support for dynamic variable stores, which can be utilized in many different ways. Some examples of
applications of the use of variable stores are:</p>

<ul>
  <li>Selection of alternate keyboard mappings, such as entering vowel modifiers before or after the vowel characters.</li>
  <li>User control of whether to use <span class='key'>CTRL</span> or <span class='key'>ALT</span> as a modifier key.</li>
  <li>In languages where text is usually entered without word breaks, a user may choose whether or not to insert visible or
    invisible breaks at syllable boundaries.</li>
</ul>

<p>A variable store setting can be changed temporarily during use of a keyboard, or saved (in system settings) so that the same
setting is used by default whenever the keyboard is used. Default store settings can be selected using Keyman Configuration. Variable
stores are implemented by allowing the contents of a store to be changed during use of the keyboard. (In earlier versions of Keyman,
store contents are fixed during keyboard compilation and never changed during keyboard use.) Any number of variable
stores may be defined for a keyboard.</p>

<h2>Keyboard variable store keywords</h2>

<p>Four new keywords have been added to allow store content to be changed and tested. Stores used as variable stores may not 
be used in the context or output sections of a rule, or to match the key section of a rule. A store referred to in an variable
store  keyword must have its default content defined with a <a href='../reference/store'><code>store()</code> statement</a> somewhere
in the keyboard source.</p>

<h2>if() statement</h2>

<p>The <a href='../reference/if'><code>if()</code> statement</a> allows any rule to be applied conditionally, according to whether or not the 
specified condition is true when the rule is to be used. The content of the store being used as a variable store can be compared with 
either a fixed string, or the content of another store. Note that since the <a href='../reference/match'><code>match</code></a> and 
<a href='../reference/nomatch'></code>nomatch</code></a> rules refer to all matched rules in a group, the <code>if()</code> statement cannot 
be used in a <code>match</code> or <code>nomatch</code> rule.</p>

<p>The <code>if()</code> statement may be used in many different ways, such as:</p>

<ul>
  <li>to provide alternate output for particular keystrokes:
<pre><code>store(opt1) '0'
if(opt1='1') + '$' > '£' 
</code></pre>
  </li>

  <li>to conditionally branch to different rule groups, for example to process pending context in different ways when the 
  <span class='key'>spacebar</span> is pressed:
<pre><code>store(opt2) '0'
if(opt2 ='1') + " " > use(ruleGroup1) 
if(opt2!='1') + " " > use(ruleGroup2) 
</code></pre>
  </li>

  <li>to set or change option values depending on the value of an option, or toggle between option settings:
<pre><code>store(opt3) '0'
if(opt3 ='1') + [CTRL ALT "\"] > set(opt3='0')
if(opt3!='1') + [CTRL ALT "\"] > set(opt3='1')      
</code></pre>
  </li>
</ul>

<h2>set() statement</h2>

<p>The <a href='../reference/set'><code>set()</code> statement</a> used on the right hand side of a rule allows the content of a store to be 
defined dynamically, as a result of an entered key sequence. The <code>set</code> statement does not change the store permanently, and 
if Keyman is restarted, or Keyman Configuration modified, then the default value will be restored.</p>

<p>In Keyman Desktop, changing a store with the <code>set()</code> statement while using one application will change it for all applications if
the "Select keyboard layout for all applications" Keyman Configuration option is set.</p>

<pre><code>store(opt1) '0'
+ [CTRL ALT "1"] > set(opt1='1') 
+ [CTRL ALT "2"] > set(opt1='2') 
</code></pre>

<h2>save() statement</h2>

<p>The <a href='../reference/save'><code>save()</code> statement</a> saves a current variable store value in system settings, to become the default 
value for future use. The <code>save()</code> statement will often be used following a <code>set()</code> statement to make a change 
permanent, as in the following example, which will, in effect, permanently change the content of store opt1 from <code>'0'</code> to <code>'1'</code>.</p>
<pre><code>store(opt1) '0'
+ [CTRL ALT "1"] > set(opt1='1') save(opt1) 
</code></pre>

<h2>reset() statement</h2>

<p>The <a href='../reference/reset'><code>reset()</code> statement</a> is used to restore a store to the current default value, either the 
value in the system settings from a previously matched rule using a <code>save()</code> statement, or else the store content as initialized 
in the keyboard source file.</p>

<pre><code>+ [CTRL ALT "\"] > reset(opt1)
</code></pre>

<h2>Setting Options with Keyman Configuration</h2>

<p>In many situations, it is better to set an option using Keyman Configuration instead of dynamically with a rule being matched. For
example, if a keyboard allows two different sequences to be used to get a particular result, most users would not want or need to
change the option while the keyboard is being used, but simply select the appropriate option during keyboard installation and
configuration. Including an Options Configuration file (options.htm) in the keyboard package allows keyboard options to be set during
Keyboard Configuration, by selecting the Keyboard Options entry from the menu displayed by the Options button for the keyboard.</p>

<p>Typically, the Options Configuration file will contain a heading, a form with radio buttons, or some other way of entering an option
value, and the javascript needed to load the settings. A sample Option Configuration file is shown here:</p>

<pre><code class='language-markup'>&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
&lt;html xmlns="http://www.w3.org/1999/xhtml" >
&lt;html>
&lt;head>
  &lt;title>S'gaw Karen Keyboard Options&lt;/title>
  &lt;meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  &lt;style type='text/css'>
    html, body { padding: 0; margin: 0; overflow: hidden }
    #size { padding: 12px; border: solid 1px black; background: #ffffff }
    p, label { font: 10pt Tahoma }
    h1 { font: bold 16pt Tahoma; margin-top: 4px; }
    #ok_button, #cancel_button { width: 100px }
    #buttons { text-align: right; }
    #formopt { padding: 2px 24px }
  &lt;/style>
&lt;/head>
&lt;body>
&lt;div id='size'>
  &lt;h1>S'gaw Karen Keyboard Options&lt;/h1>
  &lt;form method='get' action='keyman:ok'>
  &lt;div id='formopt'>
  &lt;fieldset>
  &lt;label>Select how to type modifier:&lt;/label>
      &lt;p>
      &lt;input type='radio' value='' name='option_order' id='option_order_logical' checked='checked' />&lt;label for='option_order_logical'> Logical order&lt;/label> (type modifier after the consonant)&lt;br />
      &lt;input type='radio' value='visual' name='option_order' id='option_order_visual' />&lt;label for='option_order_visual'> Visual order&lt;/label> (type modifier before the consonant)&lt;br />
    &lt;/p>
  &lt;/fieldset>
  
  &lt;fieldset>
  &lt;label>Select syllable boundary behaviour:&lt;/label>
      &lt;p>
      &lt;input type='radio' value='' name='option_zwsp' id='option_zwsp_none' checked='checked' />&lt;label for='option_zwsp_none'> Do not insert Zero Width Space (ZWSP)&lt;/label>&lt;br />
      &lt;input type='radio' value='zwsp' name='option_zwsp' id='option_zwsp_insert' />&lt;label for='option_zwsp_insert'> Insert Zero Width Space (ZWSP)&lt;/label>&lt;br />
      &lt;input type='radio' value='test' name='option_zwsp' id='option_zwsp_test' />&lt;label for='option_zwsp_test'> Test syllable boundaries&lt;/label> (insert "|" instead of ZWSP)&lt;br />
    &lt;/p>
  &lt;/fieldset>
    &lt;/div>
    &lt;p id='buttons'>&lt;input id='ok_button' type='submit' value='OK' /> &lt;input id='cancel_button' type='reset' onclick='location.href="keyman:cancel"; return false;' value='Cancel' />&lt;/p>
  &lt;/form>

&lt;/div>

  &lt;script type='text/javascript'>    
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
  &lt;/script>

&lt;/body>
&lt;/html>
</code></pre>

<p>Two variable store names used by the keyboard, <em>option_order</em> and <em>option_zwsp</em>, are set using this 
configuration file. User selection is then made from the following dialog, presented when the Keyboard options are 
selected during Keyman Configuration:</p>

<p><img src="<?= cdn('img/developer/90/guide_lang_options.gif')?>"></p>

<h2>See also</h2>

<dl>
  <dt><a href='stores'>Using stores</a></dt>
  
  <dt><a href="../reference/if" title="if() statement"><code>if()</code> statement</a></dt>
  <dd>Tests a store or system state for a value</dd>

  <dt><a href="../reference/reset" title="reset() statement"><code>reset()</code> statement</a></dt>
  <dd>Resets a store to its initial value</dd>

  <dt><a href="../reference/save" title="save() statement"><code>save()</code> statement</a></dt>
  <dd>Persists a store value for next edit session</dd>

  <dt><a href="../reference/set" title="set() statement"><code>set()</code> statement</a></dt>
  <dd>Sets a store or system state to a specific value</dd>
</dl>
