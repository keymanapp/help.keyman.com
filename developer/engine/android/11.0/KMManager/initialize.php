<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'initialize';
    $param1 = 'context';
    $param2 = 'keyboardType';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Context %s</var>, <var>KeyboardType %s</var>)', $class, $method, $param1, $param2);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.initialize()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method initializes the Keyman manager.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The context that starts the initialization. This is normally an Activity or the application context of an InputMethodService.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>KeyboardType to be used. <code>KEYBOARD_TYPE_INAPP</code> or <code>KEYBOARD_TYPE_SYSTEM</code>.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>This method is normally called from <code>onCreate()</code> method of an Activity or InputMethodService. A license must be set before calling this method.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>@Override
protected void onCreate(Bundle savedInstanceState) {
    super.onCreate(savedInstanceState);
    // ...
    KMManager.setKeymanLicence("********", "********");
    KMManager.initialize(this, KeyboardType.KEYBOARD_TYPE_INAPP);
    // ...
    // do not call setContentView before initializing the Keyman manager.
    setContentView(R.layout.activity_main);
    // ...
}
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="setKeymanLicense.php"><code>setKeymanLicense()</code></a></li>
</ul>
