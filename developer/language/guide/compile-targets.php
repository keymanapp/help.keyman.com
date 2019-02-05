<?php
  require_once('includes/template.php');

  head([
    'title' => "Compile Targets (Keyman, KeymanWeb, and SILKey)"
  ]);
?>

<h1 class="title" id="reference__struct_silkey">Compile Targets (Keyman, KeymanWeb, and SILKey)</h1>


<p>Keyman supports a prefix at the start of the line to identify lines that should only be compiled for a specific target. If the
prefix is omitted, then the line will be compiled for all targets. The supported targets in version 9.0 are Keyman (Keyman Engine),
KeymanWeb, Weaver (SILKey), KeymanOnly and KMFL. All other targets will be ignored, to permit compatibility with future targets.</p>

<p>Compile targets will continue to work but are semi-deprecated in Keyman 9.0. A more flexible mechanism is available with
<a href='../reference/platform'><code>platform()</code> statements</a>. While <code>platform()</code> statements cannot provide alternate
metadata for different platforms, they do support a much broader range of platforms, which is important for JavaScript (web) keyboards
which are compiled once for many platforms.</p>

<table>
  <tbody>
    <tr>
      <th>Line Prefix</th>
      <th>Target</th>
      <th>Comments</th>
    </tr>

    <tr>
      <td><code>$keyman:</code></td>
      <td>Keyman Engine and KeymanWeb</td>
      <td>For legacy reasons, <code>$keyman</code> targets both Keyman Engine and KeymanWeb. See the <code>$keymanonly</code> target
      to include rules specific for Keyman Engine</td>
    </tr>

    <tr>
      <td><code>$keymanonly:</code></td>
      <td>Keyman Engine</td>
      <td>Covers both Windows and macOS versions of Keyman</td>
    </tr>
    
    <tr>
      <td><code>$keymanweb:</code></td>
      <td>KeymanWeb</td>
      <td>Covers any JavaScript keyboard, including touch layouts</td>
    </tr>

    <tr>
      <td><code>$kmfl:</code></td>
      <td>KMFL</td>
      <td>Suggested as prefix for KMFL, unclear if this is currently suppported</td>
    </tr>

    <tr>
      <td><code>$weaver:</code></td>
      <td>SILKey</td>
      <td>Lines with this prefix are ignored by the compiler and are used only by SILKey for Macintosh OS 9</td>
    </tr>
  </tbody>
</table>

<h2><a name="id483440" id="id483440"></a>Version history</h2>

<p>Version 7.1. Add support for <code>$keymanweb</code> and <code>$keymanonly</code> targets</p>
<p>Version 3.2. Add support for <code>$keyman</code> and <code>$weaver</code> (SILKey) targets</p>
