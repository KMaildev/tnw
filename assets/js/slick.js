/*----------------------------------
    //------ SLICK CAROUSEL ------//
-----------------------------------*/
	$('.slick-lancers').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		adaptiveHeight: true,

		// autoplay:false,
  		// autoplaySpeed:1500,
  		
		responsive: [
		    {
		      breakpoint: 1292,
		      settings: {
		        dots: false,
		    	arrows: false
		      }
		    },
		    {
		      breakpoint: 993,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        dots: false,
		    	arrows: false
		      }
		    },
		    {
		      breakpoint: 769,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        dots: false,
		   		arrows: false
		      }
		    }
	  ]
	});