const thumbnailsList = document.querySelectorAll("#keymanThumbnails");

window.addEventListener('DOMContentLoaded', () => {
  thumbnailsList.forEach(each => {
  	each.addEventListener('click', () => {

  		if(each.hasAttribute('data-video')) {
        let videoId = each.getAttribute('data-video')
    		each.outerHTML = "<iframe width='600' height='315' src='" + videoId + "' allowfullscreen></iframe>";
      }
    })
  })
})