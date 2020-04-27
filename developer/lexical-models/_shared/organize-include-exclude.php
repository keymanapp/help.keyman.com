<h2>Include these files</h2>

<p>
    The following files should be included for your lexical model in the <code><strong>source</strong></code> folder.
    Some lexical models may have additional source files:
</p>

<dl>

    <dt><code>&lt;lexical model&gt;.model.ts</code></dt>
    <dd>The lexical model source file.</dd>

    <dt><code>&lt;wordlist&gt;.tsv</code></dt>
    <dd>The wordlist used for your lexical model.</dd>

    <dt><code>&lt;lexical model&gt;.kps</code></dt>
    <dd>The package source file. See the Keyman Developer
        <a href="/developer/current-version/guides/lexical-models/distribute/tutorial" target="_blank">reference</a>
        for what to include within the package source file.
        Remember that when you reference any built files within the package, make sure you reference them from your
        <code><strong>build</strong></code> folder.</dd>

    <dt>Documentation files</dt>
    <dd>Any files you reference in the package source .kps file, such as documentation,
        should be included in the <code><strong>source</strong></code> folder.</dd>
</dl>

<h2>Do not include these files</h2>

<p>
    The following files should <code><strong>not</strong></code> be included because they are generated at build time:
</p>

<dl>

    <dt><code>&lt;lexical model&gt;.js</code></dt>
    <dd>The compiled lexical model file.</dd>

    <dt><code>&lt;lexical model&gt;.kmp</code></dt>
    <dd>The compiled lexical model package file.</dd>

</dl>
