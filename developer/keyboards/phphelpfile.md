---
title: Keyman Keyboard help document (PHP help file)
---

A keyboard help documentation (PHP help file) is a structured help web page about: 
* Keyboard and language information
* How to use the keyboard
* Graphics for the Keyboard layouts for all platforms, and more. 

The help documentation acts as an online help documentation on help.keyman.com, not to be confused with [welcome.htm and readme.htm](../current-version/guides/distribute/tutorial/step-2). However, the help file can be a descriptive version of the `welcome.htm` file; see [below](#toc-creating-a-keyboard-help-document-from-welcome-htm).

## File location

After planning and developing a keyboard in Keyman Developer, follow closely to the project's [folder and file structure](../current-version/reference/file-layout). The help file should be stored in an independent folder within the source folder called "**help**". The file must have the same name as the keyboard folder name:

```md
khmer
|
|
|____source
|    |      files
|    |______help
|           |
|           |____khmer.php
|
|____other folders
```
It would end up in this location: **`k/khmer/source/help/khmer.php`**. This allows the Keyman online help file to deploy correctly.

## Writing a keyboard help document

This section talks about "what to include in a keyboard documentation", "how to start composing a PHP help file" from scratch.

In the `.php` file, include the main code:

```php
<?php 
  $pagename = 'khmer Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');

  $pagestyle = <<<END
    /* Any custom CSS from your welcome.htm document. */
    /* (See CSS formatting section for details.) */
  END;

?>

<div>

<!-- All information of the keyboard -->

  <h2>Desktop Keyboard layouts</h2>
  <div id='osk' data-states='default shift rightalt rightalt-shift'>
      <!-- By including this tag, the images of each layers for the 
      On-screen keyboard will be placed here -->
  </div>

  <h2>Touch Keyboard layouts</h2>
  <div id='osk-phone' data-states='default shift numeric symbol'>
      <!-- By including this tag, the images of each layers for the 
      Touch keyboard will be placed here -->
  </div>

</div>

```

Please feel free to adjust the `data-states` according to the keyboard layers; [see here](#toc-osk-data-state-values).

## Creating a keyboard help document from welcome.htm

The `welcome.htm` file provides the help that is packaged with the keyboard.
As of now it is still necessary to provide this information in two different formats.
Hopefully at some point in the future this duplication can be eliminated.

Follow these steps to use the information in the `welcome.htm` file to create the PHP help file.
You will want to wait until the `welcome.htm` file is finalized before doing this in order to reduce having to make corrections in both files.
In these instructions:
  * `khmer` will be used as the keyboard project name
  * `Khmer` will be used as the keyboard name.

1) Create a folder named `help` under the `source` folder (which is under the `khmer` keyboard project folder).

2) Copy `welcome.htm` and any referenced files (images, etc.) into that `source/help/` folder.

3) Rename `welcome.htm` to become `khmer.php` (that is, the keyboard project name plus `.php`).

4) Edit the `khmer.php` file.

5) Delete the `<head>`, `<meta>`, `<title>`, and `<style>` tags, along with their contents and closing tags. Delete the `<html>` and `<body>` opening tags too.

6) Create a PHP header at the beginning of your document as in the following example. 

> [!NOTE] 
> The `$pagename` value will be displayed as a heading in an `<h1>` tag and `$pagetitle` will be displayed in the title bar/tab in the browser. (This example uses the same text that is entered for `$pagename` as the text for `$pagetitle`. If necessary, you can use different text for the `$pagetitle` by replacing `$pagename` on the right-hand side of the equals sign with a quoted string.)

7) Remove the `</body>` and `</html>` closing tags at the end of the text copied from `welcome.htm`.

