jQuery( document ).ready(function() {
  jQuery('.post-wrapper').slick({
    
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      nextArrow: jQuery('.next'),
      prevArrow: jQuery('.prev'),
  
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 532,
          settings: {
            slidesToShow: 1
          }
        }
  
      ]
    });
  });