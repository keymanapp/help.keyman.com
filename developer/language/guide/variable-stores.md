---
title: Variable stores
---

Keyman 8 introduced support for dynamic variable stores, which can be
utilized in many different ways. Some examples of applications of the
use of variable stores are:

-   Selection of alternate keyboard mappings, such as entering vowel
    modifiers before or after the vowel characters.
-   User control of whether to use <key>CTRL</key> or
    <key>ALT</key> as a modifier key.
-   In languages where text is usually entered without word breaks, a
    user may choose whether or not to insert visible or invisible breaks
    at syllable boundaries.

A variable store setting can be changed temporarily during use of a
keyboard, or saved (in system settings) so that the same setting is used
by default whenever the keyboard is used. Default store settings can be
selected using Keyman Configuration. Variable stores are implemented by
allowing the contents of a store to be changed during use of the
keyboard. (In earlier versions of Keyman, store contents are fixed
during keyboard compilation and never changed during keyboard use.) Any
number of variable stores may be defined for a keyboard.

## Keyboard variable store keywords

Four new keywords have been added to allow store content to be changed
and tested. Stores used as variable stores may not be used in the
context or output sections of a rule, or to match the key section of a
rule. A store referred to in an variable store keyword must have its
default content defined with a [`store()` statement](../reference/store)
somewhere in the keyboard source.

## if() statement

The [`if()` statement](../reference/if) allows any rule to be applied
conditionally, according to whether or not the specified condition is
true when the rule is to be used. The content of the store being used as
a variable store can be compared with either a fixed string, or the
content of another store. Note that since the
[`match`](../reference/match) and [`nomatch`](../reference/nomatch) rules
refer to all matched rules in a group, the `if()` statement cannot be
used in a `match` or `nomatch` rule.

The `if()` statement may be used in many different ways, such as:

-   to provide alternate output for particular keystrokes:

    ```
    store(opt1) '0'
    if(opt1='1') + '$' > '£'
    ```

-   to conditionally branch to different rule groups, for example to
    process pending context in different ways when the
    <key>spacebar</key> is pressed:

    ```
    store(opt2) '0'
    if(opt2 ='1') + " " > use(ruleGroup1)
    if(opt2!='1') + " " > use(ruleGroup2)
    ```

-   to set or change option values depending on the value of an option,
    or toggle between option settings:

    ```
    store(opt3) '0'
    if(opt3 ='1') + [CTRL ALT "\"] > set(opt3='0')
    if(opt3!='1') + [CTRL ALT "\"] > set(opt3='1')
    ```

Note how the tests above use `if(opt3='1')` and `if(opt3!='1')` to
ensure that one or other of the rules always matches. This is better
than using `if(opt3='0')` and `if(opt3='1')` because it avoids the
scenario where the `opt3` store is set to a value other than `1` or `0`
(e.g. a different version of the keyboard is used).

## set() statement

The [`set()` statement](../reference/set) used on the right hand side of
a rule allows the content of a store to be defined dynamically, as a
result of an entered key sequence. The `set` statement does not change
the store permanently, and if Keyman is restarted, or Keyman
Configuration modified, then the default value will be restored.

In Keyman Desktop, changing a store with the `set()` statement while
using one application will change it for all applications if the "Select
keyboard layout for all applications" Keyman Configuration option is
set.

```
store(opt1) '0'
+ [CTRL ALT "1"] > set(opt1='1')
+ [CTRL ALT "2"] > set(opt1='2')
```

## save() statement

The [`save()` statement](../reference/save) saves a current variable
store value in system settings, to become the default value for future
use. The `save()` statement will often be used following a `set()`
statement to make a change permanent, as in the following example, which
will, in effect, permanently change the content of store opt1 from `'0'`
to `'1'`.

```
store(opt1) '0'
+ [CTRL ALT "1"] > set(opt1='1') save(opt1)
```

## reset() statement

The [`reset()` statement](../reference/reset) is used to restore a store
to the current default value, either the value in the system settings
from a previously matched rule using a `save()` statement, or else the
store content as initialized in the keyboard source file.

```
+ [CTRL ALT "\"] > reset(opt1)
```

