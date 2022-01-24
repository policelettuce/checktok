$(document).ready(function() {
  $('.header__burger').click(function(event){
    $('.header__burger,.header__menu').toggleClass('active');
    $('body').toggleClass('lock');
  });
});

new Swiper('.image-slider',{
  loop:true,
  speed: 800,
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
  },
  effect: 'creative',
  creativeEffect: {
        prev: {
          shadow: false,
          translate: [0, 0, -400],
        },
        next: {
          translate: ['100%', 0, 0]
        }
      }
});