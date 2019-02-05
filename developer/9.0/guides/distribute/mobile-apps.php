<?php
  require_once('includes/template.php');
  
  head([
    'title' => 'Distributing Custom Keyboards for Keyman Mobile Apps'
  ]);
?>  
<h1>Distributing Custom Keyboards for Keyman Mobile Apps</h1>
<h2>Overview</h2>

<p>Welcome! In this tutorial you will learn how to distribute a custom keyboard (built with Keyman Developer) to the suite of Keyman mobile applications -- Keyman for Android and Keyman for iPhone and iPad.</p>

<p>Prerequisites for this tutorial are a keyboard .js file and font .ttf file (if your keyboard requires a custom font). You can learn how to build 
a keyboard with Keyman Developer <a href="../develop/tutorial/">here</a>.</p>

<h2>Step 1) Create the keyboard JSON file</h2>

<p>The keyboard JSON file provides the meta data for a keyboard, such as what devices it is available on, the name and version of 
the keyboard, and what font to use with it. The keyboard.json format is based on the <a href="/developer/cloud/2.0/">Keyman Engine for Web Cloud Services API</a>:</p>

<pre class="language-javascript"><code>{
  "options": {
    "device":"any",
    "keyboardBaseUri":"http://keyman.com/test/",
    "fontBaseUri":"http://keyman.com/test/"
  },
  "keyboard": {
    "id":"ekwtamil99uni",
    "name":"Tamil Keyboard",
    "filename":"ekwtamil99uni.js",
    "font": {
      "family":"Latha",
      "source":"aava1.ttf"
    },
    "version":"1.1",
    "lastModified":"2014-04-17T14:07:00+11:00",
    "languages":[
      {
        "id":"tam",
        "name":"Tamil"
      }
    ]
  }
}</code></pre>

<p>The above JSON file shows the format for an example Tamil99 keyboard. It is important to note that the keyboard id must match the Keyboard ID from the keyboards .js file.</p>

<p>Here is the list of the objects inside of the JSON file and an explanation of each:</p>

<h3>JSON format</h3>

<p>Schema for JSON file: <a href='https://api.keyman.com/schemas/keyboard_json.json'>keyboard_json.json</a></p>

<dl class='language-none'>
  <dt><code>options</code> key</dt>
  <dd>An object with the following members:
    <dl>
      <dt><code>device</code> key</dt>
      <dd>The target device for your keyboard, one of: <code>"windows", "macosx", "iphone", "ipad", "androidphone", "androidtablet", "mobile", "desktop", "tablet", "any"</code>. Optional.</dd>
      
      <dt><code>keyboardBaseUri</code> key</dt>
      <dd>The base URI for your keyboard file. Required.</dd>
      
      <dt><code>fontBaseUri</code> key</dt>
      <dd>If you are including a font file with your keyboard, this is the base URI for the font. Optional.</dd>
    </dl>
  </dd>

  <dt><code>keyboard</code> key</dt>

  <dd>An object with the following members:
    <dl>
      <dt><code>id</code> key</dt>
      <dd>ID of the keyboard. It must always match the internal name of the keyboard in the keyboard .js file. Required.</dd>
      
      <dt><code>name</code> key</dt>
      <dd>Name of the keyboard. Optional but recommended.</dd>
      
      <dt><code>filename</code> key</dt>
      <dd>Name of the keyboard .js file. Is appended to the <code>keyboardBaseUri</code>.</dd>
      
      <dt><code>rtl</code> key</dt>
      <dd>Set to <code>true</code> if your keyboard is a right-to-left keyboard. Optional.</dd>
      
      <dt><code>font</code> key</dt>
      <dd>An object with the following members. Optional.
      
        <dl>
          <dt><code>family</code> key</dt>
          <dd>Font family that Keyman will provide for this font.</dd>
          
          <dt><code>source</code> key</dt>
          <dd>String or Array of Strings of downloadable filenames for this font. Each string is appended to the <code>fontBaseUri</code>.</dd>
          
          <dt><code>size</code> key</dt>
          <dd>CSS size of the font, defaults to 1em. Optional.</dd>
        </dl>
      </dd>
      
      <dt><code>oskFont</code> key</dt>
      <dd>An object with the following members, used for the On Screen Keyboard. If not provided, uses <code>font</code>. Optional.
      
        <dl>
          <dt><code>family</code> key</dt>
          <dd>Font family that Keyman will provide for this font</dd>
          
          <dt><code>source</code> key</dt>
          <dd>String or Array of Strings of downloadable filenames for this font. Each string is appended to the <code>fontBaseUri</code>.</dd>

          <dt><code>size</code> key</dt>
          <dd>CSS size of the font, defaults to 1em. Optional.</dd>
        </dl>
      </dd>
      
      <dt><code>version</code> key</dt>
      <dd>The version of the keyboard. Required (note: previous version of spec said Optional, but in practice has always been required.)</dd>
      
      <dt><code>lastModified</code> key</dt>
      <dd>The date the keyboard file was last updated, in ISO format, <code>YYYY-MM-DDTHH:mm:ss.nnn+ZZ:ZZ</code>)</dd>
      
      <dt><code>languages</code> key</dt>
      <dd>An array of objects with the following members:
      
        <dl>
          <dt><code>id</code> key</dt>
          <dd>3 letter ISO 639-3 code</dd>
          
          <dt><code>name</code> key</dt>
          <dd>Language name</dd>
        </dl>
      </dd>
    </dl>
  </dd>