## Setting Options with Keyman Configuration

In many situations, it is better to set an option using Keyman
Configuration instead of dynamically with a rule being matched. For
example, if a keyboard allows two different sequences to be used to get
a particular result, most users would not want or need to change the
option while the keyboard is being used, but simply select the
appropriate option during keyboard installation and configuration.
Including an Options Configuration file (options.htm) in the keyboard
package allows keyboard options to be set during Keyboard Configuration,
by selecting the Keyboard Options entry from the menu displayed by the
Options button for the keyboard.

Typically, the Options Configuration file will contain a heading, a form
with radio buttons, or some other way of entering an option value, and
the javascript needed to load the settings. A sample Option
Configuration file is shown here:

``` markup
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<html>
<head>
  <title>S'gaw Karen Keyboard Options</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <style type='text/css'>
    html, body { padding: 0; margin: 0; overflow: hidden }
    #size { padding: 12px; border: solid 1px black; background: #ffffff }
    p, label { font: 10pt Tahoma }
    h1 { font: bold 16pt Tahoma; margin-top: 4px; }
    #ok_button, #cancel_button { width: 100px }
    #buttons { text-align: right; }
    #formopt { padding: 2px 24px }
  </style>
</head>
<body>
<div id='size'>
  <h1>S'gaw Karen Keyboard Options</h1>
  <form method='get' action='keyman:ok'>
  <div id='formopt'>
  <fieldset>
  <label>Select how to type modifier:</label>
      <p>
      <input type='radio' value='' name='option_order' id='option_order_logical' checked='checked' /><label for='option_order_logical'> Logical order</label> (type modifier after the consonant)<br />
      <input type='radio' value='visual' name='option_order' id='option_order_visual' /><label for='option_order_visual'> Visual order</label> (type modifier before the consonant)<br />
    </p>
  </fieldset>

  <fieldset>
  <label>Select syllable boundary behaviour:</label>
      <p>
      <input type='radio' value='' name='option_zwsp' id='option_zwsp_none' checked='checked' /><label for='option_zwsp_none'> Do not insert Zero Width Space (ZWSP)</label><br />
      <input type='radio' value='zwsp' name='option_zwsp' id='option_zwsp_insert' /><label for='option_zwsp_insert'> Insert Zero Width Space (ZWSP)</label><br />
      <input type='radio' value='test' name='option_zwsp' id='option_zwsp_test' /><label for='option_zwsp_test'> Test syllable boundaries</label> (insert "|" instead of ZWSP)<br />
    </p>
  </fieldset>
    </div>
    <p id='buttons'><input id='ok_button' type='submit' value='OK' /> <input id='cancel_button' type='reset' onclick='location.href="keyman:cancel"; return false;' value='Cancel' /></p>
  </form>

</div>

  <script type='text/javascript'>
    (function() {
      var loc = window.location.search.substr(1).split('&');
      for(var i = 0; i < loc.length; i++)
      {
        var param = loc[i].split('=');
        var key = decodeURIComponent(param[0]);
        var val = decodeURIComponent(param[1]);
        var elem = document.forms[0].elements[key];
        if(elem)
        {
          if(typeof elem !== 'object' || typeof elem.length !== 'number') elem = [elem];

          for(var j = 0; j < elem.length; j++)
            if(elem[j].type == 'checkbox' || elem[j].type == 'radio')
              elem[j].checked = elem[j].value == val;
            else
              elem[j].value = val;
        }
      }
    })();
  </script>

</body>
</html>
```

Two variable store names used by the keyboard, *option_order* and
*option_zwsp*, are set using this configuration file. User selection is
then made from the following dialog, presented when the Keyboard options
are selected during Keyman Configuration:

![](/cdn/dev/img/developer/90/guide_lang_options.gif)

## See also

[Using stores](stores)
[`if()` statement](../reference/if)
:   Tests a store or system state for a value

[`reset()` statement](../reference/reset)
:   Resets a store to its initial value

[`save()` statement](../reference/save)
:   Persists a store value for next edit session

[`set()` statement](../reference/set)
:   Sets a store or system state to a specific value
