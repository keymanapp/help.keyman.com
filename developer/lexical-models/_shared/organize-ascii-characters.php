<h2>Use ASCII characters for lexical model base names</h2>

<p>
    Each lexical model in the repository is stored in a folder with the name comprising of author, BCP 47 tag, and unique identifier.
    The unique identfier can <b>only</b> contain these characters:
</p>

<ul>
    <li>letters [<code>a-z</code>] (lower case)</li>
    <li>digits [<code>0-9</code>]</li>
</ul>

<p>
    This restriction removes a lot of complexities with dealing with legacy and cross-platform systems and
    integrating with the web tools, which use the base name of the lexical model as a Javascript symbol.
</p>

<p>
    The lexical model name is used as a key for automatic updates on all platforms.
    Do not include the version of the lexical model in the filename.
</p>
