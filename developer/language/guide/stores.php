<?php
  require_once('includes/template.php');

  head([
    'title' => "Using Stores"
  ]);
?>

<h1 class="title" id="reference__struct_stores">Using Stores</h1>

<p>Stores provide a facility to match a character against an array of characters. This means they can be used to reduce multiple
rules down into a single rule. They can also be used to give mnemonic names to strings.</p>

<p>The most common use of stores is to reduce the number of rules required in a keyboard by matching multiple characters rather than a
single character in a rule.</p>

<h2>Creating stores</h2>

<p>Stores are created with the <a href='../reference/store'><code>store()</code> statement</a>:</p>

<pre><code>store(<var>storeName</var>) <var>storeContents</var>
</code></pre>

<p>Where <code><var>storeName</var></code> is an identifier you give to the store, and <code><var>storeContents</var></code> is the store's contents,
expressed as a string or a sequence of Unicode character constants.</p>

<p>All stores must be given unique identifiers, and are visible throughout the keyboard file. A <code>store()</code> statement can be placed anywhere
in a keyboard source file, and its visibility is unaffected: it can even be placed after references to the store in other statements.</p>

<p>Apart from characters, two other elements are allowed in stores: <a href="../reference/deadkey" title="deadkey statement">deadkeys</a> and
<a href="virtual-keys" title="Virtual Keys and Virtual Character Keys">virtual keys</a>.</p>

<p>Stores have a maximum length of 4095 characters (note that non-character elements such as virtual keys and deadkeys take more than
one character in the store).</p>

<h3>Examples</h3>

<pre><code>store(vowels) 'aeiouAEIOU'
store(vowels_lower) 'ae' U+0069 U+006F U+0075
store(φωνήεντα) 'αειου'
store(vowel_keys) [K_A] [K_E] [K_I] [K_O] [K_U]
</code></pre>

<h2>Using stores in rules</h2>

<p>Stores are most often used with the <code>any()</code> and <code>index()</code> statements. The <code>any()</code> statement is used in the
context or key section of the rule, and will match any character in the specified store, remembering its index.</p>

<pre><code>any(<var>storeName</var>) + ... > ...
... + any(<var>storeName</var>) > ...
</code></pre>

<p>The <code>index()</code> statement is used to look up a character in a store at the index where a specified <code>any()</code> statement matched
a character. The <code>any()</code> statement used to obtain the index is referenced by its position in the context (and key) part of the rule,
a 1-based offset.</p>

<pre><code>index(<var>storeName</var>, <var>offset</var>)
</code></pre>

<p>Note that an <code>index()</code> statement may reference an <code>any()</code> statement which uses a
different store: the only requirement is that the stores used by each have the same length.</p>

<h3>Examples</h3>

<p>In the following example, the <code>index()</code> statement
translates the lower case vowels to upper case vowels:</p>

<pre class="language-keyman"><code>store(lowercase) "aeiou"
store(uppercase) "AEIOU"

+ any(lowercase) > index(uppercase, 1)    c translate vowels to upper case
</code></pre>

<p>A more useful example shows how a vowel followed by a circumflex can be translated automatically
into the combined character:</p>

<pre><code>store(vowel) 'aeiouAEIOU'
store(vowel_circum) 'âêîôûÂÊÎÔÛ'
any(vowel) + '^' > index(vowel_circum, 1)
</code></pre>

<p>Another example of using <code>any()</code> and <code>index()</code> is given in the
<a href="/developer/current-version/guides/develop/tutorial/step-6" title="Step 6: Stores, any(), and index()">keyboard design tutorial</a>.</p>

<h2>Outputting stores</h2>

<p>The <a href='../reference/outs'><code>outs()</code> statement</a> can be used to output the contents of a store. This can be used
in another store, or in the context or output of a rule.</p>

<pre><code>outs(<var>storeName</var>)
</code></pre>

<p>Stores that contain only a single character are usually used to define <a class="link" href="constants" title=
"Named Constants">named constants</a>.</p>

<h3>Examples</h3>

<p>The following examples show the <code>outs()</code> statement and an example of named constants:</p>

<pre><code>store(vowels_lower) 'aeiou'
store(vowels_upper) 'AEIOU'
store(vowels) outs(vowels_lower) outs(vowels_upper)

store(vowel_a) 'a'
store(vowel_alpha) 'α'
+ outs(vowel_a) > outs(vowel_alpha)
+ $vowel_a > $vowel_alpha
</code></pre>

