<h2>Use a regular folder structure</h2>

<p>The folder structure for each keyboard has the following components:</p>

<dl>
    <dt><code>build\</code></dt>
    <dd>not stored in the repository; output files will go here</dd>

    <dt><code>extras\</code></dt>
    <dd>other related files, e.g. Word documents, databases, experimental files</dd>

    <dt><code>source\</code></dt>
    <dd>keyboard source files, including any files that will be packaged in the build</dd>

    <dt><code>source\help\&lt;keyboard&gt;.php</code></dt>
    <dd>php help file which is uploaded to help.keyman.com</dd>

    <dt><code>source\welcome\</code></dt>
    <dd>welcome.htm and any resources referenced from the welcome.htm file</dd>

    <dt><code>docs\</code></dt>
    <dd>development documentation for the keyboard</dd>

    <dt><code>&lt;keyboard&gt;.kpj</code></dt>
    <dd>the Keyman Developer project file for the keyboard<br/>
        The <code>.kpj</code> project file will contain references to the keyboard <code>.kmn</code> and <code>.kps</code>
        file and must set the output path to <code><strong>$PROJECTPATH\build</strong></code>.
        Do not include the <code>.kpj.user</code> file in the repository. The file should have the same base name as the
        folder/keyboard.
    </dd>

    <dt><code>README.md</code></dt>
    <dd>description of the keyboard, target languages, target devices, author, etc.</dd>

    <dt><code>HISTORY.md</code></dt>
    <dd>details on major changes to the keyboards (repository commits covers detail)</dd>

    <dt><code>LICENSE.md</code></dt>
    <dd>the open source license for the keyboard</dd>

    <dt><code>&lt;keyboard&gt;.keyboard_info</code></dt>
    <dd>a <a href="/developer/cloud/keyboard_info">metadata file</a> detailing the keyboard's origin, version,
        requirements, and capabilities<br/>
        This file greatly assists the process of making your keyboard readily available for public download.
        Please see the <a href="/developer/cloud/keyboard_info">.keyboard_info section</a> for more details.</dd>

</dl>
