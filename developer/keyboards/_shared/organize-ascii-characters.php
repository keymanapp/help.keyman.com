<h2>Use ASCII characters for keyboard base names</h2>

<p>
    Each keyboard in the repository is stored in a folder with the same name as the base name of the keyboard.
    The base name of the keyboard can <b>only</b> contain these characters:
</p>

<ul>
    <li>letters [<code>a-z</code>] (lower case)</li>
    <li>digits [<code>0-9</code>]</li>
    <li>underscore [<code>_</code>] (no hyphens <code>-</code> which are reserved).</li>
</ul>

<p>
    This restriction removes a lot of complexities with dealing with legacy and cross-platform systems and
    integrating with the web tools, which use the base name of the keyboard as a Javascript symbol.
</p>

<p>
    While you may see some existing keyboards which are not named according to this convention,
    new keyboards must follow the ASCII naming convention. This applies to the filename of the keyboard; the
    descriptive name (<code><strong>store(&amp;name)</strong></code>) is a Unicode string, and therefore can contain
    any Unicode character.
</p>

<p>
    The keyboard name is used as a key for automatic updates on all platforms.
    Do not include the version of the keyboard in the filename, unless you want to make a new version a completely
    separate deployment because it has changed so substantially that users would not want to update to it automatically.
    In this situation, a new keyboard name is probably a wiser choice.
</p>

<p>
    The keyboard name must also be unique in the repository. For less widely used languages, you may be able to get
    away with the name of the language, but for languages with a large number of speakers, there will probably be more
    than one keyboard layout, and you will need to be a bit more creative – “<code>tamil</code>” is not going to be a
    good keyboard name.
</p>
