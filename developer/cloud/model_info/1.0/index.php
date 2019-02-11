<?php
  require_once('includes/template.php'); 
  
  // Required
  head([
    'title' =>'.model_info 1.0 Specification',
    'css' => ['template.css','index.css','prism.css'],
    'showMenu' => true
  ]);
?>
<h2>.model_info 1.0 Specification</h2>

<p>This file will be created by the PR submitter of the lexical model, for new pull requests. It is a JSON file, with the following members. 
The <b>.model_info</b> file will be used when building lexical models for deployment; the master version of the file lives in the lexical-models repository.
During CI deployment, it will be read from the source repository, extended with the required generated fields and this new version pushed with the
compiled resources to the download store.</p>

<h3>ModelInfo Object</h3>

<p>Note: The <b>Generated </b>column indicates if the field will be generated if it is not present in the source repository during the CI deployment 
process. Fields that are <b>Required</b> and not <b>Generated</b> must be completed by the lexical model author.</p>

<table class='language-javascript display'>
<thead>
<tr>
  <th><b>Member</b></th>
  <th><b>Required in source?</b></th>
  <th><b>Required in distribution</b></th>
  <th><b>Generated?</b></th>
  <th><b>Notes</b></th>
</tr>
</thead><tbody>
<tr>
<td>id</td><td></td><td>yes</td><td>yes</td>
<td>
  <p><b>string</b>, a unique identifier for the model, in a format <code><b>author</b>.<b>bcp47</b>.<b>uniq</b></code>. The components must be the 
    same as the path of the model in the repository, e.g. a model in <code>release/example/en.wordlist</code> would have the identifer
    <code>example.en.wordlist</code>. The identifier must be lowercase and each component must be a valid Javascript identifier, thus the BCP 47 component
    should be delineated with underscores (_), not hyphens (-).</p>

  <p><b>Example:</b> <code>"id": "example.en_us.wordlist"</code></p>

  <p><b>Generation: </b>from parent folder names.</p>
</td>
</tr>

<tr>
<td>name</td><td></td><td>yes</td><td>yes</td>
<td>
  <p><b>string</b>, the human readable name of the model. This will usually differ from the id.</p>

  <p><b>Generation:</b> from .kps info, package name.</p>
</td>
</tr>

<tr>
<td>authorName</td><td></td><td></td><td>yes</td>
<td>
  <p><b>string</b>, the name of the author</p>

  <p><b>Generation:</b> from .kps info, package author</p>
</td>
</tr>

<tr>
<td>authorEmail</td><td></td><td></td><td>yes</td>
<td>
  <p><b>string</b>, the email address of the author</p>

  <p><b>Generation:</b> from .kmp info</p>
</td>
</tr>

<tr>
<td>description</td><td></td><td></td><td></td>
<td>
  <p><b>string</b>, a textual description of the model suitable for displaying in a catalog online. This should be written
  to help a user choose between models. This must not contain any HTML tags.</p>

  <p><b>No Automatic Generation:</b> this information is not available elsewhere.</p>
</td>
</tr>

<tr>
<td>license</td>
<td>yes</td>
<td>yes</td>
<td></td>
<td>
  <p><b>string</b>, the possible values for <b>license</b> vary by location in the repository:</p>
  <ul>
    <li><b>release/</b> and <b>experimental/</b> models must be <code>"mit"</code>.</li>
  </ul>
  <p>This must always be specified, because this must be an explicit decision by the model author 
    for legal reasons.</p>
</td>
</tr>

<tr>
<td>languages</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td>
  <p><b>array of strings</b>; an array with each member being a BCP 47 code.</p>

  <p><b>Generation:</b> Will be generated from the .kps file.</p>
</td>
</tr>

<tr>
<td>lastModifiedDate</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td>
  <p><b>string</b>, the last time the model was modified, in RFC3339, UTC <code>YYYY-MM-DDThh:mm:ss[.nnn]Z</code></p>

  <p><b>Generation:</b> the time that the .model_info file is generated</p>
