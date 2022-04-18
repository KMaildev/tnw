jQuery('.fp-slider-items').slick({
     dots: false,
     infinite: true,
     speed: 300,
     slidesToShow: 6,
     slidesToScroll: 3,
     arrows: false,
     autoplay: true,
     autoplaySpeed: 6000,
     adaptiveHeight: false,

     
     responsive: [
          {
               breakpoint: 992,
               settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
               }
          },
          {
               breakpoint: 600,
               settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
          },
          {
               breakpoint: 480,
               settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
               }
          }
     ]
});



jQuery('.sale-slider-items').slick({
     dots: false,
     infinite: true,
     speed: 300,
     slidesToShow: 4,
     slidesToScroll: 3,
     arrows: true,
     autoplay: true,
     autoplaySpeed: 6000,
     responsive: [
          {
               breakpoint: 992,
               settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
               }
          },
          {
               breakpoint: 600,
               settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
          },
          {
               breakpoint: 480,
               settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
               }
          }
     ]
});