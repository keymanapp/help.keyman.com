<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'showLanguageList';
    $param1 = 'context';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Context %s</var>)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.showLanguageList() (Deprecated)</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>(Deprecated) The <code><strong><?php echo $method.'()' ?></strong></code> method displays the language list.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The context.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>The Keyman keyboard picker menu used to call this method to display the language list whenever the '+' button was tapped.
  As of 14.0, keyboards are no longer added this way, and this call is removed.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    final Context context = this;
    ImageButton languageButton = (ImageButton) findViewById(R.id.languageButton);
    languageButton.setOnClickListener(new OnClickListener() {
        @Override
        public void onClick(View v) {
            KMManager.showLanguageList(context);
        }
    });
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="showKeyboardPicker.php"><code>showKeyboardPicker()</code></a></li>
</ul>
