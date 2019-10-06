<script>
  function isIEOnWin81orEarlier() {
    // If we are running IE11/or earlier on Windows 8.1 or earlier, then
    // the autolink generates filenames that are misrecognised for download links,
    // meaning users on those browesrs cannot easily download Keyman.
    // Easiest way to test this is to test against navigator.userAgent
    // Yes, we get some muddled analytics of cross-site of IE visitors but
    // it's a small enough percentage that we don't need to worry about it.
    return (navigator.userAgent.indexOf('Trident/') >= 0 && navigator.userAgent.indexOf('Windows NT 6') >= 0) ||
           (document.documentMode < 11);
  }
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-249828-1',  'auto', {'allowLinker': !isIEOnWin81orEarlier()});
    if(!isIEOnWin81orEarlier()) {
      ga('require', 'linker');
      ga('linker:autoLink',
        ['keyman.com', 'www.keyman.com',
          'keymanweb.com', 'www.keymanweb.com',
          'help.keyman.com',
          'blog.keyman.com',
          'donate.keyman.com',
          'downloads.keyman.com',
          'developer.keyman.com',
          'keyman.dev',
          'keyman.blog',
          'blog.tavultesoft.com',
          'www.tavultesoft.com', 'tavultesoft.com', 'secure.tavultesoft.com'] );
    }
  ga('send', 'pageview');
</script>