<p>The <strong>IPAMenu.kmn</strong> sample keyboard included with Keyman Developer gives an example of the use of stores
and <code>outs()</code> to create a menu-based keyboard for entry of characters from the International Phonetic Alphabet.</p>

<h2>System stores</h2>

<p>System stores are stores with a name beginning with <code>&amp;</code>, which have a special purpose, usually defining properties or
behaviour of the keyboard.</p>

<p>Keyman 5.0 introduced the concept of system stores that replace the header statements used in earlier versions of Keyman. In Keyman 9.0
and later, system stores are also used to reflect and update system state. System stores are prefixed with an ampersand (<code>&amp;</code>).</p>

<h3>Example</h3>

<p>This shows the <a href='../reference/name'><code>&amp;name</code> store</a> in use:</p>

<pre><code>store(&amp;name) "My First Keyboard"
</code></pre>

<h2>IMX definition stores</h2>

<p>Stores can be used to define an IMX interface function to be used with <a href='../reference/call'><code>call()</code></a>. These stores should
not then be used for any other purpose.</p>

<h3>Example</h2>

<pre><code>store(DLLFunction) "myimx.dll:KeyEvent"
+ any(key) > call(DLLFunction)
</code></pre>

<h2>Variable stores</h2>

<p>In Keyman 8.0 and later versions, variable stores are supported. These allow a keyboard to have a store which is updated dynamically while the
keyboard is active, in order to track state. The store value can be persisted for use in future sessions, or can be updated just for the current
session.</p>

<p>For Keyman 9.0, support was also added for variable system stores. Some variable system stores are read-only and some are read-write. These allow
the keyboard developer to test or adjust the system configuration, including swapping touch layout layers and testing the platform the keyboard is
running under.</p>

<p>Variable stores are sometimes called option stores, and the feature has been known in the past as "keyboard options".</p>

<pre><code>store(opt_composed) '0'
store(vowel) 'aeiouAEIOU'
store(vowel_circum) 'âêîôû ÊÎÔÛ'
 
+ [CTRL ALT K_1] > set(opt_composed='1')
+ [CTRL ALT K_0] > set(opt_composed='0')
if(opt_composed = '0') any(vowel) + '^' > index(vowel, 2) U+0302
if(opt_composed = '1') any(vowel) + '^' > index(vowel_circum, 2)
</code></pre>

<p>More information about variable stores is available in the <a href='variable-stores'>variable stores guide</a>.</p>

<h2>Store statements</h2>

<p>The following statements are used with stores:</p>

<dl>
  <dt><a href="../reference/any" title="any() statement"><code>any()</code> statement</a></dt>
  <dd>Matches on an array of characters</dd>

  <dt><a href="../reference/call" title="call() statement"><code>call()</code> statement</a></dt>
  <dd>Calls an Input Method Extension</dd>

  <dt><a href="../reference/if" title="if() statement"><code>if()</code> statement</a></dt>
  <dd>Tests the content of a variable store</dd>

  <dt><a href="../reference/_index" title="index() statement"><code>index()</code> statement</a></dt>
  <dd>Outputs from an array of characters</dd>

  <dt><a href="../reference/outs" title="outs() statement"><code>outs()</code> statement</a></dt>
  <dd>Outputs an array of characters</dd>

  <dt><a href="../reference/reset" title="reset() statement"><code>reset()</code> statement</a></dt>
  <dd>Resets the content of a variable store to the default</dd>

  <dt><a href="../reference/save" title="save() statement"><code>save()</code> statement</a></dt>
  <dd>Persists the content of a variable store</dd>

  <dt><a href="../reference/set" title="set() statement"><code>set()</code> statement</a></dt>
  <dd>Updates the content of a variable store</dd>

  <dt><a href="../reference/store" title="store() statement"><code>store()</code> statement</a></dt>
  <dd>Defines an array of characters</dd>

<h2>Version history</h2>

<ul>
  <li>Introduced in Keyman 3.0</li>
  <li>Keyman 5.0 added system stores</li>
  <li>Keyman 6.0 added support for deadkeys and virtual keys in stores</li>
  <li>Keyman 7.0 extended maximum store length to 4095 characters</li>
  <li>Keyman 8.0 introduced variable stores</li>
  <li>Keyman 9.0 introduced variable system stores</li>
</ul>
