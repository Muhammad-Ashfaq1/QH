$('.navigation-toggle').on('click', function() {
    $('.web-links').toggleClass('open');
});

 $('.web-link-li').on('click', function() {
    $(this).find('.sub-menu').toggleClass('active-mobile');
 });

$('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});