<?php /*
  Name:             embedded_fonts
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      18 Sep 2009

  Modified Date:    18 Sep 2009
  Authors:          mcdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          18 Sep 2009 - mcdurdin - Polish
*/

  require_once('includes/template.php');

head([
  'title' => "Embedded Font Troubleshooting"
]);
?>

<div class='body_text'>
<h1>Embedded Font Troubleshooting</h1>
<p style='margin-top: 16px'>
KeymanWeb allows users to display and enter text that may require a font 
not normally installed with your operating system, by including (embedding) a special copy 
of a suitable font in the web page.
</p>
<p>
However, many older browsers do not support the use of embedded fonts.  This test page will 
help you to find out whether or not your browser supports the use of embedded fonts 
for a number of languages which may not be fully supported by your operating system.
</p>
<p>In the table below, the left column has an image showing how the sample text 
should appear, the center column displays the sample text using a font installed on
your system, if available, and the right column shows the same sample text 
displayed using an embedded font downloaded automatically with this web page.
</p>
<p>
<i>Note: This page may take a minute or more to load all of the fonts needed to display correctly.</i>
</p>

<div style='clear:left'>
  <table class='sample'>
    <tr style='line-height:150%'><th>Language</th>
      <th>Sample text - image</th>
      <th>Sample text - installed font</th>
      <th>Sample text - embedded font*</th>
    </tr>
    <tr>
      <td class='lg'>Amharic</td>
      <td class='pix'><img src='images/GeezSample.png' /></td>
      <td class='nofont'>ኢትዮጵያ</td>
      <td class='geez'>ኢትዮጵያ</td>
    </tr>
    <tr>
      <td class='lg'>Burmese</td>
      <td class='pix'><img src='images/BurmeseSample.png' /></td>
      <td class='nofont'>မြန်မာအက္ခရာ</td>
      <td class='burmese'>မြန်မာအက္ခရာ</td>
    </tr>
    <tr>
      <td class='lg'>Dinka</td>
      <td class='pix'><img src='images/DinkaSample.png' /></td>
      <td class='nofont'>Thuɔŋjäŋ</td>
      <td class='latin'>Thuɔŋjäŋ</td>
    </tr>
    <tr>
      <td class='lg'>Khmer</td>
      <td class='pix'><img src='images/KhmerSample.png' /></td>
      <td class='nofont'>ភាសាខ្មែរ</td>
      <td class='khmer'>ភាសាខ្មែរ</td>
    </tr>
    <tr>
      <td class='lg'>Lao</td>
      <td class='pix'><img src='images/LaoSample.png' /></td>
      <td class='nofont'>ພາສາລາວກໍໄດ້</td>
      <td class='lao'>ພາສາລາວກໍໄດ້</td>
    </tr>
    <tr>
      <td class='lg'>Oriya</td>
      <td class='pix'><img src='images/OriyaSample.png' /></td>
      <td class='nofont'>ଓଡ଼ିଆ </td>
      <td class='oriya'>ଓଡ଼ିଆ </td>
    </tr>
    <tr>
      <td class='lg'>Sinhala</td>
      <td class='pix'><img src='images/SinhalaSample.png' /></td>
      <td class='nofont'>සිංහල</td>
      <td class='sinhala'>සිංහල</td>
    </tr>
    <tr>
      <td class='lg'>Tamil</td>
      <td class='pix'><img src='images/TamilSample.png' /></td>
      <td class='nofont'>தமிழ் </td>
      <td class='tamil'>தமிழ் </td>
    </tr>
    <tr>
      <td class='lg'>Tibetan</td>
      <td class='pix'><img src='images/TibetanSample.png' /></td>
      <td class='nofont'>བོད་ཡུལ།</td>
      <td class='tibetan'>བོད་ཡུལ།</td>
    </tr>
  </table
</div>

<br style='clear:both'/>

<p>
*If the embedded font display for a language is not exactly the same as in the corresponding 
image, for example, with script characters shown but incorrectly positioned or ordered, 
you will need to install the Keyman Desktop package for your language onto your 
computer.  You can download the Keyman Desktop package by clicking the 
"Help on this keyboard" link in the On Screen Keyboard. This is likely to be observed 
with scripts such as Burmese, Khmer or Tibetan if your operating system does not 
fully support the display of the font used for those scripts.
</p>



<a name="morehelp"></a>
<div class='body_text'>
<h4>More Help</h4>
<p>If you are experiencing continued difficulty in using KeymanWeb and have not been able to find a solution on this site, <a href="/contact">please contact us</a>.</p>
<br/>


</div>