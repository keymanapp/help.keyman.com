<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 1: Choosing a licensing model"
  ]);
?>

<h1>Step 1: Choosing a licensing model</h1>

<p>In the Branding Editor, click the <span class="guibutton">Details</span> tab.</p>

<p>Products based on Keyman Engine can be licensed in one of three different ways:</p>

<dl>
  <dt>Freeware</dt>
  <dd>You as a keyboard developer purchase a single license to distribute a specified number of keyboards for Keyman
    Engine globally, at no cost to end users. You are not permitted to sell the product and you must list it on the Tavultesoft
    website keyboard page. Contact Tavultesoft sales for pricing as it is dependant on a number of factors.</dd>

  <dt>Global</dt>
  <dd>You can resell your product at any price you wish. You purchase a licence to distribute the Keyman Engine and a
    specified number of keyboards. All copy protection and license management is left to you -- the Keyman Engine will not prevent
    the keyboards from running, but you can manage this by providing your own controller program.</dd>

  <dt>Shareware</dt>
  <dd><p>In this model, you can distribute as many keyboards as you wish. Keyboards are copy-protected and will only operate
    for the time period you specify before requiring payment (the evaluation period). This is the model recommended for most
    developers, as it provides the most support and infrastructure, to minimize the work you need to do to create a keyboard
    solution.</p>

    <p>You can list your product in the Tavultesoft Online Store, and this will enable instantaneou purchase and activation of your
    product by end users, with Credit Card, Paypal, and other payment methods available automatically. [Read more about Online Store
    listings]</p>

    <p>You can also pre-purchase licenses of Keyman Engine at a substantial discount to onsell to your users. The advantage here is
    you can pre-install on computers or distribute licenses, selling at whatever price you wish. End users are still required to
    activate their license, with the license key you have provided them, ensuring that the licenses cannot be redistributed. [Read
    more about pre-purchasing licenses]</p>

    <p>This model also utilises the CRM module of Keyman Developer -- using this module, you can manage all your customer records,
    purchase licenses, allocate pre-purchased seats and check which customers have activated their licenses. [Read more about the
    CRM]</p>
  </dt>
</dl>

<p>With each of the above models, keyboards will be encrypted to operate only with the branding file selected during product
development. Usually this linkage will be done in the Distribution Editor compile stage, but you can also do it manually if you
prefer.</p>

<p>Enter the name of the product - this will be displayed on the Tavultesoft website, and in the product installer, when you create
that later on. A version number is not necessary here.</p>

<p>Select the licensing type that you have decided on, and if you are using the Shareware model, enter the number of days that users
can try your product before they must purchase a license in the Trial Day Count box.</p>

<p><a href="step-2" title="Step 2: Choosing a user interface model">Step 2: Choosing a user interface model</a></p>
  