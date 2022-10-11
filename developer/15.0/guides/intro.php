<?php
  require_once('includes/template.php');

  head([
    'title' => "Introducing Keyman Developer"
  ]);
?>

<h1>Introducing Keyman Developer</h1>

<h2><a name="id471208" id="id471208"></a>Welcome to Keyman Developer</h2>

<p>Keyman Developer allows you to create your own keyboard layouts for use on the Keyman platform. Keyman is a multi-platform
input method solution that runs on Windows, macOS, the web, mobile web, iOS and Android and Linux.</p>

<p>There are two core applications included in Keyman Developer: the Keyman Developer IDE (formerly called TIKE), and KMComp,
the command line compiler.</p>

<p><a href='https://youtu.be/kwhgx_eX4Es'>Watch a video</a> that highlights some of the Keyman Developer features.</p>
<h2><a name="id471195" id="id471195"></a>Keyman Developer IDE</h2>

<p>The Keyman Developer IDE is a complete environment for designing, developing, testing, and packaging your keyboards for
distribution. Some of the major features of Keyman Developer IDE are:</p>

<ul type="disc">
  <li>Keyboard Editor, for creating keyboards visually for all platforms</li>
  <li>Touch Layout editor, for creating fluid touch layouts</li>
  <li>Package Editor, for creating a package of keyboard, fonts and files for distribution (used on all platforms except web)</li>
  <li>Lexical Model Editor, for creating predictive text models</li>
  <li>Integrated compiler, to compile keyboards, packages and models</li>
  <li>Fully interactive debugger for testing keyboards and models</li>
  <li>Character Map, which supports viewing Unicode fonts under all Windows versions</li>
  <li>On Screen Keyboard editor, for creating visual representations of keyboards</li>
  <li>Projects, for managing keyboard and lexical model development projects large and small</li>
</ul>

<p>Source files (except images!) are normally written in UTF-8 format, so they can be opened with any text editor. However, the
Keyman Developer IDE provides much tooling to simplify editing each of the types of files. The Keyman Developer IDE runs on
Windows.</p>

<h2><a name="id471278" id="id471278"></a>KMComp</h2>

<p>KMComp, the command-line compiler, is a comprehensive tool that lets you compile keyboards, packages, models and projects
from the command-line.</p>

<p>KMComp is available in 32-bit and 64-bit versions, and is a native Windows executable. However, it runs well under WINE in
Linux and macOS.</p>
