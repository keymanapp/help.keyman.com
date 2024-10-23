<?php
  require_once('includes/template.php');

  head([
    'title' => "Page not found",
    'index' => false,
    'crumbs' => true,
  ]);

  $page = $_SERVER["REQUEST_URI"];

  function E($v)
  {
    $s = @htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
    if(empty($s) && !empty($v))
      $s = @htmlspecialchars($v, ENT_QUOTES, 'ISO-8859-1');
    return $s;
  }
  
?>
<h1>Incorrect queries</h1>

<p>Sorry, we couldn't find the page <a href="<?= E($page) ?>"><?= E($page) ?></a>.</p>

<p>Please tell us about this problem on the <a href="https://community.software.sil.org/c/keyman" target="_blank">Keyman Community</a>.</p>

<h2>Search Keyman Help</h2>

<script>
  (function() {
    var cx = '010681075583534798483:ox2qukyiv9c';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchbox-only as_sitesearch='help.keyman.com' resultsUrl="/search/"></gcse:searchbox-only>