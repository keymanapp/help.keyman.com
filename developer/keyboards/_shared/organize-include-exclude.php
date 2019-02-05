<h2>Include these files</h2>

<p>
    The following files should be included for your keyboard in the <code><strong>source</strong></code> folder.
    Some keyboards may have additional source files:
</p>

<dl>

    <dt><code>&lt;keyboard&gt;.kmn</code></dt>
    <dd>The keyboard source file.</dd>

    <dt><code>&lt;keyboard&gt;.kvks</code></dt>
    <dd>The desktop on screen keyboard source (XML) file (if it exists).</dd>

    <dt><code>&lt;keyboard&gt;.ico (or .bmp)</code></dt>
    <dd>The keyboard icon.</dd>

    <dt><code>&lt;keyboard&gt;.keyman-touch-layout or &lt;keyboard&gt;-layout.js</code></dt>
    <dd>The touch keyboard definition.</dd>

    <dt><code>&lt;keyboard&gt;.kps</code></dt>
    <dd>The package source file. See the Keyman Developer
        <a href="https://help.keyman.com/developer/10.0/guides/distribute/packages" target="_blank">reference</a>
        for what to include within the package source file,
        but remember that when you reference any built files within the package, make sure you reference them from your
        <code><strong>build</strong></code> folder.</dd>

    <dt>Font and documentation files</dt>
    <dd>Any files you reference in the package source .kps file, such as fonts, documentation,
        should be included in the <code><strong>source</strong></code> folder.</dd>
</dl>

<h2>Do not include these files</h2>

<p>
    The following files should <code><strong>not</strong></code> be included because they are generated at build time:
</p>

<dl>

    <dt><code>&lt;keyboard&gt;.kmx</code></dt>
    <dd>The compiled keyboard file for Desktop.</dd>

    <dt><code>&lt;keyboard&gt;.kmp</code></dt>
    <dd>The compiled keyboard package file.</dd>

    <dt><code>&lt;keyboard&gt;.kvk</code></dt>
    <dd>The compiled (binary) on screen keyboard.</dd>

    <dt><code>&lt;keyboard&gt;.js</code></dt>
    <dd>The compiled keyboard file for web and touch platforms.</dd>

</dl>
