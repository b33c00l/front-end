$('.slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    cssEase: 'linear'
});

$('.left').click(function(){
  $('.slider').slick('slickPrev');
})

$('.right').click(function(){
  $('.slider').slick('slickNext');
})

$('.karusele').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  dots: false,
  arrows: false,
  autoplaySpeed: 2000,
});

$('.prev').click(function(){
  $('.karusele').slick('slickPrev');
})

$('.next').click(function(){
  $('.karusele').slick('slickNext');
})