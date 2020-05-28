var windowHeight = $(window).height();
var headerHeight = $('#layout-header>').height();
var footerHeight = $('#layout-footer').height();

console.log(headerHeight);

var layoutHeight = windowHeight - (headerHeight + footerHeight);

$('#listing-details').css("padding-top", headerHeight);

var galleryThumbs = new Swiper('.gallery-thumbs', {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});
var galleryTop = new Swiper('.gallery-top', {
  spaceBetween: 10,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  thumbs: {
    swiper: galleryThumbs
  }
});
