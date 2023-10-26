<?php
  require_once('includes/template.php');

  head([
    'title' => "Keyboard Tutorial"
  ]);
?>

<h1>Keyboard Tutorial</h1>

<dl>
  <dt><span class="section"><a href="step-1">Step 1: Planning the Keyboard</a></span></dt>
  <dt><span class="section"><a href="step-2">Step 2: Writing the Header</a></span></dt>
  <dt><span class="section"><a href="step-3">Step 3: The Keyboard Header</a></span></dt>
  <dt><span class="section"><a href="step-4">Step 4: The Keyboard Body</a></span></dt>
  <dt><span class="section"><a href="step-5">Step 5: Rules with Context</a></span></dt>
  <dt><span class="section"><a href="step-6">Step 6: Stores, 'any', and 'index'</a></span></dt>
  <dt><span class="section"><a href="step-7">Step 7: Testing the Keyboard</a></span></dt>
  <dt><span class="section"><a href="step-8">Step 8: Deadkeys</a></span></dt>
  <dt><span class="section"><a href="step-9">Step 9: The Finished Keyboard</a></span></dt>
</dl>

<h2>Overview</h2>

<p>Welcome! In this tutorial, you will learn the basics of Keyman keyboards and create a simple French keyboard which can be used with
any physical keyboard layout.</p>

<p>The keyboard will use a basic English layout, and add some deadkeys to define vowel diacritics and a few other characters.</p>

<p>While this tutorial is based on a physical keyboard such as used on a desktop or laptop computer, the principles of the keyboard
language that you will learn are applicable to developing touch layouts as well.</p>

<p>This keyboard will use Unicode. Unicode is a character encoding standard that supports most of the world's scripts, and includes
support for user-defined scripts. Unicode is the accepted standard for text encoding in modern applications and operating systems.</p>

<p>In Keyman Developer keyboard source files, Unicode characters are specified with <code>U+xxxx</code>, where <code>xxxx</code> is a
four-digit hexadecimal number.</p>

<p>At the bottom of each page in the tutorial, will be a link to both the previous page and the next page. You can use these links to
work your way through the tutorial. You may also find links to reference information, which you can select to learn more about a
particular aspect of creating Keyman keyboards.</p>

<h2>Let's begin</h2>

<p>Let's get started! Move on to the next topic to begin the first step, planning the keyboard.</p>

<ul>
  <li><a href="step-1">Continue with Step 1: Planning the Keyboard</a></li>
</ul>