</td>
</tr>

<tr>
<td>links</td>
<td></td>
<td></td>
<td></td>
<td>
  <p><b>array</b>, of <b>ModelLinkInfo</b> objects</p>
</td>
</tr>

<tr>
<td>packageFilename</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td>
  <p><b>string</b>, filename of the .kmp file that will be distributed, relative to the model base folder, 
  including extension. This must be <b><i>id</i></b><b>/build/</b><b><i>id</i></b><b>.model.kmp</b>.</p>

  <p><b>Generation:</b> the filename of the model.</p>
</td>
</tr>

<tr>
<td>packageFileSize</td>
<td></td>
<td></td>
<td>yes</td>
<td>
  <p><b>number</b>, integer size of the .kmp file that will be distributed.

  <p><b>Generation:</b> This will normally be generated automatically.</p>
</td>
</tr>

<tr>
<td>jsFilename</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td>
  <p><b>string</b>, filename of the .js file that will be distributed,  e.g. "example.en.model.js".</p>

  <p><b>Generation:</b> This will normally be generated automatically.</p>
</td>
</tr>

<tr>
<td>jsFileSize</td>
<td></td>
<td></td>
<td>yes</td>
<td>
  <p><b>number</b>, byte size of the .js file that will be distributed.

  <p><b>Generation:</b> This will normally be generated automatically.</p>
</td>
</tr>

<tr>
<td>documentationFilename</td>
<td></td>
<td></td>
<td></td>
<td>
  <p><b>string</b>, filename of the .pdf or .rtf format documentation file associated with the model,
  relative to the model base folder.</p>

  <p><b>No Automatic Generation:</b> This may be difficult to ascertain as the file loses
  path when compiled into a .kmp.</p>
</td>
</tr>

<tr>
<td>documentationFileSize</td>
<td></td>
<td></td>
<td>yes</td>
<td>
  <p><b>number</b>, integer size of the <b>documentationFilename</b> file that will be distributed.

  <p><b>Generation:</b> This will normally be generated automatically.</p>
</td>
</tr>

