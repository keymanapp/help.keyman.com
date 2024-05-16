<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'switchToNextKeyboard';
    $param1 = 'context';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Context %s</var>)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.switchToNextKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method loads the next available keyboard in keyboards list.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The context.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to switch to next keyboard in the keyboards list. If the next keyboard does not exists, then it loads the first keyboard in the keyboards list.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    final Context context = this;
    ImageButton nextButton = (ImageButton) findViewById(R.id.nextButton);
    nextButton.setOnClickListener(new OnClickListener() {
        @Override
        public void onClick(View v) {
            KMManager.switchToNextKeyboard(context);
        }
    });
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="setKeyboard"><code>setKeyboard()</code></a></li>
</ul>
