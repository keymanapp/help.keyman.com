<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 7: Testing the Keyboard"
  ]);
?>

<h1>Step 7: Testing the Keyboard</h1>

<h1>Compiling the Keyboard</h2>

<p>Before we can test the keyboard, we must compile it. Choose <span class="guimenu">Keyboard</span>, <span class="guimenuitem">Compile
Keyboard</span> or press <kbd>F7</kbd> to compile the keyboard. The Message window will display the results of the compilation; if you have no
typing errors, the keyboard should compile successfully.</p>

<p>If there are any mistakes, an error message will be displayed in the Message window, which will tell you the line on which the error
occurred.</p>

<h2>Compiling the Keyboard</h2>

<p>After compiling the keyboard successfully, we can start testing it. Choose <span class="guimenu">Debug</span>, <span class=
"guimenuitem">Start Debugging</span> or press <kbd>F5</kbd> to begin testing. The Keyboard debug window will appear.</p> 

<p>Now we test that all the rules operate as expected. To test the rules, we type the keystrokes that will give us the output; for
example, we can type a quote <kbd>'</kbd> followed by one of <kbd>A</kbd>, <kbd>E</kbd>, <kbd>I</kbd>, <kbd>O</kbd>, <kbd>U</kbd>, or <kbd>Y</kbd> 
to test the uppercase acute-accented vowels. Similarly we can test the other accents, and C-cedilla (<samp>Ç</samp>) and the angled quotes. 
If the rules are correct, all this should work as we wanted.</p>

<p>Testing the rules in isolation like this will show if the rules are correct or not, but won't show other possible errors that
might occur in everyday usage of the keyboard. For example, look at what happens if you type the following quote:</p>

<blockquote><samp>'Alors Alice demande, "Où est mon chat ?"'</samp></blockquote>
    
<p>As you can see, it comes out incorrectly as:</p>

<blockquote><samp>Álors Alice demande, Öù est mon chat ?"'</samp></blockquote>    

<p>The problem occurs when we have a word in quotes that begins with a vowel: the keyboard will convert it to an accented vowel. We
will need to come up with a solution to this problem.</p>

<p><a href="step-8.php" title="Step 8: Deadkeys">Step 8: Deadkeys</a></p>
