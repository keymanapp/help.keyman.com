<?php

  require_once("com.keyman.help.editpage.inc.php");

  function getPageUrlForEditLink() {
    return \com\keyman\help\editpage\getPageUrlForEditLink(
      $_SERVER['PHP_SELF'],
      isset($_REQUEST['id']) ? $_REQUEST['id'] : '',
      isset($_REQUEST['file']) ? $_REQUEST['file'] : ''
    );
  }

?>
          </article>
        </div>
    </div>
</div>
<div class="footer">
    <div class="wrapper">
        <div class="footer-third">
            <h2 class="footer-third-title">Keep me updated</h2>
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
              <form action="https://keyman.us1.list-manage.com/subscribe/post?u=99fcab2b035a8a51cd2158ca9&amp;id=7ccdac1e32" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div class="mc-field-group">
                      <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="email" />
                  </div>
                  <div id="mce-responses" class="clear">
                      <div class="response" id="mce-error-response" style="display:none"></div>
                      <div class="response" id="mce-success-response" style="display:none"></div>
                  </div>
                  <div class="button subscribe">
                      <h2>Subscribe</h2>
                  </div>
              </form>
            </div>
            <!--End mc_embed_signup-->
            <br>
            <div id="privacy-policy"><a href="https://software.sil.org/language-software-privacy-policy">Privacy policy</a></div>
        </div>
        <div class="footer-third" id="footer-social">
            <h2 class="footer-third-title">Keep in touch</h2>
            <div>
              <a href="https://facebook.com/KeymanApp" target="_blank" data-icon='&#xf203;'>Facebook</a>
              <a href="https://twitter.com/keyman" target="_blank" data-icon='&#xf202;'>Twitter</a>
              <a href="https://blog.keyman.com/" target="_blank" data-icon='&#xf413;'>Keyman blog</a>
              <a href="https://github.com/keymanapp" target="_blank" data-icon='&#xf200;'>GitHub</a>
              <a href="https://community.software.sil.org/c/keyman" target="_blank" id='footer-community'>Keyman Community</a>
            </div>
        </div>
        <div class="footer-third sil-logo">
            <br>
            <a href="https://www.keyman.com/about/"><img id="sil-logo" src="<?php echo include 'image-randomizer.php'; ?>" width="50%" alt='SIL' /></a>
            <p>Created by <a href="https://www.keyman.com/about/">SIL International</a></p>
        </div>
    </div>
</div>
<div class="footer-tab-holder" id='footer-tab-support'>
  <div class="footer-tab"><h4><a href='https://community.software.sil.org/c/keyman'>Support</a></h4></div>
</div>
<div class="footer-tab-holder" id='footer-tab-edit'>
  <div class="footer-tab"><h4><a href='<?php echo getPageUrlForEditLink(); ?>' target='_blank'>Edit page</a></h4></div>
</div>
<div id="KeymanWebControl"></div>
<script src='<?= cdn('js/prism.js')?>'></script>
<script src='<?= cdn('js/prism-keyman.js')?>'></script>
</body>
</html>