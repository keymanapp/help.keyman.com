<?php
  require_once('includes/template.php');

  head([
    'title' => "Custom Editor Themes"
  ]);
?>

<h1>Custom Editor Themes</h1>

<p>Keyman Developer embeds the Monaco open source text editor. The highlighting and styles for the text editor are 
customisable with a JSON file configured in the <a href='../context/options'>Options dialog</a>. The JSON file must be a valid <a 
href='https://microsoft.github.io/monaco-editor/playground.html#customizing-the-appearence-tokens-and-colors'>Monaco theme</a> (passed as second parameter 
to <code>monaco.editor.defineTheme</code>).</p>

<h2>Example</h2>

<pre><code class='language-js'>{
  "base": "vs-dark",
  "inherit": true,
  "rules": [
    { "token": "comment", "foreground": "ffa500", "background": "303030", "fontStyle": "italic underline" },
    { "token": "comment.js", "foreground": "008800", "fontStyle": "bold" },
    { "token": "comment.css", "foreground": "0000ff", "fontStyle": "bold", "inherit": false, "background": "808080" }
  ]
}</code></pre>

<h2>Keyman keyboard language tokens</h2>

<p>The Keyman keyboard language highlighting uses the following token names:</p>

<table class='display'>
  <thead>
    <tr><th>Token</th><th>Source Element</th></tr>
  </thead>
  <tbody>
    <tr><td>annotation</td><td>System store names</td></tr>
    <tr><td>bracket</td><td></td></tr>
    <tr><td>comment</td><td>Comments</td></tr>
    <tr><td>identifier</td><td>Store and Group names</td></tr>
    <tr><td>invalid</td><td>Invalid code</td></tr>
    <tr><td>keyword</td><td>Keywords such as <code>begin</code>, <code>any</code></td></tr>
    <tr><td>number</td><td>Decimal character codes, deprecated, e.g. <code>d65</code></td></tr>
    <tr><td>number.hex</td><td>Unicode character codes, e.g. <code>U+1234</code></td></tr>
    <tr><td>number.octal</td><td>Character codes expressed in octal</td></tr>
    <tr><td>operator</td><td><code>+</code>, <code>&gt;</code> and other operators</td></tr>
    <tr><td>string</td><td>Strings</td></tr>
    <tr><td>string.invalid</td><td>Unterminated strings</td></tr>
    <tr><td>string.quote</td><td><code>'</code> and <code>"</code> characters</td></tr>
    <tr><td>tag</td><td>Virtual keys</td></tr>
    <tr><td>white</td><td></td></tr>
  </tbody>
</table>
