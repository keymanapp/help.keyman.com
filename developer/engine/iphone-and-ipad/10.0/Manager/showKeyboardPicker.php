<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'showKeyboardPicker';
    $param1 = 'viewController';
    $param2 = 'shouldAddKeyboard';
    $methodSyntax = sprintf('%s.%s(%s: UIViewController, %s: Bool)', $class, $method, $param1, $param2);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.showKeyboardPicker()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method displays a list of available keyboards and
    allows a user to add/download new keyboards or remove existing ones.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
  <dt><code><?php echo $param1 ?></code></dt>
  <dd>The current UIViewController (recommended) or the navigation controller.</dd>
  <dt><code><?php echo $param2 ?></code></dt>
  <dd>Whether to immediately open the subview to add a new keyboard. If set to <code>false</code>,
      the language picker won't be displayed</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to display keyboard picker menu. Normally you do not need to call this method explicitly since, by default,
    Keyman on-screen keyboard calls this method to display the keyboard picker menu whenever 'globe' key is tapped.
    Multiple calls to this method are unsafe and may result in multiple instances of keyboard picker menu being
    displayed at the same time.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>mainViewController.dismissGetStartedView(nil)
Manager.shared.showKeyboardPicker(in: mainViewController, shouldAddKeyboard: true)
</code></pre>
