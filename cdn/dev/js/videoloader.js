window.addEventListener('DOMContentLoaded', (e) => {
    let t = document.getElementById("keymanThumbnails");
    t.addEventListener("click", function() {
      let video_id = keymanThumbnails.getAttribute('data-video')
      keymanThumbnails.outerHTML = "<iframe width='600' height='315' src='" + video_id + "'></iframe>"
  })
})