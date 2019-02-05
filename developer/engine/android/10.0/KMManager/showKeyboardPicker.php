<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'showKeyboardPicker';
    $param1 = 'context';
    $param2 = 'kbType';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Context %s</var>, <var>KeyboardType %s</var>)', $class, $method, $param1, $param2);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.showKeyboardPicker()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method displays the keyboard picker menu.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The context.</dd>
<dt><code><?php echo $param2 ?></code></dt>
<dd>The keyboard type. <code>KEYBOARD_TYPE_INAPP</code> or <code>KEYBOARD_TYPE_SYSTEM</code>.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to display keyboard picker menu. Normally you do not need to call this method explicitly since, by default, Keyman on-screen keyboard calls this method to display the keyboard picker menu whenever 'globe' key is tapped. Multiple calls to this method is unsafe and may result in multiple instances of keyboard picker menu being displayed at the same time.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    final Context context = this;
    ImageButton globeButton = (ImageButton) findViewById(R.id.globeButton);
    globeButton.setOnClickListener(new OnClickListener() {
        @Override
        public void onClick(View v) {
            KMManager.showKeyboardPicker(context, KMManager.KeyboardType.KEYBOARD_TYPE_INAPP);
        }
    });
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="showLanguageList.php"><code>showLanguageList()</code></a></li>
</ul>
