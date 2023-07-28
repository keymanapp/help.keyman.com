<h2>Use a regular folder structure</h2>

<p>The folder structure for each lexical model has the following components:</p>

<dl>
  <dt><code>build\</code></dt>
  <dd>not stored in the repository; output files will go here</dd>

  <dt><code>extras\</code></dt>
  <dd>other related files, e.g. scripts to format wordlists</dd>

  <dt><code>source\</code></dt>
  <dd>lexical model source files, including any files that will be packaged in the build</dd>

  <dt><code>source\readme.htm</code></dt>
  <dd>readme.htm and any resources referenced from the readme.htm file. This is a short description of the package,
    its use restrictions, and what it includes. Starting in Keyman 13, some of the Keyman apps will display this
    readme.htm in a view for the user to confirm lexical model package installation.</dd>

  <dt><code>source\welcome.htm</code></dt>
  <dd>welcome.htm and any resources referenced from the welcome.htm file. This introductory help file will be detected
    and displayed during lexical model package installation. It is also available on the Model Information page.</dd>

  <dt><code>source\&lt;wordlist&gt;.tsv</code></dt>
  <dd>wordlist source file, in columns for words, counts, and comments. This is a
    <a href="/developer/current-version/reference/file-types/tsv">tab-separated value</a> file.</dd>

  <dt><code>&lt;lexical-model&gt;.kpj</code></dt>
  <dd>the Keyman Developer project file for the lexical model<br/>
      The <code>.kpj</code> project file will contain references to the lexical model <code>.ts</code> and <code>.tsv</code>
      files and must set the output path to <code><strong>$PROJECTPATH\build</strong></code>.
      Do not include the <code>.kpj.user</code> file in the repository. The file should have the same base name as the
      folder/lexical model.
  </dd>

  <dt><code>README.md</code></dt>
  <dd>description of the lexical model, target languages, credits, author, etc.</dd>

  <dt><code>HISTORY.md</code></dt>
  <dd>details on major changes to the lexical model (repository commits covers detail)</dd>

  <dt><code>LICENSE.md</code></dt>
  <dd>the open source license for the lexical model</dd>

  <dt><code>&lt;lexical model&gt;.model_info</code></dt>
  <dd>a <a href="/developer/cloud/model_info">metadata file</a> detailing the lexical model's origin, version,
      requirements, and capabilities<br/>
      This file greatly assists the process of making your lexical model readily available for public download.
      Please see the <a href="/developer/cloud/model_info">.model_info section</a> for more details.</dd>

</dl>