8) (Optional) If your `welcome.htm` file has CSS formatting, you may want to transfer that to the PHP file. See the [section below](#toc-css-formatting) for details.

9) Add dynamically display keyboard layouts ([more details](#toc-dynamically-constructed-keyboard-images))

```html
<h2>Desktop Keyboard layouts</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
    <!-- By including this tag, the images of each layers for the 
    On-screen keyboard will be placed here -->
</div>

<h2>Touch Keyboard layouts</h2>
<div id='osk-phone' data-states='default shift numeric symbol'>
    <!-- By including this tag, the images of each layers for the 
    Touch keyboard will be placed here -->
</div>
```

10) Save the modified `khmer.php` file.

```php
<?php
  $pagename = 'Khmer Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');

  $pagestyle = <<<END
  /* Repaste any custom CSS from your welcome.htm document here. */
  /* (See next section for details.) */
  END;
  
?>
<div>

  <!-- All information of the keyboard -->

  <h2>Desktop Keyboard layouts</h2>
  <div id='osk' data-states='default shift rightalt rightalt-shift'>
      <!-- By including this tag, the images of each layers for the 
      On-screen keyboard will be placed here -->
  </div>

  <h2>Touch Keyboard layouts</h2>
  <div id='osk-phone' data-states='default shift numeric symbol'>
      <!-- By including this tag, the images of each layers for the 
      Touch keyboard will be placed here -->
  </div>

</div>
```

### CSS Formatting

The `welcome.htm` file may have some CSS formatting in the `<head>` tag that you would like to preserve.
For example, in the [BJCreeUNI (East) keyboard](../../keyboard/bj_cree_east),
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

### Dynamically Constructed Keyboard Images

> [!NOTE]
> The PHP help file supports keyboard images that are dynamically generated from the keyboard information. If you wish to replace references to actual keyboard image files, you can make the change as noted in this section and remove any unused image files from the `source/help/` folder.

The Keyman help site can dynamically display keyboard layouts (unless the keyboard is desktop only with no web version).
This means that the image files with the keyboard layout information are in the help file. (For keyboards that are desktop only, you'll need to present the keyboard image in the same way as you do in the `welcome.htm` file.)

The `id='osk'` attribute dynamically displays keyboard images, replace the existing reference in the `.php` file with:

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

It's also possible to reference the "phone" and "tablet" layouts, building up a more complex keyboard presentation for the help site, as in this example from [gff_amh_7.php](../../keyboard/gff_amharic/):


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

## OSK data-state values

> [!IMPORTANT]
> For the `id='osk'` desktop display, you are restricted to specific values for the `data-states` attribute:

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
> [!IMPORTANT]
> For the `id='osk-phone'` and `id='osk-tablet'` displays, the value you use must match the value in the `.keyboard-touch-layout` file.

### Keep in mind

* Some readers are visual learners, and they might be pleased to find a documentation that has more to the eyes than plain text. Check [Khmer (SIL) Keyboard Help](../../keyboard/sil_khmer) for minimal design of keys (`<kbd>`) and one of the many methods to showcase key combinations.

* Since the PHP file is already using the `id` and `data-states` attributes (above), and to avoid unnecessary duplication, please do not use the following HTML tags:

  ```html
  <h3>Desktop Default</h3>
  <p>
      <a href="LayoutU_.png"><img class="keyboard" src="LayoutU_.png" alt="Default (unshifted) state" /></a>
  </p>
  <h3>Shift</h3>
  <p>
      <a href="LayoutU_S.png"><img class="keyboard" src="LayoutU_S.png" alt="Shift state" />
  </p>
  <h3>Touch Default</h3>
  <p>
      <a href="TouchLayoutU.png"><img class="keyboard" src="TouchLayoutU_.png" alt="Touch default (unshifted) state" />
  </p>
  ```

* Additionally the images of the On-screen keyboard are not require to be exported anymore when `data-states` property is specified in the PHP file, unless the images are referred to in the `welcome.htm` page.

### Requested features for keyboard help documentation

One way to ask a question or request a feature for the keyboard help documentation is to reach out on [Keyman community forum](https://community.software.sil.org/c/keyman/) or [create a feature request/bug report](https://github.com/keymanapp/keyman/issues/new/choose). However, please look out for an existing request to avoid duplication.

Follow the progress for each feature requests [here](https://github.com/keymanapp/keyboards/issues?q=is%3Aissue%20state%3Aopen%20label%3Afeat).

### See also
* Follow the [library of keyboard documentation](../../keyboard/).