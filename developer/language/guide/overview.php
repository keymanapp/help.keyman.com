<?php
  require_once('includes/template.php');

  head([
    'title' => "Keyman language overview"
  ]);
?>

<h1 class="title" id="reference__struct">Keyman language overview</h1>

<p>The Keyman keyboard programming language is a language designed around transforming
inputs to outputs, through rules rather than through static tables. Source files have
the <strong>.kmn</strong> extension and are text files.</p>

<h2>Line Types</h2>

<p>Rules, comments and metadata in Keyman keyboard files are terminated by the end of a line.</p>

<p>Each line in a keyboard file must be a rule, comment, store, group or header, or blank.</p>

<dl>
  <dt><a href='rules'>Rules</a></dt>
  <dd>A rule is the basic part of a Keyman keyboard. Each rule defines what a keystroke will output, when certain characters are already
displayed on the screen.</dd>

  <dt><a href='comments'>Comments</a></dt>
  <dd>A comment is treated as whitespace and the content of comments is always ignored by the compiler.</dd>

  <dt><a href='stores'>Stores</a></dt>
  <dd>A store is a string constant or variable.</dd>

  <dt><a href='groups'>Groups</a></dt>
  <dd>Rules are organised in groups for processing.</dd>

  <dt><a href='headers'>Headers</a></dt>
  <dd>Headers, or system stores, provide metadata for the keyboard.</dd>
</dl>

<h3>Illustration of line types</h3>

<p>The following snippet illustrates the different types of lines you will find in a keyboard file:</p>

<p><img src="<?=cdn('img/developer/language/language-overview.png')?>" alt="Overview of keyboard file line types"></p>

<h2>Encoding</h2>

<p>The recommended text encoding is UTF-8, although UTF-16 and "ANSI" (CP-1252) are
also supported. A Byte Order Mark should be used for UTF-8 and UTF-16 keyboards, and
the development tools will add these automatically.</p>

<p>Line breaks can be either CRLF or LF.</p>

<h2>Related files</h2>

<p>A keyboard file often requires other source files, in a variety of languages. All these files are optional.</p>

<dl>
  <dt><a href='/developer/current-version/reference/file-types/kvk'>On Screen Keyboard (.kvk)</a></dt>
  <dd>A binary file that determines the visual presentation of a keyboard file.</dd>

  <dt><a href='/developer/current-version/guides/develop/creating-a-touch-keyboard-layout-for-amharic'>Touch Layout File (_layout.js)</a></dt>
  <dd>A JSON file that determines the presentation and actions of a touch layout.</dd>

  <dt><a href='../reference/bitmap'>Icon (.ico, .bmp)</a></dt>
  <dd>A small picture that is used in the user interface to represent the keyboard.</dd>

  <dt><a href='../reference/kmw_embedcss'>Embedded CSS</a> and <a href='../reference/kmw_embedjs'>Javascript</a></dt>
  <dd>Provide for additional web-specific formatting or logic for the keyboard.</dd>

  <dt><a href='../reference/includecodes'>Named character code definition files</a></dt>
  <dd>Provides character code definitions.</dd>

  <dt><a href='../reference/kmw_helpfile'>Help HTML File</a></dt>
  <dd>A HTML snippet that can replace the On Screen Keyboard in desktop web keyboard files.</dd>
</dl>