<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'methodName'; // stub
    $methodSyntax = sprintf('%s.shared.%s()', $class, $method);
    head([
        'title' => $class
    ]);

    // See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array for sample
?>

<h1>Manager class</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <strong><?= $class ?></strong> class provides methods for controlling Keyman Engine</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h2 id="Description" name="Description">Description</h2>
<p>The Manager is the core class which provides most of the methods and constants you will need to develop your apps with Keyman Engine</p>

<!-- Fill in examples of how to use, etc. -->

<h2 id="Methods" name="Methods">Methods</h2>

<dl>
    <dt><code><a href='addKeyboard.php'>addKeyboard()</a></code></dt>
    <dd>adds a keyboard into the keyboards list</dd>

    <dt><code><a href='canAddNewKeyboards.php'>canAddNewKeyboards</a></code></dt>
    <dd>returns whether adding a new keyboard is enabled in the keyboard picker menu</dd>

    <dt><code><a href='currentKeyboard.php'>currentKeyboard()</a></code></dt>
    <dd>returns info for the currently selected keyboard</dd>

    <dt><code><a href='dismissKeyboardPicker.php'>dismissKeyboardPicker()</a></code></dt>
    <dd>hides the list of keyboards</dd>

    <dt><code><a href='downloadKeyboard.php'>downloadKeyboard()</a></code></dt>
    <dd>asynchronously fetches the keyboard files</dd>

    <dt><code><a href='downloadKeyboard.php'>downloadLexicalModel()</a></code></dt>
    <dd>asynchronously fetches the dictionary files</dd>

    <dt><code><a href='fontNameForKeyboard.php'>fontNameForKeyboard()</a></code></dt>
    <dd>returns the font name for the given keyboard ID and language ID</dd>

    <dt><code><a href='hideKeyboard.php'>hideKeyboard()</a></code></dt>
    <dd>hides the in-app OSK</dd>

    <dt><code><a href='keyboardHeight.php'>keyboardHeight()</a></code></dt>
    <dd>returns the height of the keyboard</dd>

    <!-- Not useful since it's hardcoded to return true
    <dt><code><a href='gestureRecognizer.php'>gestureRecognizer()</a></code></dt>
    <dd>returns whether the gesture is recognized</dd>
    -->

    <dt><code><a href='parseKMP.php'>parseKMP()</a></code></dt>
    <dd>install the resources from a KMP package for keyboards or dictionaries</dd>

    <dt><code><a href='preloadFiles.php'>preloadFiles()</a></code></dt>
    <dd>preloads the JS and font files required for a keyboard</dd>

    <dt><code><a href='removeKeyboard.php'>removeKeyboard()</a></code></dt>
    <dd>removes the keyboard at specified position from the keyboards list</dd>

    <dt><code><a href='setKeyboard.php'>setKeyboard()</a></code></dt>
    <dd>sets the keyboard to be used</dd>

    <dt><code><a href='showKeyboard.php'>showKeyboard()</a></code></dt>
    <dd>show the in-app OSK</dd>

    <dt><code><a href='showKeyboardPicker.php'>showKeyboardPicker()</a></code></dt>
    <dd>displays a list of available keyboards and allows a user to add/remove keyboards</dd>

    <dt><code><a href='stateForKeyboard.php'>stateForKeyboard()</a></code></dt>
    <dd>returns the current state of availability for a keyboard</dd>

    <dt><code><a href='stateForLexicalModel.php'>stateForLexicalModel()</a></code></dt>
    <dd>returns the current state of availability for a dictionary</dd>

    <dt><code><a href='switchToNextKeyboard.php'>switchToNextKeyboard()</a></code></dt>
    <dd>loads the next available keyboard in keyboards list</dd>

</dl>
