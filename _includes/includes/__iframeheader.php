<!-- Start of Code -->
<?php
  function embed_with_iframe($src, $height) {

    $embed_height = $height + 150;

    if($embed_height < 400) {
      $embed_height = 400;
    }
    echo '<div style="border: 1px solid black; border-radius: 5px">
  <iframe id="desktop-iframe" src="'.$src.'" width="100%" height="'.$height.'" >
    Sorry, but your browser doesn\'t support inline frames; we can\'t embed the example page here.  Please click 
    <a href="'.$src.'">this link</a> instead.
  </iframe>
  <script>
    var touchable = false;
    if("ontouchstart" in window) {
      touchable = true;
    }
    
    var device = "desktop";
    
    if(navigator && navigator.userAgent)
    {
      var agent=navigator.userAgent;
      if(agent.indexOf(\'iPad\') >= 0) 
      {
        device = "iPad";
      }
      if(agent.indexOf(\'iPhone\') >= 0)
      { 
        device = "iPhone";
      }
      if(agent.indexOf(\'Android\') >= 0) 
      {
        device = "Android"
      }  
      if(agent.indexOf(\'Windows NT\') >= 0)
      {
        device = "Windows w/ Touch"
      } 
    }
    
    if(touchable && !(device == "desktop")) {
      var iframeDiv = document.getElementById("desktop-iframe");
      iframeDiv.height = "'.$embed_height.'";
    }
  </script>
</div>';
  }
?>