---
title: Creating a PHP help file from welcome.htm
---

The `welcome.htm` file provides the help that is packaged with the keyboard.
The PHP file provides the help available online.
As of 2025 it is still necessary to provide this information in two different formats.
Hopefully at some point in the future this duplication can be eliminated.

Follow these steps to use the information in the `welcome.htm` file to create the PHP help file.
You will want to wait until the `welcome.htm` file is finalized before doing this in order to reduce having to make corrections in both files.
In these instructions `xyz` will be used as the keyboard project name and `Xyz` as the keyboard name.

1. Create a folder named `help` under the `source` folder (which is under the `xyz` keyboard project folder).
2. Copy `welcome.htm` and any referenced files (images, etc.) into that `source/help/` folder.
3. Rename `welcome.htm` to become `xyz.php` (that is, the keyboard project name plus `.php`).
4. Edit the `xyz.php` file.
5. Delete the `<html>`,  `<head>`, `<meta>`, `<title>`, and `<style>` tags, along with their contents and closing tags. Delete the `<body>` tag too.
6. Create a PHP header at the beginning of your document as in the following example. Note that the `$pagename` value will be displayed as a heading in an `<h1>` tag and `$pagetitle` will be displayed in the title bar/tab in the browser. (This example uses the same text that is entered for `$pagename` as the text for `$pagetitle`. If necessary, you can use different text for the `$pagetitle` by replacing `$pagename` on the right-hand side of the equals sign with a quoted string.)

```php
<?php
  $pagename = 'Xyz Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');

  $pagestyle = <<<END
  /* Repaste any custom CSS from your welcome.htm document here. */
  /* (See next section for details.) */
  END;
  
?>
```

7. (Optional) The PHP help file supports keyboard images that are dynamically generated from the keyboard information. If you wish to replace references to actual keyboard image files, you can make the change as noted in the Dynamically Constructed Keyboard Images section below and remove any unused image files from the `source/help/` folder.
8. Remove the `</body>` and `</html>` tags at the end of the text copied from `welcome.htm`.
9. (Optional) If your `welcome.htm` file has CSS formatting, you may want to transfer that to the PHP file. See the section below for details.
10. Save your modified `xyz.php` file.

## CSS Formatting

The `welcome.htm` file may have some CSS formatting in the `<head>` tag that you would like to preserve.
For example, in the "bj_cree_east" keyboard,
the `welcome.htm` file has a `<style>` element (in the `<head>` element):

```html
<style type="text/css">
  .cree {font-family: 'BJCree UNI';}
  .msg-important { color: rgb(238, 0, 0);
    background-color: rgb(255, 213, 213); border: 2px dashed rgb(238, 0, 0);
    padding: 8pt 16pt; margin: 8pt 0; display: inline-block; }
</style>
```

which is transferred to the `bj_cree_east.php` file as:

```php
  $pagestyle = <<<END
    .cree {font-family: 'BJCree UNI';}
    .msg-important { color: rgb(238, 0, 0);
      background-color: rgb(255, 213, 213); border: 2px dashed rgb(238, 0, 0);
      padding: 8pt 16pt; margin: 8pt 0; display: inline-block; }
END;

```

## Dynamically Constructed Keyboard Images

The Keyman help site can dynamically display keyboard layouts (unless the keyboard is desktop only with no web version).
This means that the image files with the keyboard layout information in the help file. (For keyboards that are desktop only, you'll need to present the keyboard image in the same way as you do in the `welcome.htm` file.)

If you want to dynamically display keyboard images, replace the existing reference in the `.php` file with:

```html
    <div id='osk'>
    </div>
```

This will display the default (unshifted) and shifted layers of the desktop keyboard.

You can also be more specific about the content you include in the keyboard presentation with additional `data-states` tags. For example, the following text from `welcome.htm`:

```html
<h2>Desktop Keyboard layout</h2>
 <h3>Default (unshifted)</h3>
  <p><a href="LayoutU_.png"><img class="keyboard" src="LayoutU_.png" alt="Default (unshifted) state" /></a></p>
 <h3>Shift</h3>
  <p><a href="LayoutU_S.png"><img class="keyboard" src="LayoutU_S.png" alt="Shift state" /></a></p>
 <h3>Right ALT (unshifted)</h3>
  <p><a href="LayoutU_RA.png"><img class="keyboard" src="LayoutU_RA.png" alt="Right ALT (unshifted) state" /></a></p>
 <h3>Shift Right ALT</h3>
  <p><a href="LayoutU_SRA.png"><img class="keyboard" src="LayoutU_SRA.png" alt="Shift Right ALT state" /></a></p>
```

can be replaced in the `.php` file with:

```html
<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

```

It's also possible to reference the "phone" and "tablet" layouts, building up a more complex keyboard presentation for the help site, as in this example from gff_amh_7.php:


```html
<div id='osk-container'>
  <h2>Desktop Keyboard Layout</h2>
  <div id='osk' data-states='default shift'></div>
</div>

<div id='osk-phone-container'>
  <h2>Phone Keyboard Layout</h2>
  <div id='osk-phone' data-states='default shift symbols numeric'></div>
</div>

<div id='osk-tablet-container'>
  <h2>Tablet Keyboard Layout</h2>
  <div id='osk-tablet' data-states='default symbols numeric'></div>
</div>
```

Note that for the `id='osk'` desktop display, you are restricted to specific values for the `data-states` attribute:

```js
'default'
'shift'
'alt'
'leftalt'
'rightalt'
'shift-alt'
'leftalt-shift'
'rightalt-shift'
'ctrl'
'leftctrl'
'rightctrl'
'ctrl-alt'
'leftctrl-leftalt'
'rightctrl-rightalt'
'shift-ctrl'
'leftctrl-shift'
'rightctrl-shift'
'shift-ctrl-alt'
'leftctrl-leftalt-shift'
'rightctrl-rightalt-shift'
```

For the `id='osk-phone'` and `id='osk-tablet'` displays, the value you use must match the value in the `.keyboard-touch-layout` file.
