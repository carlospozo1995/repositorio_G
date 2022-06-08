$(document).ready(function() {

  // SPLIDE BANNER

  var splide = new Splide( '#banner', {
    type  : 'loop',
    rewind: true,
    interval: 5000,
    autoplay: true,
    pauseOnFocus: false,
    arrows: false,
    paginationDirection: 'ttb',
    focus:false,
    pauseOnHover: false,
    drag: false
  });
  splide.mount();
});