</dl>

<p>For a full explanation of the structure of the JSON file, please read the <a href="/developer/cloud/2.0/">Keyman Engine for Web Cloud Services API</a> documentation.</p>

<h2>Step 2) Upload the keyboard files</h2>

<p>Once the keyboard.json file is created, you will need to upload all resources to a public facing website. For this example, there are 3 files being uploaded:</p>

<ol>
  <li>ekwtamil99uni.js (the keyboard .js file)</li>
  <li>aava1.ttf (the font file)</li>
  <li>tamil.json (the keyboard JSON file created in step 1)</li>
</ol>

<h2>Step 3) Create a link to the JSON file</h2>

<p>Once all the files have been uploaded, you will need to provide a link to the keyboard.json file for your iOS or Android device to read. 
This can either be a link on a web page, or a link in an email. For this tutorial, I have created a very simple .html web page with a link to the tamil.json file:</p>

<pre class='language-markup'><code>&lt;html&gt;
  &lt;head&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;a href="keyman://localhost/open?url=http://keyman.com/test/tamil.json" &gt;Custom Keyboard URL&lt;/a&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>The link must be in the following format:</p>

<pre class='language-none'>keyman://localhost/open?url=url</pre>
  
<p>This tells Keyman on this device (localhost) to open (open) with the preferred language and keyboard.  The keyboard will be installed if not already on the user's device.</p>

<p><strong>Note:</strong> the <code class='language-markup'>keyman://</code> protocol is deprecated in mobile apps for Keyman 10.0 and will be removed in Keyman 11.0</p>

<p>The only required parameter is <code>url</code>, which specifies the source keyboard description JSON file for the keyboard.</p>

<p>The optional parameter <code>direct</code> tells Keyman to not use the Keyman Cloud to download the file.  Keyman will normally download 
the keyboard via Keyman Cloud, in order to permit caching, compression, and prevent overloading a target server. If you are hosting a keyboard file on an 
intranet or private website, you can specify <code>direct=true</code> to tell Keyman to download the keyboard directly.</p>

<p><strong>Note:</strong> the <code>direct</code> parameter is deprecated in mobile apps for Keyman 10.0 and will be removed in Keyman 11.0</p>

<p>Upload the web page to your public facing website. Once done, you can download the keyboard onto your mobile device by following these steps:</p>

<ul>
  <li><a href="https://blog.keyman.com/2014/04/keyman-for-iphone-and-ipad-update-12-add-custom-keyboards-to-your-device/">Installing custom keyboards to your iPhone or iPad</a></li>
  <li><a href="https://blog.keyman.com/2014/04/keyman-for-android-update-12-add-custom-keyboards-to-your-device/">Installing custom keyboards to your Android device</a></li>
</ul>