<tr>
<td>isRTL</td>
<td></td>
<td></td>
<td></td>
<td>
  <p><b>boolean</b>, true if the script associated with the model is right-to-left.

  <p><b>No Automatic Generation:</b> This is not currently generated automatically (it could probably be 
  ascertained from language metadata but we don't currently support that).</p>
</td>
</tr>

<tr>
<td>packageIncludes</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td>
  <p><b>array</b>, of <b>strings</b>. This flags whether a package includes:</p>
  <ul>
    <li><code>"fonts"</code> - one or more fonts</li>
    <li><code>"documentation"</code> - documentation, in PDF, 
        RTF or HTML format, excluding welcome.htm and readme</li>
  </ul>
  
  <p>This field corresponds to the .keyboard_info <b>packageIncludes</b> field, but
  is mostly unused.</p>
  
  <p><b>Generation: </b>'fonts' will be added if .kmp contents includes .ttf or .otf files;
  if documentationFilename field is not empty, then 'documentation' will be added.</p>
</td>
</tr>

<tr>
<td>version</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td>
  <p><b>string</b>, the file version of the model.</p>

  <p><b>Generation:</b> from package and source metadata.</p>
</td>
</tr>

<tr>
<td>minKeymanVersion</td>
<td></td>
<td>yes</td>
<td>yes</td>
<td>
  <p><b>string</b>. The minimum version of Keyman that can read 
  this lexical model. If present, must be one of <code>"12.0"</code> or a later version.</p>

  <p><b>Generation:</b> from source metadata.</p>
</td>
</tr>

<tr>
<td>helpLink</td>
<td></td>
<td></td>
<td>yes</td>
<td>
  <p><b>string</b>. If present, the link to this model's help page on help.keyman.com.</p>

  <p><b>Generation:</b> if <b><i>id</i></b><b>/source/help/</b><b><i>id</i></b><b>.php</b> exists.</p>
</td>
</tr>

<tr>
<td>sourcePath</td>
<td></td>
<td></td>
<td>yes</td>
<td>
  <p><b>string</b>, the relative path of the model in the /keymanapp/lexical-models GitHub repository, starting
  with <code>release/</code> or <code>experimental/</code>.

  <p><b>Generation:</b> This will normally be generated automatically.</p>
</td>
</tr>
<tr>
<td>related</td>
<td></td>
<td></td>
<td></td>
<td>
  <p><b>object</b>, with each property an id of a lexical model and corresponding value is a <b>ModelRelatedInfo</b>.</p>
</td>
</tr>
</tbody>
</table>

<h3>ModelLinkInfo Object</h3>
<table class='display'>
<thead>
<tr>
<th><b>Member</b></th>
<th><b>Required?</b></th>
<th><b>Notes</b></th>
</tr>
</thead>
<tbody>

<tr>
<td>name</td>
<td>yes</td>
<td><p><b>string</b>, the text to be shown in the link</p></td>
</tr>

<tr>
<td>url</td>
<td>yes</td>
<td><p><b>string</b>, the fully qualified url of the link.</p></td>
</tr>

</tbody>
</table>

<h3>ModelRelatedInfo Object</h3>
<table class='display'>
<thead>
<tr>
<th><b>Member</b></th>
<th><b>Required?</b></th>
<th><b>Notes</b></th>
</tr>
</thead>
<tbody>

<tr>
<td>deprecates</td>
<td></td>
<td>
  <p><b>boolean</b>, if <b>true</b>, then this model is intended to deprecate another model with the parent member name, 
  and Keyman will upgrade it to this model if found, ignoring version numbers.</p>
</td>
</tr>

<tr>
<td>deprecatedBy</td>
<td></td>
<td>
  <p><b>boolean</b>, if <b>true</b>, then this model has been deprecated by the model referred to. This member should not
  be set in the source .model_info but will be returned from queries to api.keyman.com.</p>
</td>
</tr>

<tr>
<td>note</td>
<td></td>
<td>
  <p><b>string</b>, a textual description of the relationship between the models.</p>
</td>
</tr>

</tbody>
</table>

<h3>Schema</h3>

<p>A validating schema for the object is online at <a href="https://api.keyman.com/schemas/model_info.source.json">https://api.keyman.com/schemas/model_info.source.json</a> and <a href="https://api.keyman.com/schemas/model_info.distribution.json">https://api.keyman.com/schemas/model_info.distribution.json</a>. .model_info files in the repository must validate against the source json; after build, the resulting .model_info will validate against the distribution json.</p>

<h3>Validation</h3>

<p>The model repository build process validates the JSON schema, then copies the .model_info into the build/ folder and populates missing generated fields. If a field is already present,
it will be validated for correctness against the source files, but will not be overridden.</p>

<p>Any errors in a .model_info file will cause the build to fail.</p>

<h3>Examples</h3>

<p>This is a sample minimal source .model_info file. Note that as you can see, only two fields are required for the source file. The build
process will generate any missing fields that it can. Generally speaking, it is better to keep the file minimal to avoid duplication.</p>

<pre><code class='language-javascript'>
{
  "license": "mit", 
  "languages": ["crl", "crj"]
}
</code></pre>

<p>The following is a more comprehensive example .model_info file for an example lexical model.</p>

<pre><code class='language-javascript'>
{
    "id": "example.en.wordlist",
    "name": "Example (English) Template Wordlist Model",
    "license": "mit",
    "version": "1.0.0",
    "languages": [
        "en"
    ],
    "authorName": "Marc Durdin",
    "authorEmail": "support@example.com",
    "description": "Example wordlist model template for English language."
}
</code></pre>

<h3>Version History</h3>

<dl>
  <dt>1.0, 2019-02-12</dt>
  <dd>Initial version, seeded from .keyboard_info specification</dd>
</dl>
