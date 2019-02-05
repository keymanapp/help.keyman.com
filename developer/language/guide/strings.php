<?php
  require_once('includes/template.php');

  head([
    'title' => "Strings"
  ]);
?>

<h1 class="title" id="reference__struct_strings">Strings</h1>

<p>A string is a sequence of characters. Strings can be made up of multiple concatenated substrings. There is no general limit on the
length of a string, although Keyman does impose limits on strings in various situations.</p>

<p>The following string formats are available:</p>

<table class='display'>
  <tbody>
    <tr>
      <th>Type</th>
      <th>Description</th>
      <th>Example</th>
    </tr>

    <tr>
      <td>Quoted strings</td>
      <td>a list of characters, enclosed either by <code>"</code> or <code>'</code> quote characters. Can use any characters 
      apart from controls. To use quotes in the string, enclose with the other quote type.</td>
      <td><code>store(vowels) "aeiou"</code><br /><code>+ '"' > 'quote'</code></td>
    </tr>

    <tr>
      <td>Unicode character codes</td>
      <td>a single character in U+xxxxxx format. Recommended for Unicode. Range <code>U+0020</code> – <code>U+10FFFF</code>.</td>
      <td><code>+ U+0020 > 'space'</code></td>
    </tr>

    <tr>
      <td>Decimal character codes (legacy)</td>
      <td>a single character, in decimal format. Range <code>d32</code> – <code>d1114111</code>.</td>
      <td><code>+ d32 > 'space'</code></td>
    </tr>

    <tr>
      <td>Hexadecimal character codes (legacy)</td>
      <td>a single character in hexadecimal format. Range <code>x20</code> – <code>x10FFFF</code>.</td>
      <td><code>+ x20 > 'space'</code></td>
    </tr>

    <tr>
      <td>Octal character codes (legacy)</td>
      <td>a single character in octal format. Not recommended - included only for historical reasons. Range <code>40</code> – <code>4177777</code>.</td>
      <td><code>+ 40 > 'space'</code></td>
    </tr>
  </tbody>
</table>

<p>Strings are concatenated by listing them together, separated by spaces. For example, the following two lines are equivalent:</p>

<pre><code>U+0041 U+0042 d67 d68 "abc" 
"ABCDabc"
</code></pre>

<p>Character codes below <code>U+0020</code> should not be used as their meaning differs between applications. Some legacy keyboards 
may still use codes such as <code>d13</code> for carriage return, but this usage is not portable.</p>

<h2>See also</h2>

<ul>
  <li><a href="unicode.php" title="Unicode support">Unicode support</li>
</ul>
