---
title: Automatic Mode Example
---

<div markdown="1" style="float: right">

| Automatic Mode Example        |   |              |
|:----------------|:---------------:|----------------------:|
| [Prev](./index_guide_kmw) | KeymanWeb Guide | [Next](./guide_kmw_automatic_control_loaded) |

</div>

### Automatic Mode Example

This page shows the simplest method of utilising KeymanWeb. Only one tag
per keyboard, plus the reference to KeymanWeb itself, is required.

In this example, we use only the LaoKey keyboard.

A working example can be seen online at
[www.keymanweb.com](http://www.keymanweb.com/dev/automatic_control)

![](/cdn/dev/img/developer/90/kmw_automatic_control.png)

#### Code Walkthrough

``` programlisting
<head>
  <!-- Start of Code -->
  <script type="text/javascript">KeymanWeb_Key='your_key_here';</script>
  <script src="keymanweb.js" type="text/javascript"></script>
  <script src="laokeys_load.js" type="text/javascript"></script>
  <!-- End of Code -->
</head>
```

As you can see above, the second line in the code snippet above
references the LaoKey keyboard loader JavaScript file. This is a small
stub file, typically less than 200 bytes, that defines the name and
actual location of the real keyboard file (in this case, `laokeys.js`).
When a page may reference many keyboards, this saves downloading
potentially hundreds of kilobytes of unused Javascript keyboards - the
keyboard is downloaded when it is first selected by the user.

If you know that a keyboard will be required for a page, you can skip
the loader and load the keyboard directly instead, shown as a [separate
example](../guide/guide_kmw_automatic_control_loaded){.link}.

#### The KeymanWeb_Key

KeymanWeb_Key is a code that is generated for your domain when you
purchase a licence for KeymanWeb. This key is required in order for
KeymanWeb to operate. You will receive the key in an email when you
provide a list of domains to Tavultesoft.

|                |      |          |
|:----       ----|:----:|---------:|
| [Prev](./index_guide_kmw) | [Up](./index_guide_kmw) | [Next](./guide_kmw_automatic_control_loaded) |
| KeymanWeb Guide | [Home](../index)| Automatic Control (pre-loaded) Example |