<?php
  require_once('includes/template.php');

  head([
    'title' => "Lexical Model Editor",
    'css' => ['template.css','index.css','kmguides.css']
  ]);
?>

<h1>Lexical Model Editor</h1>

<p>The lexical model editor allows you to create and maintain lexical models for predictive text.</p>

<h2>Lexical model component files</h2>

<p>A lexical model can have multiple source files, all of which can be managed in this one editor. The source files currently 
supported by the editor are:</p>

<table class='display'>
  <thead>
    <tr>
      <th>File type</th>
      <th>Tabs</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class='language-none'><code><var>file</var>.model.ts</code></td>
      <td>Details, Source</td>
      <td>The primary lexical model source file, a TypeScript module.</td>
    </tr>
    <tr>
      <td class='language-none'><code><var>wordlist</var>.tsv</code></td>
      <td>wordlist.tsv</td>
      <td>One or more wordlists, UTF-8 format tab-separated value files. These files are referenced in the 
      .model.ts source file.</td>
    </tr>
  </tbody>
</table>

<h2 id="details">Details tab</h2>

<p>The following image shows the first tab of the editor, the Details tab. Changes made to this tab are reflected immediately in
the Source tab.</p>

<p class='context-main-image'><img src="<?= cdn('img/developer/130/ui/frmModelEditor_Details.png') ?>" alt="Model Editor - Details tab" /></p>

<p>The fields here have corresponding definitions in the <a href='../reference/file-types/model-ts'>.model.ts source file</a>,
which can be seen in the <strong>Source</strong> tab:</p>

<dl id="details-fields">
  <dt>Format</dt>
  <dd>The format of the lexical model. This can be either <strong>Wordlist</strong> (<code>trie-1.0</code>), or 
  <strong>Custom</strong> (<code>custom-1.0</code>). Corresponds to the <code>format</code> variable in the .model.ts source
  file.</dd>

  <dt>Word breaker</dt>
  <dd>The word breaking algorithm used when generating suggestions. This can be one of <code>default</code>, <code>ascii</code>, 
  or <code>custom</code>. Corresponds to the <code>wordBreaker</code> variable in the .model.ts source file.</dd>
  
  <dt>Comments</dt>
  <dd>This field corresponds to the first lines of comments in the model source, and is visible only to the model designer.</dd>
  
  <dt>Wordlists</dt>
  <dd>The Wordlists grid controls which additional wordlist files are referenced by the model. Adding a wordlist file will
  add an extra tab to the editor, and add the corresponding reference to the lexical model source. Removing a wordlist will not
  delete the component file, but will just remove the reference from the lexical model source. Corresponds to the 
  <code>sources</code> variable in the .model.ts source file.</dd>
</dl>

<p>Note: if the .model.ts file cannot be parsed by the model editor, if for example it contains more complex constructs, the
field shown here will be read only and you will need to make changes only in the <strong>Source</strong> tab.</p>

<h2 id="wordlist.tsv">Wordlist tabs</h2>

<p>Each <a href='../reference/file-types/tsv'>wordlist file</a> referenced in the Wordlists grid is given its own tab. Wordlist 
tabs have two views: Design, and Code. Changes to one view are reflected immedaitely in the other view.
<a href='../guides/lexical-models/tutorial/step-3'>Learn more about wordlists</a>.</p>

<p>Wordlist files should be stored in UTF-8 encoding (preferably without BOM), and tab-separated format. Some applications, such as 
Microsoft Excel, are unable to export in this format, so the compiler will also accept UTF-16 encoded files, but this encoding is 
not recommended as it is more difficult to manage in version control systems such as Git, which is the system used by the Keyman
Cloud lexical model repository.</p>

<p class='context-main-image'><img src="<?= cdn('img/developer/130/ui/frmModelEditor_Wordlist_Design.png') ?>" alt="Model Editor - Wordlist tab - Design view" /></p>

<p>Every line of the tab-separated format file is shown here, and can be edited directly. For most wordlists, it will be more
effective to use an external dictionary tool, such as SIL Fieldworks or SIL PrimerPrep to generate the wordlist from a text corpus,
and use this tab just to preview the contents of the file.</p>

<p>The <strong>Sort by frequency</strong> button has no effect on the functioning of the wordlist, but can help you, the editor, 
by showing more common words earlier in the list.</p>

<p class='context-main-image'><img src="<?= cdn('img/developer/130/ui/frmModelEditor_Wordlist_Code.png') ?>" alt="Model Editor - Wordlist tab - Code view" /></p>

<p>Note: The wordlist Code editor will accept the Tab key to insert a Tab character. In other code editors in Keyman Developer, the 
Tab key inserts spaces.</p>

<h2 id="source">Source tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/130/ui/frmModelEditor_Source.png') ?>" alt="Model Editor - Source tab" /></p>

<p>This tab shows the source view of the model, written in the Typescript programming language. The format of this file is documented
in the <a href='../reference/file-types/model-ts'>Lexical Model File Format Reference</a>.</p>

<h2 id="build">Build tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/130/ui/frmModelEditor_Build.png') ?>" alt="Model Editor - Build tab" /></p>

<p>A set of common controls is across the top of this tab:</p>

<dl>
  <dt>Compile Model</dt>

  <dd>You can compile the model for testing and installation by clicking the <span class="guibutton">Compile</span> button, or
  selecting Model, Compile Model. This will compile the model into a single Javascript file, named as shown in the <strong>Target
  filename</strong> field.</dd>

  <dt>Open Containing Folder</dt>
  <dd>Opens the folder which contains the model source files.</dd>
  
  <dt>Add to Project</dt>
  <dd>If the model file is not already part of the project, adds it to the project.</dd>
</dl>

<h3>Test Lexical Model in Web Browser</h3>

<p>Before distributing the lexical model, you can test it in a web browser.
<a href='../guides/test/how-to-test-your-lexical-model'>Learn more about testing lexical models</a>.</p>

<dl>
  <dt>Keyboard for testing</dt>
  <dd>Allows you to select a compiled keyboard to provide input for testing the lexical model. You can also choose to start testing
  a keyboard directly from the keyboard source file and it will then be available for use when testing the lexical model, until you
  restart Keyman Developer. The keyboard must be a .js format keyboard with a touch keyboard.</dd>

  <dt>Test Lexical Model</dt>
  <dd>Starts the Keyman Developer Web Server for the current lexical model.</dd>
  
  <dt>Addresses</dt>
  <dd>Lists the various IP addresses and hostnames that Keyman Developer is listening on</dd>
  
  <dt>Open debugger in local browser</dt>
  <dd>Starts your default browser with the selected address to allow testing of the model directly</dd>
  
  <dt>Send addresses to email</dt>
  <dd>Sends the list of web addresses as an email so that you can more easily open the test site on your mobile
  device, or share with someone else on your network.</dd>
</dl>

<p>To test on other platforms, open one of the debug host addresses listed on your device.  Your device will need to be on the same 
network as the Keyman Developer computer.</p>

<p>There is also a QR code which you can scan with your mobile device camera to automatically load the selected site in the list
of debug web addresses. This is the quickest way to start testing on your mobile device.</p>

<p>The Send to email function is another way to open the addresses on your mobile device without having to enter them manually.</p>

<p>Learn more about <a href='../guides/test/how-to-test-your-lexical-model'>testing on the web and mobile devices</a>.</p>
