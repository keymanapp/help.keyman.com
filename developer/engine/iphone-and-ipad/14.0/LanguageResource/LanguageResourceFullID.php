<?php
    require_once('includes/template.php');
    $class = 'LanguageResourceFullID';
    $method = 'fieldName'; // stub
    $methodSyntax = sprintf('%s.%s', $class, $method);
    head([
        'title' => $class
    ]);

    // See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array for sample
?>

<h1>LanguageResourceFullID protocol</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <strong><?= $class ?></strong> protocol and the types that implement it 
(<code>FullKeyboardID</code> and <code>FullLexicalModelID</code>) represent
unique identifiers for installed resource-language pairings of keyboards and lexical models
 within the KeymanEngine.</p>

<p><code>FullKeyboardID</code> and <code>FullLexicalModelID</code> (both of which implement this protocol) 
are designed as a 'higher level' and 'friendlier' analogue to their corresponding <code>LanguageResource</code>s
and are safe to construct dynamically for use in any of KeymanEngine's API functions.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h2 id="Description" name="Description">Description</h2>
<p>The <code>LanguageResourceFullID</code> protocol is frequently used for lookup operations within
the KeymanEngine, as it represents the minimal amount of data needed to uniquely identify an installation
for any <code>LanguageResource</code>.  Both <code>FullKeyboardID</code> (for keyboards) and 
<code>FullLexicalModelID</code> (for lexical models) implement this protocol, 
allowing methods to be written that can handle either resource type.  Also note the existence 
of <code>AnyLanguageResourceFullID</code>, which serves a "type erasure" role for classes 
implementing this protocol.</p>

<h2 id="Associated_types" name="Associated_types">Associated Types</h2>
<dl>
    <dt><code>Resource: <a href='.'>LanguageResource</a></code></dt>
    <dd>The type of <code>LanguageResource</code> represented by this type.
    </dd>
</dl>

<!-- Fill in examples of how to use, etc. -->

<h2 id="Fields" name="Fields">Fields</h2>

<dl>
    <dt><code>id: String</code></dt>
    <dd>The resource's internal name.  This must be unique among all resources of the same type and
    follows standard unique ID constraints:  a-z, A-Z, 0-9, and underscores only.</dd>
    <dt><code>languageID: String</code></dt>
    <dd>One language paired with this resource during installation.</dd>
    <dt><code>type: LanguageResourceType</code></dt>
    <dd>An enum representing resource types supported by the KeymanEngine.  May be either <code>.keyboard</code>
    (for <code>FullKeyboardID</code>) or <code>.lexicalModel</code> (for <code>FullLexicalModelID</code>).
    </dd>
</dl>

<h3 id="Example:_Using_type" name="Example:_Using_type">Example: Using <code>FullKeyboardID</code> to install a keyboard</h3>
<p>The following script illustrates the use of <code>FullKeyboardID</code>, which implements this protocol:</p>
<pre class="language-swift"><code>let packageURL = Bundle.main.url(forResource: "sil_euro_latin", withExtension: "kmp")!
let keyboardID = FullKeyboardID("sil_euro_latin", "fr") // Marks the keyboard for use with French.

if let keyboardPackage = try ResourceFileManager.shared.prepareKMPInstall(packageURL) as? KeyboardKeymanPackage {
  // Gets the all of the package's metadata for the specified resource, without installing it.
  // Returned type:  InstallableKeyboard
  let keyboard = keyboardPackage.findResource(withID: keyboardID)
  // ...
}
</code></pre>

<h2 id="History" name="History">History</h2>
While the classes that implement the protocol existed before this, the protocol itself 
was added in Keyman Engine for iPhone and iPad 14.0.  

<h2 id="See_also" name="See_also">See Also</h2>
<dl>
    <dt><code><a href='.'>LanguageResource</a></code></dt>
    <dd>Represents all metadata used internally by the KeymanEngine for installed keyboards and lexical models.</dd>
</dl>