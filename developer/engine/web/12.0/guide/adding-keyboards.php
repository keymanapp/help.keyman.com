<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 6/12/2017
 * Time: 11:46 AM
 */

  require_once('includes/template.php');

head([
  'title' => "KeymanWeb 12.0 - Installing Languages"
]);
?>

<h1>Adding Keyboards</h1>

<p style='margin-top: 16px'>
<p>There are multiple ways to add and install keyboards into your KeymanWeb installation.</p>
<p>In the examples that follow, please note the use of variable <code>kmw</code> as shorthand for the <code>keyman</code> object.</p>

<h2>Directly linking a local copy</h2>

<p>The most efficient way to utilize a keyboard is to obtain a local copy of it and place this copy in a static location on your website.
  Once this is done, it can be directly linked into KeymanWeb as follows.</p>

<pre><code>
kmw.addKeyboards({
    id:'us',                  // The keyboard's unique identification code.
    name:'English',           // The keyboard's user-readable name.
    language:{
      id:'en',                // A BCP 47 code uniquely identifying the language.
      name:'English (US)'     // The language's name.
    },
    filename:'./us-1.0.js'    // A valid path to the compiled *.js file representing the keyboard.
});
</code></pre>

<p>Custom fonts may also be utilized via the <code>language.font</code> property.  For example:</p>

<pre><code>
font:{
    family:'LaoWeb',
    source:['../font/saysettha_web.ttf','../font/saysettha_web.woff','../font/saysettha_web.eot']
}
</code></pre>

<h2>Requested from the CDN by language name</h2>

<p>To obtain the default Keyman keyboard for a given language, call the following function.</p>

<pre><code>kmw.addKeyboardsForLanguage('Dzongkha');</code></pre>

<p>This example would find the default keyboard for the Dzongkha language.  This method will fail if the name doesn't perfectly match any language found in the CDN's repository.</p>

<p>Alternatively, languages may be looked up via their BCP 47 language code as follows:</p>

<pre><code>kmw.addKeyboards('@he')</code></pre>

<p>The <code>@</code> prefix indicates the use of the BCP 47 language code, which in this case corresponds with Hebrew.</p>

<h2>Requested from the CDN by keyboard name</h2>

<p>To obtain a specific keyboard by name or by keyboard name and language code as a pair, see the following:</p>

<pre><code>kmw.addKeyboards('french','european2@sv','european2@no')</code></pre>

<p>This will install three keyboards - one for French (named, quite simply, "French") and two copies of the EuroLatin2 keyboard - one for Swedish and one for Norwegian.</p>