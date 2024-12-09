( function() {
  const thumbnailsList = document.querySelectorAll(".video-thumbnail");

  window.addEventListener('DOMContentLoaded', () => {
    thumbnailsList.forEach(thumbnail => {
      thumbnail.addEventListener('click', () => {
  
        if(thumbnail.hasAttribute('data-video')) {
          let videoId = thumbnail.getAttribute('data-video')
          thumbnail.outerHTML = "<iframe width='600' height='315' src='" + videoId + "' allowfullscreen></iframe>";
        }
      })
    })
  })
})();
