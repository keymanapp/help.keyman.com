---
title: Automatic Control (pre-loaded) Example
---

<div markdown="1" style="float: right">

|     |  Automatic Control (pre-loaded) Example     |         |
|:----|:-------------------------------------------:|--------:|
| [Prev](./guide_kmw_automatic_control) | KeymanWeb Guide | [Next](./guide_kmw_manual_control) |

</div>

### Automatic Control (pre-loaded) Example

This page shows the simplest method of utilising KeymanWeb. Only one tag
per keyboard, plus the reference to KeymanWeb itself, is required.

In this example, we use only the LaoKey keyboard, and we load it at the
time that the page loads.

A working example can be seen online at
[www.keymanweb.com](http://www.keymanweb.com/dev/automatic_control_loaded)

![](/cdn/dev/img/developer/90/kmw_automatic_control.png)

#### Code Walkthrough

``` programlisting
<head>
  <!-- Start of Code -->
  <script type="text/javascript">KeymanWeb_Key='your_key_here';</script>
  <script src="keymanweb.js" type="text/javascript"></script>
  <script src="laokeys.js" type="text/javascript"></script>
  <!-- End of Code -->
</head>
```

|                             |                       |                    |
|:----------------------------|:---------------------:|-------------------:|
| [Prev](./guide_kmw_automatic_control) | [Up](./index_guide_kmw) | [Next](./guide_kmw_manual_control) |
| Automatic Mode Example | [Home](../index) | Manual Control Example |